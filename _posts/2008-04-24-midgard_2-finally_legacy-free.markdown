---
  title: "Midgard 2: Finally legacy-free"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
While <a href="http://www.flickr.com/photos/bergie/2439346766/">watching</a> <a href="http://ecanuto.blogspot.com/">Everaldo</a> work on the upcoming <a href="http://trac.midgard-project.org/browser/trunk/midgard/apis/mono">Midgard C# bindings</a>, I decided to try running <a href="http://blogs.nemein.com/people/piotras/view/1208851555.html">Midgard 2 with lighttpd</a>. After quite a lot of struggling to get <a href="http://trac.midgard-project.org/browser/trunk/midgard">latest SVN checkout</a> to compile on <a href="http://bergie.iki.fi/blog/switching-to-intel-macbook.html">my mac</a>, and some playing with <a href="http://trac.lighttpd.net/trac/wiki/Docs:ModRewrite">lighty rewrite rules</a>, I was greeted with a working <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance.html">MidCOM 3 page</a>:
</p><p>
<a href="/files/midcom3-on-midgard2-and-lighttpd.png"><img src="http://bergie.iki.fi/midcom-serveattachmentguid-88e6d368124f11dd97587789b613b901b901/midcom3-on-midgard2-and-lighttpd-tm.jpg" height="310" width="400" border="1" hspace="4" vspace="4" alt="MidCOM 3 running on Midgard 2 and lighttpd" title="MidCOM 3 running on Midgard 2 and lighttpd" /></a>
</p><p>
So, after <a href="http://www.kaktus.cc/weblog/view/4658b837d2e9075028380198a39fbc0f.html">such a long time</a>, <a href="http://blogs.nemein.com/people/piotras/view/midgard2---flexibility-rocks.html">Midgard 2</a> is finally a running system without any legacy dependencies, independent of <a href="http://blogs.nemein.com/people/piotras/view/1207923307.html">HTTP server module</a> or <a href="http://blogs.nemein.com/people/piotras/view/1178011811.html">a specific database engine</a>. Things will be even more interesting as we will really start using <a href="http://bergie.iki.fi/blog/interprocess_communications_in_midgard-d-bus_comes_to_the_web.html">Python, PHP and mono bindings together using D-Bus</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/dbus">dbus</a>, <a href="http://www.technorati.com/tag/midcom">midcom</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/mono">mono</a>, <a href="http://www.technorati.com/tag/php">php</a>, <a href="http://www.technorati.com/tag/lighttpd">lighttpd</a>, <a href="http://www.technorati.com/tag/python">python</a></p>