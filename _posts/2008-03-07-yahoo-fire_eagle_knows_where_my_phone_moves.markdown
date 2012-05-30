---
  title: "Yahoo! Fire Eagle knows where my phone moves"
  categories: 
    - "geo"
    - "midgard"
    - ""
  layout: "post"

---
<p>
I've been <a href="http://bergie.iki.fi/blog/jaiku-personal_presence_aggregator.html">a happy user</a> of the <a href="http://jaiku.com/mobile">Jaiku S60 client</a> for a while now. It not only allows me to coordinate things with my friends on the move, but also positions my phone <a href="http://en.wikipedia.org/wiki/GSM_localization">using cell IDs</a>.
</p><p>
So far I've used the WiFi positioning based <a href="http://bergie.iki.fi/blog/plazes_on_the_n800.html">Plazes client</a> for updating location on my site, but the thought of also using Jaiku has crossed my mind a few times, as it updates my location a lot more often (even if less accurately) than <a href="http://bergie.iki.fi/blog/appliances_are_starting_to_take_over.html">my N810</a> does.
</p><p>
To make things even more interesting, <a href="http://www.readwriteweb.com/archives/location_aware_smart_rollout_f.php">Yahoo! recently launched</a> their <a href="https://fireeagle.yahoo.net/">Fire Eagle</a> positioning service that can use multiple location sources, and distribute the data to multiple clients. This means that if I <a href="http://bergie.iki.fi/blog/the-midgard-position.html">make my Midgard track</a> Fire Eagle instead, I can easily combine both Plazes and Jaiku location data.
</p><p>
However, as for now Fire Eagle only provides a set of APIs, and no tools to work with the various services. So in order to get familiar with <a href="http://fireeagle.yahoo.net/developer">their API</a> and <a href="http://jaiku.com/channel/devku/presence/28244456">to enable Jaiku location</a> I whipped up a <a href="http://www.nehmer.net/~bergie/jaiku2fireeagle.phps">quick PHP script</a> for keeping Fire Eagle updated on my location.
</p><p>
Now in my server's cron I have the line:
</p><pre>
*/20 * * * *   /usr/bin/php /home/bergie/bin/jaiku2fireeagle.php bergie &lt;fire eagle access key&gt; &lt;fire eagle access secret&gt;
</pre><p>
And this seems to give quite decent results:
</p><p>
<a href="http://bergie.iki.fi/midcom-serveattachmentguid-6be093f4ec7411dc8ae8b54eb76a1bf51bf5/fire-eagle-from-jaiku.png"><img src="http://bergie.iki.fi/midcom-serveattachmentguid-8ac8f25cec7411dca8da912c64d0a85ca85c/fire-eagle-from-jaiku-tm.jpg" height="313" width="400" border="1" hspace="4" vspace="4" alt="Fire Eagle location from Jaiku" title="Fire Eagle location from Jaiku" /></a>
</p><p>
In this case <a href="http://bergie.jaiku.com/">my Jaiku location</a> string was <em>Etu-Töölö, Helsinki, Finland</em>. I passed the neighborhood name through <a href="http://www.geonames.org/export/geonames-search.html">GeoNames search</a>, and that mapped the Helsinki district of Etu-Töölö to coordinates to only some hundred meters from my home. Not bad!
</p><p>
Next up: make Fire Eagle a Midgard position source as well. Also, figure out how to tell Fire Eagle that even though I'm providing it coordinates I got from GeoNames, the position is only approximate and not exact.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/geonames">geonames</a>, <a href="http://www.technorati.com/tag/jaiku">jaiku</a>, <a href="http://www.technorati.com/tag/php">php</a>, <a href="http://www.technorati.com/tag/fireeagle">fireeagle</a></p>