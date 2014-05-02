---
title: Flowhub and the GNOME Developer Experience
layout: post
categories:
- fbp
- desktop
location: Berlin, Germany
---
I've spent the last three days in the [GNOME Developer Experience hackfest](https://wiki.gnome.org/Hackfests/DeveloperExperience2014) working on the [NoFlo](http://noflojs.org) runtime for [GNOME](http://gnome.org) with [Lionel Landwerlin](https://github.com/djdeath).

[![GNOME development in Flowhub](/files/noflo-gnome-ui-small.png)](/files/noflo-gnome-ui.png)

What the resulting project does is give the ability to build and debug GNOME applications in a visual way with the [Flowhub](http://flowhub.io/) user interface. You can interact with large parts of the [GNOME API](https://developer.gnome.org/) using either automatically generated components, or hand-built ones. And while your software is running, you can see all the data passing through the connections in the Flowhub UI.

The way this works is the following:

* You install and run the [noflo-gnome](https://github.com/noflo/noflo-gnome) runtime
* The runtime loads all installed [NoFlo components](http://noflojs.org/documentation/components/) and dynamically registers additional ones based on [GObject Introspection](https://wiki.gnome.org/action/show/Projects/GObjectIntrospection)
* The runtime pings [Flowhub's runtime registry](https://github.com/the-grid/flowhub-registry#readme) to notify the user that it is available
* Based on the registry, the runtime becomes available in the UI
* After this, the UI can start communicating the with runtime. This includes loading and registering components, and creating and running NoFlo graphs
* The graphs are run inside [Gjs](https://wiki.gnome.org/action/show/Projects/Gjs)

[![Creating a new NoFlo GNOME project](/files/noflo-gnome-new-project-small.png)](/files/noflo-gnome-new-project.png)

While there is still quite a bit of work to be done in exposing more of the GNOME API as flow-based components, you can already do quite a bit with this. In addition to building simple UIs with [GTK+](http://www.gtk.org/), working with [Clutter](http://blogs.gnome.org/clutter/) animations was especially fun. With NoFlo, every running graph is "live", and so you can easily modify the various parameters and add new functionality while the software is running, and see those changes take effect immediately.

[Here is a quick video](http://youtu.be/uyuoP3sjI6g) of building a simple GTK application that loads a [Glade](https://glade.gnome.org/) user interface definition, runs it as a new desktop window, and does some signal handling:

<iframe width="480" height="360" src="//www.youtube.com/embed/uyuoP3sjI6g" frameborder="0" allowfullscreen></iframe>

If you're interested in visual, [flow-based programming](http://en.wikipedia.org/wiki/Flow-based_programming) on the Linux desktop, feel free to try out the [noflo-gnome](https://github.com/noflo/noflo-gnome) project!

There are still bugs to squish, documentation to write, and more APIs to wrap as components. All help in those is more than welcome.
