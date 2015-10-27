---
layout: post
title: "Create.js Update: Documentation, Hackathon, DrupalCon"
location: Berlin, Germany
categories:
  - midgard
  - oscom
published: true
---
[Create.js](http://createjs.org) is our take on modern web editing built on [semantic technologies](http://viejs.org) and the ideas of [Decoupled Content Management](http://bergie.iki.fi/blog/decoupling_content_management/).

With Create, CMS developers can provide a fresh way for their users to write content on websites, and thanks to the decoupled nature this user interface can be adapted to work on any back-end.

There are even some libraries like [CreatePHP](https://github.com/flack/createphp) and [VIE-GWT](https://github.com/alkacon/vie-gwt/) to make this easier. Those wanting to do the integration from scratch can also take a look at [Blogsiple](https://github.com/bergie/blogsiple) our Node.js testbed for Create.js.

Here is a quick update of the latest happenings in Create.js land. If you want to follow the project in more detail, feel free to [watch it on GitHub](https://github.com/bergie/create).

## Integration Guide

Yesterday we released the [Create.js Integration Guide](http://createjs.org/guide/) aimed at helping developers to use these tools. The guide describes all the relevant Create APIs, as well as outlines the background of the project:

> Create.js was originally written in 2010 as the next-generation content [editing interface of Midgard CMS](http://bergie.iki.fi/blog/introducing_the_midgard_create_user_interface/). [Henri Bergius](http://bergie.iki.fi) presented it in the Aloha Editor developer conference in Vienna last year, and the TYPO3 developers expressed interest in reusing the codebase.

> Because of this we started extracting the various parts of the Create UI into their own, reusable components. The first one was [VIE](http://viejs.org/), which provides the underlaying management of editable objects. In basic use scenario, it loads content annotated with RDFa from the web page, populates it into [Backbone.js](http://backbonejs.org/) Models and Collections, and then creates Backbone Views for the original RDFa-annotated parts of DOM.

> This way the DOM will automatically stay in sync when data changes, whether that happens by user interaction like editing, or through some server communications (we've done [collaborative editing demos](https://github.com/bergie/ViePalsu) over WebSockets, for instance).

It also explains the base design of Create:

> The Create.js interface was then rebuilt on top of this new VIE library by writing a bunch of [jQuery UI widgets](http://sebastian.germes.in/blog/2011/07/jquery-ui-widget-factory-v-1-8/). This way we have an overall default UX that we can ship, but still provide a bunch of different widgets for CMS vendors to pick-and-choose.

![Create.js structure](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/createjs-structure-small.png)

> Some CMSs use the full Create UX, and some use just parts to provide the UX they want to have. Examples of custom UXs include [Symfony CMF](http://blog.iks-project.eu/semantic-enhanced-cmf-editor-now-available/) and [OpenCms](http://iks.alkacon.com/en/).

The different widgets in Create.js are also documented, including:

* [Editable](http://createjs.org/guide/#editable): makes an RDFa entities (as identified by `about`) editable with some editing widget (now plain contentEditable, [Aloha](http://aloha-editor.org), and [Hallo](http://hallojs.org) supported, more to come). Provides the events like "modified" of those widgets in a uniform way. Editable also deals with Collections, allowing user to add/remove items from them
* [Storage](http://createjs.org/guide/#storage): provides localStorage save/restore capability, and keeps track of what entities ought to be saved to the back-end
* [Workflows](http://createjs.org/guide/#workflows): retrieves workflows that user can active for a given  ntity from the back-end and handles running them. These could be simpl  things like publish/unpublish and delete, or more complex workflows
* [Notifications](http://createjs.org/guide/#notifications): notification bubbles/dialogs that can be used for telling user what has happened ("X has been saved successfully"), or query them for what they want to do ("You have X local modifications for this page. Restore/Ignore")
* [Tags](http://createjs.org/guide/#tags): content tagging widget
* [Toolbar](http://createjs.org/guide/#toolbar): holder widget for a toolbar overlay where widgets like
Editable, Storage, and Workflows can place buttons
* [Create](http://createjs.org/guide/#create): ties all of these together to the default UX

## Create.js hackathon in Berlin, July 19-20

We will hold a [Create.js hackathon in Berlin](http://wiki.iks-project.eu/index.php/DevWorkshops/VieBerlin) on July 19-20 2012. The event is organized by [IKS](http://iks-project.eu/) and will be hosted by [Theseus Innovationszentrum](http://theseus-programm.de/de/tiz.php).

Any interested CMS and JavaScript hackers are welcome to join the event by [registering on the Lanyrd page](http://lanyrd.com/2012/createjs-hackathon-berlin/).

You will be joined by developers from many CMS projects, including [Midgard](http://midgard-project.org/), [Symfony CMF](http://cmf.symfony.com/), [OpenCms](http://www.opencms.org/en/), and the [Drupal Create.js module](http://drupal.org/project/create).

## DrupalCon Munich and Create.js

[Decoupling Content Management](http://munich2012.drupal.org/program/sessions/decoupling-content-management) is a featured session in [DrupalCon Munich 2012](http://munich2012.drupal.org/). This talk will discuss both Create.js and [PHPCR](http://phpcr.github.com/) as the building blocks projects like Drupal can utilize to become decoupled.

This event is coming at an especially interesting time, given that [JSON-LD](http://json-ld.org/), the content format used by Create.js by default was recently chosen as the [web services data format](http://groups.drupal.org/node/237443) in Drupal 8.

Drupal has its own next-generation in-place editing project called [Spark](http://drupal.org/project/spark). We feel Spark to be very similar to the goals behind VIE and Create.js, and so would be happy to collaborate with the Drupal team on these.

Last week the Spark team also [chose Aloha Editor](https://drupal.org/node/1580210) as the rich text editor in their interface. Given that Aloha Editor is optionally supported in Create.js, and [TYPO3 will be using](http://typo3.org/news/article/typo3-phoenix-becomes-iks-early-adaptor/) the same editor with VIE and Create.js widgets, the projects are indeed converging.

![I'm a speaker](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/drupalcon_2012_speaker.png)

[Rene Kapusta's](http://www.iks-project.eu/community/people/rene-kapusta) Drupal-based [Semantic CMS](http://semantic-cms.info/) was one of the early VIE adopters.

## Prose

[Prose](http://developmentseed.org/blog/2012/june/25/prose-a-content-editor-for-github/) is a recently-announced content management interface for Markdown documents handled in GitHub repositories. This is a very common way to publish materials, especially on blogs powered by static site generators like [Jekyll](http://jekyllrb.com/) and [DocPad](https://github.com/bevry/docpad).

![Editing my blog with Prose](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/editing-blog-with-prose-small.png)

While currently the Prose tool is heavily dependent on plain text formatting, they have [ambitious plans](https://github.com/substance/surface/blob/master/README.md) on building a new, reusable WYSIWYG editing core library based on [Operational Transforms](http://en.wikipedia.org/wiki/Operational_transformation).

[Collaboration with this effort](https://github.com/bergie/hallo/issues/5) would bring a much more solid editing foundation to [Hallo](http://hallojs.org/), the default rich text editor used in Create.js.

