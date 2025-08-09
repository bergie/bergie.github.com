---
title: Rigging-suspended installation of a marine wind generator
location: Spanish Water, Curaçao
layout: post
categories:
  - sailing
cover: "https://d2vqpl3tx84ay5.cloudfront.net/wind-bracket-installed.jpg"
---
We cruise on a small boat, a [31ft double-ender](https://lille-oe.de/boat/). As we're off-grid the vast majority of the time, all electricity needs to be produced from renewable sources. Solar produces a lion's share, but other sources are needed for overcast days. We don't have space for a permanently mounted wind generator, so we converted a [Superwind 350](https://www.superwind.com/en/) to rigging-suspended.

## Why wind?

As our [2024 cruise](https://lille-oe.de/2024/) to the not-so-sunny Scotland demonstrated, there would still be place for wind power in the renewables mix of a long-distance sailboat. My [energy production simulations](https://gist.github.com/bergie/d0eda471e3774b0cb3b49e33853394d1) from 2023 also showed a lot of promise for wind power.

Our boat has a canoe stern and dual aft stays, meaning that there is not much space in the back of the boat.
We had a conversation with Superwind back in 2022, and they were of the opinion that there simply isn't a good space for installing one.
And so we [installed a hydrogenerator](https://lille-oe.de/2023-04-14/) and decided that we'd go sailing if we ran out of power.

But the interest in wind generators remained.

![Ampair 100 at Sainte-Anne](https://d2vqpl3tx84ay5.cloudfront.net/800x/20250125_172524.jpg)

And then one day, rowing around the Sainte-Anne anchorage in rainy Martinique, I saw a potential solution: one of the small cruising boats had a wind generator suspended from ropes in their foretriangle. I chatted a bit with the owners, and they confirmed that the system worked nicely. Time for some research!

## Rigging-suspended wind generator

Rigging-suspended wind generators used to be common. Commercial models included the Ampair 100, WindBugger, and the Hamilton-Ferris. As solar power has become cheaper, wind generators in general have fallen out of favor. At the same time cruising boats have grown in size, enabling permanent mounting of a big wind turbine.

These effects combined mean that there are currently no commercial manufacturers of rigging-suspended wind generators for boats.

Of the models once manufactured, the Ampair 100 sounded especially promising. It was a modular system that could be used either as a rigging-suspended wind turbine, or as a "tow generator" for making power while under sail.

This modularity is a big advantage of a rigging-suspended wind generator, especially for ease of stowing. They can also be a lot quieter than the pole-mounted ones, as any vibrations are dampened by the suspension ropes. And of course they don't cause any windage or shading while stowed.

I tried finding an Ampair for sale online with no luck. The second-hand chandlery in Grenada -- [Treasure Trove](https://treasuretrove.shop) -- had two units, but couldn't locate the wind blades.

However, the wind generator market has evolved quite a bit. There are several good wind generators intended for permanent mounting. [Superwind](https://www.superwind.com/en/applications/sailing) and the [D400](https://eclectic-energy.co.uk/products/d400-wind-generator/) provide the best alternatives, but are very expensive. On the cheap end, there are numerous Chinese wind generators from companies like [Pikasola](https://www.pikasola.com) and [Vevor](https://www.vevor.com/s/wind-turbine) starting at around $250.

Maybe I could design a bracket to convert one of these for rigging-suspended installation?

## Building the bracket

Sitting in the windy anchorage at Spanish Water this idea started sounding more and more interesting. After some paper brainstorming, I grabbed [FreeCAD](https://www.freecad.org) and made an initial design.

The design parameters were:
* Can be built somewhat cheaply by a local metal fabricator
* Can facilitate the most common fixed-mount wind generators
* Poles to keep the rigging lines clear of the propellers
* Wind generator is held in place and the whole assembly turns into the wind

My original idea was a neat stainless ring around the wind generator body. However, different wind generators are of different height, and so in interests of both manufacturing cost and adaptability, I went with two brackets connected by threaded rod.

![Wind turbine bracket design](https://d2vqpl3tx84ay5.cloudfront.net/800x/wind-bracket.png)

It took a couple of months to actually get a quote from a local fabricator, but now we finally have the finished brackets for ourselves and a neighboring boat.

You can find the FreeCAD file [on GitHub](https://github.com/meri-imperiumi/lille-oe/raw/refs/heads/main/hardware/Windgenerator%20bracket.FCStd). There are also STEP files for the [top bracket](https://github.com/meri-imperiumi/lille-oe/blob/main/hardware/Windgenerator%20bracket-AssemblyBracket%20top.step) and the [bottom bracket](https://github.com/meri-imperiumi/lille-oe/blob/main/hardware/Windgenerator%20bracket-AssemblyBracket%20bottom.step).

## Installation

Our neighbor installed a 400W Pikasola wind generator on theirs. That mounted on the bracket without any other adapting except for some rubber mat to isolate the stainless parts from the aluminium wind turbine body.

We had bought an old Superwind 350 from another boat, and so for us a small connecting piece (140mm long aluminium pipe with 55mm inner diameter) was needed to make that fit.

![Wind generator bracket adapted for Superwind 350](https://d2vqpl3tx84ay5.cloudfront.net/800x/20250807_125654.jpg)

The wind generator is hoisted using our spinnaker pole topping lift, with a short strop riding on the inner forestay. Stabilization is with a three rope bridle connected to pad eyes on the deck.

![Deployed rigging-suspended Superwind 350](https://d2vqpl3tx84ay5.cloudfront.net/800x/20250809_085537.jpg)

We have wires running from the bottom bracket to the deck level, where they connect via MC4 connectors to to cables running to inside the boat. This way we can easily disconnect the wind turbine as needed. We are adding a stop/run switch soon as well to aid deployment.

Deployment is already documented [in our boat handbook](https://handbook.lille-oe.de/systems/electrics/#superwind).

## Conclusion

We only got the Superwind deployed yesterday evening, and so we are gathering the early experiences. However, right now we're on track to producing about 0.6kWh on the first day. This is measured with a dedicated Victron SmartShunt wired to the wind generator regulator and logging into our time series database.

![Wind generator as seen in Venus OS](https://d2vqpl3tx84ay5.cloudfront.net/800x/wind-generator-venus.jpg)

That 0.6kWh per day is like a whole second solar arch!

Noise levels are not too bad at all. Inside the boat you can't hear anything. In cockpit, you can hear a slight whirr from the generator, but it is a lot quieter than one of the popular pole-mounted wind turbines on neighboring boat, heard from few hundred meters away.

Durability and handling of heavier winds will remain to be seen. As will the practicality of stowing and deploying when changing anchorages. Though we already do similar things with the mast-hoisted solar panels and the [nesting dinghy](https://lille-oe.de/dinghy/).

Especially when going with one of the cheap Chinese models, this rigging-suspended method can be the way to add wind power to a boat in an affordable way. We calculated the total price for the Pikasola installation to be around the same as what marine wind generator manufacturers ask for just a mounting pole!

The [hardware design](https://github.com/meri-imperiumi/lille-oe/tree/main/hardware) should be quite easy to manufacture anywhere where you can find a stainless steel welder. After all, we were able to get ours fabricated on a tropical island.

For us the new wind generator can be seen as completing the circle of our deployable renewable options:
* When under sail, power is generated with the hydrogenerator
* When anchored in light winds, power is generated with the mast-hoisted [FLINsail](https://flin-solar.com) solar array
* When anchored in heavier winds, power is generated by the rigging-suspended Superwind

On top of these we have the fixed solar panels.

![Lille Ø at anchor](https://d2vqpl3tx84ay5.cloudfront.net/800x/20250807_200722.jpg)
