---
title: Leap Motion and the virtual interfaces
location: San Francisco, California
layout: post
categories:
  - mobility
  - desktop
  - tablet
---
The eagerly waited [Leap Motion](https://www.leapmotion.com/) controller is now out, and [reviews](http://arstechnica.com/gadgets/2013/07/hands-on-with-the-leap-motion-controller-cool-but-frustrating-as-hell/) are pouring in. Most of them see the promise but find the current experience frustrating:

> Here's the thing: the Leap Motion is almost amazing. When using it to interact with my desktop and perform actions (clicking, dragging, scrolling), the experience is about 50 percent fluid intuition and 50 percent screaming frustration. There are moments, sometimes ten or fifteen seconds long, when everything magically clicks into place—the Leap doesn't decide your hand is too far away or too close to be able to execute actions, and for a few seconds, boom, you're scrolling, dragging, and clicking effortlessly. It feels totally natural. Then, almost capriciously, your gestures aren't good enough any more and you spend ten more seconds trying to get a single click to register.

I've had a Leap sensor as part of their [developer program](https://www.leapmotion.com/developers) for a while now, and the description above feels quite accurate to both the Leap, and our [Kinect air cursor work](http://bergie.iki.fi/blog/qt-air-cursor/).

## Lacking interface concepts

The problem is that our current interface concepts are simply not suitable for this sort of interaction. There must be incredible things you can accomplish when *the computer can see your fingers or whole body in motion*. We just haven't discovered them yet.

This is very similar to the situation we had for a long time with touchscreen devices. There have been tablets available since the 90s, but they didn't take off until there was a [new kind of OS](http://en.wikipedia.org/wiki/IOS) and [new kind of UI guidelines](http://developer.apple.com/library/ios/documentation/UserExperience/Conceptual/MobileHIG/Introduction/Introduction.html) for this world. After all, your finger is not a mouse.

Once those guidelines were out there, and manufacturers built compelling enough all-touch devices, the market took off. I've said for a long time that [the tablet form factor is winning](http://bergie.iki.fi/blog/why_the_tablet_form_factor_is_winning/), an estimate validated by the [recent sales figures](http://www.asymco.com/2013/07/18/the-pc-calamity/). And yet, the new kind of tablets have only been available since [2006](http://bergie.iki.fi/blog/meego-diaspora/) or [2010](http://en.wikipedia.org/wiki/IPad) depending how you look. The big shift is only getting started.

Right now tablets are still mostly used for recreation and light data processing, as [productivity applications and culture](http://bergie.iki.fi/blog/tablet-productivity/) always take a bit longer to adapt. We need to move beyond text as the main way of communicating ideas.

I've [already taken a few steps](https://noflojs.org/) that way for us programmers.

## Behind the glass

While there are many great user interfaces built on the touch paradigm, interacting with a featureless piece of glass lacks a lot of the haptic feedback we get from physical interfaces. The author [Douglas Adams](https://en.wikipedia.org/wiki/Douglas_Adams) commented on this in [The Hitchhiker's Guide to the Galaxy](http://en.wikipedia.org/wiki/The_Hitchhiker's_Guide_to_the_Galaxy)already back in 1979:

> A loud clatter of gunk music flooded through the Heart of Gold cabin as Zaphod searched the sub-etha radio wave bands for news of himself. The machine was rather difficult to operate. For years radios had been operated by means of pressing buttons and turning dials; then as the technology became more sophisticated the controls were made touch-sensitive--you merely had to brush the panels with your fingers; now all you had to do was wave your hand in the general direction of the components and hope. It saved a lot of muscular expenditure, of course, but meant that you had to sit infuriatingly still if you wanted to keep listening to the same program.

> Zaphod waved a hand and the channel switched again.

(thanks to [Ars commenter Joannemullen](http://arstechnica.com/gadgets/2013/07/hands-on-with-the-leap-motion-controller-cool-but-frustrating-as-hell/?comments=1&post=24987285#comment-24987285), I had forgotten about that quote!)

The book [Invisible Computer](http://mitpress.mit.edu/books/invisible-computer) argues for building physical appliances for different computing purposes. I don't see that happening anytime soon given the strong onward march of [ephemeralization](http://en.wikipedia.org/wiki/Ephemeralization), of moving everything to converged devices and increasingly capable software.

But even with software there would be so much more we could be doing.

## Physical interaction

The devices we carry around us are filled with different sensors which could provide new kinds of interaction concepts.

For example, on many Nokia phones you've been able to [mute the phone](http://allaboutwindowsphone.com/flow/item/17791_Flip_to_silence_on_the_Nokia_L.php) by flipping it around. In 2001 I had an Ericsson phone which used the proximity sensor to [snooze the alarm](http://www.ciol.com/ciol/news/123339/now-app-wave-hand-alarm) when you waved your hand over the phone.

iOS devices use the gesture of shaking the device to [shuffle a playlist](http://ipod.about.com/od/iphone3gs/qt/shake-to-shuffle-iphone.htm) or [undo an action](http://ipod.about.com/od/iphonehowtos/qt/Shake-To-Undo-On-Iphone.htm). On many Android devices you can use NFC touches [to move data or interaction between devices](http://en.wikipedia.org/wiki/Android_Beam). Touch a screen to send a picture there, or touch a speaker to make your music play from there.

These are all great, natural gestures that allow us to interact with the device in a physical way, not with just with the virtual interfaces behind the glass.

Gestures like these should be more universally available, just like touch UI concepts like [pull to refresh](http://www.theverge.com/2013/5/21/4350826/twitter-pull-to-refresh-patent-innovators-patent-agreement-announced). When people trust a gesture to work consistently everywhere, it will be used a lot more, and users will be happier.

We are after all interating with physical devices we can not only touch, but also move around.
