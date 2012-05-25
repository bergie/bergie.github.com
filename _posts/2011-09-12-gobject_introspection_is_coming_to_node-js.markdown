---
  title: "GObject Introspection is coming to Node.js"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
[GObject Introspection](https://live.gnome.org/GObjectIntrospection) (GIR) is a way to create automatic bindings to [GNOME libraries](http://developer.gnome.org/) for various different programming languages. I've written before about the [benefits of bringing GIR to PHP](http://bergie.iki.fi/blog/php_and_gobject_introspection/), and now it seems something similar is happening on [Node.js](http://nodejs.org/).

[node-gir](https://github.com/creationix/node-gir) has been written by [Tim Caswell](https://github.com/creationix), with help from [Sebastian Wick](https://github.com/swick) and [Piotr Pokora](https://github.com/piotras).

I've been following the progress for a while, and today, during a flight from Helsinki to Salzburg, I was finally able to open a [Midgard](http://www.midgard-project.org/midgard2/) repository connection with it. The API still is a bit weird, and lacks support for [the asynchronous nature](http://shinetech.com/thoughts/thought-articles/139-asynchronous-code-design-with-nodejs-) of Node, but those will hopefully change soon. Quick example:

    var Midgard, gir, config, mgd;
    gir = require("../gir");
    gir.init();
    Midgard = gir.load("Midgard");
    Midgard.init();

    // Use a local SQLite database file
    config = new Midgard.Config();
    config.__set_property__("dbdir", __dirname);
    config.__set_property__("dbtype", "SQLite");
    config.__set_property__("database", "midgard");

    // Open connection to the database
    mgd = new Midgard.Connection();
    if (!mgd.__call__("open_config", config)) {
        console.error("Failed to open connection");
        process.exit();
    }

[node-gir is being developed on GitHub](https://github.com/creationix/node-gir) if you want to lend a hand or try it out. To build it, run `npm install` and you should be able to run the [code examples](https://github.com/swick/node-gir/tree/master/examples).

Having GIR support for Node would make it a full-fledged GNOME environment, and mean that there would be proper GObject Introspection in all three major JavaScript runtimes - [SpiderMonkey](https://live.gnome.org/Gjs), [JavaScriptCore](https://live.gnome.org/Seed) and [V8](https://github.com/creationix/node-gir). And this way GNOME JavaScript developers could also utilize the wealth of [existing Node.js modules](https://github.com/joyent/node/wiki/modules).