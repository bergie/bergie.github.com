---
title: "TownPortal: Bringing RSS to masses"
source: "http://midgard-project.org/updates/2003-05-06-001.html"
categories:
  - midgard
layout: post
location: Baelum, Denmark
---
[TownPortal](http://townportal.sourceforge.net/) is an Open Source portal package based on Midgard and MidCOM. With TownPortal, local communities can easily manage their public web information, and provide web services for small businesses, clubs and educational institutions in the area. The local organizations gain a simple Content Management interface for managing their basic
information, news and event calendars.

News aggregation is an important point we want to bring to these local communities. To support this, we integrated [RSS 2.0](http://backend.userland.com/rss) output to the news publishing component (de.linkm.newsticker) of the site. This way all news areas, including those of the local clubs are automatically available as RSS feeds.

To make the aggregation features more powerful, we also added a RSS aggregator ([net.nemein.rss](http://web.archive.org/web/20040225071435/http://cvs.midgard-project.org/cgi-bin/cvsweb.cgi/contrib/MidCOM/components/net.nemein.rss.xml?rev=1.3&content-type=text/x-cvsweb-markup)) to the system. This way the news listings of all local organizations hosted in the portal can be made a combination of their own news items and RSS feeds aggregated from anywhere.

We hope this kind of easy integration with tools that will hopefully reach wide circulation is what will slowly bring RSS to public awareness.
