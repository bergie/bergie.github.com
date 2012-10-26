---
  title: "Midgard Weekly Summary #72: April 13th 2007"
  categories: 
    - "midgard"
    - "mws"
  layout: "post"

---
Today is the [Accident Prevention Day][5] in Finland.

* Staging to live replication. Midgard has had some degree of [replication support][16] since the early days, but as the software has evolved the requirements have become more complex. After the [Exorcist-based staging-to-live][9] solution was deprecated by [new Midgard APIs][10], the [work to build a native replication solution][11] has been underway. Now it finally is [ready for testing][12].

* New `midgard_sitegroup` and `midgard_user` APIs. Piotras has this week completed the last two important missing Midgard2 APIs: [Sitegroup management][13] and [user management][14]. This means that we will hopefully see first versions of the [new installer][15] soon.

* Repeating resource reservations. Arttu Manninen [has been working][8] on [Midgard's resource booking calendar][6] reported earlier in [MWS #70][7]. New features include [support for repeating reservations][8].

* Midgard developer meeting on June 1st - 3rd. The next [Midgard developer meeting][4] will be held in Otaniemi, Finland. There is still room for some interested Midgard users and developers.

About Midgard
-------------

Midgard CMS is an Open Source Content Management System built on top of the Linux, Apache, MySQL and PHP (LAMP) platform. It provides a reliable, powerful and internationalized set of tools for building web sites and networked applications.

Midgard utilizes PHP as the web scripting language and provides integration interfaces on Java and C layers. Midgard's unique architecture enables it to provide services like single sign-on and replication. With these capabilities and the integrated full-text search system, Midgard is an excellent match for information-rich web sites and intranets.

Places to see Midgard in Action:

* <http://www.midgard-project.org/>
* <http://downloads.maemo.org/>
* <http://www.itsevaltiaat.fi/>
* <http://www.cmswatch.com/>
* <http://www.vti.fi/en/>
* <http://protoblogr.net/>

About MWS
---------

[Midgard Weekly Summaries][1] is a newsletter for keeping up with the happenings in the Midgard community.

The new MWS editions are edited collaboratively to make the editing burden easier. To suggest stories here bookmark them with [del.icio.us tag "midgardweeklysummary"][2]. Screenshots may also be suggested by tagging them with ["midgardweeklysummary" on Flickr][3].

[1]: http://www.midgard-project.org/updates/mws/
[2]: http://del.icio.us/tag/midgardweeklysummary
[3]: http://www.flickr.com/photos/tags/midgardweeklysummary
[4]: http://www.midgard-project.org/community/events/midgard_developer_meeting.html
[5]: http://www.tapaturmapaiva.fi/english
[6]: http://bergie.iki.fi/blog/resource-bookings-with-midgard/
[7]: http://www.midgard-project.org/updates/mws/view/5d271c3deebbce12fbfcfb1da1efcdbe.html
[8]: http://www.kaktus.cc/weblog/view/1176379192.html
[9]: http://www.midgard-project.org/documentation/staging-live-setup-with-exorcist/
[10]: http://www.midgard-project.org/documentation/php-midgard_replicator/
[11]: http://bergie.iki.fi/blog/more_work_on_midgard-s_replication_service/
[12]: http://www.midgard-project.org/documentation/staging_to_live_setup_with_midcom/
[13]: http://www.nemein.com/people/piotras/view/1176378122.html
[14]: http://www.nemein.com/people/piotras/view/1176379145.html
[15]: http://bergie.iki.fi/blog/midgard-in-2007--the-year-of-the-web-developer/
[16]: http://www.midgard-project.org/documentation/concepts-repligard/