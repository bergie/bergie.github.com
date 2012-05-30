---
  title: "Making the GNOME desktop location-aware"
  categories: 
    - "desktop"
    - "geo"
  layout: "post"

---
<p>
To make the <a href="http://www.gnome.org/">GNOME</a> desktop more user-friendly we should <a href="http://worrydream.com/MagicInk/#inferring_context_from_the_environment">utilize context information</a> in more places. And now that laptops are becoming more and <a href="http://arstechnica.com/hardware/news/2008/06/hands-on-with-the-ubuntu-netbook-remix.ars">more mobile</a>, location is one important part of that context. For that, we developed <a href="http://www.freedesktop.org/wiki/Software/GeoClue">GeoClue</a>, the location framework that is in incubation for <a href="http://www.gnome.org/mobile/">GNOME Mobile</a>.
</p><p>
Today I was talking with <a href="http://wannabe-a-geek.blogspot.com/">a student</a> who wants to work on GeoClue GNOME integration in the <a href="http://code.google.com/soc/">Google Summer of Code</a>, and here are some ideas we discussed:
</p><ul><li>Changing the <a href="http://people.redhat.com/mclasen/intlclock/intlclock-2007-09-29.png">clock time zone</a> based on location (<a href="http://vilunki.wordpress.com/">Jussi</a> already has a patch for this that needs to be cleaned up and submitted)</li>
<li>Changing weather applet to show weather for current location</li>
<li>Telling <a href="http://projects.gnome.org/tracker/">Tracker</a> about the location where documents were edited so you can ask <em>"give me the documents I edited in Stockholm"</em></li>
<li>Making <a href="http://www.makeuseof.com/tag/gwibber-the-everything-client/">Gwibber</a> send <a href="http://live.gnome.org/Gwibber/Roadmap#head-fa46c3b444c9f355f2fba1684cc7d2805e42eff9">the current location</a> to microblogging services that <a href="http://brightkite.com/">support it</a></li>
<li>Showing where your <a href="http://www.novell.com/documentation/evolution24/index.html?page=/documentation/evolution24/evolution24/data/usage-contact.html">Evolution contacts</a> are (and what their local time is), based on <a href="http://blog.pierlux.com/2009/01/22/empathy-where-are-you/en/">Empathy's XMPP location support</a></li>
<li>Setting instant messaging availability status based on location (<em>"set my work account as offline when I'm home"</em>)</li>
</ul><p>
These are just some examples of how GNOME could serve users better if the desktop applications knew where they are. Web applications are already <a href="http://zecke.blogspot.com/2009/02/geo-clue-for-webkitgtk.html">getting this capability</a>, and the desktop shouldn't be <a href="http://bergie.iki.fi/blog/free_desktop_and_the_cloud/">left behind</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/geoclue" rel="tag">geoclue</a>, <a href="http://www.technorati.com/tag/gnome" rel="tag">gnome</a></p>