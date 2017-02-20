---
title: Never lose content
layout: post
location: Berlin, Germany
categories:
  - midgard
  - oscom
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/createjs-storage-restore.png'
---
One important part of writing web content is reliability. Since everybody has had bad experiences with their current tools, the current level of trust in web editing tools is low. We've all been there, maybe the browser crashed, or the server-side session expired. But suddenly the article you've spend an hour writing is gone.

This is why so many people have fallen back into writing their web content first in a desktop office application, and later copy-pasting it into their content management system. The trust in their CMS is gone.

Unfortunately, office applications make poor HTML editors, and so a whole industry has risen around this [content clean-up problem](http://www.codinghorror.com/blog/2006/01/cleaning-words-nasty-html.html).

When content is being written in a desktop application, other possibilities also suffer. While this happens, your content doesn't benefit from the image handling, versioning, or collaboration facilities provided by your CMS. So in the end your full-featured CMS becomes just a lowly web-publishing pipeline.

To tackle this problem we need to win the trust of our users back. In web editing, that means _never losing content_.

Luckily, modern JavaScript techniques make this problem solvable for [Create.js](http://createjs.org/). In Create, every key press, and every piece of pasted content gets stored safely into your browser's [localStorage](http://en.wikipedia.org/wiki/Web_storage). And should something go wrong, the next time you access a page you've been editing you will be presented with this friendly dialog:

![Create.js content restore](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/createjs-storage-restore.png)

Click _Restore_ and your previous changes will be immediately inserted into the page.

For some this may appear as a minor detail, but it just shows a yet another way how [Decoupled Content Management](http://bergie.iki.fi/blog/decoupling_content_management/) can improve the user experience of web content authors.
