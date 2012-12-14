---
  title: "Ragnaroek is coming"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
With <a href="http://www.midgard-project.org/updates/view/1220897153.html">beta2 out today</a>, the new Midgard 8.09, or "Ragnaroek LTS" is finally coming. <a href="http://www.midgard-project.org/updates/view/php4_end-of-life_and_midgard.html">PHP4 has been dropped</a>, many <a href="http://www.midgard-project.org/discussion/developer-forum/for_a_more_efficient_midcom_2-9/">optimizations made</a>, and now that <a href="http://www.kaktus.cc/weblog/view/1220703023/">Prototype has been dropped</a> in favor of jQuery, I think we will finally be able to live with it as the <a href="http://www.midgard-project.org/discussion/developer-forum/what_do_you_expect_from_the_lts_version/">Long Term Support</a> release.
</p><p>
But before <a href="http://www.midgard-project.org/download/8-9.html">Ragnaroek</a> is stable a lot of testing has to happen, as should polishing here and there. <a href="http://blogs.nemein.com/people/piotras/">Piotras</a> is fixing the <a href="http://bergie.iki.fi/blog/site_creation_wizard_runs/">site wizard</a>, and I've been adding more information about the installed components.
</p><p>
Unlike <a href="http://ez.no/ezcomponents">eZComponents</a> which are just libraries, <a href="http://www.midgard-project.org/documentation/midcom-component-development/">components in Midgard</a> are the building blocks of a website. Each of them is its own PHP application that the <a href="http://www.midgard-project.org/documentation/midcom">MidCOM MVC framework</a> runs when a folder associated with that component is accessed. They all supply their own templates, localizations, and load whatever libraries needed. 
</p><p>
Currently we have some 120 components in <a href="http://trac.midgard-project.org/browser/trunk/midcom">the MidCOM repository</a>, and most of them have releases on the <a href="http://pear.midcom-project.org/">PEAR channel</a>. The components range from simple things like a news listing to very specific applications like event registration or invoice processing.
</p><p>
One way to make components more visual was to add icons for them. MidCOM has had support for component icons for a while now, but they haven't really been used anywhere. So I made them used more widely:
</p><p>
Icons clarify component selection when creating a new folder:
</p><p>
<a href="/files/ragnaroek-midcom-icons-component-selector.png"><img src="/files/ragnaroek-midcom-icons-component-selector-tm.jpg" height="220" width="400" border="1" hspace="4" vspace="4" alt="MidCOM icons in component selector" title="MidCOM icons in component selector" /></a>
</p><p>
Icons visualize how many components a developer has contributed to:
</p><p>
<a href="/files/ragnaroek-midcom-icons-credits.png"><img src="/files/ragnaroek-midcom-icons-credits-tm.jpg" height="221" width="400" border="1" hspace="4" vspace="4" alt="MidCOM icons in Ragnaroek credits screen" title="MidCOM icons in Ragnaroek credits screen" /></a>
</p><p>
...and icons also make the localization tool more visual:
</p><p>
<a href="/files/ragnaroek-midcom-icons-babel.png"><img src="/files/ragnaroek-midcom-icons-babel-tm.jpg" height="192" width="398" border="1" hspace="4" vspace="4" alt="MidCOM icons in the Babel translation tool" title="MidCOM icons in the Babel translation tool" /></a>
</p><p>
Finding good icons for many of the components is quite difficult. We're working with <a href="http://kallepersson.se/blog/">Kalle Persson</a> from the <a href="http://tango.freedesktop.org/Tango_Desktop_Project">Tango project</a> to create new ones as needed.
</p>