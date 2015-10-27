---
  title: "Long-Term Support for Midgard: Ragnaroek is here!"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
<img src="http://bergie.iki.fi/midcom-static/stock-icons/logos/ragnaroek.gif" alt="Midgard Ragnaroek" style="float:right;margin-left:8px;" /></p><p>
<a href="http://www.midgard-project.org/">Midgard CMS</a> switched to a <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases/">synchronized release model</a> this summer, and the first fruit of it is <a href="http://www.midgard-project.org/midgard/8.09/">Midgard 8.09 Ragnaroek</a>, a <em>Long-Term Supported</em> release <a href="http://www.midgard-project.org/updates/view/1223382813.html">launched last week</a>:
</p><blockquote>
Ragnaroek LTS is a Long Term Support version of Midgard for which bug fixes and minor feature improvements will be supplied by the Midgard community for several years. It is recommended that all Midgard users upgrade their installations to the Midgard 8.09 series for stability, performance and maintainance reasons. Upgrade from MidCOM 2.8 installations running with PHP5 has been made as seamless as possible.
<br /><br />The version is targeted to ease transition from web services using the deprecated Midgard 1.x APIs to the new Midgard2 architecture. Because of this, the release provides both API versions. This means that the release can be used to run both Midgard 1 applications like the version 2.9 of the MidCOM component framework, and Midgard2 applications like MidCOM3.
</blockquote><p>
This is the easiest Midgard ever to install, thanks to the new datagard database and website setup tool. Binaries are <a href="http://download.opensuse.org/repositories/home:/midgardproject:/ragnaroek/">available for many platform</a>s thanks to <a href="https://build.opensuse.org/">openSUSE Build Service</a>, making <a href="http://www.midgard-project.org/documentation/installation/">Midgard setup</a> as <a href="http://www.midgard-project.org/documentation/installation-database/">simple</a> as:
</p><pre>
apt-get install midgard-data
datagard
&lt;answer some questions&gt;
</pre><p>
And go to your newly created Midgard site, and <a href="http://www.midgard-project.org/documentation/content-production-with-midcom/">start creating content</a>. Sweet!
</p><p>
In his blog, <a href="http://blogs.nemein.com/people/piotras/">Piotras</a> explains more about the<a href="http://blogs.nemein.com/people/piotras/view/1223463209.html"> importance and long-term strategy related to Midgard 8.09</a>.
</p>
