---
  title: "Where will desktop applications and web services meet?"
  categories: 
    - "mobility"
    - "desktop"
    - "midgard"
  layout: "post"

---
<p>
<a href="http://www.midgard-project.org/">Midgard</a> follows <a href="http://www.ubuntu.com/">Ubuntu's</a> <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases/">synchronized release schedule</a>, and <a href="http://download.opensuse.org/repositories/home:/midgardproject:/ragnaroek/xUbuntu_8.04/">releases packages</a> for that platform, but otherwise we have little to do with the distribution. Still, I found the following in <a href="https://lists.ubuntu.com/archives/ubuntu-devel-announce/2008-September/000481.html">Mark Shuttleworth's Jaunty Jackalope announcement</a> interesting:
</p><blockquote>
Another goal is the the blurring of web services and desktop applications. "Is it a deer? Is it a bunny? Or is it a weblication - a desktop application that seamlessly integrates the web!" This hare has legs - and horns - and we'll be exploring it in much more detail for Jaunty.
</blockquote><p>
This echos quite well with our plans to take Midgard <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">much further than just the web</a>. As <a href="http://ecanuto.blogspot.com/">Everaldo</a> often reminds me, Midgard may soon become very interesting to developers of desktop and mobile applications. What we provide to them is:
</p><ul><li>A simple <a href="http://bergie.iki.fi/blog/introduction_to_midgards_database_abstraction_system/">object-oriented persistent storage library</a></li>
<li>Bindings for <a href="http://www.midgard-project.org/documentation/python_midgard/">Python</a> and <a href="http://trac.midgard-project.org/browser/trunk/midgard/apis/mono">Mono</a> in addition to <a href="http://www.midgard-project.org/api-docs/midgard/core/2.0/">the C library</a></li>
<li>Ability to use either SQLite or a "proper database" thanks to <a href="http://www.gnome-db.org/">libgda</a></li>
<li><a href="http://www.midgard-project.org/development/mrfc/view/0030.html">Replication</a> capability, with <a href="http://bergie.iki.fi/blog/xmpp_publish-subscribe_for_midgard_and_ajatus_replication/">XMPP support</a> on its way</li>
<li><a href="http://bergie.iki.fi/blog/interprocess_communications_in_midgard-d-bus_comes_to_the_web/">D-Bus signals</a> for inter-process notifications of I/O events</li>
</ul><p>
And on top of all this, Midgard comes with a <a href="http://bergie.iki.fi/blog/some_thoughts_on_green_programming-php-midgard_and_simplicity/">pretty efficient</a> <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">MVC framework for PHP</a>. This means that the desktop applications can be coupled with <a href="http://www.slideshare.net/bergie/manage-your-personal-information-space-with-midgard/">a nice social web service</a>, all built using same storage and replication mechanisms. Replicated, peer-to-peer applications could be a <a href="http://itmanagement.earthweb.com/osrc/article.php/3760206/Free+and+Open+Source+Software+vs.+Cloud+Computing.htm">free software answer</a> to the risk of cloud <a href="http://www.itbusinessedge.com/blogs/top/?p=282">taking control of your data</a>.
</p>
