---
  title: "Notes from the State of the Map conference"
  categories: 
    - "geo"
    - "mobility"
  layout: "post"

---
[State of the Map][1], the [OpenStreetMap][2] conference was held this weekend in [Manchester University][10], with about 100 attendees.


<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/manchester_humanities_lime_grove.jpg" height="300" width="400" border="1" hspace="4" vspace="4" alt="Manchester Humanities Lime Grove" /></p>OpenStreetMap is a project to create [open content][16] digital maps of the world. Most map data is currently closed and controlled by various organizations under copyright, making it unavailable or prohibitively expensive for open source or experimentative use. An open map can be used anywhere and kept up-to-date with the changing landscape quite easily.

In addition to creating street maps, OpenStreetMap, being [a noncommercial entity][15] can also map things that most commercial navigation companies are not interested in: many OSM contributors are focusing on mapping [cycle][13] or hiking routes and [waterways][14]. [Free-maps][3] is a site that even provides a hiking-oriented rendering of the OSM data overlaid with [SRTM][6] contours and elevation data from NASA. Something similar would be easy to do for motorcyclists, highlighting scenic areas and twisties.

## Creating the map

What surprised me about OSM is how well the project is actually progressing. In the three years the project has been running, the number of contributors has risen on the same scale as Wikipedia in its first years. Here are some status reports of various countries:

* __United Kingdom__ is now at estimated 50% completeness, and the project has the target of finishing the country by mid-2008
* __Spain__ has been starting a bit slowly, but IGN, the national mapping agency recently announced support for the project which should bring the country to completeness quite soon
* __The Netherlands__ was boosted greatly by a Digital Pioneers grant to buy GPS units and arrange mapping parties, and now the main cities are quite complete. In addition, AND has donated complete map data for the country which will be imported to OSM soon
* __Bolivia__ has no national mapping agency and so is considering to use OSM as the authoritative map source used for elections


<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/openstreetmap-amsterdam-20070715.png" height="266" width="400" border="1" hspace="4" vspace="4" alt="Openstreetmap-Amsterdam-20070715" /></p>__Finland__, unfortunately, is [in a very early stage][12]. Some of central Helsinki, and some main roads there, but most of the country is still _Here be dragons_ territory. More publicity and some support could however boost this quickly. As an example, The Netherlands was still in the same stage four months ago.

## OSM on mobile devices

We [held a speech][23] together with Andrew Turner of [High Earth Orbit][5] about [GeoClue][4] and position-aware services on mobile Linux devices. Linux devices like N800 and Neo1973 are available now, and GPSs are appearing more and more mobile devices.

But what is largely missing is position-aware services for them. Of course, most of them can browse maps with tile-based tools like [Maemo Mapper][20]. But where things will get interesting is when the publicly-available geodata and the position of the device are brought together to enrich various applications and services on the device.

The GeoClue project was started in order to make position information easily available for application authors. A simple <a href="http://en.wikipedia.org/wiki/D-BUS">D-BUS</a> query, and the application can get the location of the device regardless of whether it comes from GPS, Plazes or some other service.


<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/geoclue-architecture.jpg" height="297" width="260" border="1" hspace="4" vspace="4" alt="Geoclue-Architecture" /></p>KDE has also been working on some location-based tools and services for their desktop, built around the Marble map viewer. Hopefully we can share the efforts in the freedesktop community.

## Route planning with OSM

In addition to being community-created and open, the OSM map data has one huge advantage towards using Google Maps and the like: it is vectors with proper metadata instead of just map tiles.

This means [OSM data can be downloaded][18] to a device and used for route planning. [Gosmore][7] is the first project that appeared to this space.

Routing with the data is reasonably easy by ditching data that is not relevant to routing (like buildings), and then running through the street network with either [Dijkstra][8] or [A*][9] algorithm, giving "distance penalties" for road segments depending on their type and speed limit.



A project in Norway had improved on this by implementing the concept of evaluations of road segments by special interest groups. For example, wheelchair users could evaluate roads on their suitability for travel by wheelchair, and then future routes of all wheelchair users would take these into account.

## Maemo Surveyor

With current surveying tools and editors [creating OpenStreetMaps][11] is quite slow, especially for [new contributors][19]. An estimate was made that per each urban community of 1000 inhabitants, an hour of surveying and hour of tagging would be needed.

This statistic brought some discussion of having better tools for map-making. Our take on that would be the idea of a _Maemo Surveyor_, a mobile application recording the GPS tracks and enabling the user to tag them with road types and provide either a typed name, a voice note or a photo of the road sign.

The application would keep this in the OSM XML format to enable things like live Mapnik rendering in the future and make it easy to upload the data directly to OSM.


<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/maemo-surveyor-sketch.jpg" height="196" width="400" border="0" hspace="4" vspace="4" alt="Maemo-Surveyor-Sketch" /></p>Now the app is just in mockup format but I believe it should be quite easy to implement with Glade, Python and GeoClue.

After our talk I got some interesting comments and ideas for the Surveyor application. A research group in Norway is thinking about sharing the mapping work over a Bluetooth or WiFi network: _"I'll look up street names, you write down speed limits"_.

Similarly, there was an archeologist who commented that using more accurate [surveying GPSs][17], the same surveying application with a different set of pre-set tags could be very useful in mapping dig sites. The OSM format would even make it very easy to share and visualize maps of various sites.

I'm looking forward to getting hold of a copy of Glade to play with the ideas.

__Completely unrelated,__ I learned that reversing the colors on MacBook screen with the _Ctrl-Alt-Command-8_ key combination can make the battery last a lot longer.

__Updated 2007-07-16:__ [Slides from our GeoClue talk][21] are now available:

<object type="application/x-shockwave-flash" data="https://s3.amazonaws.com:443/slideshare/ssplayer.swf?id=78294&doc=geoclue-state-of-the-map-20071559" width="425" height="348"><param name="movie" value="https://s3.amazonaws.com:443/slideshare/ssplayer.swf?id=78294&doc=geoclue-state-of-the-map-20071559" /></object>

See also [Mikel Maron's][22] or [Andrew Turner's][25] conference notes and the [conference group shot][24].

[1]: http://www.stateofthemap.org/
[2]: http://www.openstreetmap.org/
[3]: http://www.free-map.org.uk/
[4]: http://www.freedesktop.org/wiki/Software/GeoClue/
[5]: http://highearthorbit.com/
[6]: http://www2.jpl.nasa.gov/srtm/
[7]: http://wiki.openstreetmap.org/index.php/Gosmore
[8]: http://en.wikipedia.org/wiki/Dijkstra%27s_algorithm
[9]: http://en.wikipedia.org/wiki/A%2A_search_algorithm
[10]: http://www.stateofthemap.org/?page_id=25
[11]: http://wiki.openstreetmap.org/index.php/Mapping_techniques
[12]: http://wiki.openstreetmap.org/index.php/WikiProject_Finland
[13]: http://wiki.openstreetmap.org/index.php/Map_Features#Cycleway
[14]: http://wiki.openstreetmap.org/index.php/Map_Features#Waterway
[15]: http://wiki.openstreetmap.org/index.php/Foundation
[16]: http://wiki.openstreetmap.org/index.php/OpenStreetMap_License
[17]: http://www.leica-geosystems.com/uk/en/lgs_4231.htm
[18]: http://wiki.openstreetmap.org/index.php/Planet.osm
[19]: http://wiki.openstreetmap.org/index.php/Beginners%27_Guide
[20]: http://bergie.iki.fi/blog/maemo_mapper-openstreetmap_and_wikipedia/
[21]: http://www.slideshare.net/ajturner/geoclue-state-of-the-map-2007/
[22]: http://brainoff.com/weblog/2007/07/16/1258
[23]: http://flickr.com/photos/chrisfleming/822333479/in/photostream/
[24]: http://flickr.com/photos/chrisfleming/823168744/in/photostream
[25]: http://highearthorbit.com/state-of-the-map-2007/
