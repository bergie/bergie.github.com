---
  title: "Midgard and style's attachments"
  categories: 
    - "midgard"
  layout: "post"

---
[Arttu was exploring][1] the advantages and disadvantages of the different ways of serving images and other remote files connected to a [Midgard CMS layout][2]. At first he switched from the legacy [Aegir][3] attachment server to the [MidCOM][4] attachment server:

> After learning this I have been adapting the knowledge to multiple sites and they run a bit faster. It is not only that pictures are loaded, but MidCOM attachement services use also MidCOM cache engine. So, no more excessive loading of every picture and no more pictures left into binary space.

For even higher performance, the obvious solution would be to get the whole image serving out of Midgard and PHP space, and into regular Apache Document Root:

> This of course makes it more diffucult - in a sense - to update CSS. But when a site is in production, there usually shouldn't be need to update these elements constantly.

> The main advantages are

> * doesn't instantiate MidCOM every time an image or CSS file is loaded
  - can be over 20 times per hit to a single page, depending on the amount of pictures and CSS files

> * is browser cacheable
  - of course MidCOM cache also works nicely, but it still needed to be instantiated.

[Piotras replied to this][5] with the idea of using Midgard's built-in feature of serving files attached to pages very efficiently:

>And I wonder what is faster ( I mean someone's work and page request time ) and easier?

> 1. Upload image (`myfavourite.png`)  attaching it to some object. Find its GUID. Write path: `/attachment/[sitegroup GUID]/[attachment GUID]/myfavourite.png`
> 2. Upload image (`myfavourite.png`) attaching it to page and write path: `/page/myfavourite.png`

> Second case requires only 1 (say: _one_) select from database.

The latter solution of using pages as the attachment server certainly sounds appealing for all style-related file serving needs. Now it is obviously quite difficult, but the upcoming _page-based MidCOM_ will make it easier. Still, to make it work, the following would need to happen:

* The new [Style Editor][6] Tarjei is working on should provide pages (site root page?) as the default storage location for style's attachments
* We must ensure the page-based attachment server sends all the correct [caching headers][7]

[1]: http://www.kaktus.cc/weblog/attachments-and-images.html
[2]: http://www.midgard-project.org/midcom-permalink-2732f47bbdf5a868fd7811d696886149
[3]: http://www.midgard-project.org/development/projects/aegir/
[4]: http://www.midgard-project.org/development/projects/midcom/
[5]: http://www.nemein.com/people/piotras/midgard-attachments.html
[6]: http://www.opensubscriber.com/message/dev@midgard-project.org/2455471.html
[7]: http://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html
