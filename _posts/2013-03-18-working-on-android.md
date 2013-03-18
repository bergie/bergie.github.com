---
title: Working on an Android tablet
layout: post
location: Berlin, Germany
categories:
  - mobility
  - desktop
date: "2013-03-18 18:00:00"
---
As mentioned in my post [Hacker-nomad's toolkit, 2012 edition](http://bergie.iki.fi/blog/toolkit-2012/), the lease period of my lovely &mdash; Linux-driven &mdash; [11" MacBook Air](http://bergie.iki.fi/blog/11-macbook_air-the_best_computer_i-ve_ever_had/) expired this month, and I had to consider what kind of gear to go with next.

The safe bet would've been to just get a newer version of the Air, or maybe the [13" Retina MacBook](http://arstechnica.com/apple/2012/11/13-retina-macbook-pro-review-more-pixels-less-value/) with its great screen. A fresher approach would be a ChromeBook, either the cheap and light [ARM ChromeBook](http://arstechnica.com/gadgets/2012/11/review-samsungs-new-arm-chromebook-gets-by-without-intel-inside/), or the [Pixel](http://arstechnica.com/gadgets/2013/03/review-chromebook-pixel-is-too-expensive-and-too-good-for-chrome-os/) with awesome screen and design but crappy battery life.

I'm spending most of my days developing software, and so I should be able to work with a ChromeBook and a remote Linux box. But if that works, why not [try working on a tablet](http://yieldthought.com/post/12239282034/swapped-my-macbook-for-an-ipad)? They're cheap, light, durable, and have an all-day battery life. And if Marc O'Connor was able to [work productively a whole year](http://yieldthought.com/post/31857050698/ipad-linode-1-year-later) with one, why couldn't I?

Since I already had a [Nexus 10](http://arstechnica.com/gadgets/2012/11/nexus-10-tablet-is-a-solid-house-built-on-shifting-sands/), this is what I decided to try.

## The setup

![Nexus 10 as a laptop](/files/nexus10-mobile-small.jpg)

The Nexus tablet has a great, "better than retina" screen, which can render my coding sessions and web user interfaces beautifully. The 10" screen is somewhat smaller than what I had on my Air, but not terribly so.

However, the big problem with [tablet productivity](http://bergie.iki.fi/blog/tablet-productivity/) is text input. Much of our current work environment is still textual, and typing on a non-haptic glass touch-screen is simply not very nice.

### Hardware keyboard

To fix this I purchased a [Microsoft Wedge Keyboard](http://m.tomshardware.com/news/Wedge-bluetooth-keyboard-mouse-review,17633.html), which connects to the tablet over Bluetooth. Recent Android versions have quite full support for external keyboards, allowing me to use it for all text entry, and even for some keyboard navigation. So yes, *Alt-Tab* works.

The Wedge keyboard is about the same size as typical keyboards on compact laptops. Microsoft has always made good hardware, and the keyboard is no exception, providing a quite nice feel for the size it has. A handy additional feature is the included cover, which puts the keyboard to sleep automatically, and can act as a tablet stand when opened. No more issues with keyboard waking up in your bag and [deleting everything](http://andrewhy.de/two-months-with-ipad-as-my-computer/).

For those prepared to lug a heavier option, there is [a Bluetooth mechanical keyboard](http://matias.ca/laptoppro/mac/), which is probably a lot better than any laptop keyboard on the market. And if you already have a good keyboard, Android supports most of the USB ones via an OTG cable.

### Desk setup

While I'm spending quite a lot of my time on the road, [living out of my backpack](http://bergie.iki.fi/blog/all-you-need-is-good-backpack/), I do have a regular desk in the Berlin office I share with [Content Control](http://www.contentcontrol-berlin.de). Since my coding sessions are often long, I've been a bit concerned with my [programming ergonomics](http://www.codinghorror.com/blog/2007/08/computer-workstation-ergonomics.html) for a while now, even considering a [standing desk](http://blog.liangzan.net/blog/2012/09/29/my-standing-desk-experiment/).

![Nexus 10 as a desktop](/files/nexus10-desk-small.jpg)

Tablet has the same advantage as a traditional display in that it is decoupled from the input devices, giving you greater freedom in how to position them. I have a [Callstel tablet stand](http://youtu.be/Mmx1wh72hv0) that allows me to place the tablet in practically any place and height above my desk. The current setup is just slightly below my eye height in the normal sitting position, but I'm still experimenting with that.

### Gorilla arms

The [Gorilla arm syndrome](http://www.wired.com/gadgetlab/2010/10/gorilla-arm-multitouch/) is what everybody brings up with every touchscreen computer &mdash; it is simply not nice to constantly lift your arm to touch the screen.

In my experience this isn't so much of an issue when you're using the tablet positioned similarly as a laptop screen would. But when the screen is up in a more ergonomic position, like it is on my desk, then this quickly becomes an issue.

To solve this I bought a Apple Magic Trackpad, which connects to the tablet again via Bluetooth, and allows both regular mouse usage with Android, as well as many multitouch gestures.

## Why Android

Most people experimenting with replacing computers with tablets go with an iPad, the established market leader. iPad has many benefits over the Nexus 10, including a more mature software ecosystem, and better availability &mdash; if you break or lose your tablet, you'll be able to pick up a new one from practically anywhere, whereas the Nexus devices are only available online.

The reasons for me to go with Android have to do with openness. Since the core operating system is open source, there are [custom ROMs](http://www.cyanogenmod.org) I could use if I wanted, and I can [do file management](http://www.mondaynote.com/2013/02/24/ipad-and-file-systems-failure-of-empathy/) the traditional way when I need to. An even bigger reason is that the [sharing system](http://developer.android.com/training/sharing/send.html) makes it possible to connect various applications together. Being able to run multiple broser engines is also nice for a web developer.

Another bonus is the [availability of NFC](http://en.wikipedia.org/wiki/Android_Beam) on the tablet. I'm quite often sharing content between it and my smartphone. If I run into an interesting web article, I can either send it to my [Kindle to read later](http://david-smith.org/blog/2012/10/11/instapaper-on-the-kindle-paperwhite/), or touch the tablet with my phone and read the article on that. This is surely a feature that will gain more mindshare whenever it is introduced to iPhones.

I also prefer the rugged, rubberized look-and-feel of the Nexus 10 to the cold metallic iPad, even though a 4:3 screen would be better than the widescreen I have now.

### Software used

![Nexus 10 homescreen](/files/nexus10-homescreen-small.jpg)

I really don't need much for my daily work &mdash; just a browser and a terminal. Here are the apps I use on a daily basis:

* [Chrome](https://play.google.com/store/apps/details?id=com.android.chrome) and [Firefox](https://play.google.com/store/apps/details?id=org.mozilla.firefox) web browsers
* [JuiceSSH](https://play.google.com/store/apps/details?id=com.sonelli.juicessh) SSH client to access my remote Linux server
* [TapChat](https://play.google.com/store/apps/details?id=com.tapchatapp.android) IRC client
* [File Manager HD](https://play.google.com/store/apps/details?id=com.rhmsoft.fm.hd) for moving stuff around, including between file servers
* [DroidEdit Pro](https://play.google.com/store/apps/details?id=com.aor.droidedit.pro) for quick local file edits

In addition I'm using some of the built-in Google apps, like Google Talk, GMail, and Google+ for Hangouts.

For offline development I have an installation of [Terminal IDE](https://play.google.com/store/apps/details?id=com.spartacusrex.spartacuside) that allows me to run Linux utilities like vim and git locally. If I would root my tablet I could also install a Ubuntu chroot and run whatever I need. With a previous tablet I even was able to run Node.js servers and databases on the thing!

My development virtual machine is from [DigitalOcean's](https://www.digitalocean.com/) Amsterdam site, providing quite nice fast connections here in Europe. I mostly work on it via [tmux](http://tmux.sourceforge.net) and [vim](http://www.vim.org), and run whatever processes I need, including long-running [NoFlo](http://noflojs.org) flows.

## Pros and cons

Based on my initial experiences of working with this setup for a week, working on a tablet is quite different from a traditional computer. Here are some good things:

* Battery life: the Nexus can easily get me through a full workday with a single charge, meaning that I only need to connect it to a wall overnight. It also charges via standard micro-USB meaning that I don't need any extra power bricks with me
* Portability: most tablets are smaller and lighter than full laptops. And they can be used more easily when standing, sitting on the couch, etc.
* Instant on: there is no suspend/resume cycle. I press the power button, the tablet recognizes my face via the camera, and I'm instantly back to where I left off
* Modularity: with a tablet, my work environment is built out of multiple modular pieces that I can take with me, or leave at the office depending what I intend to do. And I can set them up in different configurations when working
* Touch: for software developers, working on a tablet really drives home the importance of touchscreen friendliness. I've already noticed this affecting my UI designs
* Focus: everything is full screen, meaning no need for window management. Tablet software also tends to be simpler and has less configuration to fiddle with

But obviously there are some downsides as well:

* Office documents: the office suites available for Android are quite poor, and the mobile version of Google Docs is simply terrible. One solution would be using MS Office or LibreOffice over a VNC connection
* Mobile-first web: quite a few websites try to offer even large tablets like the Nexus 10 their silly mobile sites. Thankfully this is becoming less prevalent due to media queries and responsive design
* Offline: much of my current tablet workflow requires me to be online. I could write code and blog posts offline with tools like Terminal IDE, but there would be no way to run and test software
* Bugs: many tablet applications are still in their first generation and lack the maturity and robustness that their desktop counterparts have had time to gain
* Web debugging: while [WEINRE](http://debug.phonegap.com) sort of helps here, it is still a lot less convenient than the web development tools that come with desktop browsers

## Conclusion

This tablet work setup is for now an experiment. If I find it hindering my productivity, I'll just have to get one of the laptops mentioned in the beginning of this post and work in more traditional manner. But if it works, then great! In that case I have finally found a more modern setup for programming work &mdash; one that gives me both better ergonomics and mobility.

I will try this setup for some period of time, and then report the results [here on my blog](http://bergie.iki.fi).
