---
title: Drupal and cross-CMS collaboration
layout: post
location: Istanbul, Turkey
categories:
  - midgard
  - oscom
---
I spent the last week in [DrupalCon Munich](http://munich2012.drupal.org/) followed by [FrOSCon](http://www.froscon.de/startseite/), and gave a talk on the [Decoupled Content Management](http://decoupledcms.org/) story in both.

Especially with DrupalCon I didn't really know what to expect. In past the community has been quite insular, a common trend among PHP projects. With Drupal 8, they're now opening up to new ideas and new code from outside the project. [Using Symfony2 components](http://symfony.com/blog/symfony2-meets-drupal-8) is a great example of this.

But how would they react to [our front-end ideas](http://createjs.org/), especially given their well-advanced homegrown [Spark effort](http://drupal.org/project/spark)?

To cut the long story short, I had a great time in in the event. Lots of good conversations around cross-project collaboration and various standards. There were a surprisingly large number of people I already knew from the Symfony and Linked Data circles, and the [Drupal Berlin Usergroup](http://drupalberlin.de/) folks were especially friendly.

After [my talk](http://munich2012.drupal.org/program/sessions/decoupling-content-management) (video available already!), we ended up spending the last two days of the event porting the Spark inline editing features to [run on top of Create.js](http://github.com/wimleers/edit-createjs) with [Wim Leers](http://wimleers.com/).

![Spark edit running on Create.js](/files/spark-createjs.png)

There are obviously still things to do, but what you have if you replace the Spark edit module in your Drupal setup with the contents [of that repository](http://github.com/wimleers/edit-createjs), is the Spark editing UX, but refactored to use [VIE's](http://viejs.org/) entity objects, and running the various editors (like [Aloha](http://aloha-editor.org/) and some special Drupal widgets) through [Create.js editables](http://createjs.org/guide/#editable). [Create.js storage](http://createjs.org/guide/#storage) is also available, so [never losing content](http://bergie.iki.fi/blog/never-lose-content/) is just a matter of providing the UI dialog to allow users to restore their changes.

The Drupal project will obviously make their own decisions on whether to go with this approach, but I believe it makes a lot of sense. They'll gain a lot of flexibility this way, and the possibility of collaborating with other projects on the UI level. And in effect VIE becomes a JavaScript API that Drupal developers can leverage to build other rich client functionalities. Of course the same capabilities can also be used to run [stock Create.js on Drupal](http://drupal.org/project/create) for those who prefer that.

Based on the conversations I've had in the past weeks, it is quite clear that there is need for shared CMS UI code. This is especially true because:

* _Most CMS projects really lack front-end developers._ If we pool our JavaScript people together we can achieve things no project could do on their own. And if we do this right, each CMS can still keep their unique look-and-feel
* _This is an area where standards are actually moving faster than our implementations have been able to keep up._ This means that specifications like RDFa and JSON-LD already give us more power than we can immediately utilize, and in a way that enables new levels of CMS interoperability. This also validates the [IKS vision](http://www.iks-project.eu/) that CMSs would benefit from semantic technologies

Even apart from Drupal, the Create.js movement seems to be advancing nicely. In the past two weeks I've seen four CMSs I hadn't really known about using Create.js. This includes [Pimcore](https://github.com/chluehr/pimcore-createjs), an interesting CMS targeted at producing campaign websites.

This actually highlights a minor downside in the free software model: _I have no idea who is using software that I build._ So if you're doing something cool with Create.js or VIE, please let me know!

_I'm writing this [in a waterpipe cafe](http://www.flickr.com/photos/bergie/7871059924/in/photostream) in Istanbul where I hope to spend the week advancing my CoffeeScript book. Then the Create.js tour will continue to a TYPO3 hackfest in Copenhagen._
