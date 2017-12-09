---
  title: "Posting pictures from iPhoto to Midgard"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/photon-picture-online.jpg'

---
[Photon][1], Jonathan Younger's nice [photoblogging][2] plugin for [iPhoto][3] was [released under LGPL][4] last thursday. The tool officially supports Wordpress, MT, TypePad and Blojsom, but actually posts using the [standard MetaWeblog API][5] that [Midgard also supports][6].

Here's how to use it with Midgard:

## Install the plugin

![Photon installer on OS X](https://d2vqpl3tx84ay5.cloudfront.net/photon-installer.jpg)

## Check the MetaWeblog URL of your blog

[MidCOM's blog component][7] supports MetaWeblog API by default. The URL for it is the blog's URL, with `rpc/metaweblog/`. So in my case when the blog URL is `http://bergie.iki.fi/blog/`, the RPC URL is `http://bergie.iki.fi/blog/rpc/metaweblog/`.

## Edit the Photon settings

Photo's settings can be found in the _Share_ menu item in iPhoto. In addition to the regular items like _File Export_ and _Web Page_, there should be a new _Weblog_ tab.

![iPhoto's Share Weblog tab](https://d2vqpl3tx84ay5.cloudfront.net/photon-weblog-tab.jpg)

Here you should select the Weblog _Settings..._ to add your Midgard-powered blog into the list.

Unfortunately since Midgard is not yet an officially supported blogging system in Photon, the _Autodiscover_ feature does not work an so you need to input your blog's information manually. _Blog ID_ doesn't matter with Midgard, but the _Access Point_ should point to your blog's RPC URL. Select __Blojsom__ as the _Platform_, as that makes Photon use standard MetaWeblog API instead of [Movable Type API][8].

## Entry creation preferences

Photon allows you to configure what information is stored into what standard Metaweblog entry field. The selections here depend on how you have configured your [content schema][9], but these are fairly good defaults:

![Weblog entry creation settings in iPhoto](https://d2vqpl3tx84ay5.cloudfront.net/photon-weblog-settings.jpg)

## Posting photos

After the setup has been done, simply select a photo in iPhoto, possibly write title and [keywords][10] for it, and select _Share_-_Export_ (Shift-Command-E). If you are [using categories][11] with your blog you can select them here:

![Exporting photos into the blog from iPhoto](https://d2vqpl3tx84ay5.cloudfront.net/photon-export-photo.jpg)

And that's it. Now your photo should appear in the blog:

![Photoblogged picture online](https://d2vqpl3tx84ay5.cloudfront.net/photon-picture-online.jpg)

While this is already nice, it would be even nicer to be able to add Photon support into [MidCOM's photo gallery component][12]. Since Photon source is now open and it is easy to see what it actually does this should be fairly simple and require only porting the MetaWeblog handlers from newsticker.

Thanks to [Daikini Software][13] for Open Sourcing this great tool!

[1]: http://www.daikini.com/photon/
[2]: http://en.wikipedia.org/wiki/Photoblog
[3]: http://www.apple.com/ilife/iphoto/
[4]: http://www.stopdesign.com/log/2005/08/28/photon-open-sourced.html
[5]: http://www.xmlrpc.com/metaWeblogApi
[6]: http://bergie.iki.fi/midcom-permalink-9496e99a793a6e8761a7813a64f9c567
[7]: http://www.midgard-project.org/midcom-permalink-8d9c73f7101deeb8019ef285c1090582
[8]: http://docs.nucleuscms.org/item/202
[9]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
[10]: http://homepage.mac.com/kenferry/software.html
[11]: http://www.midgard-project.org/midcom-permalink-086c901b8c6ef12ac5851b9f0bfd795a
[12]: http://www.midgard-project.org/midcom-permalink-c4c97cdd30e27c5009dfb286fa364002
[13]: http://www.daikini.com/
