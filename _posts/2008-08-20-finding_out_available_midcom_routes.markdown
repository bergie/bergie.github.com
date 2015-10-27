---
  title: "Finding out available MidCOM routes"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
<a href="http://www.midgard-project.org/documentation/midcom">MidCOM</a> is a PHP <a href="http://en.wikipedia.org/wiki/Model-view-controller">MVC</a> framework where you <a href="http://www.midgard-project.org/documentation/howto-midcom/">create a site</a> by building a tree structure and assigning components for the various folders. Each component is <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">its own PHP application</a> that can handle all URL requests under that folder using a set of configured routes.
</p><p>
In addition to making normal requests to the various routes available, routes provided by other folders can be <a href="http://www.midgard-project.org/documentation/midcom-method-dynamic_load/">loaded dynamically</a> anywhere on the site. This is useful for instance for loading five latest news items to front page.
</p><p>
To make life easier, I now added a new feature to <a href="http://pear.midcom-project.org/index.php?package=midcom_admin_help&amp;release=1.2.0&amp;downloads">midcom.admin.help</a>, the online help component. Each folder will automatically list their documentation and available routes when you access their URL <em>__ais/help</em>:
</p><p>
<a href="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midcom_admin_help_routes.png"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midcom_admin_help_routes-tm.jpg" height="251" width="400" border="1" hspace="4" vspace="4" alt="midcom.admin.help routes list" title="midcom.admin.help routes list" /></a>
</p><p>
To get this feature you only need to upgrade the help component:
</p><pre>
# pear upgrade midcom/midcom_admin_help
</pre>
