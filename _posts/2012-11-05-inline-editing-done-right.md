---
title: "Inline editing: you have to do it right"
layout: post
location: Berlin, Germany
categories:
  - oscom
---
In a curious turn of events, the [Plone](http://plone.org/) team is [considering to remove](http://plone.293351.n2.nabble.com/RFC-re-inline-editing-td7560809.html) their inline editing feature around the same time when similar features are being added to popular CMSs like [TYPO3](http://bergie.iki.fi/blog/typo3-neos-and-createjs/) and [Drupal](http://bergie.iki.fi/blog/drupal-and-collaboration/).

While the reason why Ploners are considering to remove the feature is technical, wanting to remove an old library dependency, the discussion thread contains quite a lot of people complaining about inline editing. Some examples:

> No problem for us, we always disabled the feature. It confused users more than it helped them.

> I positively hated that feature and it was always one of the first we switched of in a new site. So to my mind it can be removed.

## What went wrong?

At the same time we've been getting a lot of positive feedback for [Create.js](http://createjs.org/), the inline editing toolkit many CMSs are now using. Are Plone users to different in their preferences? Turns out this might not be the case, and the issue with Plone's inline editing feature is just poorly thought-out UX:

> inline edit was a great feature. People was not complaining against inline editing itself and most of them appreciated it a lot.

> What was the real problem with end users? Users just hated opening the inline edit when trying to click on a link on a document. This could be solved very easily and I'd like a future reimplementation of inline edit keeping in mind these usability issues.

## Create.js could help

So, the important lesson here is that UX matters. This is why in Create you have a separation between the editing state (where clicking on something allows you to edit it), and browsing state where all content behaves normally.

In general we're putting quite a lot of effort into the user experience, for instance by helping users to [never lose content](http://bergie.iki.fi/blog/never-lose-content/) or to [manage collections](http://bergie.iki.fi/blog/create-collections/). We ship Create with a UI that we feel works well, but still allow projects to build their own user experience on top of the common infrastructure.

During the course of the [IKS Project](http://www.iks-project.eu/), I've worked closely with several CMS communities, even participating in their hackathons and developer events. I'd be more that happy to help the Plone community to improve their editing experience the same way.

_If you're interested in a better inline editing experience, the [Create.js integration guide](http://createjs.org/guide/) is a good place to start. My post [Decoupling Content Management](http://bergie.iki.fi/blog/decoupling_content_management/) gives more background on the approach. There are also [videos of Decoupled CMS talks](http://bergie.iki.fi/blog/decoupling-content-management-video/) available._
