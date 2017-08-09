---
  title: "More about positioning on the web"
  categories: 
    - "midgard"
  layout: "post"

---
I've posted thoughts about [using location information][1] on the web and my blog has been associating position information and weather on [city level][2] into all documents there since last December. However, this data isn't very useful yet as such. As the city-level information doesn't contain coordinates, I can't:

- Find blog entries or photos from nearby
- Make the blog entries searchable by systems like [GeoURL][3]
- Place the photos [on a map][4]

To fix these problems I need to switch to storing locations based on coordinates, and make the positions more accurate than just the city. This brings me to the big problem location information, just like all metadata has: cost of producing it. If I need to figure out and manually type the current location every time I post an entry, I won't do it. So, the procedure has to be more automated than that.

I think the approach I've been taking so far with location information of entries is pretty good, as the information is [stored centrally][5] (I was in Helsinki from July 17th to 21st), and then entries get their position by matching my track to their creation timestamp. Now my system does this only on per-day level, but it would be easy to match on actual timestamps.

As a person can be only in one place at a time, this system should be quite foolproof. Also, it makes it easy to "mass-locate" data, and to correct location information afterwards.

Currently I maintain the position information via SMS. But for more accurate reporting, this would obviously become expensive and bothersome. When we were in Moscow [Rich Bowen had an idea][6] about getting the location information based on current network, and now there actually is a service for doing this. [Plazes][7] uses a small desktop applet called [Launcher][8] for storing current network identifier, which then is connected to a location. As your Plazes information can be queried via a [WhereAmI web service][9], it would be easy to set up a cron job to update the position data in Midgard using this information:

![Where is Bergie?](https://d2vqpl3tx84ay5.cloudfront.net/plazes-whereis-bergie.jpg)

While Plazes can solve the problem of positioning entries made when in normal network or office environments, for more [adventurous][10] locations importing [GPX logs][11] from a GPS device might be optimal.

__Updated 16:42:__ One point to consider however, is that this approach just marks items posted from a location, not necessarily [about a location][12].

[1]: http://bergie.iki.fi/midcom-permalink-daa03fa102895dd8766637e8c584b453
[2]: http://bergie.iki.fi/midcom-permalink-d46e18692c12ea8655f59f1182e87843
[3]: http://geourl.org/
[4]: http://brainoff.com/worldkit/index.php
[5]: http://bergie.iki.fi/archive/locations/
[6]: http://wooga.drbacchus.com/wordpress/?p=950
[7]: http://beta.plazes.com/
[8]: http://beta.plazes.com/info/files/
[9]: http://www.codeplaze.com/documentation/whereami/
[10]: http://www.horizonsunlimited.com/
[11]: http://www.topografix.com/gpx.asp
[12]: http://www.microformats.org/wiki/location-formats#What_People_are_Publishing
