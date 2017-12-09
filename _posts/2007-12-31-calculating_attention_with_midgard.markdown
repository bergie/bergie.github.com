---
  title: "Calculating attention with Midgard"
  categories: 
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/apml-icon-128x128.png'

---
<img src="https://d2vqpl3tx84ay5.cloudfront.net/apml-icon-128x128.png" height="128" width="128" border="0" align="right" hspace="8" vspace="4" alt="APML" title="APML" />
Last week I was <a href="http://bergie.iki.fi/blog/putting_attention_to_midgard/">pondering how to add attention profiling</a> support to the <a href="http://www.midgard-project.org/">Midgard</a> framework, and now it <a href="http://trac.midgard-project.org/browser/branches/ragnaroek/midcom/net.nemein.attention/">is there</a>. Midgard is able to gather user's interests and attention from multiple sources:
<ul><li><a href="http://del.icio.us/">del.icio.us</a> bookmarks</li><li><a href="http://www.last.fm/">last.fm</a> listened tracks</li><li><a href="http://bergie.iki.fi/blog/maemo_social_news_launched/">social news</a> favoriting</li><li>...and other imported <a href="http://www.apml.org/">APML</a> sources</li></ul>What remains to be seen is how this will be used to <a href="http://worrydream.com/MagicInk/#inferring_context_from_history">make websites smarter and more useful</a> to people. In any case, for the developer using attention profile information is now trivial:

<pre>// Load the attention profiling library
$_MIDCOM-&gt;load_library('net.nemein.attention');

// Instantiate attention calculator for current user's default attention profile
$calculator = new net_nemein_attention_calculator();

// Get attention score for an article
$score = $calculator-&gt;rate_object($article);
</pre>Attention score is a decimal number between 1 and -1, where 0 is &quot;neutral attention&quot;.

Coming up: APML profiles for <a href="http://maemo.org/profile/list">active maemo.org users</a>.
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/apml">apml</a>, <a href="http://www.technorati.com/tag/attention">attention</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/php">php</a></p>
