---
  title: "Plazes on the N800"
  categories: 
    - "geo"
    - "mobility"
  layout: "post"

---
<a href="http://www.towelday.kojv.net/">Intergalactic hitchhikers</a> get another treat: We have updated the <a href="http://sapir.mooo.de/2006/05/25/nokia-770-and-plazes/">older Maemo Plazer</a> to work with the <a href="http://api.plazes.com/wiki/index.php/Main_Page">new Plazer API</a> and the <a href="http://maemo.org/platform/docs/howtos/Maemo_tutorial_bora.html">Maemo 3.0</a> that is on <a href="http://www.nokia.com/n800">N800</a>. We also integrated it more closely with the UI:


<img src="/files/maemoplazer-initial2.jpg" height="240" width="400" border="1" hspace="4" vspace="4" alt="Maemoplazer-Initial2" />

This means that N800 users can now easily position their devices using the vast database of WiFi access points the <a href="http://beta.plazes.com/help/screencasts.php">Plazes network</a> has. And if they stumble on a new one, a web browser window is opened to form where they can enter the network devices to add the new AP to the database.

After we get this properly packaged and integrated with the <a href="http://maemo.org/platform/docs/howtos/howto_connectivity_guide_bora.html#Decomposition">Maemo connection manager</a>, the next point is to start thinking what to do with the position data. Some ideas:

<ul><li>Automatically setting system clock to correct timezone</li><li>Opening <a href="http://downloads.maemo.org/product/maemo-mapper/">Maemo Mapper</a> in user's present location</li><li>Opening <a href="http://www.itopen.it/2006/11/30/finalmente-anche-maemo-puo-guardare-le-stelle/">Maemo Stars</a> in user's present location</li><li>Setting instant messaging status based on location preferences (the "I don't want my clients to call when I'm at home" scenario)</li><li>Populating a "<a href="http://www.geonames.org/export/wikipedia-webservice.html#findNearbyWikipedia">Wikipedia pages near you</a>" feed to RSS reader and <a href="http://eko.one.pl/index.php?page=Nokia770_software#POI%20for%20maemo-mapper">Maemo Mapper POI database</a></li></ul>It would be great to get more people to work on this. We have opened a <a href="https://garage.maemo.org/projects/maemoplazer/">Maemo Plazer garage project</a> for it. It is written in Python and uses <a href="http://www.freedesktop.org/wiki/Software/dbus">D-Bus</a> for its communications with the rest of the Maemo environment, so working with it should be fairly easy. Making it act as a <a href="http://live.gnome.org/GeoClue">GeoClue</a> backend would be a cool step for example.

<a href="http://beta.plazes.com/user/ferenc/">Ferenc</a> has promised to package Maemo Plazer next weekend. Before that, you can <a href="https://garage.maemo.org/plugins/scmsvn/viewcvs.php/?root=maemoplazer">grab the sources from SVN</a> and install it manually to your device. If you place the maemoplazer.desktop file to the <code>/usr/share/applications/hildon/</code> directory there will even be a clickable icon in the "Extras" folder to start the application with.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/plazes" rel="tag">plazes</a>, <a href="http://www.technorati.com/tag/python" rel="tag">python</a></p>