---
  title: "First day with Nokia 770"
  categories: 
    - "mobility"
    - "tablet"
    - "gear"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/770-deathmonkey-small.jpg'

---
I had the [Nokia 770][8] web browser device [waiting on my desk][13] as I returned from [South Africa][7]. 770 is a nice, small, [Linux-powered][9] internet appliance that is able to utilize either a WLAN connection, or mobile phone's connection via Bluetooth.

[The device][10] is compact and lightweight enough to be basically carried all the time. It also has a screen good enough for reading almost any websites. These two factors serve to make web and RSS feeds ubiquitously available, opening interesting possibilities:

Yesterday I had to go to a store to buy a new WiFi base station, as the previous one in my home had died. In the end the choice was between Airport Express and another one. Apple's minimalist product packaging didn't include enough specifications, so I took out the 770, and browsed to [Apple's product page][11]. There I could read the specs and make an informed buying decision.

In addition to this, I've also used it for quick net banking while on the move. Very handy!

![The 770 surfing to Death Monkeys](https://d2vqpl3tx84ay5.cloudfront.net/770-deathmonkey-small.jpg)

Since the device runs Linux, I'm also looking forward to [developing some Python applications][12] to make mobile work easier. Especially I'm interested in exploring the use of position information to create the [real-world Hitchhiker's Guide to the Galary][21]. [Placeopedia RSS feed][22] will be an excellent starting point for finding "information near you".

## Useful applications

The main use case for my N770 is quick checking of information using the web browser, and reading news via RSS on the road. However, it may also be handy in situations where I need to send short emails or perform some quick UNIX maintenance. To support these situations, I've installed the following add-on applications:

* [GAIM][20] instant messenger
* [AbiWord][19] word processor
* [Xterm][18] terminal emulator
* [SSH client and server][17]
* [Vim][16] text editor
* [Python][15] programming language

I'm now looking for a good Bluetooth keyboard to enable writing meeting notes on the device instead of a bulky laptop. The [aviation use cases][14] also sound interesting.

## Gripes

Of course, the current 770 is just a first iteration, and there are several things that could be better. The first issues I ran into were:

* No [`vi` editor][2] installed as default, despite `vi` being [part of the POSIX standard][1]. Of course, [VIM package][3] is available
* Web browser doesn't support [feed autodiscovery][4]. This is a bit silly especially as the product bundles an RSS reader in the default package
* So far I haven't figured out how to copy content from web pages on the device. The pointer scrolls instead of selects
* There isn't a good default way to kill software that hangs up. I've had the News Reader do this quite a bit. The [Load applet][5] will eventually help here
* There is no way to switch the browser to use `handheld` [CSS profile][6], now it always shows web pages in "desktop screen" mode

[1]: http://www.saki.com.au/mirror/vi/define.php3
[2]: http://www.susnet.co.uk/mastering-the-vi-editor.html
[3]: http://www.bleb.org/software/770/#vim
[4]: http://diveintomark.org/archives/2002/05/30/rss_autodiscovery
[5]: http://koti.welho.com/jpavelek/tmp/770/
[6]: http://www.w3.org/TR/REC-CSS2/media.html
[7]: http://bergie.iki.fi/midcom-permalink-497ec5286f3c4bcde5d82ff56cbd323d
[8]: http://europe.nokia.com/nokia/0,1522,,00.html?orig=/770
[9]: http://www.maemo.org/
[10]: http://arstechnica.com/reviews/hardware/nokia770.ars
[11]: http://www.apple.com/airport/
[12]: http://www.teemuharju.net/2006/02/08/coding-for-nokia-770-using-python-part-2/
[13]: http://www.nemein.com/people/rambo/first-look-at-n770.html
[14]: http://www.karoliinasalminen.com/blog/?page_id=67
[15]: http://maemo.org/maemowiki/ApplicationCatalog#head-d49b7f2b0e0e1e45bf85095eac061507a5ccfbda
[16]: http://maemo.org/maemowiki/ApplicationCatalog#head-5a2314e34a0e247ce137af6a95b37ae8e7a74b83
[17]: http://maemo.org/maemowiki/ApplicationCatalog#head-63fdb5829e44b95e94f65ccd4507699cb9aa86ea
[18]: http://maemo.org/maemowiki/ApplicationCatalog#head-8f688525eb130595f8eb48a950077e47bce33a3b
[19]: http://maemo.org/maemowiki/ApplicationCatalog#head-3f570646d26ffb122994e8e8cfc85b88f22baea4
[20]: http://maemo.org/maemowiki/ApplicationCatalog#head-2507da71a190791bb8bb4afe2ccee3abc2859bb8
[21]: http://bergie.iki.fi/midcom-permalink-4b946119cef546596a13e6bf7628c896
[22]: http://www.placeopedia.com/data/
