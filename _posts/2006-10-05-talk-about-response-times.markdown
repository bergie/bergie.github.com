---
  title: "Talk about response times"
  categories: 
    - "midgard"
  layout: "post"

---
[net.nemein.ping][1] was the original [experimentation ground][2] for MidCOM's content update notifications support. However, it had since fallen into disuse as it waited re-implementation using MidCOM's `at` service to ensure pings are run asynchronously.

Then I saw [this blog post][3] in my RSS reader:

> Today we're launching the Google Blog Search Pinging Service, which is a way for individual bloggers and blog platform providers to inform us of content changes. Blogging providers who syndicate RSS/Atom/XML and want to be included in our [Blog Search][4] index can now ping us directly.

I immediately saw the opportunity to refactor some old code, and so now [net.nemein.ping 1.0.0][1] is out and available. It supports several blog directories including Google and Technorati, and runs the pings in `at` service registered for next minute after an article is published or modified.

__Note:__ Even thought Google announced their service, it doesn't seem to be working yet. From MidCOM's debug log:

    Oct 05 21:57:13 [debug] net_nemein_ping_pinger::ping: Successfully pinged rpc.pingomatic.com
    Oct 05 21:57:14 [debug] net_nemein_ping_pinger::ping: Successfully pinged rpc.technorati.com
    Oct 05 21:57:15 [warn] net_nemein_ping_pinger::extended_ping: Error pinging blogsearch.google.com:\
    5 Didn't receive 200 OK from remote server.\
    (HTTP/1.0 404 Not Found)

__Updated 2006-10-06:__ Google has now fixed their ping interface:

    Oct 06 07:54:16 [debug] net_nemein_ping_pinger::extended_ping: Successfully pinged blogsearch.google.com

__In somewhat related news,__ [Alexander Schuster][5] has just released [beta release of Aegir 1.0.4][6], the first update to the legendary [Aegir][7] administrative interface of Midgard since [July 2004][8]. Cool!

[1]: http://pear.midcom-project.org/index.php?package=net_nemein_ping&release=1.0.0&downloads
[2]: http://bergie.iki.fi/blog/midcom-and-content-update-notifications.html
[3]: http://googleblog.blogspot.com/2006/10/got-blog-will-ping.html
[4]: http://www.google.com/blogsearch
[5]: http://privat.galak.dyndns.org/
[6]: http://privat.galak.dyndns.org/blog/aegir104beta.html
[7]: http://www.midgard-project.org/documentation/aegir/
[8]: http://www.midgard-project.org/updates/2004-07-22-000.html