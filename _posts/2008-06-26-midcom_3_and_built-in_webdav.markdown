---
  title: "MidCOM 3 and built-in WebDAV"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
There has been some <a href="http://www.midgard-project.org/discussion/developer-forum/some_midcom3_ideas/">discussion about the deployment model</a> for the upcoming <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance.html">MidCOM 3 MVC framework</a> for PHP and <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms.html">Midgard 2</a>. My suggestion was to enable <a href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> on all MidCOM servers so content structures, configurations and templates could be moved between them with simple drag-and-drop.
</p><p>
This week we're having a MidCOM 3 coding sprint, and now we can already mount the MidCOM site, and with <a href="http://www.davexplorer.org/">some clients</a> also edit content. <a href="http://bergie.iki.fi/blog/document_locking_hits_midcom_2-8.html">Locks</a> also work transparently between WebDAV clients and the web editing interface.
</p><p>
WebDAV serving logic is implemented using PEAR's <a href="http://pear.php.net/package/HTTP_WebDAV_Server">HTTP_WebDAV_Server</a>.
</p><p>
<a href="/files/midcom3-webdav-browse-20080626.png"><img src="http://bergie.iki.fi/midcom-serveattachmentguid-2472f0ba43a011dd95b96908b6f765e765e7/midcom3-webdav-browse-20080626-tm.jpg" height="225" width="400" border="1" hspace="4" vspace="4" alt="Browsing a MidCOM3 site via WebDAV" title="Browsing a MidCOM3 site via WebDAV" /></a>
</p><p>
More functionality will follow...
</p>