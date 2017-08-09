---
  title: "Google indexes PermaLinks?"
  categories: 
    - "oscom"
  layout: "post"

---
It seems that Google is now [autodetecting PermaLinks][1] of dynamically-generated pages using the `rel="PermaLink"` syntax. Here's one of the results for my blog:

![PermaLink URL used on Google](https://d2vqpl3tx84ay5.cloudfront.net/google-permalinks.jpg)

This is probably a really good idea, as it allows their search result links point to correct document even if the target site has been reorganized, combatting [linkrot][2]. Of course [cool URLs don't change][4], but as [they're titles too][5] they can change during reorganizations, creating the need for permanent links.

Making the PermaLink of a page machine-readable is really easy, [as shown by WikiPedia][3]:

> Permalinks can be displayed on the system using a HTML link element. This way authoring tools can automatically detect the permalink and use that for linking instead of the regular URL. The Link element should include two attributes: 

> `<link rel="bookmark" href="<PermaLink URL>" />`

__Updated 16:00:__ [Tantek][6] from [#microformats][8] pointed me to an even [earlier convention][7] for making PermaLinks machine-readable: `rel="bookmark"`.

[Midgard CMS][9] has now [been updated][11] support `rel="bookmark"` as it is outlined even in the [HTML spec][12].

[1]: http://bergie.iki.fi/midcom-permalink-7e547e60752b061c1589f037f2b6d77d
[2]: http://www.useit.com/alertbox/980614.html
[3]: http://en.wikipedia.org/wiki/Permalink
[4]: http://www.w3.org/Provider/Style/URI
[5]: http://weblog.infoworld.com/udell/misc/oscom/urlsAreTitlesToo.html
[6]: http://tantek.com/log/2002/11.html#L20021124t1454
[7]: http://annevankesteren.nl/2003/08/putting-relbookmark-to-work
[8]: http://www.microformats.org/<
[9]: http://www.midgard-project.org/
[10]: http://wordpress.org/
[11]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/midcom-template/midcom-template.xml?r1=1.32&r2=1.33
[12]: http://www.w3.org/TR/REC-html40/types.html#h-6.12
