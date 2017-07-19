---
  title: "DNode: Make PHP and Node.js talk to each other"
  categories: 
    - "midgard"
    - bestof
  layout: "post"

---
If you've been following my blog, you might have noticed that lately I've started doing quite a lot of [Node.js](http://nodejs.org/) development alongside PHP. Based on conversations I've had in various conferences, I'm by far not alone in this situation - using Node.js for real-time functionality, and PHP (or Django, or Rails) for the more traditional CRUD stuff.

Both environments have their strong points. Node.js is very fast and flexible, but PHP has a lot more mature tools and libraries available. So in a lot of projects it is hard to choose between the two. But now you might not have to.

---

**Update:** The post and the approach described here are quite dated by now. Instead of DNode, I'd recommend [using message queues](/blog/forget-http-microservices/) for this type of integration. Our [MsgFlo framework](https://msgflo.org/) provides a great way to build heterogeneous applications.

---

## Enter DNode

[DNode](http://substack.net/posts/85e1bd/DNode-Asynchronous-Remote-Method-Invocation-for-Node-js-and-the-Browser) is a _remote method invocation_ protocol originally written for Node.js, as the name probably tells. But as [the protocol](https://github.com/substack/dnode-protocol#readme) itself is quite simple, just sending newline-terminated JSON packets over TCP connections, implementations have started popping up in other languages. You can talk DNode in [Ruby](https://github.com/substack/dnode-ruby), [Perl](https://github.com/substack/dnode-perl), [Python](https://github.com/jesusabdullah/dnode-python), [Java](https://github.com/aslakhellesoy/dnode-java), and now [PHP](https://github.com/bergie/dnode-php).

I started working on the PHP DNode implementation in the [Symfony CMF hackday](http://blog.liip.ch/archive/2011/09/30/symfony-cmf-hackday-october-22nd-in-cologne.html) in Cologne a week ago, and got it into a running stage on a train ride from there to Paris. The implementation isn't yet complete, but works already quite well.

With DNode you can expose Node.js functions to be available on PHP, and PHP class methods to be available on Node.

Like most Node.js functionality, DNode works asynchronously. So instead of waiting for return values you supply a callback function that will be called when the method completes.

## PHP as client

Here is a simple DNode service for Node.js:

```javascript
var dnode = require('dnode');
var server = dnode({
    zing: function (n, cb) { cb(n * 100) }
});
server.listen(7070);
```

This creates a DNode service running in TCP port 7070 that provides one method: _zing_ that multiplies the value given to it by 100 and sends the result to the callback provided.

Calling this with PHP is easy:

```php
// Connect to DNode server running in port 7070 and call
// Zing with argument 33
$dnode = new DNode\DNode();
$dnode->connect(7070, function($remote, $connection) {
    // Remote is a proxy object that provides us all methods
    // from the server
    $remote->zing(33, function($n) use ($connection) {
        echo "n = {$n}\n";
        // Once we have the result we can close the connection
        $connection->end();
    });
});
```

Now just start the server:

    $ node simple/server.js

And run the client. As you can see from the PHP code above, once we get the result the client will end the connection automatically:

    $ php examples/simple/client.php 
    n = 3300

Because only simple TCP connections and JSON packets are used, this is quite fast. Here are time results for the client on my MacBook Air:

    real	0m0.064s
    user	0m0.050s
    sys	    0m0.010s

## PHP as a server

PHP can also act as a DNode server. You instantiate the DNode class and pass it the object you want to expose via DNode. All public methods of the object will be made available to the DNode clients:

```php
// This is the class we're exposing to DNode
class Zinger
{
    // Public methods are made available to the network
    public function zing($n, $cb)
    {
        // Dnode is async, so we return via callback
        $cb($n * 100);
    }
}

// Create a DNode server
$server = new DNode\DNode(new Zinger());
$server->listen(7070);
```

This DNode service will obviously be visible for both Node.js and PHP clients.

## Bidirectional communications

A DNode client can also expose methods to the server. In this example the server provides functionality for converting temperatures from Celsius to Fahrenheit, but actually gets the current Celsius temperature by asking it from a client.

Server:

```php
// This is the class we're exposing to DNode
class Converter
{
    // Poll the client's own temperature() in celsius
    // and convert that value to fahrenheit in the supplied
    // callback
    public function clientTempF($cb)
    {
        // The other side of DNode connection is exposed via
        // $this->remote proxy object
        $this->remote->temperature(function($degC) use ($cb) {
            $degF = round($degC * 9 / 5 + 32);
            $cb($degF);
        });
    }
}

// Create a DNode server that listens to port 6060
$server = new DNode\DNode(new Converter());
$server->listen(6060);
```

Client:

```php
// This is the class we're exposing to DNode
class Temp
{
    // Compute the client's temperature and stuff that value
    // into the callback
    public function temperature($cb)
    {
        $degC = rand(-20, 50);
        echo "{$degC}° C\n";
        $cb($degC);
    }
}

$dnode = new DNode\DNode(new Temp());
$dnode->connect(6060, function($remote, $connection) {
    // Ask server for temperature in Fahrenheit
    $remote->clientTempF(function($degF) use ($connection) {
        echo "{$degF}° F\n";
        // Close the connection
        $connection->end();
    });
});
```

Then just start the server:

    $ php examples/bidirectional/server.php

And run the client:

    $ php examples/bidirectional/client.php 
    28° C
    82° F

The same will obviously work with a Node.js client:

    $ node bidirectional/client.js 
    23° C
    73° F

## Installing DNode

dnode-php can be installed using the [Composer](http://packagist.org/) tool. You can either add `dnode/dnode` to your package dependencies, or if you want to install dnode-php as standalone, go to the main directory of its repository and run:

    $ wget http://getcomposer.org/composer.phar 
    $ php composer.phar install

You can then use the composer-generated autoloader to access the DNode classes:

    require 'vendor/.composer/autoload.php';

Some DNode examples can be found from the `examples` folder. They are compatible with the similarly-named examples from [Node.js DNode](https://github.com/substack/dnode).

## Contributing

[php-dnode](https://github.com/bergie/dnode-php) is developed under the MIT license in GitHub. If you're interested in it, please watch the repository and send issues or pull requests.
