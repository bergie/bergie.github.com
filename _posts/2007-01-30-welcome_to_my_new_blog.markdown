---
  title: "Welcome to my new blog"
  categories: 
    - "geo"
    - "life"
    - "midgard"
  layout: "post"
  cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_layout_2006.jpg'

---
[This][1] is the latest iteration of my home on the web. [I've had a website][3] since sometime in 1994, and under this same "[iki][20]" address since [2001][2]. This latest design was actually made in spring 2006 after [our US trip][4], but has been waiting in mothballs for the right moment.

My website has an important communicative and archiving role for me. It serves in:

* Keeping my friends and family up-to-date on my whereabouts
* Archiving my personal life (in twitters, photos, blogs and locations) for my own use
* ...and finally, providing a channel for communicating things happening in the [Midgard][19] and [OpenPsa][21] spaces

## New features

The site now runs on latest and greatest versions of both [Midgard][5] and [MidCOM][6]. This upgrade does bring some features, but not much. I had actually implemented most of the new things already as custom scripts for the previous site version, which of course made upgrading more difficult. Now things like positioning, categorization, commenting and moblogging are standard features in the distribution.

Still, being a developer, I could not launch a new version of the site without bringing some new features on the table. These include:

The film strip is used to display either [pictures][23] from the week a page was written, or 10 latest pictures

![Film strip and pictures from Brazil](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_filmstrip2.jpg)

[Positioning][22] is now powered by real, mostly [Plazes-powered][8] coordinates and a [real database of cities][7] and [airports][9]. This brings with itself some [Microformat][11] and [GeoRSS][12] goodness, like [live maps][13]

![Positions on the blog entries](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_blog_position.jpg)

My contact information is available as a [machine-readable hCard][28] on most pages

![What Tails extension understands of my contact info](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_microformats_tails.jpg)

The contact information card also has a simple [informal status message][27] powered by [Twitter][26]

![The contact card](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_card.jpg)

Also, less visually:

* The same Twitter status message and my current position are also available as a [Microsummary for Firefox 2.x][10], which in turn updates my instant messaging status

* I'm providing [OpenID][24] information on the site, enabling `http://bergie.iki.fi/` to be my identity when logging into [multiple services][25]

All of this happens in the realization that my site is used less and less in the traditional way of browsing to it, and more and more by different content aggregators like RSS readers, Planet aggregators and Microformat readers.

## The design

So, while the [design is seen by fewer people than earlier][17], I wanted to switch to a lighter design from the previous very black layout. While the great majority of my readers access the content using the RSS feeds, the white background should still make the site more accessible to the rest.

The supporting colors of the site are natural hues taken from the scenery of the Colorado River canyon. This should fit well with the numbers of travel pictures I'm publishing.

There is also my picture on the pages. I realised that it is actually nice to see who the author is, and so switched away from the anonymous picture of [Caucasus Mountains][30] into a picture of the [Grand Canyon with me in it][29].

The old design:

![The old, black design](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_layout_2005.jpg)

The new design:

![The new, earthy design](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/bergie_layout_2006.jpg)

## Midgard template

I'm maintaining the Midgard template for this site in the company SVN repository. I can however make a PEAR package of it available for those interested.

## Performance

Unfortunately I'm still being hosted for free on [Torben's][16] old server that is soon to be decommissioned. This means that the site runs really, really slowly, and because it is a chroot environment I can't even do [caching via Squid][18].

This part will probably improve when I move the site to [FTC's][14] Midgard hosting facilities. I'm also considering other options, like a cheap virtual server from [Louhi.net][15].

[1]: http://bergie.iki.fi/
[2]: http://web.archive.org/web/*/http://bergie.iki.fi/
[3]: http://web.archive.org/web/*/http://bergie.greywolves.org
[4]: http://www.flickr.com/photos/bergie/sets/72157594145039266/
[5]: http://www.midgard-project.org/
[6]: http://www.midgard-project.org/documentation/midcom/
[7]: http://www.geonames.org/export/
[8]: http://beta.plazes.com/user/bergie/
[9]: http://www.partow.net/miscellaneous/airportdatabase/
[10]: http://bergie.iki.fi/blog/setting_adium_status_from_a_microsummary/
[11]: http://microformats.org/wiki/geo
[12]: http://georss.org/simple.html
[13]: http://mapufacture.com/georss/map/show/370
[14]: http://www.ftc.fi/
[15]: http://louhi.net/virtualserver
[16]: http://www.nathan-syntronics.de/me/bewerbung/
[17]: http://www.digital-web.com/articles/where_did_my_beautiful_internet_go/
[18]: http://www.midgard-project.org/documentation/setting-up-squid-reverse-proxy/
[19]: http://bergie.iki.fi/blog/category/midgard
[20]: http://www.iki.fi/index.html
[21]: http://bergie.iki.fi/blog/category/openpsa
[22]: http://bergie.iki.fi/blog/the-midgard-position/
[23]: http://bergie.iki.fi/gallery/photostream/list/bergie/
[24]: http://openid.net/
[25]: http://www.openidenabled.com/software
[26]: http://twitter.com/bergie
[27]: http://www.midgard-project.org/documentation/org-routamc-statusmessage/
[28]: http://microformats.org/wiki/hcard
[29]: http://www.flickr.com/photos/bergie/153160552/in/set-72157594145039266/
[30]: http://www.routamc.org/gallery/black-sea-2004/IMG_5487
