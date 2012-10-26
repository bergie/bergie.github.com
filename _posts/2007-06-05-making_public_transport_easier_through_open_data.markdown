---
  title: "Making public transport easier through open data"
  categories: 
    - "mobility"
    - "politics"
    - "bestof"
  layout: "post"

---
<a href="http://en.wikipedia.org/wiki/Public_transport">Public transport</a> is efficient, cheap and <a href="http://www.treehugger.com/files/2005/07/how_to_green_yo.php">quite green</a>, which is why I've been very happy about new services hitting Helsinki Public Transport, like <a href="http://bergie.iki.fi/blog/helsinki-to-provide-wifi-hotspots-in-public-transportation/">WiFi connectivity</a>, and of the fact that nowadays it is possibly to wait for Espooi buses comfortably <a href="http://www.kampinkeskus.fi/english/terminals/map.html">inside and underground</a>. However, having used public transport in dozens of cities and countries, I'd say the biggest hindrance to adoption is the difficulty of making connections between transport options.

In the Helsinki area we have the excellent <a href="http://aikataulut.ytv.fi/reittiopas/en/">YTV route planner</a>:

<img src="/files/ytv-route-planner.jpg" height="182" width="398" border="1" hspace="4" vspace="4" alt="Ytv-Route-Planner" />

The issue with this route planner is that it only covers the four cities that are part of the YTV alliance. If I want to leave from my home, go to the city of Tampere, and to a specific location there I'd need to use three different journey planners: first the YTV planner to get to the station, then the <a href="http://www.vr.fi/heo/eng/index.html">VR train schedule finder</a> for a correct train, and finally use whatever journey planner is available for Tampere, if any. And all of these have different user interfaces and different usage logic.

This kind of long-distance journey planning is something car navigation software has been good at for a long time. If I want to drive from Stockholm to an address in Milan, I just enter the end points and the navigation software calculates me a proper route. Sometimes the <a href="http://blog.outer-court.com/archive/2007-03-29-n17.html">results can be funny</a> but generally this approach works for drivers, especially to ones with GPS navigators.

<img src="/files/curitiba-public-transport-system.jpg" height="258" width="400" border="1" hspace="4" vspace="4" alt="Curitiba-Public-Transport-System" title="curitiba-public-transport-system.png" />

<a href="http://www.google.com/transit">Google Transit</a> is trying to fulfill the need for a common public transport route planner that would work between different cities and countries, but so far<a href="http://www.google.com/intl/en_ALL/help/faq_transit.html#what_cities_are_included"> very few places</a> are in it. This is probably mainly a political issue, as <a href="http://code.google.com/transit/spec/transit_feed_specification.htm#Google_Transit_Feed_Field_Definitions">Google's format</a> should be reasonably easy to support for any city transport system that is reasonably computerized or reliable.

While providing the data to Google would be a great first step for a centralized route planning system, I'd like to advocate for governments to take a step further: provide the data in an open format to some public entity. For example <a href="http://www.geonames.org/">Geonames</a> or <a href="http://www.archive.org/index.php">Internet Archive</a> could work as the central public transport data repository usable by any software developer.

<img src="/files/helsinki-koff-pub-tram.jpg" height="213" width="400" border="1" hspace="4" vspace="4" alt="Helsinki-Koff-Pub-Tram" />

This would enable competition between journey planners, <a href="http://worrydream.com/MagicInk/#case_study_train_schedules">innovative user interface development</a>, and bringing the data to mobile devices like phones or <a href="http://maemo.org/">internet tablets</a>.

I believe Finland, with its reasonably<a href="http://www.visitfinland.com/w5/index.nsf/(pages)/Public_Transportation"> good public transport system</a>, should take initiative in this. If the nation-wide public transport route information was available to software developers, an enormous amount of competence in this would arise and be ready to enter international markets when other countries follow suit in opening their data. In addition to national software economy, this would also boost tourism by making the country easier to travel in.

<strong>Updated 20:05Z</strong>: I was informed on <a href="http://maemo.org/community/irc.html">#maemo</a> that such centralized route planner has <a href="http://www.mintc.fi/scripts/cgiip.exe/WService=lvm/cm/pub/showdoc.p?docid=2392&amp;menuid=401">recently been released</a> for Finland: <a href="http://www.matka.fi/en/">matka.fi</a> allows Reittiopas-like routing with public transport in the whole country. The database doesn't seem to be fully complete, yet, and so sometimes it suggests quite long walks or taking a cab. But a good start, definitely:

<img src="/files/matkafi-route-planner.jpg" height="173" width="397" border="1" hspace="4" vspace="4" alt="Matkafi-Route-Planner" />

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/googletransport" rel="tag">googletransport</a>, <a href="http://www.technorati.com/tag/public transport" rel="tag">public transport</a>, <a href="http://www.technorati.com/tag/travel" rel="tag">travel</a></p>
