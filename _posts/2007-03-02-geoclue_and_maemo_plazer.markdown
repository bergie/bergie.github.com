---
  title: "GeoClue and Maemo Plazer"
  categories: 
    - "mobility"
    - "geo"
  layout: "post"

---
We had another <a href="http://bergie.iki.fi/blog/plazes_on_the_n800.html">Maemo hacking night</a> here at the office. The plan was to write a proper UI for the <a href="http://downloads.maemo.org/product/maemoplazer/">Maemo Plazer</a>, and integrate it with the <a href="http://live.gnome.org/GeoClue">GeoClue</a> framework. Both of these were partially completed, but will need more thought and testing. Here's a quick snapshot of the new UI:

<img src="/files/maemoplazer-ui-initial.jpg" height="240" width="400" border="1" hspace="4" vspace="4" alt="Maemoplazer-Ui-Initial" /><span style="font-size:0pt;">

</span>GeoClue is also now partially supported. Maemo Plazer registers itself as a backend and does things like raise the <em>current_position_changed</em> signal when Plaze changes. Unfortunately however the <a href="http://svn.foinse-project.org/geoclue/trunk/geoclue/position_glue.xml">GeoClue position API</a> would require some methods to return multiple values, and I haven't figured out how to do this with <a href="http://dbus.freedesktop.org/doc/dbus-python/doc/tutorial.html">dbus-python</a>. If a Python hacker wants to take a look, <a href="https://garage.maemo.org/plugins/scmsvn/viewcvs.php/trunk/src/maemoplazer_service.py?root=maemoplazer&amp;view=markup">the code is in SVN</a>.

In addition to the Maemo Plazer hacking done by Rambo and me, Jerry was doing some <a href="https://garage.maemo.org/projects/roadwarrior">RoadWarrior</a> work .
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/gis" rel="tag">gis</a>, <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/plazes" rel="tag">plazes</a>, <a href="http://www.technorati.com/tag/geoclue" rel="tag">geoclue</a></p>