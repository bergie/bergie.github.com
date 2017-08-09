---
  title: "Things happening last May"
  categories: 
    - "life"
    - "midgard"
  layout: "post"

---
Finally the summer has started here in Finland and it is warm enough to spend time at the [summer cottage][15] and swim in the lake. At the same time, my trusty [Triumph Legend][18] is again running after its [starter problems][19]. Big thanks to [Mp-Asennus.com][20], especially as they installed the Kawasaki starter ahead of schedule and under budget!

I've been too busy to blog about all the stuff happening [last month][26], so here are some quick updates.

![Nata and Kerttu on a Suomenlinna picnic](https://d2vqpl3tx84ay5.cloudfront.net/Suomenlinna_Nata_Kerttu.jpg)

## Exorcism at work

One major problem with Content Management Systems has been that it has been very difficult to switch between systems as needs change or vendors go out of business. The [Portable Site Information][27] project was started to create an XML format for inter-CMS content transfers, but it failed to get traction.

Our concept for solving this problem is the [Exorcist migration tool][28], developed by original Midgard CMS founder and Java Content Repository guru [Jukka Zitting][29]. Exorcist provides an XML pipeline system for exporting content from a system, then transforming it to an appropriate format, and finally importing to another system. The XML transformations can be made either point-to-point, or using the PSI format.

Point-to-point transformations have the advantage of being relatively loss-less, as they can map the features of different systems quite accurately. PSI on the other hand provides a generic format that all Exorcist-compatible systems must support as the lowest common denominator.

Some time ago we [performed the first Exorcism][30], successfully transferring three sites from EasySiter to Midgard CMS. All content and users were imported without problems, and only the site layout had to be manually converted. Exorcist uses the [Midgard-Java][31] bindings to access the Midgard content structure.

![Matsku and Jose practising archery in Aallonranta](https://d2vqpl3tx84ay5.cloudfront.net/Matsku_Jose_archery.jpg)

## New Nemein team member

[Topi Tuominen][21] joined the Nemein team today. He has a long background in content management and has worked with many different new media companies. At Nemein his main responsibility will be tuning the company's project model to be more efficient.

We're also thinking about different solutions for [unit testing][22] our Midgard solutions. Recently we've encountered some regression issues with MidCOM upgrades, and an automated test suite would bring some peace of mind there, especially if combined with the planned [PEAR packaging][25].

![Topi at the office](https://d2vqpl3tx84ay5.cloudfront.net/Topi_Tuominen_at_office.jpg)

## Midgard indexing

As Topi will inherit my old iBook, I [got][7] a new 15" [PowerBook G4][4] today. [Tiger][5] seems really sweet, especially with the fast [Spotlight][6] search tool. This has reminded me of the plan that MidCOM's [indexer system][8] could be plugged in to a native search system if the platform offers one.

[Miguel de Icaza wrote][9] that [Wikipedia][10] has adopted similar approach and is now using the Lucene.net technology familar from GNOME's [Beagle][11] search tool:

> As of last Friday, Wikipedia started using Mono for indexing and searching the Wikipedia, it was tested first on one server and it is now being used on all three servers.

> Wikipedia's search backend uses Mono and dotLucense, the same search backend that is used by Beagle Desktop Search. Previously, Wikipedia had been using GCJ and Lucene to do the searches but after some tuning, Mono became the new engine.

While Spotlight's [file-oriented][12] approach would make [developing][13] a [Midgard indexer plugin][14] difficult, the benefits would be big. After that documents in the local Midgard database would appear in regular desktop searches, and Midgard wouldn't require a separate indexer to be installed.

![The PowerBook and photo from Drakensberg](https://d2vqpl3tx84ay5.cloudfront.net/New_PowerBook.jpg)

## OpenPSA synchronization

As [noted by Jan Schneider][16], OpenPSA is now using [Horde][24] libraries for [providing SyncML][17] support. The current OpenPSA release uses the stable Horde release, and supports syncing only with some Sony-Ericsson phones. However, Horde CVS has changed quite a bit, and upgrading to it would provide benefits like [Outlook synchronization][23].

Jan Schneider writes:

> We have DevInf (Device Information) support now, which means that adding support for a SyncML client that is not supported by default, because it "speaks" a variant of the standard implementation, is as easy as writing a small class that extends the default DevInf class. So far we have support for the P800/P900/P910 class of mobile phones and Sync4j. Several people are currently trying to get Nokia phones, Blackberry, and Synthesis clients for PocketPC and Palm working.

![Lufthansa Junkers at Helsinki-Malmi](https://d2vqpl3tx84ay5.cloudfront.net/Lufthansa_Junkers_EFHF.jpg)

__In the other news__, [congratulations, SmallOne][1]! It seems that the Midgard family is indeed [growing][2] [quickly][3].

[1]: http://www.smallone.net/midcom-permalink-fbecece55ba8096b27f9acef9730550d
[2]: http://people.best-off.org/~dsr/cubelog/archives/2005/03/26/a-little-diva-is-born/
[3]: http://www.kaukolaweb.com/midcom-permalink-b162adbfb2f2ab81a04ac55451e28e21
[4]: http://www.apple.com/powerbook/
[5]: http://www.apple.com/macosx/
[6]: http://www.apple.com/macosx/features/spotlight/
[7]: http://bergie.iki.fi/midcom-permalink-eb8c02c804a23148fe2f289bf3874336
[8]: http://bergie.iki.fi/midcom-permalink-c5a4f2ce31979287ea4f1e43f6391661
[9]: http://tirania.org/blog/archive/2005/May-30.html
[10]: http://en.wikipedia.org/wiki/Wikipedia
[11]: http://beaglewiki.org/Main_Page
[12]: http://arstechnica.com/reviews/os/macosx-10.4.ars/9
[13]: http://developer.apple.com/macosx/spotlight.html
[14]: http://www.midgard-project.org/midcom-permalink-3d79ca5390b40723dec859ffc3a8b1e6
[15]: http://www.helsinginsanomat.fi/english/article/1101979711803
[16]: http://janschneider.de/cweb/home/index,channel,25,story,225.html
[17]: http://www.nemein.com/people/rambo/midcom-permalink-fbe787f1c87886409eaa0f032646aae7
[18]: http://www.routamc.org/bikes/triumph-legend.html
[19]: http://bergie.iki.fi/midcom-permalink-8812f82029b131766f12e9067b58085e
[20]: http://www.mp-asennus.com/
[21]: http://www.nemein.com/en/team/tktuomin.html
[22]: http://www.oreillynet.com/pub/wlg/6008
[23]: http://janschneider.de/cweb/home/index,channel,25,story,226.html
[24]: http://www.horde.org/
[25]: http://bergie.iki.fi/midcom-permalink-1d067d321083390ec8a782d3ead0f34f
[26]: http://bergie.iki.fi/blog/2005/05/
[27]: http://psilib.sourceforge.net/
[28]: http://yukatan.fi/confluence/display/yukatan/2005/02/21/CMS+migration+with+the+Exorcist
[29]: http://zitting.name/jukka/JukkaZitting.html
[30]: http://yukatan.fi/confluence/display/yukatan/2005/05/18/Using+the+Exorcist
[31]: http://yukatan.fi/confluence/pages/viewpage.action?pageId=65
