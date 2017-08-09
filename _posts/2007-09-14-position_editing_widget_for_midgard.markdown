---
  title: "Position editing widget for Midgard"
  categories: 
    - "geo"
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/">Midgard</a> has had quite cool <a href="http://en.wikipedia.org/wiki/GeoCMS">GeoCMS features</a> for a while now: <a href="http://bergie.iki.fi/blog/the-midgard-position/">any objects can be positioned</a> and retrieved via position, and <a href="http://bergie.iki.fi/blog/maps_in_midgard-abstracted/">maps are easy to display</a> anywhere. We also can use cool services like <a href="http://www.plazes.com/">Plazes</a> for automatically positioning new content created by users. 

However, what has been lacking has been a way to easily edit the location of an item in the CMS. This has been now fixed by the new position widget we did with <a href="http://protoblogr.net/">Jerry</a>:

<p style="text-align:center;"><img src="https://d2vqpl3tx84ay5.cloudfront.net/position-widget-address.jpg" height="227" width="350" border="1" hspace="4" vspace="4" alt="Position-Widget-Address" /><span style="font-size:0pt;">
</span></p><span style="font-size:0pt;">
</span>An easy way to position objects is to enter a civic location that will then be <a href="http://en.wikipedia.org/wiki/Geocoding">geocoded</a> using either local city database, <a href="http://www.geonames.org/export/free-geocoding.html">GeoNames</a> or <a href="http://developer.yahoo.com/maps/rest/V1/geocode.html">Yahoo!</a> The civic location properties used are the same as in <a href="http://www.xmpp.org/extensions/xep-0080.html#format">XEP-0080 specification</a> and <a href="http://geoclue.freedesktop.org/">GeoClue</a>.

To do this, enter an address and click the "refresh" icon in the corner, then wait a while:
<p style="text-align:center;"><img src="https://d2vqpl3tx84ay5.cloudfront.net/position-widget-address-retrieve.jpg" height="196" width="350" border="1" hspace="4" vspace="4" alt="Position-Widget-Address-Retrieve" /><span style="font-size:0pt;">
</span></p><span style="font-size:0pt;">
</span>Some details (like the postal code in above example) will appear if the geocoding service provides those (as happens <a href="http://developer.yahoo.com/maps/rest/V1/geocode.html">with Yahoo!</a>). You can then check the location by going to the Map tab:
<p style="text-align:center;"><img src="https://d2vqpl3tx84ay5.cloudfront.net/positioning-widget-map.jpg" height="327" width="350" border="1" hspace="4" vspace="4" alt="Positioning-Widget-Map" /><span style="font-size:0pt;">
</span></p><span style="font-size:0pt;">
</span>The map is provided by <a href="http://www.mapstraction.com/">Mapstraction</a>, and so different providers like Google Maps, Yahoo! and <a href="http://www.openstreetmap.org/">OpenStreetMap</a> can be used. If you want to correct or fine-tune the position, just click somewhere else on the map:

<p style="text-align:center;"><img src="https://d2vqpl3tx84ay5.cloudfront.net/positioning-widget-map-edit.jpg" height="328" width="350" border="1" hspace="4" vspace="4" alt="Positioning-Widget-Map-Edit" /><span style="font-size:0pt;">
</span></p><span style="font-size:0pt;">
</span>You can also edit the straight coordinates:<span style="font-size:0pt;">
</span><p style="text-align:center;"><img src="https://d2vqpl3tx84ay5.cloudfront.net/positioning-widget-coordinates.jpg" height="166" width="350" border="1" hspace="4" vspace="4" alt="Positioning-Widget-Coordinates" /></p>Get it <a href="http://trac.midgard-project.org/browser">from SVN</a> while it is hot!

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/poi" rel="tag">poi</a>, <a href="http://www.technorati.com/tag/geocode" rel="tag">geocode</a></p>
