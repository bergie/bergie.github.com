---
title: TYPO3 Neos and Create.js
location: Gent, Belgium
layout: post
categories:
  - oscom
  - midgard
---
The relation between [Create.js](http://createjs.org/) and the TYPO3 team goes back a long way. They were present in the [IKS event](http://www.iks-project.eu/news-and-events/press-releases/join-us-iks-semantic-interaction-hackathon-vienna-next-month) in February 2011 in Vienna where I presented Create for the first time.

My original idea had been to just build a [new content editing interface for Midgard](http://bergie.iki.fi/blog/introducing_the_midgard_create_user_interface/), but as they also were interested, we ended up removing the Midgard dependencies and building Create and VIE as a fully CMS-agnostic interface, a key part of [decoupled content management](http://bergie.iki.fi/blog/decoupling_content_management/).

Back then TYPO3's next-generation content management system was still going by its codename _Phoenix_. Its user interface plans and techniques shifted, but by July we felt quite optimistic about the integration.

I went to the TYPO3 Developer Days in Switzerland where we discussed both Create and PHPCR. The ideas from those discussions were gathered in what I called [my secret agenda for PHP content management systems](http://bergie.iki.fi/blog/my_secret_agenda_for_php_content_management_systems/).

But then progress stalled for a while.

We met with the TYPO3 developers in the [Mountain View Aloha Editor conference](http://bergie.iki.fi/blog/midgard_create_and_vie_in_the_aloha_editor_conference/), but their plans were still shifting.

In summer 2012 we met again in [IKS's Salzburg workshop](http://blog.iks-project.eu/iks-salzburg-workshop-june-2012/), and things really started happening. Rens from the Phoenix team [joined IKS as an Early Adopter](http://typo3.org/news/article/typo3-phoenix-becomes-iks-early-adaptor/) and we started figuring out how to fit Backbone-based Create in TYPO3's Ember-based user interface.

To finalize things, we joined TYPO3 hackathon that was held on a houseboat in Copenhagen. In the [interview video](http://vimeo.com/50883868) from that event we're talking about the integration work we did:

<iframe src="https://player.vimeo.com/video/50883868?byline=0&amp;portrait=0&amp;badge=0&amp;color=000000" width="400" height="226" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

This video is quite remarkable. When it was first released, I wrote:

> Two years ago it would've been inconceivable that a Midgard developer appears in a TYPO3 product launch video

Every major CMS project that has adopted the Create user interface has ended up improving the Create and VIE story, either directly or because they've helped by testing and reporting bugs. This has happened with Midgard, Symfony CMF, OpenCms, TYPO3, and as I'm writing this, with Drupal. This is how cross-project collaboration should work!

Rens from the TYPO3 team [blogged about the Create.js integration story](http://blog.iks-project.eu/typo3-phoenix-running-on-vie-and-createjs/) earlier. While projects like Midgard and Symfony have used Create as-it-is, the TYPO3 case was a bit different:

* TYPO3 Neos uses a comprehensive set of different possible entity types to construct pages. This is why we ended up [improving Create's collection handling](http://bergie.iki.fi/blog/create-collections/) quite a bit
* Since Neos has its contents in a proper Content Repository, all edits happen in user's personal draft workspace. Create's autosaving mode is very useful there
* Neos has a very specific user interface, with many tools like breadcrumbs and metadata editors that fall outside inline editing but still need to interact with Create
* Editor selection and collection handling needs meant having to inform the front-end system about all the content types and rules used by Neos

All of this meant very hectic work on the houseboat!

Phoenix got rebranded to [TYPO3 Neos](http://neos.typo3.org/) and an alpha was launched in October 2012. We went with Rens to the TYPO3 conference in Stuttgart to give a talk on Create and the new inline editing features powered by semantic technologies. [Video of the presentation](http://youtu.be/bBIkLFFkYtc) is now available:

<iframe width="420" height="315" src="https://www.youtube.com/embed/bBIkLFFkYtc" frameborder="0" allowfullscreen></iframe>

There is also a [demo site of Create-powered TYPO3 Neos](http://blog.iks-project.eu/typo3-neos-iks-demo-site/) available. With the work that happened with technologies like RDFa and Create.js, Neos is well on the way towards being one of the premiere decoupled CMSs. I still hope we can help them to migrate to the [PHP Content Repository standard](http://phpcr.github.com/) instead of running their own.

_Written in the [Drupal 8 Core Sprint](http://groups.drupal.org/node/256573) in Belgium where we're building Drupal's new [inline editing interface](http://drupal.org/project/edit) on top of Create and VIE._
