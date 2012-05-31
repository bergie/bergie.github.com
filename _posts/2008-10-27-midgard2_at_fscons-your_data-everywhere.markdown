---
  title: "Midgard2 at FSCONS: Your data, everywhere"
  categories: 
    - "desktop"
    - "midgard"
    - "mobility"
    - ""
  layout: "post"

---
<p>
Last weekend <a href="http://bergie.iki.fi/blog/learn_more_about_midgard_in_fscons/">we went</a> to the <a href="http://fscons.org/">Free Society Conference and Nordic Summit</a> in Gothenburg to talk a bit about the new direction <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">Midgard has been taking</a>: making it a general replicated persistent storage library for multiple programming languages. The <a href="http://www.midgard-project.org/midgard/8.09/">CMS itself</a> is <a href="http://bergie.iki.fi/blog/some_plans_for_midcom_3/">just an application</a> using the library.
</p><p>
The basic idea is that <a href="http://www.guardian.co.uk/technology/2008/sep/29/cloud.computing.richard.stallman">the cloud is a trap</a> that will move your data, and your applications beyond your control to proprietary data servers and web applications run by multinational corporations. If free software <a href="http://itmanagement.earthweb.com/osrc/article.php/3760206/Free+and+Open+Source+Software+vs.+Cloud+Computing.htm">doesn't provide</a> a compelling answer to that, we <a href="http://blogs.eweek.com/brooks/content/open_vs_closed_in_the_cloud.html">risk irrelevance</a>.
</p><p>
A replicated, peer-to-peer system of synchronizing and sharing your data could be the answer. And <a href="http://blogs.nemein.com/people/piotras/view/midgard2---flexibility-rocks.html">Midgard2 is a framework</a> providing just that. Bindings to different languages like PHP, Python and Mono, interprocess communications via D-Bus and XMPP, replication, and ability to run the same software from <a href="http://www.cmswatch.com/Trends/163-Midgard-in-Action">big server clusters</a> to <a href="http://bergie.iki.fi/blog/maemo_and_midgard_go_well_together/">Nokia internet tablets</a> should all help us get there.
</p><p>
<a href="/files/fscons-bergie-midgard2-mobility.JPG"><img src="/files/fscons-bergie-midgard2-mobility-tm.jpg" height="247" width="400" border="1" hspace="4" vspace="4" alt="Bergie in FSCONS: Midgard tackling the mobility challenge" title="Bergie in FSCONS: Midgard tackling the mobility challenge" /></a>
</p><p>
In the conference we focused on <a href="http://www.slideshare.net/bergie/midgard-2-the-cloud-you-can-control-presentation/">outlining the big vision</a>, and then <a href="http://teroheikkinen.iki.fi/blog/view/midgard_workshop_at_fscons.html">ran a workshop</a> where we showed some practical aspects of this. We <a href="http://teroheikkinen.iki.fi/blog/view/some_documentation_about_installing_midgard_2.html">set up Midgard2</a>, and built a web application that allowed user to input a RSS feed address. This was stored to the database via midgard-php. Then a midgard-python process got notified about this <a href="http://bergie.iki.fi/blog/interprocess_communications_in_midgard-d-bus_comes_to_the_web/">via D-Bus</a>, fetched the items and stored them to the database. The web front-end then displayed the articles. A clean example of interprocess communications.
</p><p>
<a href="/files/fscons-tero-midgard2-architecture.JPG"><img src="/files/fscons-tero-midgard2-architecture-tm.jpg" height="275" width="400" border="1" hspace="4" vspace="4" alt="Tero in FSCONS: Midgard 2 architecture" title="Tero in FSCONS: Midgard 2 architecture" /></a>
</p><p>
Peer-to-peer replication we demonstrated in <a href="http://fscons.org/events/?action=event&amp;id=96">Ville Sundell's XMPP workshop</a> where we <a href="http://teroheikkinen.iki.fi/blog/view/how_midgard_2_talks_between_between_machines.html">built a Python replication daemon</a> monitoring for database changes via D-Bus and transmitting them via Jabber to other Midgard boxes. Quite promising! But still many things need to be written before we are in the "your data everywhere" utopia...
</p><p>
<strong>Oh, and for those wondering:</strong> Midgard2 is very much <a href="http://www.gnome.org/">GNOME</a> software, running on top of GLib, libgda, D-Bus and so forth.
</p>