---
title: "Midgard 12.09 Gjallarhorn"
layout: post
location: Berlin, Germany
date: "2012-10-02 13:49:00"
categories:
  - midgard
  - desktop
---
<img src="/files/gjallarhorn.png" style="margin-left: 10px; float: right; width: 273px; height: 400px;" alt="Gjallarhorn" title="Heimdallr with Gjallarhorn by Lorenz Frølich, public domain" />

The new stable series of the [Midgard2 Content Repository](http://midgard-project.org/midgard2/) library was [released recently](http://lists.midgard-project.org/pipermail/dev/2012-September/003202.html). This version builds on the long-term supported [Ratatoskr](http://bergie.iki.fi/blog/ratatoskr_is_out-midgard2_content_repository_goes_lts/) series, adding some new features:

* Asynchronous I/O operations with the content repository
* Easier migration from the [Midgard1](http://midgard-project.org/midgard1/) series

Asynchronous I/O is important when the content repository is used in persistent applications like desktop software or Node.js, where Midgard can be used via [node-gir](https://npmjs.org/package/gir) ([see examples](https://github.com/piotras/node-gir/tree/master/tests/midgard)). You can read more about async operations [in the documentation](http://midgard-project.org/midgard2/#asynchronous).

## Why a content repository?

From [the release notes](http://lists.midgard-project.org/pipermail/dev/2012-September/003202.html):

> Midgard2 is a library which provides content storage and retrieval
services to applications. It is essentially a higher-level access
layer to relational databases and file systems.

> Parallels can be drawn between Midgard2 and various Object Relational
Mapping (ORM) libraries. The content repository concept however takes
these ideas much further, with concepts like:

> * Object-oriented data and query access
* Tree structure for content
* Standardized metadata available to all content
* Workspaces for managing branching and merging of content
* Content type definitions with introspection capabilities
* File attachments for content objects
* Signals about I/O operations
* Users and access control

## On desktop and mobile

Midgard2 is available through [GObject Introspection](http://developer.gnome.org/gi/stable/gi-overview.html), making it accessible from a wide range of programming languages, from Python and JavaScript to C and C#.

Simply install the [Midgard2 library](http://midgard-project.org/midgard2/#download) and the [GObject Introspection binding](https://live.gnome.org/GObjectIntrospection/Users) for the language you want to work with.

## With PHP

There are two ways to use the Midgard2 content repository with PHP:

* Using the [Midgard2 PHP extension](http://midgard-project.org/midgard2/#midgard2-php5) directly
* Via the standard [PHPCR](http://midgard-project.org/phpcr/) interfaces

For those looking for a CMS running on Midgard2, both [MidCOM](http://midgard-project.org/midcom/) and [Symfony CMF](http://cmf.symfony.com/) work with it out-of-the-box.

## Getting Midgard2

It will take some time before the new release trickles down to distributions like [Debian](http://packages.debian.org/search?keywords=midgard&searchon=names&suite=testing&section=all) and [Ubuntu](http://packages.ubuntu.com/search?keywords=midgard&searchon=names&suite=precise&section=all). In the meanwhile, [source tarballs](https://github.com/midgardproject/midgard-core/downloads) are available.

If you have any issues getting started, feel free to contact us on the [mailing list](http://lists.midgard-project.org/mailman/listinfo/dev) or [on IRC](irc://irc.freenode.net/midgard).

*[Gjallarhorn](http://en.wikipedia.org/wiki/Gjallarhorn) of the Viking mythology is the horn that sounds marking Ragnaroek. With our release it signifies the callback pattern of asynchronous I/O, and the time for Midgard1 users to migrate over. The picture is public domain from [Wikimedia Commons](http://commons.wikimedia.org/wiki/File:403px-Heimdallr_by_Froelich.jpg).*
