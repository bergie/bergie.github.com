---
title: "Create.js hackathon in Berlin"
layout: post
location: Berlin, Germany
categories:
  - oscom
  - midgard
  - javascript
---
Last week we at [IKS](http://www.iks-project.eu/) organized a two-day hackathon for developers interested in [Create.js](http://createjs.org), [VIE](http://viejs.org), and in new tools for editing websites semantically.

The original agenda for the event can be found from the [event's wiki page](http://wiki.iks-project.eu/index.php/DevWorkshops/VieBerlin), and I believe we got it covered quite well. I've been to quite a lot of hackfests, and usually the first day is mostly spent by people arriving, figuring out the WiFi setup, and getting to know the development tools. This time was different: people jumped straight into the code and started working.

![Create.js Berlin hackathon](/files/createjs-berlin-hackathon1.jpg)

The venue at [Theseus Innovationszentrum](http://theseus-programm.de/de/tiz.php), arranged by [DFKI](http://www.dfki.de/web), was a nice one. We had food, coffee, and fast connectivity. And the place even had toys like [big touchscreen computers](http://youtu.be/A1QkA-yceic) to try Create.js on. On the first evening we continued the event at the [c-base](http://c-base.org/) hackerspace, and the participants staying after Friday went to the [Berlin GitHub drinkup](https://github.com/blog/1203-berlin-drinkup).

![After-hackathon in c-base](/files/createjs-berlin-hackathon2.jpg)

## More robust Hallo and Create

An important theme in the event was to improve both [Hallo](http://hallojs.org/) and Create. The Create.js theme got a lot nicer, and thanks to the contributions from [Alkacon](http://www.alkacon.com/en/) the next versions will run nicely also on older Internet Explorer and Opera versions.

![Create.js after the hackathon](/files/createjs-after-berlin-hackathon.png)

Create's editor selection mechanism [was also rewritten](https://github.com/bergie/create/issues/62). Now you can easily set up custom editor configurations for managing different content types. For instance:

    // Set a simpler editor for title fields
    jQuery('body').midgardCreate('configureEditor', 'title', 'halloWidget', {
      plugins: {
        halloformat: {}
      }
    });
    jQuery('body').midgardCreate('setEditorForProperty', 'dcterms:title', 'title');

    // Disable editing of author fields
    jQuery('body').midgardCreate('setEditorForProperty', 'dcterms:author', null);

In addition to the other activities, documentation in the [Create.js Integration Guide](http://createjs.org/guide/) also got a lot better.

## VIE and literals

The [VIE](http://viejs.org) semantic interaction library is the basis of everything we're doing in the [decoupled CMS](http://bergie.iki.fi/blog/decoupling_content_management/) space.

Next big step for VIE is [better literals handling](https://github.com/bergie/VIE/issues/114), which will allow a lot easier management of multilingual content. Several people were working on this in the hackathon, and I hope we'll be able to release the first beta of VIE 2.1 with this soon.

![After-hackathon in a biergarten](/files/createjs-berlin-hackathon4.jpg)

VIE provides a quite comprehensive [entity type system](http://viejs.org/docs/2.0.0/src/Type.js.html), which most systems don't really utilize yet. To make its capabilities more apparent, I built an integration with the [Backbone Forms](https://github.com/powmedia/backbone-forms) library where you can autogenerate quite nice forms on for any type that VIE knows about. For instance, we can generate forms [for Schema.org types](http://viejs.org/widgets/forms/).

This will be the key feature for implementing a [metadata editor](https://github.com/bergie/create/issues/59) in Create.js, and so it would be nice if CMSs would start providing their content type structure to VIE.

## New CMS integrations

Several of the hackathon attendees came there to work on integrating Create.js with their CMSs. While [the documentation](http://createjs.org/guide/) is getting better, it is still good to be able to help developers implement the necessary steps into their systems.

An interesting new integration is [with Drupal](http://drupal.org/project/create), worked on by Roni Kantis. While Drupal has their own [Spark](http://drupal.org/project/spark) inline editing initiative, the Create.js module should show that cross-CMS collaboration in user interfaces is also possible. I hope to be able to demo this in [DrupalCon Munich](http://munich2012.drupal.org/program/sessions/decoupling-content-management).

![Defining CreatePHP interfaces](/files/createjs-berlin-hackathon3.jpg)

For PHP projects interested in Create.js, the [CreatePHP](https://github.com/flack/createphp) library should make things a lot easier. In the hackathon its interfaces were clarified quite a bit, and now it powers the inline editing capabilities in both [MidCOM](http://midgard-project.org/midcom/) and [Symfony CMF](http://cmf.symfony.com/), with [TYPO3](http://typo3.org/news/article/typo3-phoenix-becomes-iks-early-adaptor/) coming soon.

There was also work done on integrations into popular frameworks like Ruby on Rails and Django. I hope we'll hear more of these in the coming weeks.

## More visibility for Create.js and Hallo

As more and more CMSs are embracing collaboration on the UI level, these projects are becoming quite popular. As I write this, Create.js has [1062 watchers](https://github.com/bergie/create) on GitHub, and Hallo [has 664](https://github.com/bergie/hallo).

While watchers don't necessarily mean more contributions, it is certainly nice to see views like this:

![Hallo and NoFlo on GitHub](/files/github-coffeescript-noflo-hallo.png)

## WYSIWHAT

This week I also participated in the [WYSIWHAT event](https://www.sourcefabric.org/en/community/blog/1268/), where [Sourcefabric](https://www.sourcefabric.org/en/) and [OERPUB](http://oerpub.org/) were discussing the approaches at rich-text editing of educational and large documents.

The event is still ongoing, but it seems there is a lot of synergy between what we're doing with [VIE](http://viejs.org) and [Create.js](http://createjs.org) and their efforts. I'm certainly looking forward to collaborating with them in the future!
