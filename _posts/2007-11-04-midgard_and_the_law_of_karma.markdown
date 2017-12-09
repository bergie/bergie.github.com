---
  title: "Midgard and the Law of Karma"
  categories: 
    - "mobility"
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/maemo-karma-quim-tm.jpg'

---
<strong><em>Karma:</em></strong><em> The total effect of a person's actions and conduct during the successive phases of his existence, regarded as determining his next incarnation. (</em><em><a href="http://en.wiktionary.org/wiki/karma">wiktionary</a></em><em>)</em>

Many communities struggle with the question of how to recognize their most valuable members. This is true also for <a href="http://maemo.org/">Nokia's maemo.org</a>, the community for open source development on <a href="http://gigaom.com/2007/11/01/nokia-the-n810-tablet-the-long-view/">internet tablets</a>. With the two latest device releases, Nokia has <a href="http://maemo.org/news/announcements/view/1192708879.html">given hefty discounts</a> to some members of the community, raising obvious questions on who should be entitled to such a developer device.

One part of answering that question (and managing the developer device program in general) was <a href="https://garage.maemo.org/tracker/?func=detail&amp;aid=908&amp;group_id=106&amp;atid=940">developing a CRM system</a> for maemo.org including <a href="http://lists.maemo.org/pipermail/maemo-developers/2007-November/012398.html">karma calculations</a> based on community activity.

<a href="http://en.wikipedia.org/wiki/Karma">Karma</a> is a complex concept which we decided to simplify a bit following the model we implemented for <a href="http://bergie.iki.fi/blog/calculating_news_item_relevance/">evaluating newsworthiness</a> of incoming blog items in the <a href="http://bergie.iki.fi/blog/maemo_social_news_launched/">Social News project</a>:

<ul><li>count different contributions user has made</li><li>run those through a rating system (forum moderation, app catalog stars, social news favs, ...)</li><li>apply a contribution type modifier</li><li>add them up</li></ul>...and <a href="http://maemo.org/profile/list">we have karma</a>:

<a href="https://d2vqpl3tx84ay5.cloudfront.net/maemo-karma-quim.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/maemo-karma-quim-tm.jpg" height="154" width="398" border="1" hspace="4" vspace="4" alt="Maemo-Karma-Quim" /></a>

Technically the Karma system was implemented as a feature of <a href="http://www.midgard-project.org/">Midgard's</a> <a href="http://trac.midgard-project.org/browser/trunk/midcom/net.nehmer.account">net.nehmer.account</a> profile management component. Out-of-the-box it is able to calculate Karma from various items like forum posts and blog comments inside the Midgard database. To complement that it has a quite simple plug-in architecture for Karma calculations from other systems like GForge, SVN or Bugzilla.

It will be interesting to see how Karma builds up when we start pulling it from different pieces of the open source community infrastructure and external services like <a href="http://www.ohloh.net/">Ohloh</a>.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/karma" rel="tag">karma</a></p>
