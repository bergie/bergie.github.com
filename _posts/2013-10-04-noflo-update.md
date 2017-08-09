---
title: An update from the NoFlo world
location: Berlin, Germany
categories:
  - fbp
  - desktop
  - mobility
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/noflo-kickstarter-thank-you.png'
---
Wow, September was a busy month. As you probably know, our [NoFlo Development Environment Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment) succeeded with 115% funding. Thanks everybody!

![Thanks for supporting NoFlo!](https://d2vqpl3tx84ay5.cloudfront.net/noflo-kickstarter-thank-you.png)

Since then we've been busy hacking on the user interface and other parts of NoFlo to deliver the flow-based programming experience the community deserves. This post gives an overview on some of that.

## Managing your graphs

Here is how the NoFlo Development Environment looks like today, in this case editing the graph that runs a battery level instrument connected to an [AR.Drone](http://bergie.iki.fi/blog/noflo-ardrone/):

![Editing a client-side graph](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/battery-graph-small.png)

All the basics of graph editing are there. You can drag and drop to make connections between ports of the different nodes, and rearrange them. When dragging we emphasise the ports that are compatible with whatever you're connecting. Ports that are not available or are of a wrong type fade out:

![Connecting two number ports](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/connecting.png)

When you click a node you can see what component is running it, as well as edit possible [Initial Information Packets](http://www.jpaulmorrison.com/fbp/reusparm.shtml) to be sent to it when the graph is started:

![Inspecting a node](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/node-inspector.png)

Clicking a connection gives you a card showing the data passing through that connection in real time:

![Inspecting an edge](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/edge-inspector.png)

Adding new nodes can be done by dragging a component out from the library:

![Adding a new node](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/library.png)

As is usual with modern software, there is no *save button* anywhere. Instead, we constantly store the changes to your browser's LocalStorage ensuring that you [never lose content](http://bergie.iki.fi/blog/never-lose-content/). Eventually we'll give you tools to commit the changes up to version control too.

## Keyboard control

While the NoFlo Development Environment should work very nicely with tablets and other touchscreen devices, it is likely that many developers will still be using devices with a physical keyboard. For this, we're adding a bunch of [keyboard shortcuts](https://github.com/meemoo/dataflow/issues/57) for faster graph editing.

The UI also features a search box where you can query things inside your graphs and the available components:

![Searching the graph](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/search.png)

In addition to textual queries, the search widget allows written commands, a feature that was inspired by [Mozilla Ubiquity](https://wiki.mozilla.org/Labs/Ubiquity/Latest_Ubiquity_User_Tutorial):

![Removing a node via command-line](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/search-commands.png)

On compatible browsers you can even edit your graph by talking, though at times the results may be more funny than useful:

![Speaking to NoFlo](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/speech-recognition.png)

## Talking to different FBP runtimes

[NoFlo](http://noflojs.org) works on both Node.js and web browsers. Since a big part of the development environment is being able to inspect and modify live NoFlo graphs, we needed a way for the UI to talk to both environments. To make this easier, we defined a [network protocol for FBP runtimes](https://github.com/noflo/noflo/issues/107).

This protocol allows transmitting graph and component information across the network, as well as controlling the execution of FBP graphs and seeing what happens with them. With client-side graphs we isolate the runtime to an iframe, and with server-side we talk over WebSockets.

The runtime protocol allows us to start and stop network execution. For client-side graphs you even get a nice preview:

![Clock demo in NoFlo](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/clock-demo-preview-small.png)

Here is a simple server-side graph that just reads a file and outputs its contents. You can see how we even get the output of `console.log` back to the UI:

![Node.js console output in NoFlo UI](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/node-console-output-small.png)

Error handling is also provided. You get notifications on any errors that happen with your graphs, as well as things like lost connection to a server-side NoFlo runtime:

![Lost connection to a runtime](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/lost-connection-small.png)

An interesting side effect of having a [network protocol](https://github.com/noflo/noflo/issues/107) is that it doesn't really matter to the UI whether it talks to NoFlo or to any other FBP system, as long as they are able to talk the same protocol. Various flow-based programming environments for other languages have expressed interest in our development environment, and by providing the protocol they can do this easily.

The first FBP environment to get there was Jon Nordby's [MicroFlo](https://github.com/jonnor/microflo), a flow-based programming system for microcontrollers like [Arduino](http://arduino.cc/). Imagine controlling hardware in a flow-based manner! Jon [already programmed his fridge this way](http://www.jonnor.com/2013/09/microflo-0-1-0-and-an-arduino-powered-fridge/).

![Jon's tweet about the UI working with MicroFlo](https://d2vqpl3tx84ay5.cloudfront.net/noflo-ui/microflo-tweet.png)

[GoFlow](https://github.com/trustmaster/goflow#readme), the flow-based library for the Go programming language is also [planning to add support](https://github.com/trustmaster/goflow/issues/12), as is the [cape](https://hackerfleet.org/dev/wiki/cape) environment for Python.

## Relevant repositories

NoFlo is open source, and so is the development environment we're building. If you want to stay up to date on our progress, these are the GitHub repositories to follow:

* [noflo/noflo-ui](https://github.com/noflo/noflo-ui) - the client-side development environment
* [meemoo/dataflow](https://github.com/meemoo/dataflow) - our graph editing widget
* [noflo/noflo-ui-server](https://github.com/noflo/noflo-ui-server) - Node.js server for serving the UI and running server-side NoFlo processes

## Trying it out

If you just want to play with some client-side graphs, the easiest way to use the NoFlo Development Environment is to [open it in your browser](http://noflojs.org/noflo-ui). Try tweaking [the clock demo](http://noflojs.org/noflo-ui/#example/6699161) for instance.

This is a snapshot of the UI that we update every now and then. For the cutting edge version, just install from git and build locally. However, we're actively changing things all the time at this point, so the UI might be incomplete or some things might not work at times.

## What happens next?

Right now our main areas of focus are:

* Better touch interaction ([ticket](https://github.com/meemoo/dataflow/issues/53))
* Persistent cards for keeping inspectors you need open all the time ([ticket](https://github.com/meemoo/dataflow/issues/55))
* Managing whole NoFlo projects instead of single, isolated graphs ([ticket](https://github.com/noflo/noflo-ui/issues/17))

The last one is quite important, as that will open the way for implementing highly useful features like [component editing in the UI](https://github.com/noflo/noflo-ui/issues/8), subgraph creation, and integration with version control services.

On technical level, big part right now is move to graphs and [Web Components](http://www.polymer-project.org/). The NoFlo user interface is based on the graph editing tools we inherited from Forrest's [Meemoo](http://meemoo.org/) project, but we're moving more and more of the UI logic itself into graphs managed and run by NoFlo. It is kind of cool to start getting to the stage where we can use the tool to build itself!
