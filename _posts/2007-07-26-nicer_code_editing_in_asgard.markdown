---
  title: "Nicer code editing in Asgard"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<a href="http://bergie.iki.fi/blog/building_a_new_admin_interface_for_midgard.html">Asgard</a> is the new administrative interface being built for <a href="http://www.midgard-project.org/">Midgard</a>. The main objective is to get rid of the legacies of <a href="http://en.wikipedia.org/wiki/Aegir_(software)">Aegir</a> and <a href="http://bergie.iki.fi/blog/2004-04-15-001.html">SpiderAdmin</a> by replacing them with a smart system that auto-generates admin UIs for all installed <a href="http://www.midgard-project.org/documentation/mgdschema/">MgdSchema types</a>. But small improvements also count, and so we decided to deploy <a href="http://www.codepress.org/">CodePress</a> for code editing:


<img src="/files/asgard-codepress-style-editing.jpg" height="178" width="398" border="1" hspace="4" vspace="4" alt="Asgard-Codepress-Style-Editing" /><span style="font-size:0pt;">

</span>Syntax highlighting definitely makes life easier when editing site style with a browser. While we were at it, we also decided to guard against PHP parse errors, making it validation rule about it. Now the editing tool refuses to save until errors are fixed (needs localization message, though):

<img src="/files/asgard-codepress-parse-error.jpg" height="206" width="398" border="1" hspace="4" vspace="4" alt="Asgard-Codepress-Parse-Error" /><span style="font-size:0pt;">

</span><a href="http://www.kaktus.cc/">Arttu</a> also went and implemented CodePress for style attachments like CSS, Javascript and XML files:

<img src="/files/asgard-styleeditor-edit-css.jpg" height="208" width="398" border="1" hspace="4" vspace="4" alt="Asgard-Styleeditor-Edit-Css" /><span style="font-size:0pt;">

</span>The Asgard user experience starts to be already quite nice, although the visual outlook could use love and <a href="http://trac.midgard-project.org/query?status=new&amp;status=assigned&amp;status=reopened&amp;group=priority&amp;component=Asgard&amp;order=priority">some bugs still remain</a>. I'm quite confident we can ship it as the default admin UI soon.
<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/asgard" rel="tag">asgard</a>, <a href="http://www.technorati.com/tag/codepress" rel="tag">codepress</a>, <a href="http://www.technorati.com/tag/mgdschema" rel="tag">mgdschema</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/aegir" rel="tag">aegir</a></p><!-- technorati tags end -->