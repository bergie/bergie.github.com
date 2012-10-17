---
title: Internet as your application blueprint
location: Berlin, Germany
date: "2012-10-17 14:17:00"
layout: post
categories:
  - midgard
---
With [Lukas Smith](http://pooteeweet.org/) we gave the Monday keynote in this year's [International PHP Conference](http://phpconference.com/), titled [The Internet is your application blueprint](http://it-republik.de/php/news/Exklusiv-Die-Opening-Keynote-der-IPC12-%5BVideo%5D-065146.html). [The video](http://youtu.be/VQdl7J_24PA) is now online:

<iframe width="640" height="360" src="http://www.youtube.com/embed/VQdl7J_24PA" frameborder="0" allowfullscreen></iframe>

The main argument of the keynote is that even though the big promises of the [Service-Oriented Architecture](http://en.wikipedia.org/wiki/Service-oriented_architecture) hype of 2000s haven't happened, by now companies are using lots of services when building their web applications. Consider these:

* Web analytics
* Streaming media
* Commenting
* Authentication
* Payments

Five to ten years ago you would have done all of these on your own, but now most websites instead get the features by integrating services like [Google Analytics](http://www.google.com/analytics/), [Vimeo](http://vimeo.com/), [Disqus](http://disqus.com/), and [Facebook Connect](https://developers.facebook.com/blog/post/2008/05/09/announcing-facebook-connect/) or [BrowserID](http://www.mozilla.org/en-US/persona/). And services are also making their way to the server side, with providers like Heroku making it easy to build your application on top of [various add-ons](https://addons.heroku.com/).

This service-oriented thinking can be very powerful also when building your own applications, allowing [polyglot programming](http://polyglotprogramming.com/) where you use the right tool for each job, or simply enabling you to scale different parts of your service independently.

In addition to service-oriented IaaS or PaaS offerings, techniques like [Edge Side Includes](http://en.wikipedia.org/wiki/Edge_Side_Includes) and [Message Queues](http://en.wikipedia.org/wiki/Message_queue) make this approach easy to manage.

Some good blog posts related to this:

* [Building a website in 2012](http://sutoiku.com/post/31544317374/building-a-website-in-2012)
* [How we build CMS-free websites](http://developmentseed.org/blog/2012/07/27/build-cms-free-websites/)
* [Service oriented problems](http://rdegges.com/service-oriented-problems)
