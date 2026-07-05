---
title: Reticulum is interesting
location: Tahanea, French Polynesia
layout: post
categories:
  - fbp
  - desktop
  - mobility
cover: "https://d2vqpl3tx84ay5.cloudfront.net/reticulum-constellation.png"
---
It all started innocently enough: sometime last summer, I ran into the blog post [Start your own Internet Resiliency Club](https://bowshock.nl/irc/) on Hacker News.

> ...communicate with each other across a few kilometers without any centralized infrastructure using cheap, low-power, unlicensed LoRa radios and open source Meshtastic text messaging software.

The idea of a local, infrastructure-free communications mesh sounded useful, especially as we were about to [sail into the Pacific](https://lille-oe.de/2026/).

## Meshtastic

While conflicts and natural disasters are hopefully far away, on the smaller atolls there is no cellular network. With [Meshtastic](https://meshtastic.org/) we could communicate over LoRa.

![Using Meshtastic on a boat](https://d2vqpl3tx84ay5.cloudfront.net/800x/meshtastic-bequia.png)

Over the hurricane season, the [Meshtastic setup became quite extensive](https://blog.noforeignland.com/off-grid-boat-communications-with-meshtastic/). Our boat has a Meshtastic node, plus a mast-mounted solar repeater. We both have Meshtastic cards that we carry with us. With these we can communicate with text messages over quite a long distance. And we get telemetry and alerts from the boat.

In Cartagena, Colombia we could hear the boat pretty much across the city. And since some of our buddy boats also run Meshtastic, we've even had conversations while offshore.

While the existing Meshtastic setup is serving us well, there is always room for improvement and new ideas.

## Reticulum

[Reticulum](https://reticulum.network) is a project that seeks to take this to a whole new level. It is a whole decentralized networking stack that allows anything from instant messaging and voice calls to full-on SSH sessions to be carried over a multitude of different interfaces. You can transport Reticulum over LoRa, Bluetooth, and also over regular TCP/IP networks. And if authorities didn't take a dim view on encryption in ham radio, it would also work over our HF radio. With store-and-forward mechanisms it can deal with intermittent connectivity.

> Because your identity is portable, your connectivity can be fluid. You can be sitting at a desk connected to a fiber backbone one moment, and walking through a field connected only to a long-range LoRa mesh the next. To the rest of the network, nothing has changed. Your friends do not need to update your contact info. The messages they send do not bounce back. The network senses the shift in the medium and reroutes the flow of data automatically.<br />
You are no longer a stationary node in a fixed grid. You are a wanderer in a fluid medium.<br />
\- [The Zen of Reticulum](https://reticulum.network/manual/zen.html)

As it stands now, Reticulum is still quite an early system with rudimentary and tech-heavy user interfaces. But that seems to be about to change: the [Columba app](https://columba.network/) for Android seems about as user-friendly as Meshtastic or something like Signal. There's a lot of potential in that once it reaches a stable version.

## Distributed development over Reticulum

In the meanwhile, there is one aspect of Reticulum we developers can benefit from immediately: [Distributed development](https://reticulum.network/manual/distributed.html). With it, any rngit node running on Reticulum can be your "GitHub". Git history, issue tracking, release distribution is already there.

I recently switched my various programming projects over. We have rngit running on the boat NAS, and VPS running a mirror behind more consistent connectivity. And for now I also mirror the work periodically to GitHub for backwards compatibility.

## Reticulum for software

What I think is worthwhile to explore is having machines interface with Reticulum. Just like we can tell our boat to switch lights on via a Meshtastic message, we should be able to do the same with Reticulum. And maybe there should be a NomadNet "site" for the boat showing status of the various systems.

Going further, maybe boats could share chart data, depth soundings, weather information with each other over this. The promise of VDES, but built from the grassroots perspective.

And maybe things like [NoFlo](https://noflojs.org) should be able to communicate over Reticulum? Reticulum implementations exist for multiple programming languages, but for this we'd need a JavaScript port.

There's still a lot to study and to think about. Watch this space. Last time I noted that [something is interesting](https://bergie.iki.fi/blog/flow-based-programming-is-interesting/), it took me to a ten year rabbit hole.
