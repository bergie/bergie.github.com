---
  title: "GeoClue is appearing"
  categories: 
    - "desktop"
    - "geo"
    - "mobility"
    - ""
  layout: "post"

---
Last weekend and this week I've been off to <a href="http://bergie.iki.fi/blog/notes_from_the_state_of_the_map_conference/">State of the Map in Manchester</a> and <a href="http://guadec.org/node/581">GUADEC in Birmingham</a> to speak about the <a href="http://www.freedesktop.org/wiki/Software/GeoClue/">GeoClue project</a> with <a href="http://highearthorbit.com/">Andrew Turner</a> and <a href="http://www.tigert.org/">Tuomas Kuosmanen</a>.

GeoClue is a system for giving easy access to location information for applications over the D-BUS. Lots of people have shown interest in adding geographical awareness in their software, and I really think GeoClue is the right way to move forward, especially for <a href="http://www.gnome.org/mobile/">mobile devices</a>.
<p style="text-align:center;"><img src="/files/geoclue-large.jpg" height="250" width="250" border="0" hspace="4" vspace="4" alt="Geoclue-Large" /></p>
Consider the following Python code to get current location:

<pre># Access the D-BUS session bus
bus = dbus.SessionBus()

# Get an interface for the GeoClue master (which will talk to appropriate backend)
proxy_obj = bus.get_object('org.foinse_project.geoclue.position.master', '/org/foinse_project/geoclue/position/master')
geoclue_iface = dbus.Interface(proxy_obj, 'org.foinse_project.geoclue.position')

# Get the coordinates from the service
coordinates = geoclue_iface.current_position()
</pre><strong>Caveat:</strong> the code might not work <em>exactly</em> like this, but instead may need a bit of tweaking. I'm sorry but I'm currently without an N800 to test on. C code in any case is as easy as:

<pre>gdouble lat, lon;
geoclue_position_init ();
geoclue_position_current_position (&#38;lat, &#38;lon);
</pre>Traditional methods to get location would require a lot more code and would be hardcoded to just one position source, like GPS. GeoClue can provide lots of different back-ends, including Plazes and HostIP in addition to the common gpsd.

While we were talking to application developers, <a href="http://vilunki.wordpress.com/">Jussi Kukkonen</a>, the Google Summer of Code student I mentor was also busy. He <a href="http://vilunki.wordpress.com/2007/07/19/geoclue-release/">made a new GeoClue release</a>, which is the first one to give the system a real UI. Good stuff!
<p style="text-align:center;"><img src="/files/geoclue-selecting-backend2.jpg" height="240" width="400" border="1" hspace="4" vspace="4" alt="Geoclue-Selecting-Backend2" /></p>Thanks to Jussi for the hard work, and to <a href="http://www.andreasn.se/">Andreas Nilsson</a> for the GeoClue icon featured earlier in the post!

<strong>BTW,</strong> When I upgraded my blog to new layout and structure last January I left commenting out pretty much for the same reasons as <a href="http://www.joelonsoftware.com/items/2007/07/20.html">what Joel Spolsky outlined</a> in his post. People who really want to discuss my post will anyway either contact me by email or <a href="http://bergie.jaiku.com/">comment on Jaiku</a>.
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/geoclue" rel="tag">geoclue</a>, <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a></p>