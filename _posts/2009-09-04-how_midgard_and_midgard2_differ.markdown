---
  title: "How Midgard and Midgard2 differ"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
I had to make some updates to the architecture diagrams, and I thought to publish them here to showcase the difference. <a href="http://www.midgard-project.org/midgard/8.09/">Midgard</a> was a CMS framework for PHP:
</p><p>
<img src="https://d2vqpl3tx84ay5.cloudfront.net/midgard-architecture-809.png" height="384" width="332" border="0" hspace="4" vspace="4" alt="Midgard 8.09 architecture" title="Midgard 8.09 architecture" />
</p><p>
<a href="http://www.midgard2.org/">Midgard2</a> is a more <a href="http://bergie.iki.fi/blog/why_you_should_use_a_content_repository_for_your_application/">universal content repository</a> where CMS is just one application:
</p><p>
<img src="https://d2vqpl3tx84ay5.cloudfront.net/midgard2-architecture-909.png" height="477" width="429" border="0" hspace="4" vspace="4" alt="Midgard2 9.09 architecture" title="Midgard2 9.09 architecture" />
</p><p>
Please note that more choice in databases and web servers is not the only goodie provided by Midgard2. You also get things like <a href="http://bergie.iki.fi/blog/some_plans_for_midcom_3/">a completely rewritten MVC framework</a>, <a href="http://blogs.nemein.com/people/piotras/view/1246881867.html">database views</a>, <a href="http://blogs.nemein.com/people/piotras/view/1246966442.html">transactions</a> and native <a href="http://blogs.nemein.com/people/piotras/view/1232642360.html">datetime objects</a>. And all of this for multiple programming languages, not <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">just PHP</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>
