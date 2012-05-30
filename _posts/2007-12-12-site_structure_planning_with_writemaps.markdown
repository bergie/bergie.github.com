---
  title: "Site structure planning with WriteMaps"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<a href="http://www.writemaps.com/">WriteMaps.com</a> is a handy web-based tool for planning website structures in a mind map -like format. The tool allows for storage and working on the designs in collaborative fashion.

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-c7c74592a8b211dc955999d29c39ca1cca1c/writemaps.jpg" height="221" width="400" border="1" hspace="4" vspace="4" alt="Writemaps" />

I have been toying for quite a while with the idea that mind maps could be automatically converted to <a href="http://www.midgard-project.org/" title="Midgard">Midgard</a> -compatible site structures, and the JSON format provided by WriteMaps seemed to support the idea.

So, to get your WriteMaps site structure to Midgard do the following:

<ul><li>Save your sitemap on the site</li><li>Click <em>File -&gt; Export local backup</em></li><li>Copy the JSON to a local file</li><li>Run <code>php json_to_structure.php /path/to/my/sitemap.json &gt; sitemap.inc</code></li><li>Copy the new structure under the <code>config/templates</code> directory of midgard.admin.wizards component</li><li>Create a new site using your WriteMaps-based structure</li></ul>I'd love to make this a bit easier, but that would essentially require WriteMaps to provide an API we could hook to.

Get the <a href="http://trac.midgard-project.org/browser/trunk/midcom/midcom.core/support/json_to_structure.php?rev=13852">json_to_structure.php file from Midgard SVN</a>.

Via <a href="http://ajaxian.com/archives/writemapscom-eases-website-planning">Ajaxian</a>.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/writemaps" rel="tag">writemaps</a>, <a href="http://www.technorati.com/tag/sitemap" rel="tag">sitemap</a></p><!-- technorati tags end -->