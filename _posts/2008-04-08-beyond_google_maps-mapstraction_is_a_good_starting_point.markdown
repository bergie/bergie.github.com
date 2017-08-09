---
  title: "Beyond Google Maps: Mapstraction is a good starting point"
  categories: 
    - "geo"
    - "midgard"
  layout: "post"

---
<p>
<img src="https://d2vqpl3tx84ay5.cloudfront.net/google-maps-expert.jpg" height="206" width="200" border="1" align="right" hspace="8" vspace="4" alt="Some shops on map" title="Some shops on map" /><br />A List Apart 256 has a very interesting article on <a href="http://www.alistapart.com/articles/takecontrolofyourmaps">Taking Control of Your Maps</a>, explaining how to provide richer and more customized web map solutions using tools like <a href="http://www.openlayers.org/">OpenLayers</a> and <a href="http://mapnik.org/">Mapnik</a>, and the free data provided by <a href="http://www.openstreetmap.org/">OpenStreetMap</a>:
</p><blockquote>
For the practical developer who wants to add geospatial information to a site or application, the Google Maps API has been an easy call.
<br /><br />But, perhaps no longer. As websites mature and the demand for geographic applications grow, the old mashup arrangement is starting to chafe. Mapping components are more and more vital, and so we demand greater control, expressiveness, and functionality from them.
<br /><br />Fortunately, as in many aspects of internet technology, an ecology of open source online mapping tools has emerged alongside the market leader. It is now possible to replicate Google Maps’ functionality with open source software and produce high-quality mapping applications tailored to our design goals. The question becomes, then, how?
</blockquote><p>
While setting up your own map server might be a lot of effort, <a href="http://www.mapstraction.com/">Mapstraction</a> could provide a nice way to move beyond the &quot;same old&quot; Google Maps. With the same javascript you can experiment with different map providers like <a href="http://www.mapstraction.com/demo.php?map=openstreetmap">OpenStreetMap</a>, <a href="http://www.mapstraction.com/demo.php?map=yahoo">Yahoo!</a> and <a href="http://www.mapstraction.com/demo.php?map=microsoft">Microsoft</a>.
</p><p>
Mapstraction comes bundled with <a href="http://www.midgard-project.org/">Midgard's</a> <a href="http://en.wikipedia.org/wiki/GeoCMS">GeoCMS</a> component, <a href="http://pear.midcom-project.org/index.php?package=org_routamc_positioning&amp;downloads">org.routamc.positioning</a>. Switching map providers can be done in <a href="http://www.midgard-project.org/documentation/midcom-component-configuration/">component configuration</a>, and then displaying things on a map is very straightforward:
</p><pre>
$map = new org_routamc_positioning_map('my_photo_map');
foreach ($photos as $photo)
{
    $map-&gt;add_object($photo);
}
$map-&gt;show(400, 200);
</pre>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/mapstraction">mapstraction</a>, <a href="http://www.technorati.com/tag/midcom">midcom</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/openlayers">openlayers</a>, <a href="http://www.technorati.com/tag/openstreetmap">openstreetmap</a>, <a href="http://www.technorati.com/tag/mapnik">mapnik</a></p>
