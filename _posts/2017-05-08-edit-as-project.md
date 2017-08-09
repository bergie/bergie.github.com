---
title: "Edit as project and Flowhub live mode"
location: Berlin, Germany
categories:
  - fbp
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/cflo-edit-as-project.png'
---
In [Flowhub](https://flowhub.io) you can create and edit full flow-based programming projects. The _live mode_ enables introspecting running FBP systems. This weekend we rolled out [Flowhub 0.19](https://github.com/noflo/noflo-ui/blob/master/CHANGES.md#0190-2017-may-6) which makes it easy to move between these modes.

## Live mode

Flowhub's live mode is designed for making software introspectable &mdash; flow-based systems provide access to the graph and network state information, and tools like Flowhub then visualize it.

Opening a system in _live mode_ can be done with a [URL that contains the connection details](https://github.com/noflo/noflo-ui/blob/master/README.md#registering-runtime-for-a-user) to the runtime. This means runtimes can make their live mode discoverable in many ways, from printing it at system start-up to a NFC tag or QR Code on a deployed device:

<iframe width="560" height="315" src="https://www.youtube.com/embed/EdgeSDFd9p0" frameborder="0" allowfullscreen></iframe>

In live mode, users can see the graph structure of the running software and the packets flowing through it. And with the right permissions, you can also navigate the possible sub-graphs and component source code.

## Edit as project

To make changes to the running software, hit the  _Edit as project_ button. Flowhub will download the currently running software from the runtime and turn it into a project.

![MsgFlo in live mode](https://d2vqpl3tx84ay5.cloudfront.net/cflo-edit-as-project.png)

In nutshell:

* Live mode provides a read-only view to a running system
* Project mode allows live programming a full project including its graphs and components
* _Edit as project_ can be used to turn a live mode session into an editable project
* Projects can be synchronized with GitHub

_Edit as project_ also works with the example programs that ship with Flowhub.
