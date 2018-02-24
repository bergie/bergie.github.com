---
title: "asComponent: turn any JavaScript function into a NoFlo component"
location: Berlin, Germany
categories:
  - fbp
  - javascript
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/ascomponent-fetch-graph.png'
---
Version 1.1 of [NoFlo](https://noflojs.org) shipped this week with a new convenient way to write components. With the `noflo.asComponent` helper you can turn any JavaScript function into a well-behaved NoFlo component with minimal boilerplate.

Usage of `noflo.asComponent` is quite simple:

```javascript
const noflo = require('noflo');
exports.getComponent = () => noflo.asComponent(Math.random);
```

In this case we have a function that doesn't take arguments. We detect this, and produce a component with a single "bang" port for invoking the function:

![Math.random as component](https://d2vqpl3tx84ay5.cloudfront.net/500x/ascomponent-result.png)

You can also amend the component with helpful information like a textual description and and icon:

```javascript
const noflo = require('noflo');
exports.getComponent = () => noflo.asComponent(Math.random, {
  description: 'Generate a random number',
  icon: 'random',
});
```

![Math.random with custom icon](https://d2vqpl3tx84ay5.cloudfront.net/500x/ascomponent-custom-icon.png)

## Multiple inputs

The example above was with a function that does not take any arguments. With functions that accept arguments, each of them becomes an input port.

```javascript
const noflo = require('noflo');

function findItemsWithId(items, id) {
  return items.filter((item) => item.id === id);
}

exports.getComponent = () => noflo.asComponent(findItemsWithId);
```

![asComponent and multiple inports](https://d2vqpl3tx84ay5.cloudfront.net/500x/ascomponent-multiple-inports.png)

The function will be called when both input ports have a packet available.

## Output handling

The `asComponent` helper handles three types of functions:

* Regular synchronous functions: return value gets sent to `out`. Thrown errors get sent to `error`
* Functions returning a Promise: resolved promises get sent to `out`, rejected promises to `error`
* Functions taking a Node.js style asynchronous callback: `err` argument to callback gets sent to `error`, result gets sent to `out`

With this, it is quite easy to write wrappers for asynchronous operations. For example, to call an external REST API with the [Fetch API](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API):

```javascript
const noflo = require('noflo');

function getFlowhubStats() {
  return fetch('https://api.flowhub.io/stats')
    .then((result) => result.json());
}

exports.getComponent = () => noflo.asComponent(getFlowhubStats);
```

How that you have this component, it is quick to do a graph utilizing it ([open in Flowhub](https://app.flowhub.io/#github/bergie/flowhubstats)):

[![Example graph with asynchronous asComponent](https://d2vqpl3tx84ay5.cloudfront.net/800x/ascomponent-fetch-graph.png)](https://app.flowhub.io/#github/bergie/flowhubstats)

Here we get the BODY element of the browser runtime. When that has been loaded, we trigger the fetch component above. If the request succeeds, we process it through a string template to write a quick report to the page. If it fails, we grab the error message and write that.

## Making the components discoverable

The default location for a NoFlo component is `components/ComponentName.js` inside your project folder. Add your new components to this folder, and NoFlo will be able to run them.

If you're using [Flowhub](https://flowhub.io/ide), you can also write the components in the integrated code editor, and they will be sent to the runtime.

We've already updated the hosted NoFlo browser runtime to 1.1, so you can get started with this new component API right away.

## Advanced components

In many ways, asComponent is the inverse of the [asCallback embedding feature](/blog/ascallback/) we introduced a year ago: `asComponent` turns a regular JavaScript function into a NoFlo component; `asCallback` turns a NoFlo component (or graph) into a regular JavaScript function.

If you need to work with more complex firing patterns, like combining streams or having control ports, you can of course still write regular [Process API](https://noflojs.org/documentation/components/#component-api) components.

The regular component API is quite a bit more verbose, but at the same time gives you full access to NoFlo APIs for dealing with manually controlled preconditions, state management, and creating [generators](https://noflojs.org/documentation/components/#generator-components).

However, thinking about the hundreds of NoFlo components out there, most of them could be written much more simply with `asComponent`. This will hopefully make the process of developing NoFlo programs a lot more straightforward.

Read more [NoFlo component documentation](https://noflojs.org/documentation/components/) and [asComponent API docs](https://noflojs.org/api/AsComponent/).
