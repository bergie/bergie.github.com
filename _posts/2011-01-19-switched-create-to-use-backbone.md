---
title: Switched the Midgard Create CMS interface to use backbone.js
location: Helsinki, Finland
categories:
  - midgard
layout: post
source: "http://www.qaiku.com/channels/show/midgard/view/73437b8c241311e097f3a77e0d84bb72bb72/"
---
![Create UI](https://d2vqpl3tx84ay5.cloudfront.net/37e421f424a911e09f00eb8d996c453d453d.png)

This is how the UI looks now.

* Content is edited straight on your regular page, no forms and no weird admin UIs
* _Publish_ and _Delete_ buttons initiate workflows configured to the system
* Images can be added via drag-and-drop
* _Edit_ is a state that enables all areas that have been configured editable, and also includes the _Add_ buttons to listings
* _Add_ slides in a new item, based on how the listing looks like

![Create UI on MeeGo netbook](https://d2vqpl3tx84ay5.cloudfront.net/a9a87750259311e091ace3fde88a59745974.png)

And this screenshot comes from Midgard Create running on my MeeGo Netbook

Installation could be slightly smoother, though:

* MeeGo PHP packages don't come with PEAR
* MeeGo Midgard packages didn't install SQLite GDA provider by default
* MeeGo PHP packages didn't have pcntl (needed `php-process` for that)

Anyway, cool stuff! 
