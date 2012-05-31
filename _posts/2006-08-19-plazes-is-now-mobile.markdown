---
  title: "Plazes is now mobile"
  categories: 
    - "geo"
    - "mobility"
  layout: "post"

---
[Plazes][1] is a service for connecting wireless access points into physical locations. Previously this has only worked with [Wi-FI networks][2], but now [they have launched][8] a [mobile version][3] that uses the cell phone network [base station][4] identifiers for the same thing.

I'm using Plazes as a way to [collect locations][5] I've been in to provide position metadata into all information I produce. This like: Where was this blog posted? What photos were taken near that photo? This data is then fed to the [Midgard positioning service][6] which does all the necessary calculations and metadata handling.

Having a mobile version of Plazes that doesn't require me to carry a computer or find a Wi-Fi hotspot is cool. It means I don't need to carry a GPS receiver to accurately (within cell phone base station area) position photos I take. It also means I have an easy way of querying the Plazes database for open Wi-Fi access points on the go.

Good work, Plazes team!

![Seeking Wi-Fi access points with the Mobile Plazer](/files/n90-plazes.jpg)

__In the other news,__ [Geominder][7] uses the cell phone base station identifiers for connecting TODO items into different locations.

__Updated 2006-08-20:__ [Andrew Turner][9] wrote:

> Geolocation by mobile without a GPS system is key to Location-Based technologies to take off and be generally accepted. Plazes is leading the edge of the community-based geolocated networks. Now time to build some services on top of their framework.

Fully agreed. Plazes position is already [fully integrated][6] into the [Midgard Framework][10] making it easy to build position-based web services.

[1]: http://beta.plazes.com/info/faq/
[2]: http://en.wikipedia.org/wiki/Wi-Fi
[3]: http://beta.plazes.com/tools/mobile.php
[4]: http://en.wikipedia.org/wiki/Base_station
[5]: http://bergie.iki.fi/blog/more-about-positioning-on-the-web.html
[6]: http://bergie.iki.fi/blog/the-midgard-position.html
[7]: http://ludimate.com/products/geominder/
[8]: http://blog.plazes.com/?p=116
[9]: ttp://highearthorbit.com/
[10]: http://www.midgard-project.org/documentation/midcom/