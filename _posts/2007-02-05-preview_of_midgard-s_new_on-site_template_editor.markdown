---
  title: "Preview of Midgard's new on-site template editor"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/">Midgard</a> has a very powerful page templating system, and <a href="http://bergie.iki.fi/blog/cms-watch-kudos-of-2005.html">this has been noted</a> in <a href="http://www.cmswatch.com/">CMS Watch</a> kudos lists several times.

With power there also usually comes some learning curve,  and Midgard certainly <a href="http://www.midgard-project.org/documentation/howto-midcom/">has not been an exception</a> to that rule with its concepts like inheritance, dynamic loads, substyles and other things. With MidCOM 2.7 we seek to lower the learning curve and make the system <a href="http://bergie.iki.fi/blog/midgard-in-2007--the-year-of-the-web-developer.html">more approachable to the regular web developer</a> by moving template editing to the <a href="http://www.midgard-project.org/documentation/content-production-with-midcom/">on-site administration interface</a>. Here's a quick preview on what we have been doing.

Style template customization starts with <a href="http://www.midgard-project.org/documentation/folder-management-with-midcom/">editing a folder</a> and setting a custom layout template for it:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-de46c372b53f11dbbef7fb921f0ec3e1c3e1/midcom-styleeditor-create-substyle.jpg" height="191" width="300" border="1" hspace="4" vspace="4" alt="Midcom-Styleeditor-Create-Substyle" />

After this the layout template will appear in the toolbar:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-d88fc262b53f11dbbef7fb921f0ec3e1c3e1/midcom-styleeditor-edit-template-menu.jpg" height="159" width="267" border="0" hspace="4" vspace="4" alt="Midcom-Styleeditor-Edit-Template-Menu" />

When user clicks it, the system analyzes which folders use the layout template, and what components those folders use, and then presents a list of them.

Components can even provide a nice explanation of how their elements are used by providing <a href="http://www.midgard-project.org/documentation/midcom-component-online-documentation/">an on-site help file</a> named "style":

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-e248a760b53f11db84a8cb82275427ee27ee/midcom-styleeditor-element-list.jpg" height="222" width="400" border="0" hspace="4" vspace="4" alt="Midcom-Styleeditor-Element-List" />

In addition to the per-component listings there is also a list of all elements, including global style elements like &lt;(style-init)&gt;:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-db82a520b53f11db84a8cb82275427ee27ee/midcom-styleeditor-element-list-all.jpg" height="265" width="400" border="0" hspace="4" vspace="4" alt="Midcom-Styleeditor-Element-List-All" />

When user clicks an element, its default value coming either from component or through style inheritance is shown as reference, and the local instance can be easily modified:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-e61c6eeeb53f11db84a8cb82275427ee27ee/midcom-styleeditor-edit-element.jpg" height="282" width="400" border="0" hspace="4" vspace="4" alt="Midcom-Styleeditor-Edit-Element" />

This system obviously still needs quite a lot of CSS and UI love, but it is already now quite functional. If you're interested in it, <a href="http://www.midgard-project.org/documentation/running-latest-midcom-from-subversion/">grab a copy of SVN version of MidCOM</a> and give it a spin. And be sure to let me know what you think :-)

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/cms" rel="tag">cms</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/templating" rel="tag">templating</a></p><!-- technorati tags end -->