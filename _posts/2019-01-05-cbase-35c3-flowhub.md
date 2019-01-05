---
title: Building c-base @ 35C3 with Flowhub
location: Berlin, Germany
cover: "http://d2vqpl3tx84ay5.cloudfront.net/c-base-assembly-35c3.JPG"
layout: 'post'
categories:
  - fbp
---
The [35th Chaos Communication Congress](https://events.ccc.de/congress/2018/wiki/index.php/Main_Page) is now over, and it is time to write about how we built the software side of the [c-base](https://c-base.org) assembly there.

## c-base at 35C3

The Chaos Communication Congress is a major fixture of the European security and free software scene, with thousands of attendees. As always, the "[mother of all hackerspaces](https://wiki.hackerspaces.org/c-base)" had a big presence there, with a custom booth that we spend nearly two weeks constructing.

![the c-base assembly at 35C3](http://d2vqpl3tx84ay5.cloudfront.net/800x/c-base-assembly-35c3.JPG)

This year's theme was "Refreshing Memories", and accordingly we brought various elements of the history of the c-base space station to the event. On hardware side we had things like a scale model the [c-base antenna](https://en.wikipedia.org/wiki/Fernsehturm_Berlin), as well as vintage arcade machines and various artifacts from over the years.

With software, we utilized [the existing IoT infrastructure at c-base](https://bergie.iki.fi/blog/flowhub-iot-workshop-c-base/) to control lights, sound, and drive videos and other information to a set of information displays. All of course powered by [Flowhub](https://flowhub.io/ide).

This was a quite full-stack development effort, involving microcontroller firmware programming, server-side NoFlo and MsgFlo development, and front-end infoscreen web design. We also did quite a bit of devopsing with Travis CI, Docker, and docker-compose.

### Local MsgFlo setup

The first step in bringing c-base's IoT setup was to prepare a "portable" version of the environment. An MQTT broker, MsgFlo, some components, and a graph with any on-premise c-base hardware or service dependencies removed. As this was for a CCC event, we decided to call it [c3-flo](https://github.com/c-base/c3-flo) (in comparison to the [c-flo](https://github.com/c-base/c-flo) that we run at c-base).

We already have a quite nice setup where our various systems get built and tested on Travis, and uploaded to [Docker Hub's cbase namespace](https://hub.docker.com/u/cbase). Some repositories weren't yet integrated, and so the first step was to Dockerize them.

To make the local setup simple to manage, we decided to go with a [single docker-compose environment](https://github.com/c-base/c3-flo/blob/master/docker-compose.yml) that would start all systems needed. This would be easy to run on any x86 machine, and provide us with a quite comprehensive set of features from the IoT parts to NASA's [Open MCT dashboard](https://bergie.iki.fi/blog/nasa-openmct-iot-dashboard/).

Of course we kept adding to the system throughout 35C3, but in the end the graph looked like the following: 

[![c-base at 35C3 as seen in Flowhub](http://d2vqpl3tx84ay5.cloudfront.net/800x/c3-flo-35c3.JPG)](http://d2vqpl3tx84ay5.cloudfront.net/c3-flo-35c3.JPG)

### WiFi setup

To make our setup more portable, we decided to bring a local instance of the "c-base botnet" WiFi used to Congress. This way all of our IoT devices could work at 35C3 with the exact same firmware and networking setup as they do at c-base.

Normally Congress doesn't recommend running your own access point. But if needed, there are guidelines available on how to do it properly if needed. As it happens, out of this year's 558 unofficial access points, the c-base one was the [only one conforming to the guidelines](https://media.ccc.de/v/35c3-9576-35c3_infrastructure_review) (commentary around the 25 minute mark).

![WiFi numbers from 35C3](http://d2vqpl3tx84ay5.cloudfront.net/800x/c-base-35c3-wifi.JPG)

### Info displays

Like any station, c-base has a [set of info screens](https://github.com/msgflo/msgflo-browser) showing various announcements, timelines, and statistics. These are built with Raspberry Pi 3s running Chrome in Kiosk Mode, with a single-page webapp that connects to our MsgFlo infrastructure over WebSockets with [msgflo-browser](https://github.com/msgflo/msgflo-browser).

Each screen has a customized rotation of different pages to show, and we can send URLs to announce events like members arriving to c-base or a space launch livestream via MQTT.

![c-base info screen showing an announcement](http://d2vqpl3tx84ay5.cloudfront.net/800x/c-base-infodisplay-35c3.JPG)

For 35C3 we built a new set of pages tailed for the Congress experience:

* Tweaked version of the normal c-base events view showing current and upcoming talks
* Video player to rotate various videos from the history of c-base
* Photo slideshow with a [nice set of pictures](https://www.flickr.com/photos/metavolution/albums/72157631227136604/) from c-base
* Countdown screen for some event (c-base crash, teardown of the assembly at the end of Congress)

## Crashing c-base

Highlight of the whole assembly was a re-enactment of the [c-base crash](https://en.wikipedia.org/wiki/C-base#Mythological_self-image_of_the_c-base) from billions of years ago. Triggered by a dropped bottle of space soda, this was an experience incorporating video, lights, and audio that we ran several times every day of the conference.

![Crash Alarm!](http://d2vqpl3tx84ay5.cloudfront.net/c-base-crash-35c3-small.GIF)

The c-base [crash animation](https://github.com/c-base/c3-flo/blob/master/animations/crash.yml) was managed by a [NoFlo](https://noflojs.org) graph integrated to the our MsgFlo setup with the standard [noflo-runtime-msgflo](https://github.com/noflo/noflo-runtime-msgflo) tool. With this we could trigger the "crash" with a MQTT message (sent by a physical button), and run a timed sequence of actions on lights, a sound system, and our info screens.

![Button for triggering the crash of c-base](http://d2vqpl3tx84ay5.cloudfront.net/800x/c-base-35c3-crash-button.JPG)

### Timeline manager

There were some new components that we had to build for this purpose. The most important was a [Timeline component](https://github.com/noflo/noflo-tween/blob/master/components/Timeline.js) that was upstreamed as part of the [noflo-tween animation library](https://github.com/noflo/noflo-tween).

![Timeline component from noflo-tween](http://d2vqpl3tx84ay5.cloudfront.net/500x/noflo-tween-timeline.JPG)

With this you can define a multi-tracked timeline as JSON or YAML, with actions triggered on each track on their appropriate second. With MsgFlo this meant we could send timed commands to different devices and create a coordinated experience.

For example, [our animation](https://github.com/c-base/c3-flo/blob/master/animations/crash.yml) started by showing a short video on all info screens. When the bottle fell in the video, we triggered the appropriate soundtrack, and switched the lights through various animation modes. After the video ended, we switched to a "countdown to crash" screen, and turned all lights to a red alert mode.

After the crash happened, everything went dark for a few seconds, before the c-base assembly was returned into its normal state.

### Controlling McLighting

All LED strips we used at 35C3 were run using the [McLighting firmware](https://github.com/toblum/McLighting). By default it allows switching between different light modes with a [simple WebSocket API](https://github.com/toblum/McLighting/wiki/WebSocket-API).

For our requirements, we wanted the capability to send new commands to the lights with minimal latency, and to be able to restore the lights to whatever mode they had before the crash started in the end.

![noflo-mclighting in action](http://d2vqpl3tx84ay5.cloudfront.net/500x/noflo-mclighting.JPG)

The component is available in [noflo-mclighting](https://github.com/noflo/noflo-mclighting). The only thing you need is running the NoFlo graph in the same network as the LED strips, and to send the WebSocket addresses of your LED strips to the component. After that you can control them with normal NoFlo packets.

## Finally

The whole setup took a couple of days to get right, especially regarding timings and tweaking the light modes. But, it was great! You can see [a video of it](https://vimeo.com/309632677) below:

<iframe src="https://player.vimeo.com/video/309632677" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

And if you're interested in experimenting this stuff, check out the "portable c-base IoT setup" at <https://github.com/c-base/c3-flo>.