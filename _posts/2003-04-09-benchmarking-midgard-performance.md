---
title: Benchmarking Midgard performance
layout: post
categories:
  - midgard
---
There is [a thread](http://marc.theaimsgroup.com/?t=104982665600005&r=1&w=2%5C%22) on Midgard user list about tuning Midgard to support over 100,000 page views per day.

Chris Davies writes:

> Just out of curiosity, is anyone using midgard on a site that is getting 100,000 pageviews per day?

> I'm doing some minor benchmarking on my prototype site to replace a site that built static html documents, and watching the mysql logs, I am astonished at the number of queries that are generated just to generate a single page with 1 article.

Martin Langhoff provided some useful information:

> Yes, it generates many simple mysql queries. The trick is to know how to configure the server.

> Apache-PHP configuration is very important, so what I do is I follow the 'modperl' guide from Stas Bekman (when configuring for high traffic, mod_php has a lot in common with mod_perl) to figure out whether I want a frontend apache with modproxy, and to set my maxclients, maxrequests perchild, etc. RAM and dynamic liinking are major factors here.

> Then mysql settings are critical for good performance. Search the archives, there is an interesting thread on configuring apache/php/midgard/mysql for ideal performance.

> Of course, if you split mysql to a separate server, connect the 2 servers with gigabit ethernet.

> I don't know if the caching version of mod_midgard is stable, but that should save you all the 'page building' queries.

> An important recommendation: put a reverse proxy (squid?) on port 80 and tell it to cache your complely served pages. files and images. From your code, make sure you set HTTP headers to let the proxy know if it can cache or not that particular page. Depending on your site, it may cut the load down 50% or more. 
