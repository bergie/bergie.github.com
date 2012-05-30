---
  title: "Search engines have an important role in Semantic Web"
  categories: 
    - "midgard"
    - "oscom"
    - ""
  layout: "post"

---
<p>
Thanks to the <a href="http://bergie.iki.fi/blog/starting_the_interactive_knowledge_project/">IKS project</a>, I've spent some thought lately in how to make something practical from the concept of <a href="http://www.w3.org/DesignIssues/Semantic.html">Semantic Web</a>.
</p><p>
As always, the big issue is getting the semantic information out there. In a strongly <a href="http://www.midgard-project.org/documentation/mgdschema/">typed</a> CMS like <a href="http://www.midgard-project.org/">Midgard</a>, many semantics can be gathered <a href="http://www.midgard-project.org/documentation/microformat-usage-in-midcom/">from content structure</a> directly, but to really get there we need users to add metadata. And as <a href="http://www.well.com/~doctorow/metacrap.htm#2.2">users are lazy</a>, this will happen only if it provides some direct benefit: just look at how frequently people <a href="http://www.ehow.com/how_2031208_tag-friends-facebook.html">tag their photos</a> on Facebook. Irritating or not, this happens because the tags are actually used to promote the pictures in <a href="http://www.techcrunch.com/2006/09/05/new-facebook-redesign-more-than-just-aesthetics/">the news feeds</a> of tagged people.
</p><p>
For this to happen in the web in general, we need to start having the search engines leverage the <a href="http://en.wikipedia.org/wiki/RDFa">semantic information</a>. <a href="http://bergie.iki.fi/blog/semantic_web_is_here-yahoo-and_microformats/">Yahoo! already does this</a> to some extent, making use of <a href="http://microformats.org/">microformats</a> and <a href="http://www.w3.org/TR/xhtml-rdfa-primer/">RDFa</a> in <a href="http://developer.yahoo.net/blog/archives/2009/01/yql_with_microformats.html">Yahoo! Query Language</a> and in the <a href="http://developer.yahoo.net/blog/archives/2008/12/monkey_finds_microformats_and_rdf.html">Search Monkey engine</a>. This means we can already do simple semantic queries like "<a href="http://search.yahoo.com/search;_ylt=A0geu5FiYppJyx0AXotXNyoA?p=bergius+searchmonkeyid%3Acom.yahoo.page.uf.geo+helsinki&amp;y=Search&amp;fr=">pages mentioning Bergius in the Helsinki area</a>":
</p><p>
<a href="http://bergie.iki.fi/midcom-serveattachmentguid-2242647afcc711ddaaf0553a9056a9e2a9e2/yahoo-semantic-geo-query.png"><img src="http://bergie.iki.fi/midcom-serveattachmentguid-23e97e12fcc711dda31497b2eec4cd17cd17/yahoo-semantic-geo-query-tm.jpg" height="295" width="400" border="1" hspace="4" vspace="4" alt="Yahoo! semantic geo query" title="Yahoo! semantic geo query" /></a>
</p><p>
Actually, the Yahoo! results are quite interesting:
</p><ul><li><a href="http://bergie.iki.fi/">My web page</a> (which shows my current location, so it may depend on time indexed)</li>
<li>Some Chinese(?) spam site that syndicates my content, proving that also <a href="http://www.well.com/~doctorow/metacrap.htm#2.1">in the Semantic Web people lie</a></li>
<li>Some <a href="http://plazes.com/users/7006">Plazes entries</a> about me located in Helsinki</li>
<li>Midgard events held <a href="http://www.midgard-project.org/community/events/midgard_gathering_2008/">near Helsinki</a></li>
</ul><p>
Since search engines (well, <a href="http://www.google.com/">Google</a> really) are <a href="http://www.cabel.name/2008/03/japan-urls-are-totally-out.html">the way people access the web</a>, search engines are the key for making semantic information more widely available. Just look at <a href="http://blog.unto.net/web/a-survey-of-rel-values-on-the-web/">DeWitt Clinton's survey of rel values</a> from yesterday: <a href="http://googleblog.blogspot.com/2005/01/preventing-comment-spam.html">Google-defined</a> <code>rel="nofollow"</code> is the most popular <a href="http://www.whatwg.org/specs/web-apps/current-work/#linkTypes">rel value</a> out there, even surpassing <a href="http://www.w3.org/TR/REC-html40/present/styles.html#h-14.3">style sheet declarations</a>. This if nothing else shows the power of search engines in promoting new standards.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/google" rel="tag">google</a>, <a href="http://www.technorati.com/tag/iks" rel="tag">iks</a>, <a href="http://www.technorati.com/tag/microformats" rel="tag">microformats</a>, <a href="http://www.technorati.com/tag/yahoo" rel="tag">yahoo</a>, <a href="http://www.technorati.com/tag/rdfa" rel="tag">rdfa</a>, <a href="http://www.technorati.com/tag/search" rel="tag">search</a>, <a href="http://www.technorati.com/tag/semanticweb" rel="tag">semanticweb</a></p>