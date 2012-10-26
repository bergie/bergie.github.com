---
  title: "Midgard Weekly Summary #68: March 2nd 2007"
  categories: 
    - "geo"
    - "midgard"
    - "mws"
  layout: "post"

---
Happenings this week
--------------------

* midgard-core 1.8.2.2 hotfix released. [The hotfix][8] resolves some issues on [multilingual Midgard  sites][7]

* New features in personnel component. [Arttu Manninen][9] has added nice [Ajax-based reorganization and editing][10] features to the [personnel display component][11] of MidCOM. Grab the [latest version from PEAR][12]!

* Midgard gets geotagging. [Midgard's geo capabilities][18] have now been amended by [supporting the Flickr-style machine tags][17]. This enables people submitting content to Midgard via email or for example Flickr integration to position and tag their content easily. The geotags will also show up in [GeoRSS output][19].

* Midgard configuration with PHP. [Piotr Pokora][4] has [added PHP bindings][5] to managing [Midgard's unified configuration][6]. The bindings will be the basis for the [new Midgard installer][13] and enable easy creation of Midgard databases with multiple providers like MySQL, Postgres and SQLite

* Exceptions in Midgard. [Midgard's development version][15] has finally deprecated PHP4 support, enabling us to utilize features like [exceptions][14]. Next it will be interesting to start using [PHP 5.2 datetimes][16] everywhere instead of the current mixture of UNIX timestamps and datetime text fields

About Midgard
-------------

Midgard CMS is an Open Source Content Management System built on top of the Linux, Apache, MySQL and PHP (LAMP) platform. It provides a reliable, powerful and internationalized set of tools for building web sites and networked applications.

Midgard utilizes PHP as the web scripting language and provides integration interfaces on Java and C layers. Midgard's unique architecture enables it to provide services like single sign-on and replication. With these capabilities and the integrated full-text search system, Midgard is an excellent match for information-rich web sites and intranets.

Places to see Midgard in Action:

* <http://www.midgard-project.org/>
* <http://www.bangbonsomer.com/>
* <http://downloads.maemo.org/>
* <http://www.cmswatch.com/>
* <http://www.vti.fi/en/>
* <http://www.itsevaltiaat.fi/>
* <http://protoblogr.net/>

About MWS
---------

[Midgard Weekly Summaries][1] is a newsletter for keeping up with the happenings in the Midgard community.

The new MWS editions are edited collaboratively to make the editing burden easier. To suggest stories here bookmark them with [del.icio.us tag "midgardweeklysummary"][2]. Screenshots may also be suggested by tagging them with ["midgardweeklysummary" on Flickr][3].

[1]: http://www.midgard-project.org/updates/mws/
[2]: http://del.icio.us/tag/midgardweeklysummary
[3]: http://www.flickr.com/photos/tags/midgardweeklysummary
[4]: http://www.nemein.com/people/piotras/
[5]: http://www.nemein.com/people/piotras/view/1172610438.html
[6]: http://www.midgard-project.org/documentation/unified-configuration/
[7]: http://www.midgard-project.org/documentation/building-multilingual-sites-with-midcom/
[8]: http://www.midgard-project.org/updates/view/1172671993.html
[9]: arttu
[10]: http://www.kaktus.cc/weblog/new-features-in--personnel--component.html
[11]: http://www.midgard-project.org/documentation/reference-components-net.nemein.personnel/
[12]: http://pear.midcom-project.org/index.php?package=net_nemein_personnel&release=1.0.0beta10&downloads
[13]: http://bergie.iki.fi/blog/midgard-in-2007--the-year-of-the-web-developer/
[14]: http://www.nemein.com/people/piotras/view/1172609810.html
[15]: http://www.midgard-project.org/development/roadmap/1-9/
[16]: http://www.php.net/UPDATE_5_2.txt
[17]: http://bergie.iki.fi/blog/midgard_and_geotagging_via_email/
[18]: http://bergie.iki.fi/blog/the-midgard-position/
[19]: http://www.georss.org/blog/?p=44