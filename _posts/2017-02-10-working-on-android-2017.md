---
title: Working on an Android tablet, 2017 edition
layout: post
location: Berlin, Germany
categories:
  - mobility
  - desktop
  - tablet
  - bestof
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_desktop.jpg'
---
Back in 2013 I was [working exclusively on an Android tablet](/blog/working-on-android/). Then with the [NoFlo Kickstarter](/blog/noflo-kickstarter-launch/) I needed a device with a desktop browser. What followed were brief periods working on a Chromebook, on a 12" MacBook, and even an iPad Pro.

But from April 2016 onwards I've been again working with an Android device. Some people have asked me about my setup, and so here is an update.

[![Information technology](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_travelers_notebook_small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_travelers_notebook.jpg)

## Why work on a tablet?

When I started on this path in 2013, using a tablet for "real work" was considered crazy. While every story on tablet productivity still brings out the people claiming _it is not a real computer for real work_, using _tablets for real work_ is becoming more and more common.

A big contributor to this has been the plethora of work-oriented tablets and convertibles released since then. Microsoft's popular [Surface Pro line](https://en.m.wikipedia.org/wiki/Microsoft_Surface) brought the PC to tablet form factor, and Apple's [iPad Pro devices](https://en.m.wikipedia.org/wiki/IPad_Pro) gave the iPad a keyboard.

Here are couple of great posts talking about how it feels to work on an iPad:

* [Rediscovering the iPad](http://mattgemmell.com/rediscovering-the-ipad/)
* [When traveling, my iPad is essential and my Mac is the add-on](http://www.macworld.com/article/3130710/ios/when-traveling-my-ipad-is-essential-and-my-mac-is-the-add-on.html)
* [A Computer for Everything: One Year of iPad Pro](https://www.macstories.net/stories/one-year-of-ipad-pro/)
* [Evolving iPad Desktop Usage](https://brooksreview.net/2016/12/evovling-ipad-desktop-usage/)
* [My Tablet Has Stickers](https://medium.learningbyshipping.com/my-tablet-has-stickers-8f7ab9022ebd#.vqpn9n2fi)

With all the activity going on, one could claim using a tablet for work has been normalized. But why work on a tablet instead of a "real computer"? Here are some reasons, at least for me:

### Free of legacy cruft

Desktop operating systems have become clunky. Window management. File management. Multiple ways to discover, install, and uninstall applications. Broken notification mechanisms.

With a tablet you can bypass pretty much all of that, and jump into a simpler, cleaner interface designed for the modern connected world.

I think this is also the reason driving some developers back to Linux and [tiling window managers](http://swaywm.org) &mdash; cutting manual tweaking and staying focused.


### Amazing endurance

Admittedly, laptop battery life has increased a lot since 2013. But with some manufacturers using this an excuse to ship thinner devices, tablets still win the endurance game.

With my current work tablet, I'm customarily getting 12 or more hours of usage. This means I can power through the typical long days of a startup founder without having to plug in. And when traveling, I really don't have to care where power sockets are located on trains, airplanes, and conference centers.

Low power usage also means that I can really get a lot of more runtime by utilizing the [mobile battery pack](http://www.macworld.com/article/3034575/hardware/anker-powercore-20100-review-a-top-performing-usb-c-battery-pack.html) I originally bought to use with my phone. While I've never actually had to try this, back-of-the-envelope math claims I should be able to get a full workweek from the combo without plugging in.

### Work and play

The other aspect of using a tablet is that it becomes a very nice content consumption device after I'm done working. Simply disconnect the keyboard and lean back, and the same device you used for writing software becomes a great e-reader, video player, or a gaming machine.

[![Livestreaming a SpaceX launch](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_spacex_small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_spacex.jpg)

This combined with the battery life has meant that I've actually stopped carrying a Kindle with me. While an e-ink screen is still nicer to read, not needing an extra device has its benefits, especially for a frequent one-bag traveller.

## The setup

I'm writing this on a [Pixel C](https://en.m.wikipedia.org/wiki/Pixel_C), a 10.2" Android tablet made by Google. I got the device last spring when there were developer discounts available at ramp-up to the Android 7 release, and have been using it full-time since.

### Software

[![My Android homescreen](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/android_homescreen_2017_small.png)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/android_homescreen_2017.png)

Surprisingly little has changed in my software use [since 2013](/blog/working-on-android/) &mdash; I still spend the most of the time writing software in either [Flowhub](https://flowhub.io) or terminal. Here are the apps I use on daily basis:

* [JuiceSSH](https://play.google.com/store/apps/details?id=com.sonelli.juicessh) for mosh access to my remote development servers
* [Termux](https://play.google.com/store/apps/details?id=com.termux) for local and offline development
* [Flowhub](https://flowhub.io) for visual programming
* [The Grid](https://play.google.com/store/apps/details?id=io.thegrid.app) for updating my various websites
* [Slack](https://play.google.com/store/apps/details?id=com.Slack), [Hangouts](https://play.google.com/store/apps/details?id=com.google.android.talk), and [Inbox by Gmail](https://play.google.com/store/apps/details?id=com.google.android.apps.inbox) for communications
* [Google Drive](https://play.google.com/store/apps/details?id=com.google.android.apps.docs) and the associated applications for budgeting and planning
* [Chrome](https://play.google.com/store/apps/details?id=com.android.chrome) for web

Looking back to the situation in early 2013, the biggest change is that **Slack** has pretty much killed work email.

**Termux** is a new app that has done a lot to improve the local development situation. By starting the app you get a very nice Linux chroot environment where a lot of software is only a quick `apt install` away.

Since much of my non-Flowhub work is done in _tmux_ and _vim_, I get the exactly same working environment on both local chroot and cloud machines by simply installing [my dotfiles](https://github.com/bergie/dotfiles) on each of them.

### Keyboard

[![Laptop tablet](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_laptop_small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_laptop.jpg)

When I'm on the road I'm using the [Pixel C keyboard](http://www.anandtech.com/show/9972/the-google-pixel-c-review/7). This doubles as a screen protector, and provides a reasonable laptop-like typing environment. It attaches to the tablet with very strong magnets and allows a good amount of flexibility on the screen angles.

However, when stationary, no laptop keyboard compares to a real mechanical keyboard. When I'm in the office I use a [Filco MiniLa Air](http://www.cultofmac.com/290750/filco-minila-air-bluetooth-keyboard-review/), a bluetooth keyboard with quiet-ish Cherry MX brown switches.

[![Desktop tablet](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_desktop_small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_desktop.jpg)

This tenkeyless (60%) keyboard is extremely comfortable to type on. However, the sturdy metal case means that it is a little too big and heavy to carry on a daily basis.

In practice I've only taken with me when there has been a longer trip where I know that I'll be doing a lot of typing. To solve this, I'm actually [looking to build](https://www.instagram.com/p/BP0lNxJDng_/?taken-by=henribergius) a more compact custom mechanical keyboard so I could always have it with me.

## Comparison with iOS

So, why work on Android instead of getting an iPad Pro? I've actually worked on both, and here are my reasons:

* **Communications between apps**: while iOS has extensions now, the ability to send data from an app to another is still a hit-or-miss. Android had intents from day one, meaning pretty much any app can talk to any other app
* **Standard charging**: all of my other devices charge with the same USB-C chargers and cables. iPads still use the proprietary Lightnight plug, requiring custom dongles for everything
* **Standard accessories**: this boils down to USB-C just like charging. With Android I can plug in a network adapter or even a mouse, and it'll just work
* **Ecosystem lock-in**: we're moving to a world where everything &mdash; from household electronics to cars &mdash; is either locked to the Apple ecosystem or following standards. I don't want to be locked to a single vendor for everything digital
* **Browser choice**: with iOS you only get one web renderer, the rather dated Safari. On Android I can choose between Chrome, Firefox, or any other browser that has been ported to the platform

Of course, iOS has its own benefits. Apple has a stronger stance on privacy than Google. And there is more well-made tablet software available for iPads than Android. But when almost everything I use is available on the web, this doesn't matter that much.

## The future

[![Hacking on the c-base patio](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_cbase_small.jpg)](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/android-tablet-2017/pixel_c_cbase.jpg)

As a software developer working on Android tablets, the weakest point of the platform is still that there are _no browser developer tools_ available. This was a problem in 2013, and it is still a problem now.

From my conversations with some Chrome developers, it seems Google has very little interest in addressing this. However, there is a bright spot: the new breed of convertible Chromebooks being released now. And they run Android apps:

* [How Chromebooks Are About to Totally Transform Laptop Design](https://www.wired.com/2016/09/chromebooks-totally-transform-laptop-design/)
* [Detachable Chromebooks, Pixel C And The Future Of Chrome OS](https://chromeunboxed.com/detachable-chromebooks-pixel-c-and-the-future-of-chrome-os/)
* [Samsung’s Chromebook Pro gives me hope in Chrome OS&mdash;thanks to Android’s help](https://arstechnica.com/gadgets/2017/02/samsungs-chromebook-pro-a-thoughtful-marriage-of-android-and-chrome-os/)

Chrome OS is another clean, legacy free, modern computing interface. With these new devices you get the combination of a full desktop browser and the ability to run all Android tablet software.

The Samsung Chromebook Pro/Plus mentioned above is definitely interesting. A high-res 12" screen and a digital pen which I see as something very promising for [visual programming](https://flowhub.io) purposes.

However, given that I already have a great mechanical keyboard, I'd love a device that shipped without an attached keyboard. We'll see what kind of devices get out later this year.
