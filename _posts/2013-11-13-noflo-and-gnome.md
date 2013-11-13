---
title: NoFlo and GNOME
layout: post
location: Berlin, Germany
categories:
  - javascript
  - fbp
  - desktop
---
As the readers of this blog know, I've been working on a [Flow-Based Programming](https://en.wikipedia.org/wiki/Flow-based_programming) implementation for JavaScript in the form of the [NoFlo](http://noflojs.org/) project. The idea of FBP in nutshell is to separate the control flow of software from the actual implementation. Developers build reusable "black box" components that are then connected with each other through a graph that you can define either visually or textually.

FBP has been around for quite a while, having been [invented by J. Paul Morrison in the 60s](http://bergie.iki.fi/blog/paul-morrison-interview/), but is now becoming more and more relevant thanks to the need for talking to multiple asynchronous APIs and different devices. While NoFlo has been stable enough for production use for about two years now, we ran a [successful Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment) earlier this fall to push the development tools to a new level.

I attended the [FSCONS](https://fscons.org/2013/) conference last weekend, and gave a NoFlo talk. Since quite a few [GNOME](http://www.gnome.org/) regulars were there as well, we ended up chatting about how NoFlo and FBP could be utilized in the desktop environment. I'm writing this to [Planet GNOME](https://planet.gnome.org/) to introduce some of those ideas.

The video from [my talk](http://bergie.iki.fi/talks/2013/noflo-fscons/#0) isn't online yet, but you can watch [a video](http://vimeo.com/72065207) from the talk I gave at [c-base](http://c-base.org/) couple of months ago:

<iframe src="//player.vimeo.com/video/72065207?color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

## NoFlo on gjs

An interesting development that happened this fall was that NoFlo was ported to the [gjs](https://wiki.gnome.org/Gjs) JavaScript engine by [Lionel Landwerlin](https://github.com/djdeath). This allows us to take the ideas of Flow-Based Programming and connect them with the desktop. GNOME is an excellent candidate for this, given that JavaScript is a first-class citizen on the [development platform](https://developer.gnome.org/), meaning that with the right set of components your FBP programs could integrate with all the relevant parts of the GNOME ecosystem.

Lionel posted [a screencast](http://youtu.be/p7NYgqG0CQ8) of window management with [Clutter](https://wiki.gnome.org/Clutter) coordinated by NoFlo:

<iframe width="560" height="315" src="//www.youtube.com/embed/p7NYgqG0CQ8" frameborder="0" allowfullscreen></iframe>

This is of course only the first steps, but shows a little bit of the potential. While NoFlo's low overhead could mean making actual GNOME applications with it, the initial sweet spot for the integration would be:

* Having a fast UI prototyping tool in GNOME, a bit like how [Quartz Composer](https://en.wikipedia.org/wiki/Quartz_Composer) is used on the Apple platforms
* Allowing users to automate parts of their desktop workflow through simple FBP programs

[Vinod Khosla summarized](https://twitter.com/vkhosla/statuses/365206789182078976) the significance of this quite well:

> An author can write a book, a musician a song, a painter  a painting. Most UI designers cannot realize their creation

[Zeeshan](http://www.linkedin.com/in/zeenix) also wrote about similar ideas for GNOME in his [Pentu](https://wiki.gnome.org/Pentu) project proposal two years ago.

## Bringing the GNOME platform to NoFlo

The big part of enabling flow-based GNOME development would be to provide [NoFlo components](http://noflojs.org/library/) for the various APIs in the GNOME ecosystem. This could be done manually, but quite possibly we could automate at least parts of the process by some smart [GObject Introspection](https://wiki.gnome.org/GObjectIntrospection) hacking.

This would be quite similar to [how we integrated](https://github.com/noflo/noflo-polymer) the [Polymer Web Components](http://www.polymer-project.org/) with NoFlo.

As I'm currently quite busy on the NoFlo Development Environment, I won't be able to do this personally. But this sort of work would be the perfect fit for something like [OPW](https://wiki.gnome.org/OutreachProgramForWomen) or [GSoC](https://developers.google.com/open-source/soc/). I'd be happy to mentor that effort.

## The NoFlo Development Environment

We're building a quite nice graphical editor and debugger for flow-based programs. You can see the current state in [a UI walkthrough](http://bergie.iki.fi/blog/noflo-update/) I posted last month.

![NoFlo UI in action](/files/noflo-ui/clock-demo-preview-small.png)

The [NoFlo UI](https://github.com/noflo/noflo-ui) is a web application that could be brought to the desktop by running it inside a [webview](https://wiki.gnome.org/WebKitGtk). To control the NoFlo runtime inside gjs we would also need a GNOME library for dealing with [WebSockets](https://en.wikipedia.org/wiki/WebSocket), as that is the way we talk with non-browser runtimes like [Node.js](http://nodejs.org/) or the [microflo](https://github.com/jonnor/microflo) environment for Arduino programming.

By supporting the [NoFlo network protocol](https://github.com/noflo/noflo/issues/107) on gjs we could easily start, stop, modify, and monitor FBP programs running inside GNOME.

In the long run it would also be possible to build a native flow-based editor as well. After all, since the data model and runtime interactions are standardized, there is no reason why multiple different tools couldn't interact with the same NoFlo graphs.

To find out more about NoFlo, visit the [website](http://noflojs.org), read the code [on GitHub](http://github.com/noflo), or [read the various press stories](http://bergie.iki.fi/blog/noflo-coverage-august/) that appeared during the Kickstarter.

While I'm currently working [outside of the desktop context](http://bergie.iki.fi/blog/working-on-android/), having been around GNOME since early 2000s I'm still following the project with interest. Having NoFlo there would be a great way to revitalize this connection.
