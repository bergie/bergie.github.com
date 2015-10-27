---
  title: "Flow-based programming for PHP"
  categories: 
    - "midgard"
  layout: "post"

---
You may have seen my earlier [post about NoFlo](http://bergie.iki.fi/blog/desktop_summit_flow-based_programming/), the [flow-based programming](http://en.wikipedia.org/wiki/Flow-based_programming) tool I've written for Node.js. It allows you to do quite cool stuff, like [a visually controlled web server](http://universalruntime.tumblr.com/post/8998693776/node-js-powered-web-server-written-with-the-noflo):

![NoFlo-powered web server](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/tumblr_lq12x0Sf481qies3uo1_500.png)

Yesterday Igor Wiedler published [Evenement](https://github.com/igorw/Evenement), a PHP port of the EventEmitter class from Node.js. As [NoFlo](https://github.com/bergie/noflo) builds quite heavily on EventEmitter, I decided to see how far the PHP port could be taken.

As result, there is now [PhpFlo](https://github.com/bergie/phpflo), a flow-based programming environment for PHP.

Example of how to define and run a flow (you can also use [a JSON format](https://github.com/bergie/phpflo/blob/master/examples/linecount/count.json) for this):

    // Add nodes to the graph
    $graph = new PhpFlo\Graph("linecount");
    $graph->addNode("Read File", "ReadFile");
    $graph->addNode("Split by Lines", "SplitStr");
    $graph->addNode("Count Lines", "Counter");
    $graph->addNode("Display", "Output");

    // Add connections between nodes
    $graph->addEdge("Read File", "out", "Split by Lines", "in");
    $graph->addEdge("Read File", "error", "Display", "in");
    $graph->addEdge("Split by Lines", "out", "Count Lines", "in");
    $graph->addEdge("Count Lines", "count", "Display", "in");

    // Kick-start the process by sending filename to Read File
    $graph->addInitial($fileName, "Read File", "source");

    // Make the graph "live"
    $network = PhpFlo\Network::create($graph);

The flow consists of processes, or instances simple "black box" components that have their own defined input and output ports. Program logic is defined by making connections between them. Here is a simple component that reads the contents of a file:

    namespace PhpFlo\Component;
    use PhpFlo\Component;
    use PhpFlo\Port;
    class ReadFile extends Component
    {
        public function __construct()
        {
            $this->inPorts['source'] = new Port();
            $this->outPorts['out'] = new Port();
            $this->outPorts['error'] = new Port();

            $this->inPorts['source']->on('data', array($this, 'readFile'));
        }

        public function readFile($data)
        {
            if (!file_exists($data)) {
                $this->outPorts['error']->send("File {$data} doesn't exist");
                return;
            }

            $this->outPorts['out']->send(file_get_contents($data));
            $this->outPorts['out']->disconnect();
        }
    }

I hope people find this system useful. If you're interested in FBP, then [J. Paul Morrison's book](http://www.jpaulmorrison.com/fbp/#More) is a good place to start.

And if you're in [FrOSCon](http://froscon.de/), feel free to come and chat with me :-)
