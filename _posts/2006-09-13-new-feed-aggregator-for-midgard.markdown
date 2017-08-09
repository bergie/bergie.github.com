---
  title: "New feed aggregator for Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
[Midgard CMS][1] has had an integrated [RSS and Atom aggregator][2] for several years. It has been used for both bringing simple news feeds to portal sites, and for [Planet-like][3] large-scale blog aggregation.

For _MidCOM 2.6_ I decided to overhaul the system, and implement some new ideas. Now instead of being cached by [Magpie RSS][4], the news items are stored locally into the Midgard database and displayed by the regular [news-handling component][5]. This gives flexibility in presentation and better performance.

![Feed management view](https://d2vqpl3tx84ay5.cloudfront.net/net_nemein_rss_manage_small.jpg)

Feeds are now refreshed from hourly [MidCOM cron][6], or manually. For Planet usage I'm also planning to add support for refreshing feeds based on [weblog pings][7].

To get started with the aggregator, install both [net.nehmer.blog][5] and [net.nemein.rss][8], change the _Enable creating news items from remote RSS and Atom feeds_ setting in `net.nehmer.blog` configuration screen and start subscribing to feeds.

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/midcom-permalink-57feb6276b2dcc01edcf3d01cb6425f6
[3]: http://www.planetplanet.org/
[4]: http://magpierss.sourceforge.net/
[5]: http://pear.midcom-project.org/index.php?package=net_nehmer_blog&release=1.1.6&downloads
[6]: http://www.midgard-project.org/api-docs/midcom/dev/midcom.services/midcom_services_cron.html
[7]: http://blo.gs/ping.php
[8]: http://pear.midcom-project.org/index.php?package=net_nemein_rss&release=2.0.0alpha1&downloads
