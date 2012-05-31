---
  title: "Maemo Mapper, OpenStreetMap and Wikipedia"
  categories: 
    - "geo"
    - "mobility"
  layout: "post"

---
<a href="http://downloads.maemo.org/product/maemo-mapper/">Maemo Mapper</a> is a map browsing and GPS navigation application for the <a href="http://www.nokiausa.com/internettablet">Nokia Internet Tablets</a>. So far this useful application has been in the legal grey area by relying on providers like Google Maps and Microsoft Virtual Earth for its map tiles. This <a href="http://wiki.openstreetmap.org/index.php/FAQ#Why_don.27t_you_just_use_Google_Maps.2Fwhoever_for_your_data.3F">probably violates their terms of service</a> and may cause problems later on.

This is why I'm very happy to see that Maemo Mapper <a href="https://garage.maemo.org/tracker/?func=detail&amp;atid=188&amp;aid=492&amp;group_id=29">can now be used</a> with <a href="http://www.openstreetmap.org/">OpenStreetMap</a> tiles. OpenStreetMap is a volunteer project for creating <a href="http://wiki.openstreetmap.org/index.php/Legal_FAQ#What_is_the_current_license.3F">truly free</a> street maps and other geographic data.

Currently there is quite acceptable OpenStreetMap data available for most major European cities, but the areas in between are still mostly "<a href="http://en.wikipedia.org/wiki/Here_be_dragons">Here be dragons</a>" territory. But since OpenStreetMap is an open project, <a href="http://wiki.openstreetmap.org/index.php/Getting_Involved">we all can help</a>. Now OpenStreetMaps look like the following in Maemo Mapper:

<img src="/files/maemomapper-openstreetmap-mapnik.jpg" height="240" width="400" border="1" hspace="4" vspace="4" alt="Maemomapper-Openstreetmap-Mapnik" />

To use these yourself add a <a href="http://www.internettablettalk.com/forums/showthread.php?p=38684#post38684">new Map Repository</a> with URL Format <code>http://tile.openstreetmap.org/%0d/%d/%d.png</code>. Hopefully this will become the default map source later on. (<strong>Updated:</strong> OpenStreetMap is now the default map source, starting from <a href="http://www.internettablettalk.com/forums/showthread.php?p=38684#post38684">Maemo Mapper 1.4.3 release</a>. Great work, Gnuite!)

<span style="font-size:14pt;"><strong>Points-of-Interest from Wikipedia pages</strong></span>

Maemo Mapper has a useful <a href="http://eko.one.pl/index.php?page=Nokia770_software#POI%20for%20maemo-mapper">feature called "Points of Interest"</a> that can be used for marking and navigating to spots on the map.

To add touristic capabilities to this feature I created a <a href="http://www.nehmer.net/~bergie/wikipedia2poi.py">quick Python script</a> for populating the POI database with <a href="http://en.wikipedia.org/wiki/Wikipedia:WikiProject_Geographical_coordinates">Positioned Wikipedia pages</a> near you. It uses <a href="http://live.gnome.org/GeoClue">GeoClue</a> for determining where the user is located, and then pulls nearby pages using the <a href="http://www.geonames.org/export/wikipedia-webservice.html#findNearbyWikipedia">Geonames web service</a>. If you want to try it, read <a href="http://www.internettablettalk.com/forums/showthread.php?p=37905#post37905">my Internet Tablet Talk post</a>.

<img src="/files/maemomapper-wikipedia-poi-detail.jpg" height="240" width="400" border="1" hspace="4" vspace="4" alt="Maemomapper-Wikipedia-Poi-Detail" />


Another step closer to the <a href="http://bergie.iki.fi/blog/the-real-hitchhiker-s-guide-to-the-galaxy.html">real-world Hitchhiker's Guide to the Galaxy</a>...

<strong>Updated 14:33:</strong> Switched the <a href="http://wiki.openstreetmap.org/index.php/Component_overview#Tiles_and_tile_rendering">OpenStreetMap tile source</a> from Osmarender to Mapnik since the maps look nicer this way. I think it is also appropriate to note that OpenStreetMap <a href="http://www.dankarran.com/blog/archives/2007/03/14/google_maps_vs_openstreetmap.php">can already produce better maps</a> for some places than Google Maps does.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/geoclue" rel="tag">geoclue</a>, <a href="http://www.technorati.com/tag/h2g2" rel="tag">h2g2</a>, <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/openstreetmap" rel="tag">openstreetmap</a>, <a href="http://www.technorati.com/tag/poi" rel="tag">poi</a>, <a href="http://www.technorati.com/tag/wikipedia" rel="tag">wikipedia</a></p><!-- technorati tags end -->