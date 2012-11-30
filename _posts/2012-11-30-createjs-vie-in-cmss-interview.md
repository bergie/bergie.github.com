---
title: "Interview: Create.js and VIE in CMSs"
layout: post
location: Berlin, Germany
categories:
  - oscom
  - midgard
---
[Create.js](http://createjs.org/) and [VIE](http://viejs.org/) were recently added [to the core of Drupal 8](http://drupal.org/node/1849526). Just like [with TYPO3 Neos](http://bergie.iki.fi/blog/typo3-neos-and-createjs/), I'll write a longer post on how things went later.

The German [PHPmagazin](http://it-republik.de/php/php-magazin-ausgaben/ZF2-000528.html) was already fast enough to interview me on that at _[VIE und Create.js: Warum In-place Editing so erfolgreich ist](http://it-republik.de/php/news/VIE-und-Create.js-Warum-In-place-Editing-so-erfolgreich-ist-065930.html)_.

While there were many interesting CMSs already using Create -- including [OpenCms](http://www.opencms.org/en/), [Symfony CMF](http://cmf.symfony.com/), [Midgard](http://midgard-project.org/midcom/), and [Neos](http://neos.typo3.org/) -- I can understand why the integration with Drupal has received so much notice. After all, the system is [estimated to](http://w3techs.com/technologies/details/cm-drupal/all/all) have a 7% market share of all CMSs, and so to run more than 2% of the entire web. In 2010 this was [calculated to mean](http://engineindustries.com/blog/jason/how-many-websites-use-drupal-lets-estimate-number-part-one) about 7 million websites. These numbers are big.

The PHPmagazin interview was published in German. For the more international audience, I received permission from the author to publish the English version here on my blog:

> First of all congratulations to the success of your libraries: Symfony CMF and Drupal seem to like you very much.

Thanks! I'm really happy that major CMSs like Drupal and TYPO3 have joined the Create.js effort, as well as some of the newer projects like Symfony CMF. We're still sadly missing some of the big names like WordPress and Joomla. I'd be happy to help them get started as well.

It should be noted however that the libraries have been a team effort. While I started and do maintain them, many others from the [IKS consortium](http://www.iks-project.eu/) and the various CMS projects have contributed significantly.

> How come, they consider your libraries over others?

I'd imagine it is the combination of:

* Timing (they all have been thinking about inline editing in this development cycle)
* Standards (VIE and Create work with the web standards, not against them)
* Focus (the Create library is really only intended for inline editing for CMSs, nothing more, nothing less)
* Licensing (MIT license allows them all to integrate this code without any legal hassles)

*I could expand a little bit on the timing point. The HTML5 suite of standards is now out with useful features like localStorage, contentEditable, and RDFa, and these already have decent support in mainstream browsers. There are also great tools like [Aloha Editor](http://aloha-editor.org/) and my [Hallo.js](http://hallojs.org/) utilizing them. This all means the time is right for bringing direct manipulation interfaces into content management systems.*

> What does it mean for you libraries to be part of a project? Do we have to fear fragmentation into many builds for each CMS?

Obviously versioning will be an issue. I hope the CMSs will track versions of my libraries as closely as their release cycle allows, but in any case backwards compatibility is something that we will have to take seriously, as this library will be installed on millions of servers.

As for fragmentation, I think the fact that VIE and Create encourage CMS projects to consider and adopt standards like RDFa and JSON-LD will actually reduce fragmentation between systems and increase possibilities for interoperability and shared code.

> What kind of issues are there to be fixed when implementing vie/create into a CMS?

Inline editing is quite closely connected to two areas in a CMS:

* We need to be able to tell in CMSs output templates where the editable things are, and what they are (usually via RDFa annotations)
* We need to be able to save changes back to the server (usually via a RESTful API)

Both of these are things where most CMSs have had to do some server-side work to make Create.js possible, and there have even been libraries like [CreatePHP](https://github.com/flack/createphp) built to make that easier.

At the same time, adding support for the different capabilities of the different CMSs has meant that Create and VIE have become better with each new system we integrate with.
