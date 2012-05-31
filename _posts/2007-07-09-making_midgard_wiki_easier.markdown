---
  title: "Making Midgard Wiki easier"
  categories: 
    - "midgard"
    - "mobility"
    - ""
  layout: "post"

---
Since <a href="http://maemo.org/">Maemo.org</a> started using the <a href="http://www.midgard-project.org/documentation/net-nemein-wiki/">Midgard wiki component</a> there <a href="http://lists.maemo.org/pipermail/maemo-developers/2007-July/thread.html#10760">has been discussion</a> on whether it is feature-complete or easy enough to use. Main complaints have been about the <a href="https://bugs.maemo.org/show_bug.cgi?id=1539">"latest changes" view</a> not supporting sub-wikis and <a href="https://bugs.maemo.org/show_bug.cgi?id=1590">missing Markdown documentation</a>.

Latest updates are now shown in a way quite similar to <a href="http://live.gnome.org/RecentChanges">MoinMoin</a>:

<img src="/files/wiki-latest-updates.jpg" height="241" width="400" border="1" hspace="4" vspace="4" alt="Wiki-Latest-Updates" />

<a href="http://daringfireball.net/projects/markdown/syntax">Markdown</a> should be easier to edit with the toolbar:

<img src="/files/wiki-markdown-toolbar.jpg" height="307" width="400" border="1" hspace="4" vspace="4" alt="Wiki-Markdown-Toolbar" />

Markdown <a href="http://www.quirm.net/markdown/">syntax reference</a> is available by clicking the help icon in the top-right corner of the toolbar:

<img src="/files/wiki-markdown-cheatsheet.jpg" height="238" width="398" border="1" hspace="4" vspace="4" alt="Wiki-Markdown-Cheatsheet" />

The Markdown toolbar is based on <a href="http://livepipe.net/projects/control_textarea/">Control.TextArea</a> and is available to any datamanager2 field using the "<em>markdown</em>" widget type. Similarly, the "Change message" field is a regular text field of type "<em>rcsmessage</em>" that will update the <a href="http://www.midgard-project.org/documentation/midcom-services-rcs/">revision control service</a>.

<strong>Updated 15:24:</strong> Since <a href="https://bugs.maemo.org/show_bug.cgi?id=1408">preview</a> was also a popular request I've added that too:


<img src="/files/wiki-preview.jpg" height="278" width="398" border="1" hspace="4" vspace="4" alt="Wiki-Preview" /><span style="font-size:0pt;">
</span>

<strong>Note:</strong> this has been tagged to appear also on <a href="http://planet.maemo.org/">Planet Maemo</a> since the changes discussed here were requested by them.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/markdown" rel="tag">markdown</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/wiki" rel="tag">wiki</a></p><!-- technorati tags end -->