---
title: The mobile-first Web
location: Berlin, Germany
layout: post
categories:
  - oscom
  - midgard
  - mobility
---
The growth of mobile web users is staggering. While [some of us](http://bergie.iki.fi/blog/meego-diaspora/) have been browsing the web on mobile devices for nearly ten years, most of the world population is only now getting there.

The [number of mobile web users](http://www.tuaw.com/2013/05/31/internet-trends-report-highlights-ipads-incredible-success-roo/) is already at 1.5 billion, which happens to be quite close to the [total number of Internet users](http://www.internetworldstats.com/blog.htm) back in 2009.

And it is [growing rapidly](http://www.fiercemobileit.com/story/global-smartphone-market-growth-estimates-vary-among-research-firms/2013-06-03). In 2015 there will be an estimated [2 billion smartphone users](http://finance.yahoo.com/news/number-smartphones-around-world-top-122000896.html) which is quite close to the total number of Internet users currently.

In the developed world, this is likely to be a mixture of tablets, smartphones, and traditional desktop computers, with most users having at least two different web-capable devices. In the developing world, *the smartphone is the computer*.

Considering these statistics, *it is insanity to design websites and services PC-first*, with mobile only as an afterthought.

## How to prepare

Just some years ago, the mobile web was a slum. Instead of getting full-featured websites, many sent us out to poorly-built and featureless [m. sites](http://www.mobify.com/blog/6-reasons-mdot-websites-are-dead-ends/). Now more and more sites go with [responsive web design](http://en.wikipedia.org/wiki/Responsive_web_design) that makes the site itself adapt to different screen sizes and resolutions.

But even with responsive design, it is easy to go overboard. Tools like [WordPress Jetpack](http://jetpack.me/support/mobile-theme/) and [jQuery Mobile](http://jquerymobile.com/) oversimplify the site itself by trying to make it look and feel like a native app. In the mobile-first world this is not the right way to go.

In [The Rise of the Mobile-Only User](http://blogs.hbr.org/cs/2013/05/the_rise_of_the_mobile-only_us.html) content strategist Karen McGrane makes a valid point (emphasis added):

> Mobile users should get the same content. It's frustrating and confusing for them if you only give them a little bit of what you offer on your "real" website. If you try to guess which subset of your content the mobile user needs, you're going to guess wrong. Deliver the same content as your desktop user sees. (*If you think some of your content doesn't deserve to be on mobile, guess what — it doesn't deserve to be on the desktop either. Get rid of it.*)

## There is no pixel-perfect

In this new world users will access your content or software using a wildly varying set of devices. And each of them has the reasonable expectation of being able to access the full experience and the full set of features you're providing.

This changes web design substantially. Even in the old world of different PC browsers, *pixel perfect web design* was rarely that. With responsive design, it is [even less so](http://blog.microsecommerce.com/index.php/uncategorized/responsive-design-and-the-demise-of-pixel-perfect/).

Instead:

* Think in *visual components instead of full pages*. The composition of a page out of these components can vary for different screen sizes
* Design the compositions always for at *three screen form factors*: a full-sized desktop or tablet screen, a smartphone screen, and the 7" tablet in between
* Make your *user interface elements big enough* to be used on inaccurate touch screens
* *Never, ever require a plugin* to access some content or functionality

[CSS Media Queries](http://css-tricks.com/css-media-queries/) make responding to different form factors quite easy. And besides that, they also make it easy to optimize for the [different screen densities](http://developer.android.com/training/multiscreen/screendensities.html#TaskProvideAltBmp) we now have. This way your images will look sharp on anything the users have, from the "retina-class devices" to the lowest-specced Chinese smartphone, while requiring the user to only download the assets that their device can utilize.

The devices people use to access the services you provide will vary greatly not only in their display capabilities, but also in the ways you can do input. Some will have mice and physical keyboards, but an increasing amount will instead have a touchscreen. For these users, it is a big service to use the correct [HTML5 input types](http://sixrevisions.com/html5/new-html5-form-input-types/) so that the on-screen keyboards and widgets can adapt to the content being entered.

## The web is not native

The web is its own platform, and as such it is *foolish to try and mimic traditional desktop applications*. It will never feel quite right whatever you do.

It is a lot better to accept this and fully embrace the unique advantages of the web platform:

* *The web is an [universal runtime](http://bergie.iki.fi/blog/the_universal_runtime/)* that works on 100% of the computing devices your users have
* *There are no gatekeepers* telling what you can publish, and *no middlemen* taking a cut of whatever you sell online
* *The web is built out of URLs* that users can easily share with each other, and continue using when they switch devices
* URLs also allow *any application on the web to link to any screen or state of another application*
* It is just as easy to *provide content as it is to provide functional applications* on the web

Every major software company on the planet has their own web browser, and the competition between these is fierce. This will ensure that over time, the web will keep on getting better and faster. Compare this to traditional software platforms that can easily stagnate or get abandoned. Thanks to the standard protocols it also *allows you to use any technology of your choosing* for the server side of your software.

Paul Graham put it well in his [The other road ahead](http://paulgraham.com/road.html) from 2001:

>  And you don't have to know if you bet on Web-based applications. No one can break that without breaking browsing. The Web may not be the only way to deliver software, but it's one that works now and will continue to work for a long time. Web-based applications are cheap to develop, and easy for even the smallest startup to deliver.

## Things are getting better

As somebody who has been developing for the web for nearly [twenty years](http://press.web.cern.ch/press-releases/2013/04/cern-celebrates-20-years-free-open-web) the rate the web developer experience keeps improving is sometimes dizzying.

We get used to some limitations in the stack, and then suddenly something comes along and removes that shortcoming. We're still exploring the new kinds of designs and visual experiences technologies like Media Queries and [WebGL](http://en.wikipedia.org/wiki/WebGL) make possible, just like it took years for the community to find best practices around things like AJAX.

And yet new amazing things keep pouring in. My personal favourite recently has been [Web Components](http://www.polymer-project.org/) which gives a standard way to *provide reusable widgets on the web*, and to do things like *data binding and templating*. This alone will make a lot of the popular frameworks and libraries obsolete.

Just watch [this video](http://youtu.be/0g0oOOT86NY) and see how much easier web development is becoming:

<iframe width="500" height="281" src="https://www.youtube.com/embed/0g0oOOT86NY" frameborder="0" allowfullscreen></iframe>

The current work on standardizing [Web Payments](https://payswarm.com/) together with more grassroots efforts like [Bitcoin](http://bitcoin.org/en/) promise to add better ways to do business on the web. This should remove the last big advantage of native applications in that they're easier (but very expensive) to monetize via app stores and in-app payments.

[Linked Data on the web](http://rdfa.info/) and new features like [Yandex Islands](http://beta.yandex.com/) make it easier to connect web applications and data on the web together. Tools like my [Create.js](http://createjs.org/) make the web easier to edit, and [Web Intents](http://webintents.org/) promise even closer integration between web apps.

Each of these will make the web richer and better. Each of them will allow new startups to be built, and new meaningful connections to happen over the internet, many of these using mobile devices.

It is an exciting time to be a web developer.
