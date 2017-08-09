---
  title: "MidCOM and content update notifications"
  categories: 
    - "midgard"
  layout: "post"

---
[Torben][1] published a new [MidCOM][2] feature called [watcher][3] yesterday. It enables Midgard CMS components and libraries to register to receive notifications about changes to Midgard objects of different types.

As this coincided with the launch of [Google Blog Search][4] which automatically refreshes its search index by following the [Weblogs.Com][5] list of blog changes, I decided to make a new [weblog pinger][6] utility based on the watcher feature.

The [net.nemein.ping][7] library is built on Rogers Cadenhead's [Weblog_Pinger][8] library. It will monitor article changes in components like [newsticker][9] and [wiki][10], and ping a set of defined [XML-RPC ping services][11] on all updates. This should help make blogs powered by [Midgard CMS][12] more visible.

__Updated 07:56:__ This is what the pinger library stores into the MidCOM debug log:

    Sep 14 23:52:07 [debug] midcom_services_cache::initialize: Pinging Ping-o-Matic...
    Sep 14 23:52:08 [debug] net_nemein_ping_pinger::ping: Successfully pinged rpc.pingomatic.com
    Sep 14 23:52:08 [debug] midcom_services_cache::initialize: Pinging Technorati...
    Sep 14 23:52:08 [debug] net_nemein_ping_pinger::ping: Successfully pinged rpc.technorati.com

And as can be seen, the response from Google is quite fast (the article was in searches much earlier than 1 hour after posting, but I didn't realise to take a screenshot):

![This article on Google Blog Search](https://d2vqpl3tx84ay5.cloudfront.net/google-blog-search.jpg)

The current implementation of pinger has two limitations. First of all, as the pings are now run during the HTTP request that saves an article, the request can become slow if there is heavy traffic at one of the services. The solution for this would be to store the notifications into a temporary record, and then process them via MidCOM's new [cron service][15].

Secondly, it now supports only the basic [Weblogs.Com ping][11] and not the [extended ping][14] that would provide URL to the RSS feed in addition to the regular weblog URL.

__In the other news__, our new [mRFC 0020][13] on date and time handling in Midgard2 is now short of one +1 vote by a Midgard contributor to be passed.

[1]: http://www.midgard-project.org/midcom-permalink-0a9ea3e6f73d97ea9b8b766955e33f2d
[2]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[3]: http://www.midgard-project.org/api-docs/midcom/dev/midcom/midcom_core_manifest.html
[4]: http://www.google.com/blogsearch
[5]: http://weblogs.com/
[6]: http://weblogs.about.com/od/weblogs101/f/howtosendping.htm
[7]: http://www.midgard-project.org/midcom-permalink-900de33314e43d6901fc883d3e964447
[8]: http://www.cadenhead.org/workbench/weblog-pinger/
[9]: http://www.midgard-project.org/midcom-permalink-8d9c73f7101deeb8019ef285c1090582
[10]: http://www.midgard-project.org/midcom-permalink-5f8044fb6b23322ed3fe2d1ff0e50cf6
[11]: http://www.xmlrpc.com/weblogsCom
[12]: http://www.midgard-project.org/midgard/1.7/
[13]: http://www.midgard-project.org/midcom-permalink-2483d6bf98302c3e81fdddc4ad91b784
[14]: http://blo.gs/ping-example.php
[15]: http://www.midgard-project.org/api-docs/midcom/dev/midcom.services/midcom_services_cron.html
