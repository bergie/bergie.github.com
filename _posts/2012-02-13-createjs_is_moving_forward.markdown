---
  title: "CreateJS is moving forward"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
As you probably know, we at [IKS](http://www.iks-project.eu/) have been working to [decoupled content management](http://bergie.iki.fi/blog/decoupling_content_management/) through semantic technologies. [CreateJS](http://createjs.org/), together with the [VIE](http://viejs.org/) library provide the user-facing part of this approach.

Traditional content management has been very monolithic, meaning that by choosing a particular editing interface, CMS users also have to take the web framework, programming language and content storage mechanism mandated by the developers of their system. By splitting the CMS to the separate concepts of user interface, web framework, and content repository we can provide implementers a greater degree of freedom, and allow CMS developers to focus on the functionality where they can best make a difference.

## What is Create?

With CreateJS, content management system developers can provide a simple, fast, and modern editing interface to their end-users. The UI is completely built in JavaScript, and can be integrated with three easy steps:

1. Mark up your pages with [RDFa annotations](http://www.w3.org/TR/xhtml-rdfa-primer/#id84624)
2. Include [VIE](http://viejs.org/) and [Create](http://createjs.org/) into the pages
3. Implement [Backbone.sync](http://documentcloud.github.com/backbone/#Sync) with your CMS back-end

Create provides functionality like in-page content editing, managing of content collections (like article lists), running workflows for content, and handling images and content tagging. The jQuery UI plugin -based structure allows CMS developers also to implement their own additional functionality. This also makes it possible to either use the whole Create UI as-is, or just to take the parts of it that fit the UX concept of a system.

The [Create UI](http://bergie.iki.fi/blog/introducing_the_midgard_create_user_interface/) was initially made for [Midgard CMS](http://new.midgard-project.org/), but has since been generalized so that it works anywhere. This approach has already [gained some popularity](https://twitter.com/bergie/status/146885794940993536), with CreateJS widgets being used in projects like [Symfony CMF](http://cmf.symfony.com/), [Drupal](http://drupal.org/sandbox/dominikb1888/1388900), and [OpenCMS](http://blog.iks-project.eu/viegwt-hackathon-at-alkacon/).

## The January hackathon

To push CreateJS forward we organized [a hackathon in Zurich, Switzerland](http://lanyrd.com/2012/createjs-hackathon/) in the early January. Participants came from different [IKS project partners](http://www.iks-project.eu/community/partners) and CreateJS early adopters.

Some of the results were:

* [Workflow support](https://github.com/bergie/create/blob/master/src/jquery.Midgard.midgardWorkflows.js), allowing CMSs to define per-content actions like publish/unpublish
* [UI notifications](https://github.com/bergie/create/blob/master/src/jquery.Midgard.midgardNotifications.js), including the possibility to build scripted tutorials for site editors
* [WYSIWYG editing of Markdown documents](https://github.com/bergie/createMarkdown)
* Much more flexible [handling of editing widgets](https://github.com/bergie/create/blob/master/src/jquery.Midgard.midgardEditable.js#L9), for example to choose whether some content should be edited with a rich text editor, or a date picker
* Smart [image insertion](https://github.com/bergie/hallo/blob/master/plugins/image.coffee) when using the [Hallo editor](http://bergie.github.com/hallo/)
* [Content tagging](https://github.com/bergie/create/pull/37) support
* [Blogsiple](https://github.com/bergie/blogsiple), a CreateJS CMS integration testbed written for Node.js

Image insertion, link management, and content tagging have been designed to work together so that they can find about annotated entities thanks to the [Apache Stanbol](http://incubator.apache.org/stanbol/) engine and provide intelligent suggestions on related content.

## Moving forward

The important next step is to consolidate all these changes into the CreateJS codebase and to ensure that everything works smoothly together. Our [continuous integration setup](http://travis-ci.org/bergie/create) would also benefit from a larger number of tests.

After that we can consider new features, including things [currently under discussion](https://github.com/bergie/create/issues).

Helping CMSs to integrate this common user interface (or parts of it) is also a major task for this year. If you're interested in using CreateJS for your system, be sure to [let us know](http://groups.google.com/group/createjs)! And also [follow the progress](https://github.com/bergie/create) on GitHub.