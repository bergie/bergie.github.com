---
  title: "Content management starts with the repository"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
<a href="http://www.gadgetopia.com/">Gadgetopia</a> makes <a href="http://www.gadgetopia.com/post/6931">an argument for building your own CMS</a>:
</p><blockquote>
<em>"See — the problem with a full scale Content Management System is that it has too many opinions. Those opinions were though of by somebody other than you and the needs of your organization. The more developed a content management system (or any piece of software, really) the more “opinions” it has. And the more “opinions” it has, the more likely one of them is going to really tick you off."</em>
<br />
<br />I can relate to this.  We work with one system in particular that makes an astonishing array of presumptions about how you’re going to use it, and if you try to step outside those presumptions, demons fly out of the abyss and try to suck your eyeballs out.
<br />
<br />This goes back to a previous discussion we had about <a href="http://www.gadgetopia.com/post/6091">Content Management as an API</a>.  In that post, we had a great experience with hand-rolling a CMS...
</blockquote><p>
The term they are looking for is <a href="http://bergie.iki.fi/blog/why_you_should_use_a_content_repository_for_your_application/">Content Repository</a>, a service that provides common APIs for content storage, retrieval, signaling and so forth. With <a href="http://www.midgard-project.org/">Midgard</a> we're <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">following this approach</a>, providing <a href="http://bergie.iki.fi/blog/midgard_and_jcr-a_look_at_two_content_repositories/">content retrieval</a> and <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">web functionality APIs</a> first, and then building some reusable user interfaces on top of that.
</p><p>
In addition to Midgard some content repositories to look at include <a href="http://couchdb.apache.org/">Apache CouchDB</a> and <a href="http://jackrabbit.apache.org/">Jackrabbit</a>. All of them allow you to <a href="http://bergie.iki.fi/blog/why_you_should_use_a_content_repository_for_your_application/">stop worrying about storage and retrieval</a> methods and focus on the actual end user functionalities, while keeping the whole system accessible and scriptable for integration purposes.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/jcr" rel="tag">jcr</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>