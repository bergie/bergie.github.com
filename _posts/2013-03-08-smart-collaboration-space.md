---
title: Building a smarter workplace
location: Berlin, Germany
layout: post
categories:
  - mobility
  - business
  - desktop
  - kde
  - geo
  - openpsa
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/opd-small.png'
---
As part of the [SmarcoS](http://smarcos-project.eu) project, [we](http://nemein.com) have been investigating how to make workplaces smarter through sensors and [context awareness](http://worrydream.com/MagicInk/). Here is [a video showing what we've built](http://youtu.be/P5cdlLTqb24):

<iframe width="640" height="480" src="http://www.youtube.com/embed/P5cdlLTqb24" frameborder="0" allowfullscreen></iframe>

The idea here is to facilitate collaboration and smoother project communications through various different tools that I'll describe below. While this already does a lot, it is obviously only the first step on the path to making offices smarter.

## Office presence

An important part of collaboration is to know who is where. Maybe some people are having a lunch break, or are working remotely? The Office Presence Display system knows these things, thanks to various sensors:

* Bluetooth sensors can see smartphones and other mobile devices in the space
* WiFi sensor can see what computers are connected
* Google Talk sensor knows who are connected and active on their work accounts

With these, we know pretty well when you arrive to the office, and when you leave. Thanks to the sensor watching the company instant messaging system, we also know when people working remotely are available.

![Office Presence Display](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/opd-small.png)

In addition to letting people know where the other members of the team are, this system can help with the perpetual annoyance in many companies: *having to fill timesheets*. We have a logger process that listens to the sensors, and logs the data into a [CouchDB](http://bergie.iki.fi/blog/business_analytics_with_couchdb_and_noflo/) database. From there you can easily visualize working hours and availability trends:

![Office presence stats](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/opd-stats-small.png)

In many situations it is of course not enough to know whether people are present, but also to know what they're working on. The next component of the system helps with that.

## Electronic Kanban wall

Instead of the clumsy waterfall style, more and more companies are managing their projects in tight, recurring iterations. A Kanban wall is a great way to keep track of tasks as they move through the process, and to see who is doing what, and what could be possible to do next. The [One day in Kanban Land](http://blog.crisp.se/2009/06/26/henrikkniberg/1246053060000) post explains the concept well.

If everybody working on a project sits in the same room, and that room is also where all decisions about the project are made, then the traditional solution of whiteboards and Post-It notes is probably the best way to visualize Kanban. But for distributed teams and more flexible work, an electronic version is a lot better option. This way everybody can see the Kanban wall in its current state from their computer, a TV in an office room, or a tablet.

![Webkanban](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/webkanban.png)

Our Kanban wall implementation provides exactly that. The same wall (or, in case of multiple projects or teams, a set of walls) is available through any web browser. You can also display it on a big screen in an office or a meeting room, and control that screen with the [Kinect Air Cursor](http://bergie.iki.fi/blog/qt-air-cursor/).

Now, for most companies this is not meant to be the *master database* of projects and tasks, but instead just to be an alternative view and controlling tool to wherever your project information resides. Maybe you're already using [Pivotal Tracker](http://www.pivotaltracker.com), [Basecamp](http://basecamp.com), or [OpenPSA](http://openpsa2.org)? The Kanban wall server has a full REST API available, and so it is easy to integrate with any existing system. If a task is moved on the Kanban wall, it can be updated to the project tracking system, and vice versa.

If you're using both systems, then the Kanban wall is also aware of the presence information. We show a differently colored border around the "person tokens" depending on the availability state. You can also set different Work-in-Progress limits for different people and states.

## Interested yet?

So far we've only trialed the system in our own office, but are now looking for some pilot customers to try the system out. If you're interested in making your workplace smarter, [get in touch](mailto:info@nemein.com).

For those who like to tinker with these things, all the sensor software is available as open source at <http://github.com/nemein>.
