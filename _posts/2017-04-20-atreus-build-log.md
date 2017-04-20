---
title: "Atreus: Building a custom ergonomic keyboard"
layout: post
location: Berlin, Germany
categories:
  - mobility
  - tablet
  - desktop
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-2-small.jpg'
---
As mentioned in my [Working on Android post](/blog/working-on-android-2017/), I've been using a mechanical keyboard for a couple of years now. Now that I work [on Flowhub](/blog/flowhub-ug/) from home, it was a good time to re-evaluate the whole work setup. As far as regular keyboards go, the MiniLa was nice, but I wanted something more compact and ergonomic.

## The Atreus keyboard

[![My new Atreus](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-2-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-2.jpg)

Atreus is a 40% ergonomic mechanical keyboard designed by [Phil Hagelberg](https://technomancy.us/). It is an [open hardware design](https://github.com/technomancy/atreus), but he also [sells kits](https://atreus.technomancy.us/) for easier construction. From the kit introduction:

> The Atreus is a small mechanical keyboard that is based around the shape of the human hand. It combines the comfort of a split ergonomic keyboard with the crisp key action of mechanical switches, all while fitting into a tiny profile.

My use case was also quite travel-oriented. I wanted a small keyboard that would enable me to work with it also on the road. There are many other small-ish DIY keyboard designs like [Planck](https://olkb.com/planck/) and [Gherkin](http://www.40percent.club/2016/11/gherkin.html) available, but Atreus had the advantage of better ergonomics. I really liked the design of the [Ergodox](https://www.ergodox.io) keyboard, and Atreus essentially is [that made mobile](https://technomancy.us/173):

> I found the split halves and relatively large size (which are fantastic for stationary use at a desk) make me reluctant to use it on the lap, at a coffee shop, or on the couch, so that's the primary use case I've targeted with the Atreus. It still has most of the other characteristics that make the Ergodox stand out, like mechanical Cherry switches, staggered columns instead of rows, heavy usage of the thumbs, and a hackable microcontroller with flexible firmware, but it's dramatically smaller and lighter

I had the opportunity to try a kit-built Atreus in the [Berlin Mechanical Keyboard meetup](https://www.meetup.com/Berlin-Mechanical-Keyboards-Input-Devices-Meetup/), and it felt nice. It was time to start the project.

## Sourcing the parts

When building an Atreus the first decision is whether to go with the kit or [hand-wire it yourself](http://imgur.com/a/qcgdF). Building from a kit is certainly easier, but since I'm a member of [a hackerspace](https://c-base.org/), doing a hand-wired build seemed like the way to go.

To build a custom keyboard, you need:

* Switches: in my case 37 Cherry MX blues and 5 Cherry MX blacks
* Diodes: one 1N4148 per switch
* Microcontroller: a Arduino Pro Micro on my keyboard
* Keycaps: started with recycled ones and later upgraded to DSA blanks
* Case: got a set of laset-cut steel plates

Even though Cherry &mdash; the maker of the most common mechanical key switches &mdash; is a German company, it is quite difficult to get switches in retail here. Luckily a fellow hackerspace member had just dismantled some old mechanical keyboards, and so I was able to get the switches I needed via barter.

[![Keyswitches](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/keyswitches-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/keyswitches.jpg)

The Cherry MX blues are tactile clicky switches that feel super-nice to type on, but are quite loud. For modifiers I went with Cherry MX blacks that are linear. This way there is quite a clear difference in feel between keys you typically hold down compared to the ones you just press.

The diodes and the microcontroller I ordered from Amazon for about 20&euro; total.

[![Arduino Pro Micro](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/microcontroller-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/microcontroller.jpg)

At first I used a set of old keycaps that I got with the switches, but once the keyboard was up and running I upgraded to a very nice set of blank DSA-profile keycaps that I ordered [from AliExpress](https://www.aliexpress.com/store/2230037) for 30&euro;. That set came with enough keycaps that I'll have myself covered if I ever build a second Atreus.

All put together, I think the parts ended up costing me around 100&euro; total.

## Preparations

When I received all the parts, there were some preparation steps to be made. Since the key switches were 2nd hand, I had to start by dismantling them and removing old diodes that had been left inside some of them.

[![Opening the key switches](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/keyswitches-prep-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/keyswitches-prep.jpg)

The keycaps I had gotten with the switches were super grimy, and so I ended up sending them to the washing machine. After that you could see that they were not new, but at least they were clean.

With the steel mounting plate there had been a slight misunderstading, and the plates I received were a few millimeters thicker than needed, so the switches wouldn't "click" in place. While this could've been worked around with hot glue, we ended up filing the mounting holes down to the right thickness.

[![Filing the plate](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/filing-plate-1-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/filing-plate-1.jpg)

[![Little bit of help](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/filing-plate-2-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/filing-plate-2.jpg)

## Wiring the keyboard

Once the mounting plate was in the right shape, I clicked the switches in and it was time to solder.

[![All switches in place](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/switches-mounted-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/switches-mounted.jpg)

Hand-wiring keyboards is not that tricky. You have to attach a diode to each keyswitch, and then connect each row together via the diodes.

[![Connecting diodes](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-1-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-1.jpg)

[![First row ready](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-2-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-2.jpg)

The two thumb keys are wired to be on the same column, but different rows.

[![All rows ready diodes](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-3-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/diode-rows-3.jpg)

Then each column is connected together via the other pin on the switches.

[![Soldering columns](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/columns-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/columns.jpg)

This is how the matrix looks like:

[![Completed matrix](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/wiring-ready-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/wiring-ready.jpg)

After these are done, connect a wire from each column, and each row to a I/O pin on the microcontroller.

[![Adding column wires](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/soldering-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/soldering.jpg)

If you haven't done it earlier, this is a good stage to test all connections with a multimeter!

[![Connecting the microcontroller](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/soldering-microcontroller-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/soldering-microcontroller.jpg)

## Firmware

After finishing the wiring, I downloaded the [QMK firmware](https://github.com/qmk/qmk_firmware), changed the [PIN mapping](https://github.com/bergie/qmk_firmware/commit/1902fc2affcd4cb1cbe2225b8c0736f57eca5646) for how my Atreus is wired up, switched the layout to [Colemak](https://colemak.com/), and the keyboard was ready to go.

[![Atreus in use](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-1-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-1.jpg)

Don't mind the key labels in the picture above. These are the second-hand keycaps I started with. Since then I've switched to [blank ones](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/ready-2.jpg).

## USB-C

The default Atreus design has the USB cable connected directly to the microcontroller, meaning that you'll have to open the case to change the cable. To mitigate that I wanted to add a USB breakout board to the project, and this being 2017, it felt right to go with [USB-C](https://en.wikipedia.org/wiki/USB-C).

[![USB-C breakouts](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-breakout-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-breakout.jpg)

I found some cheap USB-C breakout boards from AliExpress. Once they arrived, it was time to figure out how the spec works. Since USB-C is quite new, there are very few resources available on how to use it with microcontrollers. These tutorials were quite helpful:

* [Using USB-C on hobbyist projects](https://www.scorpia.co.uk/2016/03/17/using-usb-type-c-on-hobyist-projects/)
* [USB Type C in a Micro-B world](http://www.embedded.com/electronics-blogs/benson-s-blocks/4442214/USB-Type-C-in-a-Micro-B-world)

Here is how we ended up wiring the breakout board. After these you only have four wires to connect to the microcontroller: ground, power, and the positive and negative data pins.

[![USB-C breakout with wiring](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-breakout-wired-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-breakout-wired.jpg)

[This Atreus build log](https://sgotti.me/post/atreus-keyboard-build-log/) was useful for figuring out where to connect the USB wires on the Pro Micro. Once all was done, I had a custom, USB-C keyboard!

[![USB-C keyboard](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-ready-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/usb-ready.jpg)

## Next steps

Now I have the Atreus working nicely on my new standing desk. Learning Colemak is a bit painful, but the keyboard itself feels super nice!

[![New standing desk](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/standing-desk-small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/atreus-build/standing-desk.jpg)

However, I'd still like to CNC mill a proper wooden case for the keyboard. I may update this post once that happens.

I'm also considering to order an [Atreus kit](https://atreus.technomancy.us/) so I'd have a second, always packed for travel keyboard. The kit comes with a PCB, which might work better at airport security checks than the hand-wired build.

Another thing that is quite tempting is to make a custom firmware with [MicroFlo](http://microflo.org/). I have no complaints on how QMK works, but it'd be super-cool to use our [visual programming tool](https://flowhub.io/) to tweak the keyboard live.

Big thanks to [Technomancy](http://github.com/technomancy) for the Atreus design, and to XenGi for all the help during the build!
