---
title: "NoFlo: two years of flow-based programming"
categories:
  - fbp
  - nodejs
  - javascript
  - coffeescript
  - bestof
location: Berlin, Germany
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/fbp-ui/leigh-concept-small.jpg'
---
[NoFlo](http://noflojs.org) &mdash; the flow-based programming system I started &mdash; is now two years old. I [pushed the first commits](https://github.com/noflo/noflo/commit/04698a77272d9cd552ac57ca511ec8f05696ea40) to GitHub on June 5th 2011 from [Hacker Dojo](http://www.hackerdojo.com/) in Mountain View. To get us started with the story, I'll let [Wikipedia summarize](http://en.wikipedia.org/wiki/Flow-based_programming):

> Flow-based programming (FBP) is a programming paradigm that defines applications as networks of "black box" processes, which exchange data across predefined connections by message passing, where the connections are specified externally to the processes. These black box processes can be reconnected endlessly to form different applications without having to be changed internally.

While flow-based programming is still far from mainstream, it has been great to watch to the community grow around NoFlo.

There are several start-ups using it as their base infrastructure, with several of their engineers contributing to the open source effort. I've personally used the system for quite a wide range of tasks from [web services](http://bergie.iki.fi/blog/8998693776/) and [document transformations](http://bergie.iki.fi/blog/business_analytics_with_couchdb_and_noflo/) to handling payments and user on-boarding processes.

## Why I started NoFlo

Two years ago I was undergoing a transition from PHP and Python to the JavaScript world, largely lured by the benefits of a [universal runtime](http://bergie.iki.fi/blog/the_universal_runtime/) and the event-based multi-protocol paradigm [Node.js](http://nodejs.org/) offers.

While new programming languages and environments are easy to get into, this transition provided yet another point where I would have to sit down and port over all the little libraries and utilities I've grown to rely on over the years.

I wondered if there could be a better way.

To figure that out, I spent the time I had when traveling between conferences and hackathons of the [IKS Project](http://www.iks-project.eu/) reading various computer science papers on different programming paradigms. Eventually I stumbled upon some mentions of flow-based programming. I dug deeper, and finally read the canonical book on the subject &mdash; Paul Morrison's [Flow-based programming, 2nd edition](http://amzn.com/1451542321).

Having worked with component architectures and Unix pipes before, the idea resonated with me. To think things through, I took the excuse of having some meetings in Portland to [drive up there](http://www.flickr.com/photos/bergie/sets/72157626665916769/) following the beautiful [California 1](http://en.wikipedia.org/wiki/California_State_Route_1) coastal road. Couple of days alone in a car is a great way to let your mind flow!

![The coastal road in Oregon](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/oregon-coast.jpg)

Implementing your own is usually the best method for learning a new concept, and so when I got back to the Bay Area, I decided to write an [FBP system of my own](https://noflojs.org) on Node.js.

I also kept a [Qaiku](http://en.wikipedia.org/wiki/Qaiku) thread on the things I discovered, parts of which I later [republished on this site](http://bergie.iki.fi/blog/flow-based-programming-is-interesting/).

## Beyond OOP

Object-oriented programming and Model-View-Controller have been the dominant programming paradigms since the desktop computing era of the 90s, even while the world has become more connected and multi-device. While these concepts did improve some things, the big promises of programmer productivity and component reuse have mostly been [left unrealised](http://blog.dmbcllc.com/object-oriented-programming-has-failed-us/).

Software has [become one of the most important aspects](http://online.wsj.com/article/SB10001424053111903480904576512250915629460.html) of business and the society. As an effect, the demand for programmers [vastly outstrips](http://blog.nwjobs.com/careercenter/talking_code_demand_for_programmers_software_engineers_outstrips_supply.html) the amount of computer science graduates we're able to produce.

The tools side of things isn't looking much better, either. While IDEs are admittedly improving all the time, most of the talented programmers have ditched them and moved back to the console-based editors of the 80s like vim and Emacs, many following the [Unix as your IDE](http://blog.sanctum.geek.nz/unix-as-ide-introduction/) idea. Clearly the productivity boost given by IDEs doesn't yet match the overhead of using them.

These areas are where flow-based programming can help.

## The logic is in the graph

When we design software, we usually start by drawing boxes and arrows on a whiteboard. Later on these are then translated to actual software through various text files containing classes, methods, and configuration information.

As the software evolves, people rarely go back to the original drawing and update it, effectively making the source code only place documenting how different pieces of a system fit together.

With FBP, the logic of the software is designed as [a graph](http://en.wikipedia.org/wiki/Directed_graph) &mdash; much like a flowchart &mdash; and stays as a graph.

The boxes of the graph depict various instances of reusable components, and the arrows the wiring connecting their ports together.

The graph is what FBP systems like NoFlo execute, and it is also something that can be easily drawn on the screen, or even edited visually.

![NoFlo graph in DrawFBP](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/fbp-ui/drawfbp-small.png)

We humans [are visual creatures](http://books.google.de/books?id=ffw6aBE-9ykC&lpg=PA1108&ots=baZIBoNyYI&dq=humans%20are%20visual%20creatures&pg=PA1108#v=onepage&q=humans%20are%20visual%20creatures&f=false). We are much better at recognizing shapes and visual connections than at finding them from a jumble of text files.

Each node (or *process* in FBP terminology) of a graph is an instance of a component. Just like objects in OOP can receive and react to messages (*method calls*), NoFlo components react to packets they receive through their input ports, process them, and eventually send something to their output ports.

The graph decides where the output is sent, meaning that the overall behavior of a program can be modified by just rewiring some of these connections. In traditional OOP the connections between various objects are usually hardcoded, or managed by a complicated [dependency injection](http://en.wikipedia.org/wiki/Dependency_injection) systems.

## Component reuse

Because FBP components are just black boxes performing some well-defined task on incoming packets, they can be connected with each other in multitude of different ways to produce a different behaviour. This gives FBP systems a much better scale of code reuse than traditional OOP or procedural environments.

As an example, my typical NoFlo applications only contain some 5-15% of components written specifically for that project. The rest are all coming from the [growing ecosystem](https://npmjs.org/browse/depended/noflo) of ready-made NoFlo components.

Writing and [publishing components](http://bergie.iki.fi/blog/distributing-noflo-components/) is already quite easy, and is becoming even faster and more reliable through tools like the [Grunt component scaffolder](https://github.com/noflo/grunt-init-noflo) and [noflo-test](https://github.com/noflo/noflo-test).

*The more components are out there the less time we need to spend writing code, and the more we can focus on designing the software logic itself.*

## NoFlo on the browser

Apart of better tooling and more components, the other big improvement in NoFlo has been support for running FBP programs on the client. Originally NoFlo was designed for server-side flows, but thanks to the improving [client-side Component ecosystem](http://bergie.iki.fi/blog/sharing-javascript-libraries-node-browser/), it became feasible to expose the environment also to web browsers.

This is keeping true with the promises of the universal runtime. With the next release of NoFlo, flow-based programs can be run on pretty much any computing device, whether a Node.js equipped web server, or a smartphone with a browser.

The ability to run client-side flow-based programs presents new opportunities. There is a tradition of using tools like [FilterForge](http://www.filterforge.com/features/editor.html) for visual effects, or [Quartz Composer](http://en.wikipedia.org/wiki/Quartz_Composer) for user interaction design. As a matter of fact, [Facebook Home was designed using flow-based tools](https://medium.com/the-year-of-the-looking-glass/af182add5a2f):

> ...something like Facebook Home is completely beyond the abilities of Photoshop as a design tool. How can we talk about physics-based UIs and panels and bubbles that can be flung across the screen if we’re sitting around looking at static mocks? (Hint: we can’t.) It's no secret that many of us on the Facebook Design team are avid users of Quartz Composer, a visual prototyping tool that lets you create hi-fidelity demos that look and feel like exactly what you want the end product to be.

Since NoFlo graphs run on any device including the tablets and smartphones that the application being designed is likely to target, it can provide an even better environment for such prototyping. There are lots of opportunities for a new tool here, especially given that [Quartz Composer's future is quite uncertain](http://www.fcp.co/final-cut-pro/news/932-will-the-end-of-apple-s-quartz-composer-finally-kill-off-final-cut-pro-7-and-its-plugins).

We are already doing some work on [visual interaction components for NoFlo](https://github.com/noflo/noflo/issues/66). This could be huge for NoFlo and FBP in general!

## UI is the missing part

What we have with NoFlo is already a quite solid programming environment:

* [Flow-based engine](https://noflojs.org) that works well in both browser and Node.js
* Growing ecosystem of [reusable open source components](https://npmjs.org/browse/depended/noflo)
* Framework for quickly [scaffolding](https://github.com/noflo/grunt-init-noflo) and [testing](https://github.com/noflo/noflo-test) new components
* Domain-specific language for [defining NoFlo graphs](https://github.com/noflo/fbp#language-for-flow-based-programming)

However, the missing part is a tool that would allow viewing and editing NoFlo graphs visually. Sure, [DrawFBP](http://www.jpaulmorrison.com/cgi-bin/wiki.pl?DrawFBP) is there, and can be used with NoFlo. But something fitting modern touchscreen interactions and more connected to the live graphs would be better.

I did some prototypes on this with [noflo-ui](https://github.com/noflo/noflo-ui), and wrote down [bunch of thoughts](http://bergie.iki.fi/blog/inspiration-for-fbp-ui/) on how the graphs would be best shown. There has also been some collaboration with Forrest Oliphant of [Meemoo](http://meemoo.org/) fame.

Last week I sat down with [Leigh Taylor](http://www.behance.net/leightaylor), the original designer behind the [Medium](https://medium.com/) blogging platform, to go through the various ideas and concepts we had. Based on this we're starting to have a quite solid design to continue working with.

There will be more on that in the near future, but here is a sneak preview:

![Leigh's NoFlo UI concept](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/fbp-ui/leigh-concept-small.jpg)

## Telling the story of NoFlo

Apart from the user interface, the other important task ahead of us is to grow the community around NoFlo and FBP in general.

This means producing better documentation, and explaining the concept in conferences and meetups. I gave [a talk on NoFlo in JS.Everywhere 2011](http://youtu.be/pgP4v9b5DvE), but the project has moved quite far ahead since then.

![Being interviewed on NoFlo](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie-noflo-interview.jpg)

To tell the story of NoFlo and FBP we're currently filming a set of interviews with the people involved from the different sides. We're talking with NoFlo contributors, designers, and with people who have years (or even decades!) of experience with flow-based programming. This will hopefully come out next month.

Expect also more posts and tutorials here [on my blog](http://bergie.iki.fi/).
