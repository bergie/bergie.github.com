---
  title: "Embedding simple PHP scripts in Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/documentation/midcom">MidCOM</a>, the PHP framework for <a href="http://www.midgard-project.org/">Midgard CMS</a> has <a href="http://pear.midcom-project.org/">over hundred components</a> for various purposes ranging from <a href="http://www.iade.fi/iade/blog/">blogging</a> to <a href="http://en.wikipedia.org/wiki/Waste_management">waste management</a> statistics. But even with all of them it is sometimes useful to embed some custom PHP scripts to a site. The old method of doing this was using a custom style for a folder and including PHP files there, which was a bit awkward.

<a href="http://www.kaktus.cc/weblog/view/1198170777.html">As Arttu mentioned</a>, <a href="http://bergie.iki.fi/blog/building_a_new_admin_interface_for_midgard/">Asgard, Midgard's new administrative interface</a> has been receiving a lot of love recently. This has mostly focused on centralizing features strewn across the MidCOM environment to a single interface: attachment handling, version control, <a href="http://www.midgard-project.org/discussion/developer-forum/new_component_configuration_ui/">component configuration</a>, ...

Another change made yesterday was making the &quot;<em>nullcomponent</em>&quot;, the fallback component used by MidCOM in case a folder doesn't have a component assigned more useful.

Now you can configure it to execute code stored in the folder:

<img src="/files/asgard-libconfig-nullcomponent.jpg" height="104" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Libconfig-Nullcomponent" />

Then just edit the code:

<img src="/files/asgard-edit-topic-code.jpg" height="179" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Edit-Topic-Code" />

And it will be executed in the folder:

<img src="/files/nullcomponent-phpinfo.jpg" height="220" width="400" border="1" hspace="4" vspace="4" alt="Nullcomponent-Phpinfo" /><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/asgard">asgard</a>, <a href="http://www.technorati.com/tag/midcom">midcom</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a></p>