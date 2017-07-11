---
title: 'Flowhub IoT workshop at Bitraf: sensors, access control, and more'
location: Berlin, Germany
categories:
  - fbp
  - desktop
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-button.jpg'
---
I just got back to Berlin from the [Bitraf IoT hackathon](https://www.meetup.com/bitraf/events/240605453/) we organized in Oslo, Norway. This hackathon was the first of [two IoT workshops](/blog/msgflo-workshops-cbase-bitraf/) around MsgFlo and [Flowhub IoT](https://flowhub.io/iot/). The second [will be held](ttps://logbuch.c-base.org/archives/2647) at c-base in Berlin this coming weekend.

## Bitraf and the existing IoT setup

[Bitraf](https://bitraf.no/) is a large non-profit [makerspace](https://www.makerspaces.com/what-is-a-makerspace/) in the center of Oslo. It provides co-working facilities, as well as labs and a large selection of computer controlled tools for building things. Members have 24/7 access to the space, and are provided with everything needed for CNC milling, laser cutting, 3D-printing and more.

The space uses the [Flowhub IoT](https://flowhub.io/iot/) stack of [MsgFlo](https://msgflo.org/) and [Mosquitto](https://mosquitto.org/) for business-critical things like the door locks that members can open with their smartphone.

[![Bitraf lock system](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-button-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-button.jpg)

In addition to access control, they also had various environmental sensors available on the MQTT network.

With the workshop, our aim was to utilize these existing things more, as well as to add new IoT capabilities. And of course to increase the number of Bitraf members with the knowledge to work with the MsgFlo IoT setup.

## Preparations

Being a makerspace, Bitraf already had everything needed for the physical side of the workshop &mdash; tons of sensors, WiFi-enabled microcontrollers, tools for building cases and mounting solutions. So the workshop preparations mostly focused on the software side of things.

The primary tools for the workshop were:

* [Docker setup of Bitraf IoT](https://github.com/bitraf/bitraf-iot#running-with-docker), making running the whole IoT environment locally as easy as `docker-compose up`
* [msgflo-arduino](https://github.com/msgflo/msgflo-arduino), a library for making ESP8266 devices work as MsgFlo participants

To help visualize the data coming from the sensors people were building, I integrated the [NASA OpenMCT](https://nasa.github.io/openmct/) dashboard with MsgFlo and [InfluxDB](https://www.influxdata.com/) time series database. This setup is available at the [cbeam-telemetry-server](https://github.com/c-base/cbeam-telemetry-server) project.

[![OpenMCT at Bitraf](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-openmct-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-openmct.png)

This gave us a way to send data from any interesting sensors in the IoT network to a dashboard and visualize it. Down the line the persisted data can also be interesting for further analysis or machine learning.

## Kick-off session

We started the workshop with a quick intro session about Flowhub, MsgFlo, and MQTT development. There is unfortunately no video, but [the slides are available](https://docs.google.com/presentation/d/1Xo7RxPTOOcgJpVc4rl-xuzwxtStpDWwdun4fCYCcbV8/edit?usp=sharing):

<iframe src="https://docs.google.com/presentation/d/1Xo7RxPTOOcgJpVc4rl-xuzwxtStpDWwdun4fCYCcbV8/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

After the intro, we did a round of all attendees to see what skills people already had, and what they were interested in learning. Then we started collecting ideas what to work on.

[![Bitraf IoT ideas](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-idea-wall-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-idea-wall.jpg)

People picked their ideas, and the project work started.

[![Idea session at Bitraf IoT](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-idea-wall-session-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-idea-wall-session.jpg)

I'd like to highlight couple of the projects.

## New sensors for the makerspace

[![Teams at work](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-workshop-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-workshop.jpg)

Building new sensors was a major part of the workshop. There were several projects, all built on top of [msgflo-arduino](https://github.com/msgflo/msgflo-arduino) and the ESP8266 microcontroller:

* Motion sensor for tracking whether there are people in the laser cutting lab
* Sensor for tracking which windows are open or closed: <https://github.com/Poohma/IOT_Window_Hall_sensors>
* Sensor for tracking whether a given machine is currently running or not: <https://github.com/slunke/onoffsensor>

[![Working on a motion sensor](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-sensors-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-sensors.jpg)

There was also a project to automatically open and close windows, but this one didn't get completed over the weekend. You can follow the progress in the [altF4 GitHub repo](https://github.com/apetrynet/altF4).

## Tool locking

All hackerspaces have the problem that people borrow tools and then don't return them when finished. This means that the next person needing the tool will have to spend time searching for it.

To solve this, the team designed a system that enabled tools to be locked to a wall, with a web interface where members can "check out" a tool they want to use. This way the system constantly knows what tools are in their right places, and which tools are in use, and by who.

You can see the tool lock system in action in [this demo video](https://youtu.be/3u51ZDOo7UQ):

<iframe width="853" height="480" src="https://www.youtube.com/embed/3u51ZDOo7UQ" frameborder="0" allowfullscreen></iframe>

Source code and schematics: <https://github.com/einsmein/bitraf-thelock>.

## After the hackathon

Before my flight out, we sat down with [Jon](http://www.jonnor.com/) to review how things went. In general, I think it is clear the event was a success &mdash; people got to learn and try new things, and all projects except one were completed during the two days.

Our unofficial goal was to double the number of nodes in the Bitraf Flowhub graph, and I think we succeeded in this:

[![Bitraf as a graph](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-flowhub-network-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bitraf-flowhub-network.png)

Here are [couple of comments](https://www.meetup.com/bitraf/events/240605453/#event-comments-section) from the attendees:

> Really fun and informative. The development pipeline also seems complete. Made it a lot easier for beginner to get started.

> this was a very fantastic hackathon! Lots of interesting things to learn, very enthusiastic participants, great stewardship and we actually got quite a few projects finished. Well done everbody.

In general the development tools we provided worked well. Everybody was able to run the full Flowhub IoT environment on their own machines using the [Docker setup we provided](https://github.com/bitraf/bitraf-iot#running-with-docker). And apart from a couple of corner cases, [msgflo-arduino](https://github.com/msgflo/msgflo-arduino) was easy to get going on the NodeMCUs.

With these two, everybody could easily wire up some sensors and see their data in both Flowhub and the OpenMCT dashboard. From the local setup going to production was just a matter of switching the MQTT broker configuration.

---

*If you'd like to have a similar IoT workshop at your company, we're happy to organize one. [Get in touch](https://flowhub.io/about/)!*
