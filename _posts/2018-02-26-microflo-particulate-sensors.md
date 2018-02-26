---
title: "MicroFlo and IoT: measuring air quality"
location: Berlin, Germany
categories:
  - fbp
  - politics
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/luftdaten-sensor-berlin.png'
---
Fine particulate matter is a serious issue in many cities around the world. In Europe, it is [estimated to cause](https://ec.europa.eu/jrc/en/news/air-quality-atlas-europe-mapping-sources-fine-particulate-matter) 400.000 premature deaths per year. European Union has published standards on the matter, and warned several countries that haven't been able to reach the safe limits.

> Germany saw the highest number of deaths attributable to all air pollution sources, at 80,767. It was followed by the United Kingdom (64,351) and France (63,798). These are also the most populated countries in Europe. (source: [DW](http://www.dw.com/en/air-pollution-kills-half-a-million-people-in-europe-eu-agency-reports/a-40920041))

The associated health issues don't come cheap: 20 billion euros per year on health costs alone.

> "To reduce this figure we need member states to comply with the emissions limits which they have agreed to," Schinas said. "If this is not the case the Commission as guardian of the (founding EU) treaty will have to take appropriate action," he added. (source: [phys.org](https://phys.org/news/2018-01-eu-summons-france-germany-uk.html))

One part of solving this issue is better data. Government-run measurement stations are quite sparse, and &mdash; in some countries &mdash; their published results can be unreliable. To solve this, [Open Knowledge Foundation Germany](https://okfn.de/en/) started the [luftdaten.info](https://luftdaten.info/) project to crowdsource air pollution data around the world.

<iframe src="https://player.vimeo.com/video/257288126" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

Last saturday we hosted a luftdaten.info workshop at [c-base](https://c-base.org/), and used the opportunity to build and deploy some particulate matter sensors. While [luftdaten.info has a great build guide](https://luftdaten.info/en/construction-manual/) and we used their parts list, we decided to go with a [custom firmware](https://github.com/c-base/microflo-luftdaten) built with MicroFlo and integrated with the existing IoT network at c-base.

![Building an air quality sensor](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-workshop2.jpg)

## MicroFlo on ESP8266

[MicroFlo](http://microflo.org/) is a flow-based programming runtime targeting microcontrollers. Just like NoFlo graphs run inside a browser or Node.js, the MicroFlo graphs run on an Arduino or other compatible device. The result of a MicroFlo build is a firmware that can be flashed on a microcontroller, and which can be live-programmed using tools like [Flowhub](https://flowhub.io/iot/).

ESP8266 is an Arduino-compatible microcontroller with integrated WiFi chip. This means any sensors or actuators on the device can easily connect to other systems, like we do with [lots of different sensors](https://github.com/c-base/c-flo/tree/master/devices) already at c-base.

![ESP8266 sensor in preparation](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-esp8266.jpg)

MicroFlo [recently added](https://github.com/microflo/microflo/blob/master/CHANGES.md#microflo-063) a feature where Wifi-enabled MicroFlo devices can automatically connect with a MQTT message queue and expose their in/outports as queues there. This makes MicroFlo on an ESP8266 a fully-qualified [MsgFlo participant](https://msgflo.org/).

## Building the firmware

We wanted to build a firmware that would periodically read both the DHT22 temperature and humidity sensor, and the SDS011 fine particulate sensor, even out the readings with a running median, and then send the values out at a specified interval. MicroFlo's [core library](https://github.com/microflo/microflo-core) already provided most of the building blocks, but we had to write [custom components](https://github.com/c-base/microflo-luftdaten/tree/master/components) for dealing with the sensor hardware.

Thankfully Arduino libraries existed for both sensors, and this was just a matter of wrapping those to the MicroFlo component interface.

After the components were done, we could build the firmware [as a Flowhub graph](http://app.flowhub.io/#github/c-base/microflo-luftdaten):

[![MicroFlo luftdaten graph](https://d2vqpl3tx84ay5.cloudfront.net/800x/microflo-luftdaten-graph.png)](http://app.flowhub.io/#github/c-base/microflo-luftdaten)

To verify the build we enabled [Travis CI](https://travis-ci.org/) where we build the firmware both against the MicroFlo Arduino and Linux targets. The Arduino one is there to verify that the build works with all the required libraries, and the Linux build we can use for test automation with [fbp-spec](https://github.com/flowbased/fbp-spec).

To flash the actual devices you need the [Arduino IDE](https://www.arduino.cc/en/Main/Software) and Node.js. Then use MicroFlo to generate the `.ino` file, and flash that to the device with the IDE. WiFi and MQTT settings can be tweaked in the [secrets.h](https://github.com/c-base/microflo-luftdaten/blob/master/secrets.example.h) and [config.h](https://github.com/c-base/microflo-luftdaten/blob/master/config.h) files.
## Sensor deployment

The recommended weatherproofing solution for these sensors is quite straightforward: place the hardware in a piece of drainage pipe with the ends turned downwards.

Since we had two sensors, we decided to install one in the patio, and the other in the c-base main hall:

![Particulate matter sensor in c-base main hall](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-mainhall.jpg)

## Working with the sensor data

Once the sensor devices had been flashed, they became available in [our MsgFlo setup](https://github.com/c-base/c-flo) and could be connected with other systems:

![Particulate matter sensor in c-base main hall](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-msgflo.png)

In our case, we wanted to do two things with the data:

* Log it in the c-base telemetry system to be [visualized with NASA OpenMCT](/blog/nasa-openmct-iot-dashboard/)
* Submit the data from the outdoor sensor to the [luftdaten.info database](https://luftdaten.info/)

The first one was just a matter of adding [couple of configuration lines](https://github.com/c-base/cbeam-telemetry-server/pull/61) to our OpenMCT server. For the latter, I built a [simple Python component](https://github.com/c-base/c-flo/blob/master/components/SendToLuftDaten.py).

Our sensors have been tracking for a couple of days now. The public data can be seen in [the madavi service](https://www.madavi.de/sensor/graph.php?sensor=msgflo-00000042-sds011):

![Readings from the c-base outdoor sensor](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-madavi.png)

We've [submitted our sensor](http://luftdaten.info/feinstaubsensor-bauen/#feinstaubsensor-konfiguration) for inclusion in the luftdaten.info database, and hopefully soon there will be another covered area in the [Berlin air quality map](http://berlin.maps.luftdaten.info/#13/52.5150/13.4211):


![luftdaten.info Berlin map](https://d2vqpl3tx84ay5.cloudfront.net/800x/luftdaten-sensor-berlin.png)

If you'd like to build your own air quality sensor, the [instructions on luftdaten.info](https://luftdaten.info/en/construction-manual/) are pretty comperehensive. Get the parts from your local electronics store or AliExpress, connect them together, flash the firmware, and be part of the public effort to track and improve air quality!

Our [MicroFlo firmware](https://github.com/c-base/microflo-luftdaten) is a great alternative if you want to do further analysis of the data yourself, or simply want to get the data on MQTT.
