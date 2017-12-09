---
title: "Kinect Air Cursor: Let your hand be the mouse"
layout: post
location: Berlin, Germany
categories:
  - desktop
  - kde
  - mobility
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/qt_air_cursor_demo.png'
---
If [today's Google I/O keynote](http://arstechnica.com/gadgets/2012/06/googlers-skydive-wearing-google-glasses-broadcast-jump-live-to-google/) where they parachuted to the conference center from a Zeppelin while streaming the whole experience on a Hangout via Project Glass wasn't enough future for you, here is another thing.

As part of the [SmarcoS project](http://smarcos-project.eu/), [we've](http://nemein.com/) been working on making the [Kinect](http://en.wikipedia.org/wiki/Kinect) work as an input device for Qt applications. Basically you move your hand in the air, and are able to grab and drop things on the screen.

We call this the _Air Cursor_. Here is a quick video of [manipulating a simple HTML5 application](http://youtu.be/dxkpSzl-SLg) with it:

<iframe width="560" height="315" src="https://www.youtube.com/embed/dxkpSzl-SLg" frameborder="0" allowfullscreen></iframe>

Now, this may not be the way you want to control the computer you're working with the whole day. Instead, we see this sort of interface as very useful for large displays in meeting rooms and public spaces.

Instead of a touchscreen that easily gets messy and requires people to stand in front of it, with the air cursor you can use a regular TV or projector, and use your hands to manipulate the information on it. The gestures we use are natural enough that everybody we've had trying the tool has figured them out in matter of seconds.

Our [Qt Air Cursor](https://github.com/nemein/Qt_AirCursor) is free software under the LGPL license, and is built on top of the [OpenNI](http://www.openni.org/) library, with [OpenCV](http://opencv.willowgarage.com/wiki/) used for recognizing the grab gestures.

I believe this is a great start for using natural interaction to control information software or multimedia applications. Simple gestures like grab-and-drop and swipes work, but there is still a lot of UX territory left to explore.

If you have ideas where this sort of new input techniques could be used, feel free to [get in touch](http://nemein.com/en/company/). Or simply to integrate the Qt Air Cursor library into your applications.

_The Qt Air Cursor was demoed for the first time in this year's [Qt Contributor Summit](http://qt-project.org/groups/qt-contributors-summit-2012/wiki) in Berlin. Our simple "Grab to the Future" example game gathered quite a large audience, with the high score ending up at a respectable 18. You know you're doing something right when the event catering staff also wants to try your input device demo._
