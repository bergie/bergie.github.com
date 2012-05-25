---
  title: "MidCOM content cache rides again"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<img src="http://bergie.iki.fi/midcom-serveattachmentguid-b8b8e07c987411dcbb13ffd47bcde2d8e2d8/thumbs-up.jpg" height="298" width="187" border="0" align="right" hspace="8" vspace="4" alt="Vali likes the Content Cache" title="Vali likes the Content Cache" />
<a href="http://www.midgard-project.org/">Midgard</a> is quite a <a href="http://www.ohloh.net/projects/3309/analyses/latest">huge framework</a>, and so <a href="http://en.wikipedia.org/wiki/Cache">caching</a> is needed to keep things efficient. To that effect, <a href="http://www.midgard-project.org/updates/view/midcom-2_4_0.html">MidCOM 2.4 in 2005</a> added a <a href="http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-cache/">major feature of caching</a> generated pages until they needed reconstructing.

However, with the 2005 technology the caching system proved to be troublesome: Berkeley DB corruption, faulty invalidation mechanisms and other problems. When we started working on <a href="http://www.midgard-project.org/updates/view/midcom-2_5_0.html">MidCOM 2.5</a> we decided to remove MidCOM's own content caching infrastructure in favor of using a <a href="http://www.midgard-project.org/documentation/setting-up-squid-reverse-proxy/">Squid reverse proxy</a>.

Squid is quite a nice piece of software, but it also mean adding quite a big dependency on top of our software stack, and so lots of smaller sites ran without it. 

To remedy that problem we have now revived the content cache with more reliable <a href="http://www.danga.com/memcached/">storage</a> <a href="http://www.sqlite.org/">back-ends</a> and <a href="http://www.midgard-project.org/discussion/developer-forum/read/23110f7478a611dcaf47c9e3555949044904.html">invalidation mechanisms</a>. The new system follows <a href="http://www.midgard-project.org/discussion/developer-forum/read/fcfd26c091ef11dca68d318091898c508c50.html">some ESI conventions</a> and produces quite <a href="http://www.midgard-project.org/discussion/developer-forum/read/c54c1bfa8f8311dc8aa411258c18d785d785.html">nice performance gains</a>.

It is already available in both MidCOM trunk and in latest <a href="http://pear.midcom-project.org/index.php?package=midcom&amp;release=2.8.0beta19&amp;downloads">2.8 beta packages</a>. To start using it, simply make the following configuration change:

<pre>$GLOBALS['midcom_config_local']['cache_module_content_uncached'] = false;
</pre>Thanks to <a href="http://teroheikkinen.iki.fi/">Tero Heikkinen</a> for <a href="http://www.slideshare.net/tepheikk/caching-idea-for-midcom/">pushing this through</a>!

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/cache" rel="tag">cache</a></p><!-- technorati tags end -->