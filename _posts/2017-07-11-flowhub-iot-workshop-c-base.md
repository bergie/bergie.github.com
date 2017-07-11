---
title: 'Flowhub IoT hack weekend at c-base: buttons, sensors, the Big Switch'
location: Berlin, Germany
categories:
  - fbp
  - desktop
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-tablet.jpg'
---
Last weekend we held the [c-base IoT hack weekend](https://logbuch.c-base.org/archives/2647), focused on the [Flowhub IoT](https://flowhub.io/iot/) platform. This was continuation from the [workshop we organized at the Bitraf makerspace](/blog/flowhub-iot-workshop-bitraf/) a week earlier. Same tools and technologies, but slightly different focus areas.

[c-base](https://c-base.org/) is one of the world's oldest hackerspaces and a crashed space station under Berlin. It is also one of the earliest users of [MsgFlo](https://msgflo.org/) with quite a lot of devices connected via MQTT.

[![Hack weekend debriefing](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-after-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-after.jpg)

## Hack weekend

Just like [at Bitraf](/blog/flowhub-iot-workshop-bitraf/), the workshop aimed to add new IoT capabilities to c-base, as well as to increase the number of members who know how to make the station's setup do new things. For this, we used three primary tools:

* [msgflo-arduino](https://github.com/msgflo/msgflo-arduino) and ESP8266 microcontrollers for connected devices
* Raspberry Pis and [Ansible](https://www.ansible.com/) for info screens
* [Flowhub IDE](https://flowhub.io/) and [msgflo-python](https://github.com/msgflo/msgflo-python) for "business logic"

[![Internet of Things](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-neuland-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-neuland.jpg)

The workshop started in Friday evening after a lecture on [nuclear pulse propulsion](https://en.wikipedia.org/wiki/Nuclear_pulse_propulsion) ended in the main hall. We continued all the way to late Sunday evening with some sleep breaks in between. There is something about c-base that makes you want to work there at night.

[![Testing a humidity sensor](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-volume-test-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-volume-test.jpg)

By Sunday evening, we had built and deployed 15 connected IoT devices, with five additional ones pretty far in development. You can find the source code in the [c-flo repository](https://github.com/c-base/c-flo/tree/master/devices).

[![Idea wall](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-ideas-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-ideas.jpg)

## Sensor boxes

Quite a lot of c-base was already instrumented when we started the workshop. We had details on electricity consumption, internet traffic, and more. But one thing we didn't have was information on the physical environment at the station. To solve this, we decided to build a set of sensor boxes that we could deploy in different areas of the hackerspace.

[![Building sensors](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-sensors-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-sensors.jpg)

The capabilities shared by all the sensor boxes we deployed were:

* Temperature
* Humidity
* Motion (via passive infrared)

For some areas of interest we provided some additional sensors:

* Sound level (for the workshop)
* Light level (for c-lab)
* Carbon dioxide
* Door open/closed
* Gravity

[![Workshop sensor on a breadboard](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-workshopsensor-parts-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-workshopsensor-parts.jpg)

We found a set of nice little electrical boxes that provided a convenient housing for these sensor boxes. This way we were able to mount them in proper places quickly. This should also protect them from dust and other elements to some degree.

[![Installed weltenbaulab sensor](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-weltenbausensor-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-weltenbausensor.jpg)

## The Big Switch

The lights of the c-base main hall are controllable via MsgFlo, and we have a system called [farbgeber](https://github.com/c-base/farbgeber) to produce pleasing color schemes for any given time.

However, when there are events we need to enable manual control of all lights and sound. To make this "MsgFlo vs. IP lounge" control question  clearer, we built a Big Switch to decide which controls the lights:

[![Big Switch in action](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-bigswitch-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-bigswitch.jpg)

The switch is an old electric mains switch from an office building. It makes a satisfying sound when you turn it, and is big enough that you can see which way the setting is from across the room.

To complement the Big Switch we also added a "c-boom" button to trigger the disco mode in the main hall:

[![c-boom button](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-c-boom-button-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-c-boom-button.jpg)

## Info screens

One part of the IoT setup was to make statistics and announcements about c-base visible in different areas of the station. We did this by rolling out a set of displays with Raspberry Pi 3s connected to the MsgFlo MQTT environment.

[![Info screens ready for installing](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-infoscreen-install-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-infoscreen-install.jpg)

The announcements shown on the screens range from mission critical information like station power consumption or whether the bar is open, to more fictional ones like the [NoFlo-powered space station announcements](https://github.com/c-base/station-announcer).

[![Air lock](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-c-leuse-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-c-leuse.jpg)

We also built an Android version of the info display software, which enabled deploying screens using some old donated tablets.

[![Info screen tablet](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-tablet-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-tablet.jpg)

## Conclusions

This was another successful workshop. Participants got to do new things, and we got lots of new IoT infrastructure installed around c-base. The Flowhub graph is definitely starting to look populated:

[![c-base is a graph](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-graph-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-graph.png)

We also deployed [NASA OpenMCT](https://nasa.github.io/openmct/) so that we get a nice overview on the station status. Our telemetry server provides MsgFlo participants that receive data via MQTT, store it in InfluxDB, and then visualize it on the dashboard:

[![OpenMCT view on c-base](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-openmct-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/c-base-iot-openmct.png)

All the c-base IoT software is available [on Github](https://github.com/c-base):

* [c-flo](https://github.com/c-base/c-flo) &mdash; the MsgFlo setup for c-base
* [cbeam-telemetry-server](https://github.com/c-base/cbeam-telemetry-server) &mdash; the OpenMCT setup for c-base
* [mqttwebview](https://github.com/c-base/mqttwebview) &mdash; Linux info screen implementation
* [c-beam-viewer](https://github.com/c-base/c-beam-viewer) &mdash; Android info screen implementation

---

*If you'd like to have a similar IoT workshop at your company, we're happy to organize one. [Get in touch](https://flowhub.io/about/)!*
