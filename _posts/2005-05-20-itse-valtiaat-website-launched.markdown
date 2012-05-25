---
  title: "Itse Valtiaat website launched"
  categories: 
    - "midgard"
  layout: "post"

---
The [Finnish Broadcasting Company][1] launched today the website for [Itse Valtiaat][2], a popular [political satire][3] cartoon series. The site user interface has been built with Flash to provide an interactive and animated world familiar from the series.

![Front page of the website](http://bergie.iki.fi/midcom-serveattachmentguid-b06ac7bab9396def4a96c57e8e42635c/itsevaltiaat-front-navi.jpg)

The Flash site has been built by __Joonas Kallioinen__ from [Piippunaakka][4], and it uses [Midgard CMS][5] as the back-end. Different site areas are introduced by familiar characters from the series.

Midgard CMS provides all content used on the site, and allows users to interact by voting their favorite episodes for reruns.

![Voting booth for rerun selection](http://bergie.iki.fi/midcom-serveattachmentguid-68af5bce232ee0a4bfe41430f3c8b263/itsevaltiaat-vote.jpg)

The Flash front-end communicates with Midgard using XML requests to unique URLs of different content resources. The XML communications have been developed following the [Ajax][6] model.

Midgard CMS provides a web-based content authoring interface used for all updates on the site, including video and image uploads.

![Midgard interface for administrating episode data](http://bergie.iki.fi/midcom-serveattachmentguid-49d7f7e890105a6840804545976a14ed/itsevaltiaat-admin-episode.jpg)

The Flash interface retrieves some parts of site content using [RSS][7], and the feeds may be opened to public at a later date.

Site's hosting is provided by [Nebula's][8] _Midgard Web Hotel_ service.

[1]: http://www.yle.fi/fbc/index.shtml
[2]: http://www.itsevaltiaat.fi/
[3]: http://fi.wikipedia.org/wiki/Itse_valtiaat
[4]: http://www.piippunaakka.fi/
[5]: http://www.midgard-project.org/
[6]: http://www.adaptivepath.com/publications/essays/archives/000385.php
[7]: http://www.xml.com/pub/a/2002/12/18/dive-into-xml.html
[8]: http://www.nebula.fi/