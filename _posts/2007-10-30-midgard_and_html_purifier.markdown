---
  title: "Midgard and HTML Purifier"
  categories: 
    - "midgard"
  layout: "post"

---
Inspired by <a href="http://kore-nordmann.de/blog.html">Kore Nordmann's</a> post <a href="http://kore-nordmann.de/blog/why_are_you_using_bbcodes.html">Why are you using BBcodes?</a>, <a href="http://www.midgard-project.org/">Midgard</a> now has integrated support for the <a href="http://htmlpurifier.org/">HTML Purifier</a> library. From the HTML Purifier site:

<blockquote>HTML Purifier is a standards-compliant HTML filter library written in PHP. HTML Purifier will not only remove all malicious code (better known as XSS) with a thoroughly audited, secure yet permissive whitelist, it will also make sure your documents are standards compliant, something only achievable with a comprehensive knowledge of W3C's specifications.</blockquote>This means that it will be reasonably easy to configure access lists of allowed HTML to be used when editing documents with the <a href="http://www.midgard-project.org/documentation/midcom-helper-datamanager2/">Datamanager2 library</a>. The same rules will also apply to several tools using DM2 as library, including <a href="http://www.midgard-project.org/documentation/reference-components-net.nemein.rss/">RSS-based news imports</a>.

As Kore wrote, HTML Purifier makes it possible to use a regular HTML WYSIWYG editor for things like blog comments and forum posts while remaining sure that <a href="http://shiflett.org/blog/2007/mar/allowing-html-and-preventing-xss">no abuse happens</a>. With <a href="http://htmlpurifier.org/live/smoketests/printDefinition.php">whitelists</a> you can even allow certain cool things like <a href="http://htmlpurifier.org/docs/enduser-youtube.html">embedding of YouTube videos</a> to posts.
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/xhtml" rel="tag">xhtml</a></p>