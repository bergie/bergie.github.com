---
title: Building an Ingress Table with Flowhub
location: Berlin, Germany
layout: post
categories:
- fbp
- desktop
---
The [c-base space station](http://c-base.org/) &mdash; a culture carbonite and a hackerspace &mdash; is the focal point of Berlin's thriving tech scene. It is also the place where many of the city's [Ingress](http://www.ingress.com/) agents converge after an evening of hectic raiding or farming.

![An Ingress event at c-base](/files/ingress-cbase-pacman.png)

In February we came with an idea on combining our dual passions of open source software and Ingress in a new way. [Jon Nordby](http://jonnor.com/) from [Bitraf hackerspace](https://bitraf.no/) in Oslo had recently shown off the [new full-stack development capabilities](http://bergie.iki.fi/blog/full-stack-fbp/) of [Flowhub](http://flowhub.io/) made possible by integrating my [NoFlo](http://noflojs.org/) flow-based programming framework for JavaScript and his [MicroFlo](http://microflo.org/) giving similar abilities to microcontroller programming. So why not use them to build something awesome?

Since Flowhub is nearing a public beta, this would also give us a way to showcase some of the possibilities, as well as stress-test Flow-Based Programming in a Internet-connected hardware project. Often hackerspace projects tend to stretch from months to infinity; our experiences with [NoFlo and flying drones](http://bergie.iki.fi/blog/noflo-ardrone/) already showed that with FBP we can easily parallelize development, challenging some of the central dogmas of [the Mythical Man Month](http://en.wikipedia.org/wiki/The_Mythical_Man-Month). It was worth a try to see if this would allow us to compress the time needed for such a project from a couple of months to a long weekend.

## Introducing the Ingress Table

Before the actual hackathon we had two meetings with the project team. There were many decisions to be made, starting from the size and shape of the table to the features it should have. Looking at the different tables in the c-base main hall we settled on a square table of slightly less than 1m<sup>2</sup>, as that would fit nicely in the area, and still seat the magical number of eight Ingress agents or other c-base regulars.

The tabletop would be a map of c-base and the surrounding area, and it would show the status of the portals nearby, as well as alert people sitting at it of attacks and other Ingress events of interest. Essentially, it'd be a physical world equivalent of [the Intel Map](http://www.ingress.com/intel?ll=52.513243,13.416667&z=17).

![Intel Map of the area](/files/ingress-cbase-map.png)

We considered integrating a regular screen to have maximum flexibility in the face of the changing world of Ingress, but eventually decided that most people at c-base already spend much of their waking hours looking at a screen, and so we'd do something more ambient and just use a set of physical lights.

[![Exploded view](/files/ingress-table-exploded-small.jpg)](/files/ingress-table-exploded.jpg)[![Assembled view](/files/ingress-table-assembled-small.jpg)](/files/ingress-table-assembled.jpg)

The hardware and software also needed some thought, especially since some of the parts needed might have long shipping times. Eventually we settled on the combination of a [BeagleBone Black](http://beagleboard.org/Products/BeagleBone+Black) ARM computer as the brains of the system, and a [LaunchPad Tiva](http://www.ti.com/tool/ek-tm4c123gxl) as the microcontroller running the hardware. The computer would run NoFlo on Linux, and we'd flash the microcontroller with MicroFlo.

![Our BeagleBone Black](/files/ingress-table-bbb-small.jpg)

By the time of arriving to c-base, many Ingress agents have their phones and battery packs depleted, and so we incorporated eight USB power ports into the table design. Simply plug in your own cable and you can charge your device while enjoying the beer and the chat.

Once the plans had been set, a flurry of preparations began. We would need lots of things, ranging from wood and glass parts for the table shell, to various different electronics and computer parts for the insides. And some of these would have to be ordered from China. Would they arrive in time?

[![Design render of the table](/files/ingress-table-render-small.jpg)](/files/ingress-table-render.jpg)

I spent the two weeks before the hackathon doing a project in Florence, and it was quite interesting to coordinate the logistics remotely. Thankfully our Berlin team did a stellar job of tracking missing shipments and collecting the things we needed!

## The hackathon

I landed in Berlin in the early evening of Friday, March 14th. After negotiating the rush hour public transport of the Tegel airport, I arrived to the space station to see most of our team already there, unpacking and getting the supplies ready for the hackathon.

![Buying the materials](/files/ingress-table-wood.png)

At this point we essentially had only the raw materials available. Planks of wood, plates of glass and plastic. And a lot of electronics components. No assembly had yet been done, and no lines of code had been written or graphs drawn for the project.

We quickly organized the hackathon into three tracks: hardware, software, and electronics. The hardware team got themselves busy building the table shell, as that would need to be finished early so that the paint would have time to dry before we'd start assembling the electronics into it. Over the next day they'd often call the other teams over to help in holding or moving things, and also for the very important task of test-sitting the table to figure out the optimal trade-off between table height and legroom.

[![Legroom measurements](/files/ingress-table-legroom-measurement1-small.jpg)](/files/ingress-table-legroom-measurement1.jpg)[![Legroom measurements](/files/ingress-table-legroom-measurement2-small.jpg)](/files/ingress-table-legroom-measurement2.jpg)

While the hardware guys were working, we started designing the software part of it. Some basic decisions had to be taken on how we'd get the data, and how we would filter and transform the raw portal statuses to commands to the actual lights in the table.

Eventually we settled on a NoFlo graph that would poll the portal data in, and run it through a set of transformations to find the detect the data points of interest, like portals that have changed owners or are under attack. In parallel we would run some animation loops to create a more organic, shifting feel to the whole map by having the light shining through the streets be constantly shifting and moving.

[![The main Ingress Table NoFlo graph](/files/ingress-table-graph-small.png)](/files/ingress-table-graph.png)

*(and yes, the graph you see above is the actuall running code of the table)*

[![Software team at robolab](/files/ingress-table-robolab-small.jpg)](/files/ingress-table-robolab.jpg)[![Software team at robolab](/files/ingress-table-robolab2-small.jpg)](/files/ingress-table-robolab2.jpg)

Since the electronics wouldn't be working for a while still, we decided to build also a *Ingress Table Emulator* in HTML and NoFlo. This would give us something to test the data and our graphs while the other teams where still working on their things. This proved to be a very useful thing, as this way we were able to watch a big Ingress battle through our simulated blinking lights already in the Saturday evening, and see our emulated table go through pretty much all the different states we were interested in.

[![The software team at work](/files/ingress-table-software-team1-small.jpg)](/files/ingress-table-software-team1.jpg)[![The software team at work](/files/ingress-table-software-team2-small.jpg)](/files/ingress-table-software-team2.jpg)

Once the table shell had been built and the paint was drying, the hardware team started preparing the other things like the map layer, the glass top, and the USB chargers.

[![Watching the paint dry](/files/ingress-table-painted-small.jpg)](/files/ingress-table-painted.jpg)[![Attaching the map sticker](/files/ingress-table-map-sticker-small.jpg)](/files/ingress-table-map-sticker.jpg)

For electronics we noticed that we had still some parts missing from the inventory, and so I had to do a quick supply run on Saturday. But once we got those, the team got into calculations and soldering.

[![Electronics work](/files/ingress-table-electronics1-small.jpg)](/files/ingress-table-electronics1.jpg)[![Electronics work](/files/ingress-table-electronics2-small.jpg)](/files/ingress-table-electronics2.jpg)

Every project has its setbacks, and in this case it came in the form of running pre-released software. It turned out that the LaunchPad port of MicroFlo still had some issues, and so most of Sunday was spent debugging the communications protocol and tuning the components. But the end result is a much better improved MicroFlo, and eventually we got the major moment of triumph of seeing the street lights start animating for the first time. LED strips controlled by a LaunchPad Tiva, in turn controlled by animation loops running in a NoFlo graph on Node.js.

[![Food time](/files/ingress-table-food-small.jpg)](/files/ingress-table-food.jpg)[![Figuring out communications problems](/files/ingress-table-robolab3-small.jpg)](/files/ingress-table-robolab3.jpg)

On Monday evening we convened at c-base for the final push. Street lights were ready, but there were still some issues with getting the table connected wirelessly to the space station network. And we would still need to implement the MicroFlo component for the portal lights. The latter resulting in an epic parallel programming and debugging session between Jon in Norway and Uwe in Berlin. But by the end of the evening we were able to test the full system for the first time, and carry the table to its new home.

[![Testing the lights](/files/ingress-table-test2-small.gif)](/files/ingress-table-test2.gif)[![The table running in the main hall](/files/ingress-table-test1-small.jpg)](/files/ingress-table-test1.jpg)

It was time to celebrate. For an Ingress table, this meant sitting around the table enjoying cold beers, while hacking a level 8 blue portal and watching the lights change across the board as agents ventured out.

![Ingress Table in production](/files/ingress-table-test-small.jpg)

*(We're still in the process of collecting media about the project. The table will look a lot more awesome in video, and I hope I'll be able to add some of those to this post soon)*

## Moving ahead

Having the first running version of the table is of course a big milestone. Now we should monitor it for some time (over beer, of course) and make adjustments as necessary. There are some things that obviously need to be changed with the brightness of the lights based on the location of the table in the main hall. And of course we'll only know about the full system's robustness once it has a bit more mileage.

Since we already have a HTML emulator of the table, it might be fun to release that to the public at some point. That way agents who are not at the c-base main hall could also see what is going on with this simple interface.

An interesting area of development is also to see how the table could integrate better with the rest of the space station. There are various screens ranging from the awesome [Mate Light](https://twitter.com/c_v_e_n/status/416268846056869888) to smaller screens and gauges everywhere. And all of that is pretty much networked and available. Maybe we could visualize some events of interest in other parts of the station. This shows of the "Internet of Things" is never finished.

So far [Niantic Labs](http://en.wikipedia.org/wiki/Niantic_Labs) &mdash; the makers of Ingress &mdash; have limited the availability of a portal data API to few selected parties, and so for now we had to work with a third-party to get the information needed. We hope this table will be another step in convincing Niantic of the creative potential that an official, open Ingress API would unleash.

I'd like to give big thanks especially to everybody who participated in hackathon &mdash; whether on location or remotely from Oslo &mdash; as well as to those who were cheering us on. I'm also grateful to [Flowhub](http://flowhub.io) for sponsoring the project. And of course to [c-base](http://c-base.org) for being an awesome place where such things can happen.

The full source code for the Ingress Table can be found from <https://github.com/c-base/ingress-table>

[![Flowhub - Make code playful](/files/flowhub-promo.jpg)](http://flowhub.io)
