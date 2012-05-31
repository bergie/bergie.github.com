---
  title: "Document locking hits MidCOM 2.8"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
<a href="http://pear.midcom-project.org/index.php?package=midcom&amp;release=2.8.11&amp;downloads">Latest MidCOM 2.8</a> has a feature that has been resurrected from earlier in the series: document locking. The <a href="http://www.edbrill.com/ebrill/edbrill.nsf/dx/document-locking?opendocument&amp;comments">point of locking</a> is to prevent accidental simultaneous editing of a document by multiple users.
</p><p>
When user starts editing a document via <a href="http://midgardwiki.contentcontrol-berlin.de/index.php/MidCOM_Datamanager">datamanager</a>-powered form, the document will be marked as locked for that user. Other users accessing the document will see a notice:
</p><p>
<a href="/files/midcom-28-locked-document-fi.png"><img src="http://bergie.iki.fi/midcom-serveattachmentguid-f0c81e123c3c11dd8ac1436f47d216a316a3/midcom-28-locked-document-fi-tm.jpg" height="74" width="296" border="1" hspace="4" vspace="4" alt="MidCOM 2.8 lock notice" title="MidCOM 2.8 lock notice" /></a>
</p><p>
Unlocking permissions can be granted via the <a href="http://bergie.iki.fi/blog/new_user_management_tool_for_midgard.html">Asgard user manager</a>.
</p><p>
Unlike the older and <a href="http://www.midgard-project.org/updates/view/security-advisory--unauthorized-locking-in-midcom.html">somewhat troublesome</a> method, the new locking system uses <a href="http://www.midgard-project.org/documentation/mgdschema-metadata-object/">regular Midgard metadata</a> properties and has a <a href="http://www.kaktus.cc/weblog/view/1212160768.html">clean API available</a>.
</p>