---
title: Falsy Values JavaScript conference
location: Warsaw, Poland
source: "http://www.qaiku.com/channels/show/seminaarikannu/view/e8ecfcde811d11e0aa009badba40ad8cad8c/"
categories:
  - javascript
  - coffeescript
  - nodejs
layout: post
---
Node.js workshop starting. Poll of people participating... most write mainly PHP, Java, Python, Ruby. But everybody also writes JavaScript.

> 2% of all job postings, counting even non-programming ones, mention JavaScript

Server-side JavaScript is not new, [Rhino](http://www.mozilla.org/rhino/) and others have been there since 90s. So, why is Node now so hot?

> JS community has become more professional

> Runtimes are way faster now: V8, SpiderMonkey, _... No other language has such competition between runtimes_

There is now also Node.js running on top of SpiderMonkey. 

Via Twitter: Node.js style guide <http://nodeguide.com/style.html>

Node.js is very young platform. V8 is from September 2008, and Node.js was started in February 2009. So only half a year after the engine it runs on.

Installing latest dev version of node.js is easy: _configure, make, make install_

[node-inspector](https://github.com/dannycoates/node-inspector) seems like a very nice way to debug node.js

First exercise:

* Create the basic Node.js http server
* Modify it to return some other text
* Make it return HTML
* Return the user-agent
* Return different text for at least two different browsers

My version, in CoffeeScript:

    http = require 'http'

    browserSpecific = (agent) ->
      if agent.indexOf("Chromium") isnt -1
        return "an Agent of Google"
      "something I don't recognize"

    server = http.createServer (req, res) ->
      res.writeHead 200,
        'Content-Type': 'text/html'
        'X-Powered-By': 'Coffee'
      res.end "<h1>I'm learning Node</h1>
        <p>And you're #{browserSpecific(req.headers['user-agent'])}"

    server.listen 8003, '127.0.0.1'

HTTP client exercise:

* Fetch the nytimes.com and output to console
* Create a web server
* Create an HTTP client in the same file
* POST data to your server
* Output the POST data

Solution:

    http = require "http"

    options =
      host: "127.0.0.1"
      port: 8003
      path: "/"
      method: "POST"

    server = http.createServer (req, res) ->
      console.log "Got request"
      req.setEncoding "utf-8"
      req.on "data", (content) ->
        console.log "DATA: #{content}"

      res.writeHead 200,
        'Content-Type': 'text/plain'
      res.end "Hey there"

    server.listen options.port, options.host, ->

      client = http.request options, (results) ->
        results.setEncoding "utf-8"
        results.on "data", (content) ->
          console.log content

      client.write "Foo bar baz"
      client.end()

CommonJS module exercise:

* Create CommonJS module "fish"
* Provide functions to swim, mouthbreath, flap around
* Import module into another file and call the methods

fish.coffee:

    exports.swim = ->
      "swims"

    exports.mouthBreath = ->
      "doesn't know how to mouthbreath"

    exports.flapAround = ->
      "happily flaps around"

useFish.coffee:

    fish = require("./fish")

    console.log "Fish #{fish.swim()}"
    console.log "Fish #{fish.mouthBreath()}"
    console.log "Fish #{fish.flapAround()}"

_CommonJS is for all intents and purposes dead._ Harmony's [module system](http://wiki.ecmascript.org/doku.php?id=harmony:modules) will be the way to go in the future.

[Express](http://expressjs.com/) is a MVC framework for Node that is heavily inspired by  [Sinatra](http://www.sinatrarb.com/).  I [blogged about it](http://bergie.iki.fi/blog/silex_is_like_expressjs_for_php/) recently.

    express = require "express"

    app = express.createServer()

    app.get "/", (req, res) ->
      res.send "Hello, world"

    app.listen 8003

Exercises:

* Create an expressjs server (see above)
* Serve two different pages based on GET parameter "page"
* Create a redirect from /old to /new
* Set a cookie on the client

express.coffee

    express = require "express"

    app = express.createServer()
    app.use express.logger
      format: ":method :url"
    app.use express.cookieParser()

    app.get "/", (req, res) ->
      if req.query.page is "1"
        res.cookie "foo", 1
        return res.send "First page, cookie is #{req.cookies.foo}"
      if req.query.page is "2"
        res.cookie "foo", "2"
        return res.send "Second page"
      res.clearCookie "foo"
      res.send "Index"

    app.get "/old", (req, res) ->
      res.redirect "/new"

    app.get "/new", (req, res) ->
      res.send "This is the new page"

    app.listen 8003

There is now a Gist for the actual code: <https://gist.github.com/978411>

Node.js started from having an event loop. When Ryan was writing it, he started with Ruby. But the problem was that many Ruby libraries weren't event-driven. JavaScript was a fresh start.

The other option would be resource pre-allocation. That ensures fast serving for each user, but when you run out of resources performance drops dramatically.

_With Node.js, you as a programmer only get one thread._ OS-level events happen in their own threads. Blocking the main event loop is a bad idea.

There is a webworkers implementation, though: <https://github.com/cramforce/node-wor...>
Most people however just fork

Node.js is all about I/O. Traditional programming is serial I/O: _this_, then _that_. Node follows parallel I/O: _this_ and _that_ at the same time.

* Unordered parallel: do this bunch of things, doesn't matter which one happens first
* Ordered parallel: grouping parallel requests to handle necessary order: do _this_ first, then _that_ and _that_

Ordered serial I/O is bad for performance. Unordered parallel I/O is best performance, but makes it impossible to handle dependencies.

The "traditional" way of doing serial or ordered parallel I/O ends us to [JavaScript, the bad parts](http://universalruntime.tumblr.com/post/5007333735/javascript-the-bad-parts-a-problem-that-can-be). Nested callbacks: _when we get a request_, _run this query_, _when query completes_, _send output_.

There are patterns to help with that. Typically you allow a group of calls to be sent together with one callback. Then you just loop through the calls and run them with your own callback that counts responses. When all have responded, run the original callback.

...or then you run a library, like [async](https://github.com/caolan/async)

Exercises

* Use async.parallel to fetch 5 web pages and output the results to a file
* Use async.auto to get 2 files and then post them to your HTTP server

[Answer to first](https://gist.github.com/978411#file_asyncwebfetch.coffee), and [to second](https://gist.github.com/978411#file_asynchttppost.coffee)

Async is giving me some ideas on how to do [flow-based programming](http://www.jpaulmorrison.com/fbp/) with Node.

Talking about Express. Regex-based routing is quite powerful

    app.get('(/:id(\\d+)', callback); // matches only IDs that are numeric

* If . before `:var?`, then . is also optional
* If `?` is not after a var, then only previous character is affected
* `/` at end of URL is optional, `/app/e?` means both last `/` and `e` are optional
* `*` is wildcard
* Regexps can be used in any place in route string

[Here we go](https://gist.github.com/978411#file_express_routing.coffee)

Any route callback can pass control to the next matching route by calling `request.next()`. Next is a function in the router closure, so it will just step forward in the array of matched routes.

* Create a simple check for correct product IDs. If it fails, show a custom error page
* Use `app.all()` to check user permission before showing (mock) edit controls on a page

Theoretically any route with Express is also middleware. Creating your own is easy:

    middleware = (req, res, next) ->
      req.foo = "bar"
      next()

    app.use middleware

    app.get "/", (req, res) ->
      res.send req.foo

Middlewares are run before routes.

You can provide multiple middlewares to a single route:

    a = (req, res, next) ->
      req.foo = "bar"
      next()
    b = (req, res, next) ->
      req.bar = "baz"
      next()

    app.get "/", [a, b], (req, res) ->
      res.send "#{req.foo} #{req.bar}"

Middleware exercises:

* Create a middleware to detect a browser and attach a boolean to the request
* Create express app that servers links to images using staticProvider
* Modify profiler to profile your app and write profile data to a log file
* Create a middleware factory that sets the HTTP expires header based on roles

View exercises:

* Create Express server that uses some template engine (jade, ejs, whatever) to render an index page
* Create a static folder
* Create a route for `/blog/id` that only accepts digits
* Create a "fake database" (array) of blogs, and use middleware to validate that ID is valid
* Create a view for the blog post
* Use a view partial to a preview blog posts on an index page

The blog example [in coffeescript](https://gist.github.com/978411/2c7f5b689e6bb03f959a6a69c30fbe0148136b56#file_blog.coffee)

Socket.io exercises... [client](https://gist.github.com/978411#file_images%2Fsocket.coffee) and [server](https://gist.github.com/978411#file_sockets.coffee)

TCP sockets are also very easy with Node. My [chat example](https://gist.github.com/978411#file_sockets.coffee) now supports both web clients and regular telnet connections talking with each other.

Real-world Node.js deployment tips:

* Use [cluster](http://learnboost.github.com/cluster/) to scale up your deployment
* Ensure you catch errors (in worst case you can always `process.on 'uncaughtException'`)
* NPM is a great way to [package](https://github.com/isaacs/npm/blob/master/doc/developers.md) and install your application

For clustering, see the [cluster manager](https://gist.github.com/978411#file_cluster.coffee) and [worker](https://gist.github.com/978411#file_cluster_worker.coffee) examples I made.

Complete list of [exercise CoffeeScript solutions](https://gist.github.com/978411#file_readme.md)

[JavaScript - the good parts](http://anongallery.org/220/javascript:_the_good_parts) :-P

Cool, my exercises made it to ReadWriteWeb: <http://www.readwriteweb.com/hack/2011/05/coffeescript-nodejs-exercises.php>
