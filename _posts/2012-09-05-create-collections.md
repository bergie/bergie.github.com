---
title: "Better collections with Create.js"
layout: post
location: Copenhagen, Denmark
categories:
  - midgard
  - oscom
---
Copenhagen has been the last stop of the current [Create.js](http://createjs.org/) tour. In here we've been integrating [VIE](http://viejs.org/) and Create into [TYPO3 Phoenix](http://phoenix.typo3.org/), the next major version of this popular CMS.

As usual, this collaboration has ended up in some new features in the libraries. The major one of these is more flexible collection handling.

In previous Create.js versions, collection handling was pretty simplistic. Essentially you could only add a single type of content into each of them:

> Create will use the first entity inside a collection as a “template”, and knows how to add or remove entities from the collection. In Edit mode the user would see an _Add_ button next to the collection.

The new version brings some quite powerful additions to this.

![Choosing type of content to add](/files/create-per-type-add.png)

* Support for adding items to anywhere in the collection. To the beginning, to the end, between existing items
* Ability to choose between type of content to add, if the collection type allows different types (_ranges_ in VIE)
* Limiting collections to a minimum and maximum number of items if needed
* Using custom (and even server-generated) templates for the new added items

[Create.js documentation](http://createjs.org/guide/) has not yet been updated to cover these features, but you can see them in action in the [type-based Create.js example](https://github.com/bergie/create/blob/master/examples/example-withtype.html).

## In the other news

As mentioned on my previous post on [Drupal and cross-CMS collaboration](http://bergie.iki.fi/blog/drupal-and-collaboration/), Create.js and VIE are being considered for the [Spark Edit](http://drupal.org/project/spark) module. There is now [a ticket open](http://drupal.org/node/1774312) where discussion on this is happening. If you're interested in Drupal and Create.js, feel free to participate!

*Written on [a houseboat](http://www.flickr.com/photos/bergie/7928500098/in/photostream) in Copenhagen harbor, where the code sprint is being held.*
