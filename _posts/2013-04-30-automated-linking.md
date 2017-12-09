---
title: Automated linking with rich text editors
location: Berlin, Germany
layout: post
categories:
  - javascript
  - midgard
  - oscom
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/hallo_semantic_linking.png'
---
The web is built of links, of pages linking to other resources on the internet. But making those links manually is tedious. This is another area where [modern inline editors](http://createjs.org) could do better.

Yesterday on Hacker News, there was a thread about [Wikidata](http://www.wikidata.org), Wikimedia Foundation's new knowledge base. [This comment](https://news.ycombinator.com/item?id=5627968) struck me especially:

> I was using Wikipedia the other day and it occurred to me how primitive it is to have all the inner links to other Wikipedia articles defined manually, surely these should have been automated by now (i.e., marking a word or two would link you to the relevant article).

And indeed, this is a usability problem that can already be fixed with the [Semantic Interaction stack](http://viejs.org/) underneath Create.js.

## Introducing Annotate.js

**[Annotate.js](https://github.com/szabyg/annotate.js)** is a VIE widget built by Szaby Grünwald. It works very similarly to a spell checker in traditional text editors &mdash; you write text, and it highlights the potential entities you might want to link to. You then can either accept or decline these link suggestions by clicking them. In case of multiple potential matches, you can also disambiguate between them by selecting from an offered list.

[Here is a quick video](http://www.youtube.com/watch?v=zAMUpd6rb9k&feature=share&list=UUnPE7t9tqwcsO0LLyw5zuPQ) of Annotate.js in action:

<iframe width="560" height="315" src="https://www.youtube.com/embed/zAMUpd6rb9k?list=UUnPE7t9tqwcsO0LLyw5zuPQ" frameborder="0" allowfullscreen></iframe>

You can also try it yourself [with an online demo](http://szabyg.github.io/annotate.js/).

Currently Annotate.js [has been integrated](https://github.com/bergie/hallo/blob/master/src/plugins/annotate.coffee) with the [Hallo rich text editor](http://hallojs.org), but it would be easy to do the same with other popular editors like Aloha and CKEditor.

## Connecting to entities

The big question with automatic linking is *where the entities come from*. There are services like [OpenCalais](http://www.opencalais.com/) that can provide these suggestions for your content, but most of them are focused only on shared knowledge bases of big companies, famous people, and major cities.

Unless you're running a newspaper, it is unlikely that these are the things your content is about.

**[Apache Stanbol](http://stanbol.apache.org/)** is an open source engine that can provide the enhancements for you. Out of the box it provides suggestions based on the Wikipedia knowledge repository. But more importantly, you can feed it with your own entities.

This way the enhancements you get for your content can be tuned to be meaningful to your content and your audience. If you write about medicine, they could be about symptoms and diseases, or if you're writing about technology, they could be specific open source projects and their contributors. With Stanbol, the choice is yours.

The current downside of Stanbol is that you'll have to run it yourself, but there may be [solutions coming for that as well](http://signup.redlink.co/).

## Beyond editing

Like [never losing your content](http://bergie.iki.fi/blog/never-lose-content/) or [managing collections](http://bergie.iki.fi/blog/create-collections/), Annotate.js shows what we can do to improve the editing experience when we interact with it in a *semantically meaningful* manner.

What Annotate.js does is not merely creating links, but it also marking the machine-readable relationship between them and the HTML content being edited. This can then be used by yet another set of tools &mdash; like search engines &mdash; to understand and organize the content better.

It is easy to see Create.js (like Drupal did, [unfortunately](http://drupal.org/node/1979784)) as just an easy way to add nice inline editing features to your CMS. However, while that is a good initial step, the addition of being able to interact with your content on the semantic level can do a lot more. Automated linking is just another demonstration of that.

As the ecosystem around Create.js and VIE matures, and it ships in more systems, there will be things that we can't even imagine now built on the stack.

If your CMS is [properly decoupled](http://bergie.iki.fi/blog/decoupling_content_management/), you can benefit from that immediately.
