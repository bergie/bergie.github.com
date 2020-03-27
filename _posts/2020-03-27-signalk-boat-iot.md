---
title: Cruising sailboat electronics setup with Signal K
location: Berlin, Germany
layout: post
categories:
  - sailing
cover: "https://d2vqpl3tx84ay5.cloudfront.net/curiosity-voronoi.jpg"
---
I haven't mentioned this on the blog earlier, but in the end of 2018 we bought a small cruising sailboat. After some looking, we went with a [Van de Stadt](http://www.stadtdesign.com/) designed [Oceaan 25](https://sailboatdata.com/sailboat/oceaan-25), a Dutch pocket cruiser from the early 1980s. S/Y Curiosity is an affordable and comfortable boat for cruising with 2-4 people, but also needed major maintenance work.

![Curiosity sailing on Havel with Royal Louise](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-sailing-royal-louise.jpg)

The refit has so far included osmosis repair, some fixes to the standing rigging, engine maintenance, and many structural improvements. But this post will focus on the electronics and navigation aspects of the project.

## 12V power

When we got it, the boat's electrics setup was quite barebones. There was a small lead-acid battery, charged only when running the outboard. Light control was pretty much all-or-nothing, either we were running inside and navigation lights, or not. Everything was wired with 80s spec components, using energy-inefficient lightbulbs.

Looking at the state of the setup, it was also unclear when the electrics had been used for anything else than starting the engine last time.

Before going further with the electronics setup, all of this would have to be rebuilt. We made a plan, and scheduled two weekends in summer 2019 for rewiring and upgrading the electricity setup of the boat.

First step was to test all existing wiring with a multimeter, and label and document all of it. Surprisingly, there were only couple of bad connections from the main distribution panel to consumers, so for most part we decided to reuse that wiring, but just with a modern terminal block setup.

![All wires labeled and being reconnected](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-rewiring-terminal.jpg)

For most part we used a dymo label printer, with the labels covered with a transparent heat shrink.

We replaced the old main control panel with a modern one with the capability to power different parts of the boat separately, and added some 12V and USB sockets next to it.

![New battery charger and voltmeter](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-battery-charger.jpg)

All internal lighting was replaced with energy-efficient LEDs, and we added the option of using red lights all through the cabin for preserving night vision. A car charger was added to the system for easier battery charging while in harbour.

### Next steps for power

With this, we had a workable lighting and power setup for overnight sailing. But next obvious step will be to increase the range of our boat.

For that, we're adding a solar panel. We already have most parts for the setup, but are still waiting for the customized [NOA mounting hardware](http://www.noa.se/en/) to arrive. And of course the current [COVID-19 curfews](https://allaboutberlin.com/guides/coronavirus) need to lift before we can install it.

Until we have actual data from our [Victron MPPT](https://www.victronenergy.com/solar-charge-controllers/smartsolar-mppt-75-10-75-15-100-15-100-20) charge controller, I've run some simulations using NASA's insolation data for Berlin on how much the panel ought to increase our cruising range.

![Range estimates for Curiosity solar setup](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-100w-solar-estimate.png)

## Navigation system

The basis for boat navigation is still the combination of a clock, a compass, and a paper chart (as well as a sextant on the open ocean). However, most modern cruising boats utilize some electrical tools to aid the process of running the boat. These typically come in form a chartplotter and a set of sensors to get things like GPS position, speed, and the water depth.

Commercial marine navigation equipment is a bit like computer networking in the 90s - everything is expensive, and you pretty much have to buy the whole kit from a single vendor to make it work. Standards like [NMEA 0183](https://en.wikipedia.org/wiki/NMEA_0183) exist, but "embrace and extend" is typical vendor behaviour.

### Signal K

Being open source [hackerspace](https://c-base.org/) people, that was obviously not the way we wanted to do things. Instead of getting locked into an expensive proprietary single-vendor marine instrumentation setup, we decided to roll our own using off-the-shelf IoT components. To serve as the heart of the system, we picked [Signal K](http://signalk.org/).

Signal K is first of all [a specification](https://signalk.org/specification/1.4.0/doc/) on how marine instruments can exchange data. It also has an open source implementation in Node.js. This allows piping in data from all of the relevant marine data buses, as well as setting up custom data providers. Signal K then harmonizes the data, and makes it available both via modern web APIs, and in traditional NMEA formats. This enables instruments like chartplotters also to utilize the Signal K enriched data.

We're running Signal K on a Raspberry Pi 3B+ powered by the boat battery. With a GPS dongle, this was already enough to give some basic navigation capabilities like charts and anchor watch. We also added a WiFi hotspot with a LTE uplink to the boat.

![Tracking some basic sailing exercises via Signal K](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-doughnuts-signalk.png)

To make the system robust, installation is automated via Ansible, and easy to reproduce. [Our boat GitHub repo](https://github.com/meri-imperiumi/curiosity) also has the needed functionality to run a clone of our boat's setup on our laptops via Docker, which is great when developing new features.

Signal K has a very [active developer community](http://slack-invite.signalk.org/), which has been great for figuring out how the extend the capabilities of our system.

### Chartplotter

We're using regular tablets for navigation. The main chartplotter is a cheap old waterproof [Samsung Galaxy Tab Active 8.0](https://www.samsung.com/us/business/support/owners/product/galaxy-tab-active-8-0-wi-fi/) tablet that can show both the [Freeboard](https://github.com/SignalK/freeboard-sk) web-based chartplotter with [OpenSeaMap charts](https://map.openseamap.org/), and run the [Navionics Boating app](https://www.navionics.com/usa/apps/navionics-boating) to display commercial charts. Navionics is also able to receive some Signal K data over the boat WiFi to show things like [AIS targets](https://www.navionics.com/usa/features/ais), and to utilize the boat GPS.

![Samsung T360 with Curiosity logo](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-samsung-tablet.jpg)

As a backup we have our personal smartphones and tablets.

![Anchor watch with Freeboard and a tablet](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-freeboard-anchorwatch.jpg)

Inside the cabin we also have an [e-ink screen](https://www.waveshare.com/wiki/4.2inch_e-Paper_Module) showing the primary statistics relevant to the current boat state.

![e-ink dashboard showing boat statistics](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-waveshare-eink.jpg)

### Environmental sensing

Monitoring air pressure changes is important for dealing with the weather. For this, we added a cheap barometer-temperature-humidity sensor module wired to the Raspberry Pi, driven with the [Signal K BME280 plugin](https://github.com/jncarter123/signalk-raspberry-pi-bme280). With this we were able to get all of this information from our cabin into Signal K.

However, there was more environmental information we wanted to get. For instance, the outdoor temperature, the humidity in our foul weather gear locker, and the temperature of our icebox. For these we found the [Ruuvi tags](https://ruuvi.com/) produced by a Finnish startup. These are small weatherproofed Bluetooth environmental sensors that can run for years with a coin cell battery.

![Ruuvi tags for Curiosity with handy pouches](https://d2vqpl3tx84ay5.cloudfront.net/500x/curiosity-ruuvi-tag.png)

With Ruuvi tags and the [Signal K Ruuvi tag plugin](https://github.com/vokkim/signalk-ruuvitag-plugin#readme) we were able to bring a rich set of environmental data from all around the boat into our dashboards.

### Anchor watch

Like every cruising boat, we spend quite a lot of nights at anchor. One important safety measure with a shorthanded crew is to run an automated anchor watch. This monitors the boat's distance to the anchor, and raises an alarm if we start dragging.

For this one, we're using the Signal K [anchor alarm plugin](https://github.com/sbender9/signalk-anchoralarm-plugin). We added a [Bluetooth speaker](https://www.jbl.com/bluetooth-speakers/JBL+GO+2.html) to get these alarms in an audible way.

To make starting and stopping the anchor watch easier, I utilized a simple Bluetooth remote camera shutter button together with [some scripts](https://github.com/meri-imperiumi/signalk-bluetooth-anchor-button). This way the person dropping the anchor can also start the anchor watch immediately from the bow.

![Camera shutter button for starting anchor watch](https://d2vqpl3tx84ay5.cloudfront.net/500x/curiosity-anchor-button.png)

### AIS

[Automatic Identification System](https://en.wikipedia.org/wiki/Automatic_identification_system) is a radio protocol used by most bigger vessels to tell others about their course and position. It can be used for collision avoidance. Having an active transponder on a small boat like Curiosity is a bit expensive, but we decided we'd at least want to see commercial traffic in our chartplotter in order to navigate safely.

For this we bought an [RTL-SDR USB stick](https://www.rtl-sdr.com/) that can tune into the AIS frequency, and with the [rtl_ais software](https://github.com/dgiardini/rtl-ais), receive and forward all AIS data into Signal K.

![Tracking AIS targets in Freeboard](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-ais-targets.png)

This setup is still quite new, so we haven't been able to test it live yet. But it should allow us to see all nearby bigger ships in our chartplotter in realtime, assuming that we have a [good-enough antenna](http://muck-solutions.com/?p=1324).

### Putting it all together

All together this is quite a lot of hardware. To house all of it, we built a custom backing plate with 3D-printed brackets to hold the various components. The whole setup is called _Voronoi-1 onboard computer_. This is a setup that should be easy to duplicate on any small sailing vessel.

![The Voronoi-1 onboard computer](https://d2vqpl3tx84ay5.cloudfront.net/800x/curiosity-voronoi.jpg)

The total cost so far for the full boat navigation setup has been around 600€, which is less than just a commerical chartplotter would cost. And the system we have is both easy to extend, and to fix even on the go. And we get a set of capabilities that would normally require a whole suite of proprietary parts to put together.

### Next steps for navigation setup

We of course have plenty of ideas on what to do next to improve the navigation setup. Here are some projects we'll likely tackle over the coming year:

* Adding a timeseries database and some [data visualization](https://bergie.iki.fi/blog/nasa-openmct-iot-dashboard/)
* 9 degrees of freedom sensor to track the compass course, as well as boat heel
* Instrumenting our outboard motor to get RPMs into Signal K and track the engine running time
* Wind sensor, either [open source](https://open-boat-projects.org/de/diy-windsensor/) or [commercial](https://calypsoinstruments.com/shop/product/ultrasonic-portable-7)

If you have ideas for suitable components or projects, please [get in touch](mailto:henri.bergius@iki.fi)!

## Source code

* <https://github.com/meri-imperiumi/curiosity> contains the Ansible Signal K setup for Curiosity, as well as the CNC and 3D printing designs we're using  on the boat
* <https://github.com/meri-imperiumi/dashboard> is the Python script we're using to drive the e-ink dashboard in our cabin
* <https://github.com/meri-imperiumi/signalk-autostate> is a Signal K plugin for determining the boat state from sensor data
* <https://github.com/meri-imperiumi/signalk-bluetooth-anchor-button> contains the udev scripts for setting anchor watch from the Bluetooth remote camera shutter button
* <https://github.com/meri-imperiumi/signalk-aws-iot> is a Signal K plugin for transmitting our boat state to Amazon Web Services

Huge thanks to both the [Signal K](http://signalk.org/) and [Hackerfleet](https://hackerfleet.github.io/) communities and the Curiosity crew for making all this happen.

Now we just wait for the curfews to lift so that we can get back to sailing!

![Curiosity Crew Badge](https://d2vqpl3tx84ay5.cloudfront.net/500x/curiosity-crew-badge.png)
