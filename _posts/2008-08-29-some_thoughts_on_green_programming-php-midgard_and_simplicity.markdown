---
  title: "Some thoughts on green programming, PHP, Midgard and simplicity"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
<a href="http://en.wikipedia.org/wiki/Rasmus_Lerdorf">Rasmus Lerdorf's</a> excellent talk on <a href="http://talks.php.net/show/froscon08/">PHP and simplicity</a> in FrOSCon introduced me to concept of green programming. To quote the <a href="http://greenprogrammer.blogspot.com/2006/01/what-is-green-programming.html">Green Programming blog</a>:
</p><blockquote>
Just like we should aspire to use renewable energy sources to help the health of the planet, we should also use reusable software elements to create robust, healthy code for our customers. Eco-friendly practices might be thought of as applicable to software devlopment. Just as we are concerned with the various biota and climate of the planet, we should be concerned with the over-all health of the software eco-system.
</blockquote><p>
How does <a href="http://www.midgard-project.org/">Midgard</a> sit in with these ideas? Well, the current version of it does not. <a href="http://www.midgard-project.org/documentation/midcom">MidCOM 2</a> is a heavy, enterprise-oriented CMS framework that requires big machines, or even clusters to run.
</p><p>
But things are quite different in <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">Midgard 2 land</a>. We have <a href="http://bergie.iki.fi/blog/some_plans_for_midcom_3/">rewritten the MidCOM framework</a> from scratch, removing the need to have abstractions on top of abstractions to support the shift from <a href="http://www.midgard-project.org/documentation/reference/#9f42c2021f0b0efedacd0ae9d6801c5c">classic Midgard APIs</a> to the <a href="http://www.midgard-project.org/documentation/reference/#3855e6325f5459c1d4f3b9863bc7debe">new ones</a>, and from PHP4 to <a href="http://tr2.php.net/zend-engine-2.php">more object-oriented PHP versions</a>. We have also focused on simplicity and adaptability, to make MidCOM an easier environment <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">to work with</a> for site developers.
</p><p>
While MidCOM3 is not due to be out before next March, <a href="http://teroheikkinen.iki.fi/">Tero Heikkinen</a>, an early adopter has been building some production sites with it already. And his experiences state that not only the performance is much better, but also it requires much less work from programmers.
</p><p>
I know <a href="http://www.sitepoint.com/blogs/2008/08/29/rasmus-lerdorf-php-frameworks-think-again/">Rasmus' argument is that frameworks are evil</a> by requiring developers to adopt to their own concepts, and by introducing unnecessary overhead. But we should look beyond mere server-level productivity, and take programmer productivity into account. A framework makes things much easier for agile teams, enabling people with different competences to work in their isolated environments. Programmers can work on the code, and designers on <a href="http://phptal.motion-twin.com/">the templates</a> for instance.
</p><p>
While this makes the actual development and deployment process more efficient, how much performance is lost due to the framework?
<br /><span style="font-size:14pt;"><strong>
<br />Lies, damn lies and benchmarks
<br /></strong></span>
</p><p>
Like Rasmus, I used an <a href="http://pecl.php.net/package/APC">APC-cached</a> simple PHP "<em>hello world</em>" file as the baseline for my benchmarks. On my <a href="http://www.marco.org/277">dog slow MacBook Air</a>, the simple PHP file was able to serve <strong>32.91</strong> requests per second.
</p><p>
MidCOM3, when run on <a href="http://www.midgard-project.org/updates/view/1219823947.html">Midgard 8.09</a> with APC and <a href="http://www.danga.com/memcached/">memcached</a> was able to serve <strong>8.90</strong> request per second, or in other words performed at 27% of the plain PHP file. Not too good, but considered that much SQL is run to <a href="http://www.midgard-project.org/documentation/concepts-host_and_page/">serve a Midgard page</a>, there are good explanations at this.
</p><p>
But compared to <a href="http://drupal.org/">Drupal</a>, which I did not install but instead calculated <a href="http://talks.php.net/show/froscon08/32">the performance</a> based on the difference between my baseline (32.91 r/s) and Rasmus' (611.78 r/s), MidCOM3 was doing quite fine. Drupal would only be serving about <strong>2.5</strong> requests per second on my box. <a href="http://framework.zend.com/">Zend Framework</a>, again calculated from <a href="http://talks.php.net/show/froscon08/29">Rasmus' data</a> would provide <strong>6.5</strong> request per second.
</p><p>
And this is not all. <a href="http://blogs.nemein.com/people/piotras/">Piotr Pokora</a> has done a stellar work with <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">Midgard2</a>, which <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases/">will come out in spring</a> numbered 9.03. With it, MidCOM's numbers were quite a lot better: <strong>25.37</strong> requests per second, or 77% of the simple PHP file's performance. This is actually faster than the same simple PHP file on my box without APC (24.84 r/s).
</p><p>
I believe the MidCOM3 performance story does not end here. <a href="http://www.midgard-project.org/discussion/developer-forum/caching_midgard_requests/">Piotras has been doing experiments</a> with caching Midgard's initial request data to reduce database queries, and MidCOM3 still misses the <a href="http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-cache/">extensive caching infrastructure</a> provided by MidCOM2. When these are in place, we may get pretty damn close to the plain PHP numbers.
</p><p>
So, with these numbers, I think we can say that Midgard2 will be quite a good framework for doing green programming while still retaining agile team efficiency.
</p><p>
<span style="font-size:14pt;"><strong>
<br />Towards a greener future</strong></span>
</p><p>
This matters quite a lot, as then Midgard can be run with much smaller virtual machines consuming much less electricity to serve interesting information-rich applications.
</p><p>
When Ragnaroek gets out in end of September we will start focusing our efforts to the new platform that already is showing so much promise. A brighter, greener, more efficient future lies ahead!
</p>