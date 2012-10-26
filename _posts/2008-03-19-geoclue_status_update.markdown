---
  title: "GeoClue status update"
  categories: 
    - "mobility"
    - "geo"
    - ""
  layout: "post"

---
<p>
<img src="/files/geoclue-200.png" height="200" width="200" border="0" align="right" hspace="10" vspace="4" alt="GeoClue" title="GeoClue" /><br />I sat down with <a href="http://www.freedesktop.org/wiki/Software/GeoClue">GeoClue</a> maintainer (and my former SoC student) <a href="http://vilunki.wordpress.com/">Jussi Kukkonen</a> to discuss how the project has been moving forward, and the situation is looking quite good. To those unfamiliar with GeoClue, here is a quick intro:
</p><blockquote>
GeoClue is a modular geoinformation service built on top of the D-Bus messaging system. The goal of the GeoClue project is to make creating location-aware applications for mobile Linux devices as simple as possible.
</blockquote><p>
Last summer with the Summer of Code we were able to make a <a href="http://bergie.iki.fi/blog/geoclue_is_appearing/">first full implementation of GeoClue</a> and <a href="http://vilunki.wordpress.com/2007/08/22/geoclue-08-soc-released/">release it</a> for the <a href="http://maemo.org/">maemo</a> platform. There were also GeoClue sessions held in the <a href="http://www.slideshare.net/ajturner/geoclue-state-of-the-map-2007">State of the Map</a> and <a href="http://beta.guadec.org/node/581">GUADEC</a> conferences.
</p><p>
However, as that implementation did not provide <a href="http://www.freedesktop.org/wiki/Software/GeoClue#head-15bcdec2110a8515956187b4137ad8702f540762">a master provider</a> to abstract away the <a href="http://www.freedesktop.org/wiki/Software/GeoClue#head-e73ac91b0697338613054a80e3a0f496e4f0714f">different position sources</a>, it was still a bit cumbersome to develop GeoClue-powered applications. So when Jussi got hired by <a href="http://o-hand.com/">OpenedHand</a>, a decision was made to <a href="http://vilunki.wordpress.com/2007/11/10/api-stability-whazzat/">change the API</a>.
</p><p>
Now finally the API change work starts to be complete, and a new release of GeoClue should appear pretty soon. There are lots of ideas for <a href="http://www.freedesktop.org/wiki/Software/GeoClue#head-32194acec6df299bec227dd0838960febe2d853b">location-aware applications</a> <a href="http://www.readwriteweb.com/archives/12_future_apps_for_your_iphone.php">floating around</a>, and at least <a href="http://mauku.henrikhedberg.com/">Mauku</a> and <a href="http://telepathy.freedesktop.org/wiki/">Telepathy</a> developers have expressed interest in using GeoClue in their apps.
</p><p>
If you're developing a mobile Linux application, GeoClue might be a good thing to <a href="http://www.freedesktop.org/wiki/Software/GeoClue#head-3d7bd11b567a68a6d54e1380a7bbf9bbd97f6082">take a look at</a>. Location is a <a href="http://worrydream.com/MagicInk/#inferring_context_from_the_environment">powerful piece of contextual information</a> that can make your application <a href="http://worrydream.com/MagicInk/">more usable</a>.
</p>