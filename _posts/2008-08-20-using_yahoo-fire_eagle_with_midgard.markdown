---
  title: "Using Yahoo! Fire Eagle with Midgard"
  categories: 
    - "midgard"
    - "geo"
    - ""
  layout: "post"

---
<p>
<a href="http://fireeagle.yahoo.net/">Yahoo! Fire Eagle</a>, kind of "<a href="http://geoclue.freedesktop.org/">GeoClue</a> for the Web" <a href="http://feblog.yahoo.net/2008/08/14/fire-eagle-is-open/">was released</a> last week. It acts as <a href="http://arstechnica.com/news.ars/post/20080820-fireeagle-ignites-geo-aware-applications.html">a central hub</a> collection position information from services like <a href="http://plazes.com/">Plazes</a> and <a href="http://www.dopplr.com/">Dopplr</a>, and with <a href="http://bergie.iki.fi/blog/yahoo-fire_eagle_knows_where_my_phone_moves/">a simple PHP script</a>, <a href="http://jaiku.com/">Jaiku</a>. <a href="http://fireeagle.yahoo.net/gallery">Services</a> needing user's location can then <a href="http://fireeagle.yahoo.net/developer">ask it from Fire Eagle</a> instead of having to support all the services separately.
</p><p>
<a href="http://bergie.iki.fi/blog/the-midgard-position/">Midgard's positioning framework</a> has been Fire Eagle compatible <a href="http://bergie.iki.fi/blog/yahoo-fire_eagle_knows_where_my_phone_moves/">since March this year</a>. Now that the service is open for <a href="http://vilunki.wordpress.com/2008/03/10/youre-invited-to-read-this-blog-post-beta/">a wider audience</a>, I though it would be useful to tell how to activate it with your Midgard-powered site.
</p><p>
You need to authorize <a href="http://www.midgard-project.org/">Midgard</a> with your Fire Eagle account. To do this, go to:
</p><pre>
http://www.example.net/midcom-exec-org.routamc.positioning/test-fireeagle.php
</pre><p>
and follow the authorization instructions. This is due to Fire Eagle using the nice <a href="http://en.wikipedia.org/wiki/OAuth">OAuth protocol</a>.
</p><p>
Once this is done <a href="http://midgardwiki.contentcontrol-berlin.de/index.php/Midcom.services.cron">MidCOM cron</a> will start tracking your Fire Eagle location. All objects you have created (photos, blogs, comments, etc) will then be automatically tagged with where you made them.
</p><p>
<a href="/files/yahoo-fireeagle-20080820.png"><img src="/files/yahoo-fireeagle-20080820-tm.jpg" height="330" width="400" border="1" hspace="4" vspace="4" alt="Yahoo! Fire Eagle" title="Yahoo! Fire Eagle" /></a>
</p>