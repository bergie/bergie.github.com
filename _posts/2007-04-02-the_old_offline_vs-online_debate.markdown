---
  title: "The old offline vs. online debate"
  categories: 
    - "midgard"
    - "mobility"
  layout: "post"

---
The rise of web applications like Gmail and Basecamp is bringing the good old offline vs. online debate again into picture.

Quite a few developers are now working on various [offline-enabled][14] [Ajax][15] [toolkits][16], but 37signals, a prominent developer in the scene [is saying offline doesn't matter][1]:

> The idea of offline web applications is getting an undue amount of attention. Which is bizarre when you look at how availability of connectivity is ever increasing. EVDO cards, city-wide wifis, iPhones, Blackberry’s. There are so many ways to get online these days that the excitement for offline is truly puzzling. Until you consider the one place that is still largely an island of missing connectivity: The plane!

> But planes are not a very common hang-out spot for most people. The two major groups of people who are on a plane often enough to care and have an interest in web applications are traveling salesmen and techies who go to too many conferences.

As some commenter already noted in that blog post, this is all good and well until you try to work abroad and get charged exorbitant roaming charges, or do work anywhere outside the western world. It is also sometimes nice to [purposefully go to some remote location][2] where one can work without any of the interruptions and procrastination excuses a working internet connection automatically brings.

These situations are why I still think the idea of offline applications is a good one, as long as making them doesn't unnecessarily complicate application development. Doing it on the Ajax layer is one option.

Another option is synchronization, like popularized in the [Lotus Notes replication feature][3]. With synchronization, the application always uses a local data repository, and a separate tool keeps moving data back and forth with a central server whenever user has a connection available (or specifically requests it).

There is a standardized synchronization protocol available: Open Mobile Alliance's [Data Synchronization (OMA DS)][4], which was formerly known as SyncML. However, implementing it is fairly difficult without a [SyncML toolkit][5] like [Funambol][6]. Because of this, other protocols like [IMAP][7] or [WebDAV][8] are also sometimes used.

[Midgard's][25] approach to synchronized setups is to provide strong [data import and export][11] capabilities on the framework level and then allow the actual replication tools to be written on application level. [The current implementation][10] includes data synchronization via HTTP and email implemented in PHP. Something like [OpenSync][12], [Conduit][9] or [Funambol][6] would probably make sense later, especially if Midgard starts to become more of a replicated persistent storage system for desktop applications as I predicted in [my presentation in Kristiansand][13].

Offline data access is especially important for mobile devices, which is why I find it very inconvenient that most applications for [Nokia's N800 tablet][17] assume an always-connected model. For example, [Canola][18] [doesn't cache podcasts locally][19], [Rhapsody][20] music is [only available when online][21]. Similarly, there still isn't a [proper offline RSS reading capability][22]. I was using [Maemo Mapper][23] for navigation when driving to the [Utsjoki hunting trip][24], and quite often map downloads failed because GPRS/3G connection broke somewhere in the countryside.

So, in my view offline capability is still very important for any application that is useful when traveling. Internet access may be quite well available inside cities, but still in countryside or in tunnels connection can be really bad. If development tools like Midgard make building offline functionality into apps easier this will hopefully become more common.

[1]: http://www.37signals.com/svn/posts/347-youre-not-on-a-fucking-plane-and-if-you-are-it-doesnt-matter
[2]: http://bergie.iki.fi/blog/finding-resources-automatically-in-openpsa/
[3]: http://beech.vcu.edu/lspace/notesr5/mcenter.nsf/8214739e835361d18525630600486645/852567e200589e568525679e004d2a9d?OpenDocument
[4]: http://en.wikipedia.org/wiki/SyncML
[5]: http://www-128.ibm.com/developerworks/xml/library/x-syncml3.html
[6]: http://www.funambol.com/opensource/
[7]: http://en.wikipedia.org/wiki/Internet_Message_Access_Protocol
[8]: http://en.wikipedia.org/wiki/WebDAV
[9]: http://www.conduit-project.org/
[10]: http://bergie.iki.fi/blog/midgard-replication-service-starts-to-shape-up/
[11]: http://www.midgard-project.org/documentation/php-midgard_replicator/
[12]: http://www.opensync.org/
[13]: http://bergie.iki.fi/blog/midgard-managing_free_software_project_as_a_joint_venture/
[14]: http://www.sitepen.com/blog/2007/01/02/the-dojo-offline-toolkit/
[15]: http://www.zimbra.com/blog/archives/2006/11/taking_zimbra_offline.html
[16]: http://blogs.zdnet.com/BTL/?p=2298
[17]: http://www.nokiausa.com/N800/1,9008,,00.html
[18]: http://downloads.maemo.org/product/canola/
[19]: https://garage.maemo.org/tracker/index.php?func=detail&aid=229&group_id=125&atid=532
[20]: http://www.engadget.com/2007/03/27/nokia-and-real-adda-rhapsody-to-the-n800/
[21]: http://bergie.iki.fi/blog/first_look_at_rhapsody_for_n800/
[22]: http://www.internettablettalk.com/forums/showthread.php?t=4793
[23]: http://downloads.maemo.org/product/maemo-mapper/
[24]: http://www.flickr.com/photos/bergie/sets/72157600010088557/
[25]: http://www.midgard-project.org/