---
title: "Bosch Connected Experience: Eclipse Hono and MsgFlo"
location: Berlin, Germany
categories:
  - fbp
  - desktop
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-open-hack.jpg'
---
I've been attending the [Bosch Connected Experience IoT hackathon](http://bcw.bosch-si.com/berlin/bcw-hackathon/?refresh=1) this week at Station Berlin. Bosch brought a lot of different devices to the event, all connected to send telemetry to [Eclipse Hono](http://www.eclipse.org/hono/). To make them more discoverable, and enable rapid prototyping I decided to expose them all to [Flowhub](https://flowhub.io) via the [MsgFlo distributed FBP runtime](https://msgflo.org).

The result is **[msgflo-hono](https://github.com/msgflo/msgflo-hono#readme)**, a tool that discovers devices from the Hono backend and exposes them as [foreign participants](https://msgflo.org/docs/foreign/) in a MsgFlo network.

![BCX Open Hack](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-open-hack.jpg)

This means that when you connect Flowhub to your MsgFlo coordinator, you have all connected devices appear there, with port for each sensor they expose. And since this is MsgFlo, you can easily pipe their telemetry data to any Node.js, Python, Rust, or other program.

## Hackathon project

Since this is a hackathon, there is a competition on projects make in this event. To make the Hono-to-MsgFlo connectivity, and Flowhub visual programming capabilities more demoable, I ended up hacking together a quick example project &mdash; a [Bosch XDK](https://xdk.bosch-connectivity.com/) controlled air theremin.

<iframe width="560" height="315" src="https://www.youtube.com/embed/ziQmFjXYE3c" frameborder="0" allowfullscreen></iframe>

This comes in three parts. First of all, we have the XDK exposed as a MsgFlo participant, and connected to a NoFlo graph running on Node.js

[![Hono telemetry on MsgFlo](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-msgflo-hono-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-msgflo-hono.png)

The NoFlo graph starts a web server and forwards the telemetry data to a WebSocket client.

[![NoFlo websocket server](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-noflo-nodejs-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-noflo-nodejs.png)

Then we have a forked version of [Vilson's webaudio theremin](http://app.flowhub.io/#example/04847249319d2326fa92) that uses the telemetry received via WebSockets to make sound.

[![NoFlo air theremin](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-noflo-browser-small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-noflo-browser.png)

The whole setup seems to work pretty well. The XDK is connected to WiFi here, transmits its telemetry to a Hono instance running on AWS. This data gets forwarded to the MsgFlo MQTT network, and from there via WebSocket to a browser. And all of these steps can be debugged and experimented with in a visual way.

Relevant links:

* [msgflo-hono tool](https://github.com/msgflo/msgflo-hono#readme)
* [Hono MsgFlo demo project](https://github.com/msgflo/msgflo-example-bcx17)

**Update:** we won the [Open Hack Challenge award for technical brilliance](https://twitter.com/Flowhub_io/status/842476310656086021) with this project.

![BCX entrance](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bcx17-entrance.jpg)
