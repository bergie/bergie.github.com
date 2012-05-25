---
  title: "Mapstraction supports OpenLayers now"
  categories: 
    - "geo"
    - ""
  layout: "post"

---
<a href="http://mapstraction.com/">Mapstraction</a> is a javascript library that abstracts the usage of the various web map systems out there. Using it you can display <a href="http://mapstraction.com/demo.php?map=google">Google Maps</a>, <a href="http://mapstraction.com/demo.php?map=microsoft">Microsoft Virtual Earth</a>, <a href="http://mapstraction.com/demo.php?map=yahoo">Yahoo!</a> and other maps with same javascript code. And now also <a href="http://www.openlayers.org/">OpenLayers</a>, a free software map implementation.

OpenLayers is a very nice addition to the Mapstraction stack, as it can be displayed without need for any API codes or registration. With <a href="http://wiki.openstreetmap.org/index.php/Deploying_your_own_Slippy_Map#Creating_Tiles">local OpenStreetMap tiles</a> it could even be used on web servers that are not connected to the regular internet.

Some initial OpenLayers integration had been in Mapstraction for a while, but as I need to display <a href="http://www.openstreetmap.org/">OpenStreetMaps</a> with it in a project I decided to finish the implementation together with <a href="http://highearthorbit.com/">Andrew Turner</a>. It is not completely tested yet, but for example <a href="http://bergie.iki.fi/blog/position_editing_widget_for_midgard.html">Midgard's positioning widget</a> works quite nicely with it already:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-2869954c865a11dc8390e3d8337c1c971c97/midgard-position-editing-openlayers-osm.jpg" height="359" width="400" border="1" hspace="4" vspace="4" alt="Midgard-Position-Editing-Openlayers-Osm" />

Grab the <a href="http://mapstraction.com/svn/source/">code from SVN</a> or take a look at <a href="http://mapstraction.com/demo.php?map=openstreetmap">an implementation example</a>!

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/openlayers" rel="tag">openlayers</a>, <a href="http://www.technorati.com/tag/openstreetmap" rel="tag">openstreetmap</a>, <a href="http://www.technorati.com/tag/mapstraction" rel="tag">mapstraction</a></p><!-- technorati tags end -->