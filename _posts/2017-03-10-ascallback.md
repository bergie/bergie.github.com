---
title: "asCallback: embedding NoFlo graphs in JavaScript programs"
location: Berlin, Germany
categories:
  - fbp
layout: post
---
It has always been easy to wrap existing JavaScript code into NoFlo graphs &mdash; just [write a component](https://noflojs.org/documentation/components/) that exposes its functionality via some ports.

Going the other way and exposing a NoFlo graph to JS land was also possible but cumbersome. With NoFlo 0.8.3 we now made it super easy with the new `asCallback` API.

Let's say you have a graph (or just a component) with the typical `IN`, `OUT` and `ERROR` ports, you can wrap it like this:

```javascript
// Load the NoFlo module
var noflo = require('noflo');

// Use NoFlo's asCallback helper to prepare a JS function that wraps the graph
var wrappedGraph = noflo.asCallback('myproject/MyComponent', {
  // Provide the project base directory where NoFlo seeks graphs and components
  baseDir: '/path/to/my/project'
});

// Call the wrapped graph. Can be done multiple times
wrappedGraph({
  // Provide data to be sent to inports
  in: 'foo'
}, function(err, result) {
  // If component sent to its error port, then we'll have err
  if (err) { throw err; }
  // Do something with the results
  console.log(result.out);
});
```

If the graph has multiple inports, you can provide each of them a value in that input object. Similarly, the results sent to each outport will be in the result object. If a port sent multiple packets, their values will be in an array.

## Use cases

With `asCallback`, you can implement parts of your system as NoFlo graphs without having to jump in all the way. Even with a normal Node.js or client-side JS application it is easy to see places where NoFlo fits in nicely:

* Making complex [Express.js](http://expressjs.com/) or [Redux](http://redux.js.org/)  middleware chains manageable
* Adding customizable workflows to some part of the system
* Implementing [Extract, Transform, Load](https://en.wikipedia.org/wiki/Extract,_transform,_load) (ETL) pipelines
* Porting a system into NoFlo piece-by-piece
* Exposing a pure-JS API for an NPM module built in NoFlo

It also makes it easier to test NoFlo graphs and components using standard, non-FBP-aware testing tools like [Mocha](https://mochajs.org/).

## Network lifecycle

Each invocation of a callbackified NoFlo graph creates its own Network instance. The function collects result packet until [network finishes](https://noflojs.org/documentation/components/#component-lifecycle), and then calls its callback.

Since these networks are isolated, you can call the function as many times as you like without any risk of packet collisions.

## Promises

Since the callbackified NoFlo graph looks like a typical Node.js function, you can use all the normal flow control mechanisms like Promises or [async](http://caolan.github.io/async/) with it.

For example, you can convert it to a Promise [either manually](https://benmccormick.org/2015/12/30/es6-patterns-converting-callbacks-to-promises/) or with a library like [Bluebird](http://bluebirdjs.com/docs/getting-started.html):

```javascript
// Load Bluebird
var Promise = require('bluebird');

// Convert the wrapped function into a Promise
var promisedGraph = Promise.promisify(wrappedGraph);

// Run it
promisedGraph({
  in: 'baz'
})
.then (function (result) {
  console.log(result.out);
});
```

This functionality is available right now [on NPM](https://www.npmjs.com/package/noflo).
