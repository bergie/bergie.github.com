---
  title: "Some plans for MidCOM 3"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
<a href="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/request-flow-1.png"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/request-flow-1-tm.jpg" height="450" width="240" border="1" align="right" hspace="8" vspace="4" alt="MidCOM 3 request flow" title="MidCOM 3 request flow" /></a>
</p><p>
<a href="http://www.midgard-project.org/documentation/midcom">MidCOM</a> is the PHP framework used for building sites with <a href="http://www.midgard-project.org/">Midgard CMS</a>. Over years it has accumulated lots of components and features, and currently weights <a href="http://www.ohloh.net/projects/3309?p=Midgard">around half million lines of code</a>. At the same time the design, while being well designed, suffers from having to work around lots of limitations in PHP4 and the <a href="http://www.midgard-project.org/documentation/reference/#9f42c2021f0b0efedacd0ae9d6801c5c">old Midgard API</a>.
</p><p>
In preparation for the <a href="http://www.midgard-project.org/discussion/user-forum/developer_meeting_in_sweden/">Midgard Developer Meeting</a> in <a href="http://plazes.com/plazes/13637_anykey">Linköping, Sweden</a> <a href="http://www.midgard-project.org/community/events/midgard_developer_meeting-001.html">next week</a> we have been having <a href="http://bergie.jaiku.com/presence/25332694">some discussions</a> on where to go with a new MidCOM generation, and the consensus seems to be a rewrite, refactoring or porting only selected parts of old code.
</p><p>
As a teaser for that, I've attached an initial HTTP request handling flow chart of the planned MidCOM 3 architecture.
</p><p>
Some points of interest:
</p><ul><li>Clean PHP5 and Midgard2 OOP architecture</li>
<li>Exceptions to replace the old <a href="http://www.midgard-project.org/api-docs/midcom/dev/midcom/midcom_application.html#generate_error">generate_error</a> system</li>
<li>ACL, versioning and watchers implemented with <a href="http://blogs.nemein.com/people/piotras/view/1182197841.html">signals</a> instead of <a href="http://bergie.iki.fi/blog/introduction_to_midgards_database_abstraction_system/#ed234e6562394cdd79f9123900e86063">DBA</a></li>
<li>Good old <a href="http://www.midgard-project.org/documentation/concepts-page_and_style/">Midgard Templating Engine</a> instead of <a href="http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-style-engine/">MidCOM's own implementation</a></li>
<li>Configurable <a href="http://trac.midgard-project.org/ticket/48">request switches</a></li>
<li><a href="http://yaml.org/">YAML</a> instead of PHP array format for configs</li>
<li>Gettext instead of custom l10n format</li>
<li><a href="http://phptal.motion-twin.com/">TAL</a> for output templating (though <a href="http://www.openplans.org/projects/deliverance/introduction">Deliverance</a> sounds interesting too)</li>
<li>Much (by magnitude of about 100) less code to run per request</li>
</ul><p>
Together these should make MidCOM a much simpler framework to build with, and make Midgard again (thanks to its C core) one of the fastest CMSs out there, as opposed to being a <a href="http://www.midgard-project.org/documentation/performance-tuning/">rather large thing</a>.
</p><p>
We will start a new fresh Git repository to build a proof-of-concept of the new MidCOM framework. After that developers are more than welcome to port components and play with the new system. Looking forward to discussing this in more detail next week!
</p><p>
<strong>In related news,</strong> <a href="http://www.cmswatch.com/Trends/1140-The-future-of-Plone----not-in-web-publishing?source=RSS">it seems</a> the Plone people are <a href="http://limi.net/articles/18-things-i-wish-were-true-about-plone/">rethinking their platform</a> as well.<span style="font-size:10pt;">
<br /></span>
</p><p style="text-align:right;">
<span style="font-size:10pt;">
<br />Technorati Tags: </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/midcom">midcom</a></span><span style="font-size:10pt;">, </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/midgard">midgard</a></span><span style="font-size:10pt;">, </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/php">php</a></span><span style="font-size:10pt;">, </span><span style="font-size:10pt;"><a href="http://www.technorati.com/tag/tal">tal</a></span>
</p>
