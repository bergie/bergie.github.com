---
  title: "Putting Attention to Midgard"
  categories: 
    - "midgard"
    - "oscom"
    - ""
  layout: "post"

---
<a href="http://en.wikipedia.org/wiki/Information_overload">Information overload</a> is <a href="http://news.wired.com/dynamic/stories/T/TECHBIT_INFORMATION_OVERLOAD?SITE=WIRE&amp;SECTION=HOME&amp;TEMPLATE=DEFAULT&amp;CTIME=2007-12-26-10-12-23">becoming a major issue</a>, and more sophisticated solutions will be needed to tackle it. With <a href="http://www.midgard-project.org/">Midgard</a> we've already taken some steps into this space by creating tools for <a href="http://bergie.iki.fi/blog/calculating_news_item_relevance.html">calculating newsworthiness of stories</a> in order to present <a href="http://bergie.iki.fi/blog/maemo_social_news_launched.html">only relevant ones</a> to a user.

After being able to calculate objective <a href="http://radar.oreilly.com/archives/2006/08/flickr_and_interestingness_1.html">interestingness</a> of various data items, the next phase is to make the filters more subjective, more personal. <a href="http://www.cleverclogs.org/2007/10/basics-of-atten.html">Attention profiling</a> is a tool for this. There are already some attention-based services on the web that work quite well. For example, <a href="http://www.amazon.com/">Amazon</a> is able to make quite accurate book recommendations to me, and the concerts suggested by <a href="http://www.last.fm/user/henribergius/">Last.fm</a> have mostly been interesting. But so far this all has happened in closed silos.

<a href="http://www.apml.org/">APML</a> is an <a href="http://en.wikipedia.org/wiki/APML">emerging standard</a> for syndicating attention profiling information between web services and applications. While not many services support it directly, there are <a href="http://tastebroker.org/">some third-party tools</a> for gathering the data from various sites.

<img src="/files/apml-flow.jpg" height="143" width="398" border="1" hspace="4" vspace="4" alt="Apml-Flow" />

There are many places in Midgard where attention profiling could be used to provide better service to users. My plan for APML support is following:

Generating attention data:

<ul><li><strong>net.nemein.favorites</strong>: faving items generates positive attention for item's tags and categories, burying items generates negative attention for item's tags and categories</li><li><strong>net.nehmer.blog</strong>: tags of blog entries created by user generate positive attention</li><li><strong>net.nemein.bookmarks</strong>: tags of bookmarks generate positive attention</li></ul>Using attention data:

<ul><li><strong>org.maemo.socialnews</strong>: use attention as additional modifier when calculating what to show</li><li><strong>org.routamc.photostream</strong>: create a new &quot;most interesting&quot; view of photos based on photo tags and user's attention</li></ul>In order to make this all possible there should be an attention handling library that would provide easy APIs for attention calculations.<span style="font-size:10pt;"></span><p style="text-align:right;"><span style="font-size:10pt;">
Technorati Tags: </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/apml">apml</a></span><span style="font-size:10pt;">, </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/attention">attention</a></span><span style="font-size:10pt;">, </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/infoglut">infoglut</a></span></p>