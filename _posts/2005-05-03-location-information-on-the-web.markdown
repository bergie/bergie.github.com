---
  title: "Location information on the web"
  categories: 
    - "geo"
    - "oscom"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/geourl.jpg'

---
<img src="https://d2vqpl3tx84ay5.cloudfront.net/geourl.jpg" border="0" height="83" width="112" alt="geourl.jpg" title="Site locations on the GeoURL map" align="right" />

One thing I've been thinking about quite a bit is adding [location awareness][1] to web content. On my site this is currently being done on city level, and the info is attached to all items: blog posts, photos, moblogs etc.

However, this level of accuracy doesn't yet allow us to do the really interesting things. For that, we'd need an easy way to input coordinates together with the data.

[Rich Bowen writes][2]:

> I was talking about Geocaching, as well as other applications of GPS technology, including integration with blogging. Henri is talking with the [GeoURL][3] people about creating standards for encoding coordinate information in other data. For example, there are apparently cameras now that will encode the coordinates into the image, in the meta-data headers. So then, imagine if you could have a search engine where you could search for all photos taken within 1 mile of a certain location, between certain dates. Or, if people have location information in the blog entries, you could search for blog entries about a particular location on a particular day, and build a composite picture of a particular event from multiple individuals. I think it&rsquo;s an idea with a ton of potential, if there was an easy way for people to obtain location information. It&rsquo;s a bit painful right now, and even someone as fascinated with the idea as myself tends not to go through the pain every time.

Besides the question of obtaining accurate coordinate information, and how to easily input it to the system, another big question is privacy. Content creators should be able to state what level of accuracy they're comfortable with:

- Full coordinates
- Coordinates with last few digits removed
- City information
- Country information

This level of privacy could also be connected to time. For example, I might be uncomfortable about announcing my location in real-time, but would have no problems in revealing the coordinates after a week or two.

I need to think about this a bit and try to hack a proof of concept using the [MidCOM metadata system][4].

If content is revealed only on city level, it could be converted back to coordinates using the open source [cities of the world][5] database. [Geo Tags][6] seem to have all the actual HTML meta tags we'd need for these different levels:

	<meta name="geo.position" content="49.2;-123.4" />
	<meta name="geo.placename" content="London, Ontario" />
	<meta name="geo.region" content="CA-ON" />

This would probably work better in this concept than the GeoURL-style [ICBM][7] tag that is limited to only coordinate information.

[1]: http://bergie.iki.fi/blog/adding_location_awareness_to_blogs/
[2]: http://drbacchus.com/wordpress/?p=950
[3]: http://geourl.org/
[4]: http://www.midgard-project.org/midcom-permalink-c25d278a232a61cc6218d726215916e4
[5]: http://www.maxmind.com/download/worldcities/
[6]: http://geotags.com/geo/geotags2.html
[7]: http://geourl.org/add.html
