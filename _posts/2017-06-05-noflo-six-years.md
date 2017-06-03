---
title: 'NoFlo: six years of JavaScript dataflow'
location: Berlin, Germany
categories:
  - fbp
  - business
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/station-announcer.png'
---
Quite a bit of time has passed since my [two years of NoFlo](/blog/noflo-two-years/) post, and it is time to take another look at the state of the [NoFlo ecosystem](https://noflojs.org/). To start with the basics, NoFlo is a JavaScript implementation of [Flow-Based Programming](https://en.wikipedia.org/wiki/Flow-based_programming):

> In computer programming, flow-based programming (FBP) is a programming paradigm that defines applications as networks of "black box" processes, which exchange data across predefined connections by message passing, where the connections are specified externally to the processes. These black box processes can be reconnected endlessly to form different applications without having to be changed internally. FBP is thus naturally component-oriented.

With NoFlo software is built by creating graphs that contain reusable components and define the program logic by determining how these components talk to each other.

I started the NoFlo open source project six years ago in Mountain View, California. My aim was to improve the JavaScript programming experience by bringing the FBP paradigm to the ecosystem. At the time the focus was largely on web API servers and [extract, transform, load](https://en.wikipedia.org/wiki/Extract,_transform,_load) (ETL) programs, but the scope has since expanded quite a bit:

> NoFlo is not a web framework or a UI toolkit. It is a way to coordinate and reorganize data flow in any JavaScript application. As such, it can be used for whatever purpose JavaScript can be used for. We know of NoFlo being used for anything from building [web servers](https://thegrid.io) and build tools, to coordinating events inside [GUI applications](https://flowhub.io), [driving](http://meemoo.org/blog/2015-01-14-turtle-power-to-the-people) [robots](/blog/noflo-ardrone/), or building Internet-connected [art installations](/blog/ingress-table/).

## Flowhub

Four years ago I wrote how [UI was the missing part](/blog/noflo-two-years/#ui-is-the-missing-part) of NoFlo. Later the same year we launched a [Kickstarter campaign](https://www.kickstarter.com/projects/noflo/noflo-development-environment) to fix this.

Our promise was to _design a new way to build software & manage complexity - a visual development environment for all_.

<iframe width="560" height="315" src="https://www.kickstarter.com/projects/noflo/noflo-development-environment/widget/video.html" frameborder="0" scrolling="no"> </iframe>

This was wildly successful, being at the time the 5th highest funded software crowdfunding campaign. The result &mdash; [Flowhub](https://flowhub.io) &mdash; was released to the public [in 2014](/blog/flowhub-kickstarter-delivery/). Big thanks to [all of our backers](https://noflojs.org/kickstarter/)!

Here is how [Fast Company wrote about NoFlo](https://www.fastcompany.com/3016289/how-an-arcane-coding-method-from-1970s-banking-software-could-save-the-sanity-of-web-develop):

> If NoFlo succeeds, it could herald a new paradigm of web programming. Imagine a world where anyone can understand and build web applications, and developers can focus on programming efficient components to be put to work by this new class of application architects. In a way, this is the same promise as the "learn to code" movement, which wants to teach everyone to be a programmer. Just without the programming.

With Flowhub you can manage full NoFlo projects in your browser. This includes writing components in JavaScript or CoffeeScript, editing graphs and subgraphs, running and introspecting the software, and creating unit tests. You can keep your project in sync with the GitHub integration.

![Live programming NoFlo in Flowhub](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/station-announcer.png)

### Celebrating six years of NoFlo

Earlier this year we [incorporated Flowhub in Germany](/blog/flowhub-ug/). Now, to celebrate six years of NoFlo we're offering a _perpetual 30% discount_ on [Flowhub plans](http://plans.flowhub.io/). To lock in the discount, subscribe to a Flowhub plan before June 12th 2017 using the code `noflo6`.

## Ecosystem

While NoFlo itself has by no means taken over the world yet, the overall ecosystem it is part of is looking very healthy. Sure, [JavaScript fatigue](https://medium.com/@ericclemmons/javascript-fatigue-48d4011b6fc4) is real, but at the same time it has gone through a pretty dramatic expansion.

### JavaScript

As I wrote around the time I started NoFlo, JavaScript has indeed become [a universal runtime](/blog/the_universal_runtime/). It is used on web browsers, [server-side](https://nodejs.org/en/), as well as for building mobile and desktop applications. And with NoFlo you can target all those platforms with a single programming model and toolchain.

The de-facto standard for sharing JavaScript libraries &mdash; NPM has become [the most popular software repository](http://www.modulecounts.com/) for open source modules. Apart from the hundreds of thousands of other packages, you can also get [prebuild NoFlo components](https://www.npmjs.com/browse/keyword/noflo) from NPM to cover almost any use case.

### Dataflow

After a long period of semi-obscurity, our Kickstarter campaign greatly increased the awareness in FBP and [dataflow programming](https://en.wikipedia.org/wiki/Dataflow). Several open source projects expanded the reach of FBP to other platforms, like [MicroFlo](http://microflo.org/) to microcontroller programming, or [PhpFlo](https://github.com/phpflo/phpflo) to data conversion pipelines in PHP. To support more of these with common tooling, we standardized the [FBP protocol](https://flowbased.github.io/fbp-protocol/) that allows IDEs like Flowhub manage flow-based programs across different runtimes.

Dataflow also saw uptake in the bigger industry. [Facebook's Flux architecture](https://facebook.github.io/flux/) brought flow-based programming to reactive web applications. [Google's TensorFlow](https://www.tensorflow.org/) made dataflow the way to build machine learning applications. And [Google's Cloud Dataflow](https://cloud.google.com/dataflow/) uses these techniques for stream processing.

## Tooling for flow-based programming

One big area of focus for us has been improving the tooling around NoFlo, as well as the other FBP systems. The [FBP protocol](https://flowbased.github.io/fbp-protocol/) has been a big enabler for both building better tools, and for collaboration between different FBP and dataflow systems.

![FBP protocol](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/fbp-protocol.png)

Here are some of the tools currently available for NoFlo developers:

* [Flowhub](https://flowhub.io) &mdash; browser-based visual programming **IDE** for NoFlo and other flow-based systems
* [noflo-nodejs](https://github.com/noflo/noflo-nodejs) &mdash; command-line interface for running NoFlo programs on **Node.js**
* [noflo-browser-app](https://github.com/noflo/noflo-browser-app) &mdash; template for building **browser applications** in NoFLo
* [MsgFlo](https://msgflo.org) &mdash; for running NoFlo and other FBP runtimes as a **distributed system**
* [fbp-spec](https://github.com/flowbased/fbp-spec) &mdash; **data-driven tests** for NoFlo and other FBP environments
* [flowtrace](https://github.com/flowbased/flowtrace) &mdash; tool for **retroactive debugging** of NoFlo programs. Supports visual replay with Flowhub

## NoFlo 0.8

NoFlo 0.8, [released in March this year](/blog/noflo-0-8/) is probably our most important release so far. It introduced a [new component API](/blog/noflo-process-api/) and greatly clarified the [component and network lifecycle](/blog/noflo-0-8/#component-and-network-lifecycle).

![NoFlo 0.8 program lifecycle](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/a17b8582-fc33-11e5-9826-a722b90913ce.png)

With this release, it is easier than ever to build well-behaved NoFlo components and to deal with the mixture of asynchronous and synchronous data processing. It also brings NoFlo a lot closer to the [classical FBP concepts](http://www.jpaulmorrison.com/fbp/).

As part of the release process, we also fully overhauled the [NoFlo documentation](https://noflojs.org/documentation/) and wrote a new [data transformations tutorial](https://noflojs.org/tutorials/canadianness/) project.

To find out more about NoFlo 0.8, watch my recent [NoFlo talk from Berlin Node.js meetup](https://youtu.be/x_nhh3yg-Cs?list=PLIuD0578pkZ4Ciu9DNkRMG9yvFrEdVby7):

<iframe width="560" height="315" src="https://www.youtube.com/embed/x_nhh3yg-Cs?list=PLIuD0578pkZ4Ciu9DNkRMG9yvFrEdVby7" frameborder="0" allowfullscreen></iframe>

## Road to 1.0

In addition to providing lots of new APIs and functionality, NoFlo 0.8 also acts as the transitional release as we head towards the big _1.0 release_. In this version we marked many old APIs [as deprecated](/blog/noflo-0-8/#deprecated-features).

NoFlo 1.0 will essentially be 0.8, but with all the deprecated APIs removed. If you haven't done so already, now is a good time to upgrade your NoFlo projects to 0.8 and make sure everything runs without deprecation warnings.

We intend to release NoFlo 1.0 later this summer once more of [our open source component libraries](http://github.com/noflo) have been updated to utilize the new features.

[![Get 30% discount on Flowhub](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo6.png)](https://plans.flowhub.io)
