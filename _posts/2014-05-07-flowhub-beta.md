---
title: "Flowhub public beta: a better interface for Flow-Based Programming"
layout: post
location: Berlin, Germany
categories:
- fbp
- desktop
- tablet
---
Today I'm happy to announce the [public beta](http://flowhub.io#app-scope) of the [Flowhub](http://flowhub.io) interface for Flow-Based Programming. This is the latest step in the adventure that started with [some UI sketching](http://bergie.iki.fi/blog/inspiration-for-fbp-ui/) early last year, went through our [successful Kickstarter](https://www.kickstarter.com/projects/noflo/noflo-development-environment) &mdash; and now &mdash; thanks to our [1&thinsp;205 backers](http://noflojs.org/kickstarter/), it is available to the public.

## Getting Started

This post will go into more detail on how the new Flowhub interface works in a bit, but for those who want to dive straight in, here are the relevant links:

* [Hosted web version of Flowhub](http://app.flowhub.io)
* [Flowhub Chrome App](https://chrome.google.com/webstore/detail/flowhub/aacpjichompfhafnciggfpfdpfododlk)

Make sure to read the [Getting Started guides](http://flowhub.io/documentation/) and check out the [Flowhub FAQ](http://flowhub.io/documentation/flowhub-faq/). There is also a [new video available](http://flowhub.io/#video):

<iframe width="640" height="360" src="//www.youtube.com/embed/8Dos61_6sss" frameborder="0" allowfullscreen></iframe>

Both the web version and the Chrome app are built following the [offline first](http://offlinefirst.org/) philosophy, and keep everything you need stored locally inside your browser. The Chrome app and the upcoming iOS and Android builds will enable us to later introduce capabilities that are not possible inside regular browsers, like talking directly to [MicroFlo](http://microflo.org/) runtimes over USB or Bluetooth. But other than that they're similar in features and user experience.

## New User Interface

If you read the [NoFlo Update from last October](http://bergie.iki.fi/blog/noflo-update/), you might notice that the new Flowhub user interface looks and feels quite different from it.
[![Main screen of new Flowhub UI](/files/flowhub-main-small.png)](/files/flowhub-main.png)

[![Graph editing in new Flowhub UI](/files/flowhub-menu-small.png)](/files/flowhub-menu.png)

This new design was implemented to improve touch-screen friendliness, as well as to give Flowhub a more focused, unique look. It also allowed us to follow some interesting UX paths that I'll explain next.

### Zooming

One typical problem in visual programming tools is that they can become quite cluttered with information. To solve this, we utilized the concept of [Zooming User Interfaces](http://en.wikipedia.org/wiki/Zooming_user_interface), which allow us to show a clear overview of a program when zoomed out, and reveal all kinds of detail about it when zoomed in.

![Zoomed out](/files/flowhub-zoom-out-small.png)

![Zoomed in](/files/flowhub-zoom-in-small.png)

Zooming works with two-finger scroll on typical desktop computers, or with the pinch gesture on touch-enabled devices.

### Pie Menu

Another interface concept that we used to make interactions faster and more contextual is [Pie Menus](http://en.wikipedia.org/wiki/Pie_menu).

For example, you can easily navigate to subgraphs and component source code with the menu:

![Navigating with the Pie Menu](/files/flowhub-menu-navigation-small.png)

When you have selected multiple nodes, you can use the menu to group them or move them to a new subgraph:

![Group selections with the Pie Menu](/files/flowhub-menu-group-small.png)

The menu can also be used for removing edges or nodes:

![Deleting an edge with the Pie Menu](/files/flowhub-menu-edge-small.png)

You can activate the pie menu in the graph editor with a right mouse click, or with a long press on touch-enabled devices.

### Component Editor

Another new major feature is in-app component editing. If your runtime supports it, you can at any time create or modify [custom components](http://noflojs.org/documentation/components/) for your project and they'll become immediately available for your graphs.

![Creating a new component](/files/flowhub-new-component-small.png)

![Component Editing](/files/flowhub-component-editor-small.png)

The programming languages available for component creation depend on the runtime. With NoFlo these are JavaScript and CoffeeScript. With another runtime they might be C, Java, or Python.

### Offline First

While some claim that [in reality you're never offline](http://signalvnoise.com/posts/347-youre-not-on-a-fucking-plane-and-if-you-are-it-doesnt-matter), the reality is that there are many situations where Internet connectivity is either not available, unreliable, or simply expensive. Think of a typical conference or a hackathon for instance.

Because of this &mdash; and to give software developers the privacy they deserve &mdash; Flowhub has been designed to work "offline first". All your graphs, projects, and custom components are stored locally in your browser's [Indexed Database](http://en.wikipedia.org/wiki/Indexed_Database_API) and only transmitted over the network when you wish to push to a GitHub project, or interact with a remote runtime.

We're following a very similar UI concept as [Amazon Kindle](https://kindle.amazon.com/) in that you can download projects locally to your device, or browse the ones you have available in the cloud:

![Local and remote projects](/files/flowhub-projects-small.png)

At any point you can push your changes to a graph or a component to GitHub:

![Pushing to GitHub](/files/flowhub-push-small.png)

Runtime discovery happens through a central service, but once you know the address of your FBP runtime, the communications between it and your browser will happen directly. This makes it easy to work with Node.js projects running on your own machine even when offline.

## Cross-platform, Full-stack

When we launched the [NoFlo UI Kickstarter](https://www.kickstarter.com/projects/noflo/noflo-development-environment), we were initially only thinking about how to support NoFlo in different environments. But in the course of development we ended up defining a [network protocol for FBP](http://noflojs.org/documentation/protocol/) that enabled us to move past just a single FBP environment and towards supporting all of them. This is what prompted the [Flowhub rebranding](http://bergie.iki.fi/blog/flowhub/).

Since then, the number of supported FBP environments has been growing. Here is a list of the ones I'm aware of:

* [NoFlo](http://noflojs.org/)
  - browsers
  - Node.js
  - [GNOME desktop](http://bergie.iki.fi/blog/flowhub-gnome-dx/)
* [MicroFlo](http://microflo.org/)
  - microcontrollers
* [ImgFlo](http://www.jonnor.com/2014/04/imgflo-0-1-an-image-processing-server-and-flowhub-runtime/)
  - image processing with [GEGL](http://www.gegl.org/)
* [ProtoFlo](https://github.com/jonnor/protoflo)
  - Python

I hope that the developers of other FBP environments like [JavaFBP](http://sourceforge.net/projects/flow-based-pgmg/) and [GoFlow](https://github.com/trustmaster/goflow) add support for the FBP protocol soon so that they can also utilize the Flowhub interface.

## Open Source vs. Paid

As promised in our Kickstarter, the [NoFlo Development Environment](https://github.com/noflo/noflo-ui) is an open source project available under the MIT license.

[Flowhub](http://flowhub.io/) is a branded and supported instance of that with some additional network services like the Runtime Registry.

![NoFlo UI vs. Flowhub](/files/noflo-ui-vs-flowhub.png)

The [Flowhub plans](http://flowhub.io/preorder/) allow us to continue development of this Flow-Based Programming toolset, as well as to provide the various network services needed for making the experience smooth.

Just like [with GitHub](https://github.com/pricing), Flowhub provides *a free environment for anybody working on public and open source projects*. Private projects need [a paid plan](http://flowhub.io/preorder/).

### Kickstarter & Pre-Ordered Plans

It is likely that many readers of this post already supported our Kickstarter or pre-ordered a Flowhub plan. Since Flowhub is still in beta, *we haven't activated your plans yet*. So for now, everybody is using Flowhub with the free plan.

We will be rolling out the paid plans and Kickstarter rewards towards the end of the beta testing period.

Feel free to already log in and start using Flowhub, however! The plan will be added to your account when we feel the software is ready for it.

## Examples

Here are some examples of things you can build with Flowhub targeting web browsers:

* [Photo booth](http://app.flowhub.io/#example/7804187)
* [Animated clock](http://app.flowhub.io/#example/7135158)
* [Canvas pattern generator](http://app.flowhub.io/#example/1319c76fe006fb34c9c9)

For a more comprehensive cross-platform project, see my [Building an Ingress Table with Flowhub](http://bergie.iki.fi/blog/ingress-table/) post.

There is also an [ongoing Google Summer of Code project](http://meemoo.org/blog/2014-05-06-summer-of-code-2014/) to port various [Meemoo apps](http://meemoo.org/hack-our-apps/) to Flowhub. This will hopefully result in a lot more demos.

## Next Steps

The main purpose of this public beta is to allow our backers and other FBP enthusiasts an early access to the Flowhub user interface. Now we will focus on stabilization and bug fixing, aided by the [NoFlo UI issue tracker](https://github.com/noflo/noflo-ui/issues?state=open). We're also gathering feedback from beta testers in form of user surveys and will utilize those to prioritize both bug fixing and feature work.

![Flowhub team testing the UI](/files/flowhub-florence-small.jpg)

Right now the main areas of focus are:

* [Improving the GitHub integration](https://github.com/noflo/noflo-ui/issues/218)
* Landing the [graph autolayout feature](https://github.com/noflo/noflo-ui/issues/53)
* [Compatibility with upcoming Chrome 35](https://github.com/noflo/noflo-ui/issues/45) and its native HTML5 Custom Elements support
* Implementing real-time collaboration over WebRTC

We hope to release the stable version of Flowhub in summer 2014.
