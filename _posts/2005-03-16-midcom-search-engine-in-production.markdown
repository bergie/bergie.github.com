---
  title: "MidCOM search engine in production"
  categories: 
    - "midgard"
  layout: "post"

---
We've today moved the [MidCOM search tool][1] into production together with the [development release 2.3][2]. Some statistics from Torben:

> [M-P.org][3] needs 242 MB (Apache+PHP+data) to do a complete reindex, which means
that PHP used around 220 MB of memory for this. It didn't bother the indexer
much, it stayed at around 20 MB memory load.

> During the complete reindex, which ran around 10-15 minutes we indexed 1,583
articles and perhaps one or two hundred attachments.

> Not bright, but could have been worse, especially if a reindex should be
neccessary very rarely.

Once the initial reindexing has been run all new changes in the Midgard database will be automatically indexed. This means that the search tool will always have fresh results, even if new documents have been added, or old ones have been changed or deleted.

Other advantages from this new search system include the fact that the search results are component-aware, enabling us to display thumbnails for image results etc. The searches are also aware of the Midgard permission system, ensuring that users will get results from all documents they're allowed to see. The possibilities of the [Lucene search syntax][8] are also promising.

![Searching Midgard site for Seoul](https://d2vqpl3tx84ay5.cloudfront.net/search-seoul.jpg)

Try out the new tool by [searching the Midgard site][4]. It can also be deployed by [installing the indexer][1] and setting MidCOM template to use the _xmltcp_ indexer plugin. I've already done this for [my site][5] and it seems to work really well.

Great work, Torben!

_In the other news_, I was interviewed today about [flight training][6] for the Finnish youth TV program [Buusteri][7]. The show should air on week 14.

[1]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_4/the-midcom-indexer.html
[2]: http://www.midgard-project.org/updates/midcom-2_3_0-released.html
[3]: http://www.midgard-project.org/
[4]: http://www.midgard-project.org/search/advanced.html
[5]: http://bergie.iki.fi/archive/search/
[6]: http://www.mik.fi/
[7]: http://www.mik.fi/nelosen-buusteri-ohjelma-haastatteli-miklaisia.html
[8]: http://lucene.apache.org/java/docs/queryparsersyntax.html
