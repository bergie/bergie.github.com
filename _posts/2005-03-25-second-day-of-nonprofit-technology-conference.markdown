---
  title: "Second day of Nonprofit Technology Conference"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
The friday started with [Esther Dyson's][1] breakfast talk about the importance of Internet for philanthropy and human interaction. After that we had the [Online Publishing and Content Management with Open Source Software][2] session chaired by [Ryan Ozimek][3]. Ryan and _Usha Venkatachallam_ of [Beaconfire][4] opened the talk by introducing the audience to [Open Source Content Management][5] in general and then we had the [SpeedGeeking][6] introductions of the [different CMSs present][7].

![Usha's CMS presentation][8]

## What is the Matrix?

What surprised me was that Usha and Ryan recommended the [OpenSourceCMS.com][9] service as a definitive resource on Open Source Content Management. In reality that service showcases only a very narrow selection of CMS tools, all of which are low-end PHP and MySQL systems. The service also more or less feels like just an advertisement for [OpenSourceHost][10], the company hosting some of those systems.

It should always be remembered that Open Source CMS is much more than just the lightweight tools like [PostNuke][11] and [Drupal][12]. A service like OpenSourceCMS.com misses all of the major systems like [Zope][13], [Midgard][14], [Lenya][15] and [OpenCMS][16]. When I refuted Usha's point on OpenSourceCMS.com being a definitive resource we ended up in argument about what then would be the recommendable resource. Unfortunately the [OSCOM CMS Matrix][17] is in really bad shape, so only service we came up with is [CMS Matrix][18]. It would be good if [OSCOM][5] could rise up to provide a better comparison service.

## The Midgard Points

The SpeedGeeking model meant giving a short 5 minute "elevator speech" presentation about the system to circling groups. As the time was short, we had to keep to the point. I decided to focus on the [points that differentiate][19] Midgard from the other systems, an approach familiar to my [earlier blog posts][29]. The main ones were:

- Midgard uses PHP for scripting but provides its own [Application Server][20] that is provided as an Apache module
- The application server enables us to do cool things like [NTLM single sign-on][21] with Windows networks
- Midgard's [replication system][22] enables offline usage in low-connectivity environments like Africa, and supports real staging/live setups with multiple servers
- Besides PHP, Midgard also has native [Java][23] and [Ruby][24] support
- The "Edit this page" model reduces overhead with publishing content
- All modifications in Midgard are stored in RCS version control repository

I also introduced the group to the [Exorcist][25] concept of migrating content between different CMSs using the [Java Content Repository][26] standard.

## Open Source Project Management

The CMS discussion continued over lunch, and I was invited to speak in the [How to make a successful open source project][27] panel in place of _Karl Fogel_ of [Subversion][28] fame who had had to cancel.

![People in the panel][30]

The challenges of building an Open Source community include:

- Keeping the project goal clear
- Providing support and documentation
- Making the software installable
- Predictability, providing a believable roadmap and release schedule
- Ensuring that the application or component is attractive to developers

The question of roles is also important. In a balanced project there would be not only developers, but also project managers and usability experts. However, that rarely happens in a for-free Open Source projects. Developers ready to work on pro bono basis usually want to be free from the constraints of typical commercial development projects. The easiest way to ensure the availability of also non-coding resources in an Open Source project is to pay for them. The [OpenUsability][33] project tries to bring usability expertise into Open Source projects, but its impact will remain to be seen.

All Open Source projects need a selection of tools. There should at least be a bug tracker, version control system and a mailing list. [Wikis][36] can be very useful for developer conversations and user documentation. In several projects [Planet-aggregated][37] weblogs and instant messaging are beginning to override mailing list as the [communication medium][38]. Project management tools like [BaseCamp][41] could also be useful.

To get the project really rolling:

- Invest into making a working version 1.0, then recruit volunteers
- Get people who know the community the project is for
- Built usability into the development process
- Enable users and beta testers to get feedback directly to the developers

The question of documentation and "final polish" has traditionally been difficult for Open Source projects. One way to make things easier is to get the consultancies and value added resellers utilizing the projects to contribute good-quality documentation. [Extreme usability][40] sprinting can also help.

## Wrapping up NTC

[NTC][34] was a nice event. Much bigger and [more commercial][39] than the typical Open Source conferences, it still had lots of interesting people and conversations to offer. However, the scope of the event being everything related to technology in NGOs, the discussions fragmented quite easily.

I've only [moblogged][31] the event, but for better pictures, there is the [nten05 Flickr tag][32].

Tomorrow would be the [Chicago Penguin Day][35]. However, my flight is leaving quite early, so I probably will rather do some sightseeing instead. The historic skyscrapers of the center are really begging to be photographed...

[1]: http://www.release1-0.com/esther/
[2]: http://www.nten.org/ntc-2005-opensource
[3]: http://wiki.advocacydev.org/cgi-bin/wiki.pl?RyanOzimek
[4]: http://www.beaconfire.com/
[5]: http://www.oscom.org/
[6]: http://wiki.advocacydev.org/cgi-bin/wiki.pl?SpeedGeeking
[7]: http://nten.editme.com/OpenSourceCMS
[8]: http://bergie.iki.fi/midcom-serveattachmentguid-95acb9335f997393549fe5268820210c/usha-scaled.jpg
[9]: http://www.opensourcecms.com/
[10]: https://www.opensourcehost.com/mambo/
[11]: http://www.postnuke.com/index.php?module=Navigation
[12]: http://www.drupal.org/
[13]: http://www.zope.org/
[14]: http://www.midgard-project.org/
[15]: http://lenya.apache.org/
[16]: http://www.opencms.org/opencms/en/
[17]: http://www.oscom.org/matrix/index.html
[18]: http://www.cmsmatrix.org/
[19]: http://www.nehmer.net/~bergie/ntc-2005/
[20]: http://www.midgard-project.org/framework/
[21]: http://www.midgard-project.org/documentation/installation/authentication.html
[22]: http://www.midgard-project.org/documentation/concepts/repligard/
[23]: http://bergie.iki.fi/blog/jukka_back_from_hiatus__jcr_for_midgard.html
[24]: http://midgard.tigris.org/source/browse/midgard/src/apis/ruby/
[25]: http://snip.yukatan.fi/space/start/2005-02-21/1#CMS_migration_with_the_Exorcist
[26]: http://www.jcp.org/en/jsr/detail?id=170
[27]: http://www.nten.org/ntc-2005-together
[28]: http://subversion.tigris.org/
[29]: http://bergie.iki.fi/blog/comparing_midgard_and_wordpress.html
[30]: http://bergie.iki.fi/midcom-serveattachmentguid-018d27a26b35193d051f956c9983c771/opensource-panel-people-scaled.jpg
[31]: http://bergie.iki.fi/moblog/2005/03/
[32]: http://www.flickr.com/photos/tags/nten05/
[33]: http://www.openusability.org/
[34]: http://www.nten.org/ntc
[35]: http://chicago.penguinday.org/
[36]: http://en.wikipedia.org/wiki/Wiki
[37]: http://www.planetplanet.org/
[38]: http://www.inittab.de/blog/2005/02/13#20050213_how-do-os-projects-communicate
[39]: http://blog.social-source.com/2005/03/where-have-values-gone.html
[40]: http://www.unmediated.org/archives/2005/03/extreme_usabili.php
[41]: http://www.basecamphq.com/