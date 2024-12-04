---
title: Keeping a semi-automatic electronic ship's logbook
location: Berlin, Germany
layout: post
categories:
  - sailing
cover: "https://d2vqpl3tx84ay5.cloudfront.net/logbook-logbook.png"
---
Maintaining a proper [ship's logbook](https://en.wikipedia.org/wiki/Logbook_(nautical)) is something that most boats should do, for practical, as well as legal and traditional reasons. The logbook can serve as a record of proper maintenance and operation of the vessel, which is potentially useful when selling the boat or handling an insurance claim. It can be a fun record of journeys made to look back to. And it can be a crucial aid for getting home if the ship's electronics or GNSS get disrupted.

Like probably most operators of a small boat, [on *Lille Ø*](https://lille-oe.de) our logbook practices have been quite varying. We've been good at recording engine maintenance, as well as keeping the traditional navigation log while offshore. But in the more hectic pace of coastal cruising or daysailing this has often fallen on the wayside. And as such, a lot of the events and history of the boat is unavailable.

To redeem this I've developed [signalk-logbook](https://www.npmjs.com/package/@meri-imperiumi/signalk-logbook), a semi-automatic electronic logbook for vessels running the [Signal K](https://signalk.org) marine data server.

This allows logbook entries to be produced both manually and automatically. The can be viewed and edited using any web-capable device on board, meaning that you can write a log entry on your phone, and maybe later analyse and print them on your laptop.

## Why Signal K

Signal K is a marine data server that has integrations with almost any relevant marine electronics system. If you have an older NMEA0183 or Seatalk system, Signal K can communicate with it. Same with NMEA2000. If you already have your navigational data on the boat WiFi, Signal K can use and enrich it.

This means that by making the logbook a Signal K plugin, I didn't have to do any work to make it work with existing boat systems. Signal K even provides a user interface framework.

This means that to make the electronic logbook happen, I only had to produce [some plugin JavaScript](https://github.com/meri-imperiumi/signalk-logbook/tree/main/plugin), and then build a user interface. As I don't do front-end development that frequently, this gave me a chance to dive into modern [React with hooks](https://reactjs.org/docs/hooks-intro.html) for the first time. What better to do after being laid off?

Signal K also has very good integration with [Influx](https://www.influxdata.com/) and [Grafana](https://grafana.com). These can record vessel telemetry in a high resolution. So why bother with a logbook on the side? In my view, a separate logbook is still valuable for storing the comments and observations not available in a marine sensor network. It can also be a lot more durable and archivable than a time series database. On [*Lille Ø*](https://lille-oe.de) we run both.

## User interface

The signalk-logbook comes with a reasonably simple web-based user interface that is integrated in the Signal K administration UI. You can find it in `Web apps` &#8594; `Logbook`.

The primary view is a timeline. Sort of "Twitter for your boat" kind of view that allows quick browsing of entries on both desktop and mobile.

![Logbook timeline view](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-timeline.png)

There is also the more traditional tabular view, best utilized on bigger screens:

![Logbook timeline view](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-logbook.png)

While the system can produce a lot of the entries automatically, it is also easy to create manual entries:

![Adding an entry](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-new.png)

These entries can also include weather observations. Those using celestial navigation can also record manual fixes with these entries! Entries can be categorized to separate things like navigational entries from radio or maintenance logs.

If you have the [sailsconfiguration plugin](https://www.npmjs.com/package/@signalk/sailsconfiguration) installed, you can also log sail changes in a machine-readable format:

![Sail changes editor](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-sails.png)

Since the log format is machine readable, the map view allows browsing entries spatially:

![Log entries on a map](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-map.png)

## Electronic vs. paper

The big benefits of an electronic logbook are automation and availability. The logbook can create entries by itself based on what's happening with the vessel telemetry. You can read and create log entries anywhere on the boat, using the electronic devices you carry with you. Off-vessel backups are also both possible, and quite easy, assuming that the vessel has a reasonably constant Internet connection.

With paper logbooks, the main benefit is that they're fully independent of the vessel's electronic system. In case of power failure, you can still see the last recoded position, heading, etc. They are also a lot more durable in the sense that paper logbooks from centuries ago are still fully readable. Though obviously that carries a strong [survivorship bias](https://en.wikipedia.org/wiki/Survivorship_bias). I would guess the vast majority of logbooks, especially on smaller non-commercial vessels, don't survive more than a couple of years.

So, how to benefit from the positive aspects of electronic logbooks, while reducing the negatives when compared to paper? Here are some ideas:

* _Mark your position on a paper chart_. Even though most boats navigate with only electronic charts, it is a good idea to have at least a planning chart available on paper. When offshore, plot your hourly or daily position on it. This will produce the navigation aid of last resort if all electronics fail. And marked charts are pretty!
* _Have an off-vessel backup of your electronic logs_. The signalk-logbook uses [a very simple plain text format](https://github.com/meri-imperiumi/signalk-logbook#data-storage-and-format) for its entries exactly for this reason. The logs are easy to back up, and can also be utilized without the software itself. This means that with a bit of care your log entries shouls stay readable for many many years to come. On Lille Ø we store them [on GitHub](https://github.com/meri-imperiumi/log/tree/main/_data/logbook)
* _Print your logs_. With something like a cheap receipt printer, it would be possible to print your log entries periodically, maybe daily or after each trip. Then you can have an archival copy that doesn't rely on electronics. [Here is a repository](https://github.com/meri-imperiumi/logbook-printer) implementing just that

## API

In addition to providing a web-based user interface, signalk-logbook [provides a REST API](https://editor.swagger.io/?url=https://raw.githubusercontent.com/meri-imperiumi/signalk-logbook/main/schema/openapi.yaml). This allows software developers to create new integrations with the logbook. For example, these could include:

* Automations to generate log entries for some events via [node-red](https://nodered.org/) or [NoFlo](https://noflojs.org)
* Copying the log entries to a cloud service
* Exporting the logs to another format, like [GPX](https://en.wikipedia.org/wiki/GPS_Exchange_Format) or a spreadsheet
* Other, maybe non-web-based user interfaces for browsing and creating log entries

## Getting started

To utilize this electronic logbook, you need a working installation of [Signal K](https://signalk.org) on your boat. The common way to do this is by having a [Raspberry Pi](https://www.raspberrypi.com) powered by the boat's electrical system and connected to the various on-board instruments.

There are some nice solutions for this:

* [Sailor Hat for Raspberry Pi](https://shop.hatlabs.fi/products/sh-rpi) allows powering a Raspberry Pi from the boat's 12V system. It also handles shutdowns in a clean way, protecting the memory card from data corruption
* [Pican-M](https://seabits.com/nmea-2000-powered-raspberry-pi/) both connects a Raspberry Pi to a NMEA2000 bus, and powers it through that

You can of course also do a more custom setup, like we [did on our old boat](https://bergie.iki.fi/blog/signalk-boat-iot/), *Curiosity*.

For the actual software setup, [marinepi-provisioning](https://github.com/tkurki/marinepi-provisioning) gives a nice Ansible playbook for getting everything going. [Bareboat Necessities](https://bareboat-necessities.github.io) is a "Marine OS for Raspberry Pi" that comes with everything included.

If you have a Victron GX device (for example Cerbo GX), you can also [install Signal K on that](https://www.victronenergy.com/live/venus-os:large).

Once Signal K is running, just look up `signalk-logbook` in the Signal K app store. You'll also want to install the `signalk-autostate` and `sailsconfiguration` plugins to enable some of the automations.

![Signal K appstore](https://d2vqpl3tx84ay5.cloudfront.net/800x/logbook-appstore.png)

Then just restart Signal K, log in, and start logging!
