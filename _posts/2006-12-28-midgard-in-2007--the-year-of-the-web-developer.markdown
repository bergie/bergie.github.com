---
  title: "Midgard in 2007: the year of the web developer"
  categories: 
    - "midgard"
  layout: "post"

---
2006 is about to end and the blogosphere is filling up with [wish lists][2] and plans for the coming year. Before I go to [Saint Petersburg][24] for the new year celebrations I wanted to write something about how I see 2007 for the Midgard CMS project.

Software-wise, [2005][21] and 2006 have been good years for Midgard. [MidCOM][19] established itself as the default way of building things and became a lot faster and [user-friendly][11]. Developers got cool new tools like [Query Builder][9], [Collector][13] and [MgdSchema][12]. We also integrated with external packages like [Squid][16] for content caching, [Lucene][15] for full-text search and [Funambol][18] for mobile device synchronization. [Geographic awareness][20] and [Microformats integration][22] also add interesting possibilities to the system.

However, community-wise I feel we also lost something. These new functionalities have mostly been gained at the expense of the installation becoming more difficult and the system harder to understand. And as the learning curve becomes steeper, new users and developers [may pick][23] some less powerful CMS instead of Midgard as their choice.

In 2007 I think we should focus on this problem: __Making Midgard more accessible to the normal web developer__.

The way I see it, there are four areas to put effort into:

__Installation.__ This is the part where we can make most impact. Currently Midgard installation is a [difficult process][17] that takes a lot of time even from a seasoned user of the software.

If we want to make it more "_just running `apt-get`_", we must rethink the whole database and site initialization concept. Datagard must go and be replaced with a PHP-CLI tool that is smart enough to probe and guess most details, and which will not only generate required configuration files, but also populate all data needed into the database.

Now Midgard's default install is geared for setting up a hosting server, and I believe this to be a faulty assumption. Instead of focusing on hosting setups as the easiest and initial install we should focus on single-organization setups. This means creating a sitegroup and an initial site there automatically instead of creating a [Site Wizard][10] host.

__Templating.__ Midgard has a very powerful site templating system, but it is very difficult to understand for new people. Element inheritance, style inheritance, `style-init` elements, semiautomatic substyling, manual substyling and other concepts are difficult to "get". Similarly, the default contents of an element are difficult to get to.

To expose the full power of the templating system to developers we need to write a new kind of style editor for Midgard. The new style editor must work within the site context and tell the site builder what elements are available for customization and where.

Arttu already did some sketches for this new editor, so this might actually be reasonably quick to implement.

Once editing of style templates has been made easier, the next thing to expose to our users should be [Datamanager schemas][14].

__Demo.__ While Midgard will never be featured on demo sites like [OpenSourceCMS][5], we would be able to run our own demo setup quite easily. A company like [Nemein][6] or [Anykey][7] could donate the needed server resources and we could set up a system where people could gain access to a Midgard setup that would be automatically cleaned at some interval.

As the replication system in Midgard matures we could even allow people to start building their site at the demo server and then copy the contents to their own install if they like the system.

__Community resources.__ Now there is a serious disconnect between the community resources used by various Midgard subprojects. Midgard and Aegir use CVS while MidCOM uses Subversion. Midgard uses web-based forums while MidCOM has a mailing list. And bug tracking is spread all over Tigris and Gforge.

This is another thing we must consolidate in 2007, especially since [repository formats matter][8]. So far I see three options:

* Consolidating everything into Gforge and taking benefit of the [Midgard-Gforge integration][25] we've done for Maemo
* Entering [Apache Incubator][3] and utilizing their project infrastructure
* Switching to a centralized SVN repository and possibly [Launchpad][4]

The [Midgard developer meeting][1] in Sweden on January 19th - 21st will provide a good chance to discuss and work on these.

[1]: http://www.midgard-project.org/community/events/midgard-developer-meeting.html
[2]: http://webworkerdaily.com/2006/12/27/seven-web-worker-wishes-for-2007/
[3]: http://incubator.apache.org/
[4]: https://help.launchpad.net/BugTrackingHighlights
[5]: http://www.opensourcecms.com/index.php?option=com_content&task=view&id=503&Itemid=191
[6]: http://www.nemein.com/
[7]: http://www.anykey.se/
[8]: http://keithp.com/blog/Repository_Formats_Matter.html
[9]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[10]: http://www.midgard-project.org/documentation/midgard-admin-sitewizard/
[11]: http://www.midgard-project.org/documentation/content-production-with-midcom/
[12]: http://www.midgard-project.org/documentation/mgdschema/
[13]: http://www.midgard-project.org/documentation/php-midgard_collector/
[14]: http://www.midgard-project.org/documentation/creating-midcom-helper-datamanager-schemas/
[15]: http://www.midgard-project.org/documentation/midcom-services-indexer-installation/
[16]: http://www.midgard-project.org/documentation/setting-up-squid-reverse-proxy/
[17]: http://www.midgard-project.org/documentation/installation/
[18]: http://www.openpsa.org/version2/documentation/funambol-syncml-setup/
[19]: http://www.midgard-project.org/documentation/midcom/
[20]: http://www.georss.org/blog/?p=44
[21]: http://bergie.iki.fi/blog/happy-new-year--and-a-look-back-at-2005.html
[22]: http://www.midgard-project.org/documentation/microformat-usage-in-midcom/
[23]: http://desdeamericaconamor.org/blog/node/309
[24]: http://en.wikipedia.org/wiki/Saint_Petersburg
[25]: https://garage.maemo.org/docman/view.php/106/45/Maemo_Midgard_Migration_Project_Feasibility_Study.pdf