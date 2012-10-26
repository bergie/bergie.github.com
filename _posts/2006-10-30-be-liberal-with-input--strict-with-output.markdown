---
  title: "Be liberal with input, strict with output"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
[Midgard's][1] support for [GeoRSS][2] is solidifying with the [auto-probing system in OpenPsa][3] and the [latest release][4] of [org.routamc.positioning][5].  

After a brief consultation with the [Andrew Turner][7] from [GeoClue][8] I decided to skip the [confusing jungle of GeoRSS specifications][6] and follow the good old principle of _being liberal with input, strict with output_.

This means that now Midgard can import position data from [HTML ICBM meta tags][9], [W3C Geo RSS][10] and [Simple GeoRSS formats][11] but only outputs it in GeoRSS Simple format. And here's one of the results:

![DeathMonkey's GeoRSS-driven position map](/files/deathmonkey-map-small.jpg)

__Note:__ This change of approach also means that Midgard can communicate with [GeoPress][12] quite easily.

[1]: http://www.midgard-project.org/
[2]: http://www.georss.org/
[3]: http://bergie.iki.fi/blog/contact-management-in-semantic-web/
[4]: http://pear.midcom-project.org/index.php?package=org_routamc_positioning&release=1.1.0&downloads
[5]: http://bergie.iki.fi/blog/the-midgard-position/
[6]: http://www.digitaltrailblazer.com/2006/08/whats_the_geors.html
[7]: http://highearthorbit.com/
[8]: http://live.gnome.org/GeoClue
[9]: http://geourl.org/add.html
[10]: http://www.georss.org/w3c.html
[11]: http://www.georss.org/simple.html
[12]: http://www.georss.org/geopress/