---
  title: "MidCOM 3 and context injectors"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
<a href="/files/context-aware-life-coaching.jpg"><img src="/files/context-aware-life-coaching-tm.jpg" height="254" width="200" border="1" align="right" hspace="8" vspace="4" alt="Context-aware life coaching ad" title="Context-aware life coaching ad" /></a>
<br />I know, according to <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases.html">roadmap</a> we all should be now focusing in hammering out bugs in <a href="http://www.midgard-project.org/updates/view/1219823947.html">Midgard 8.09</a>, or as we call it, "<em>Ragnaroek</em>" instead of working on <a href="http://github.com/bergie/midcom">MidCOM 3</a>. But <a href="http://teroheikkinen.iki.fi/">Tero</a> had <a href="http://tepheikk.jaiku.com/presence/43534559">a specific problem</a> he needed to solve, and I wanted to ensure it was done right. And so I <a href="http://github.com/bergie/midcom/commit/1b590f1d9ad9e14dba69bdbe0628cc116935b2d7">ended up adding</a> support for <em>context injectors</em> into MidCOM 3.
<br /><span style="font-size:14pt;"><strong>
<br />What about contexts anyway?
<br /></strong></span>
</p><p>
<a href="http://www.midgard-project.org/api-docs/midcom/3.0/midcom_core/midcom_core_helpers_context.html">Context in MidCOM</a> is an object that contains all useful information related to the request at hand: arguments, URL, templating information. And the plan is to make it <a href="http://worrydream.com/MagicInk/#inferring_context_from_the_environment">much more</a>.
</p><p>
Context is the main way for controllers to find out about their environment, and for the templating system to decide which views to run and how. As we want to make the new MidCOM <a href="http://bergie.iki.fi/blog/some_thoughts_on_green_programming-php-midgard_and_simplicity.html">lean and efficient</a>, we did not want to stick everything possible into the context. But in order to solve problems developers will need more stuff there. And so the idea of context injectors was born.
</p><p>
Context injectors are <a href="http://www.midgard-project.org/discussion/developer-forum/some_midcom3_api_changes_to_come/">a new API</a> components can use to add or modify information in the current context. The injectors will be run in two places:
</p><ul><li><strong>Process injectors</strong> will be called before dispatcher loads the component and calls the controller</li>
<li><strong>Template injectors</strong> will be called after controller has finished and before a template is collected and displayed</li>
</ul><p>
There are many things you can do there. Some immediate use cases are:
</p><ul><li><strong><a href="http://bergie.iki.fi/blog/the-midgard-position.html">Geopositioning injector</a></strong> could add user's <a href="http://google-code-updates.blogspot.com/2008/08/two-new-ways-to-location-enable-your.html">current location</a> to the context so that a controller can fetch nearby data</li>
<li><strong>Theming injector</strong> could switch the template entry point (in old Midgard term's the <a href="http://www.midgard-project.org/documentation/concepts-page_and_style/">ROOT element</a>) according to user's wishes</li>
<li><strong>Mobile optimization injector</strong> could also switch the template entry point if user is accessing the site with an <a href="http://www.apple.com/iphone/">iPhone</a> or <a href="http://www.openmoko.com/product.html">OpenMoko</a></li>
</ul><p>
<span style="font-size:14pt;"><strong>
<br />Using context injectors
<br /></strong></span>
</p><p>
The way this works is relatively simple. To create an injector, you <a href="http://www.midgard-project.org/documentation/midcom-component-development/">create a component</a> and create an <em>injector class</em> to it. Depending which injector you want to provide, you either implement a <em>inject_process</em> or <em>inject_template</em> public method there. The method will have full access to the current context (in <em>$_MIDCOM-&gt;context</em>) and can add or change things there. The just declare that you have the class in the component's manifest by adding a key <em>process_injector</em> or <em>template_injector</em> with value being the class name.
</p><p>
MidCOM will take care of <a href="http://www.midgard-project.org/api-docs/midcom/3.0/midcom_core/midcom_core_component_loader.html">loading the component</a> in question in the right time, and of calling the injector method. This will all happen automatically once the component is installed.
</p><p>
If your controller or template uses context information that is not part of the default context data, then make sure to first check that the data is available via an <a href="http://tr2.php.net/isset">isset()</a>. This way your component will be able to work around missing context information if applicable to your scenario, or throw an error.
</p><p>
<em>Written outside in the </em><em><a href="http://plazes.com/plazes/153563_platonik">Platonik</a></em><em> waterpipe cafe in </em><em><a href="http://en.wikipedia.org/wiki/Besiktas">Beşiktaş</a></em><em>, Istanbul, while </em><em><a href="http://en.wikipedia.org/wiki/Vitis_vinifera">vine leaves</a></em><em> above keep the air cool enough for working. The picture is from </em><em><a href="http://www.fredshouse.net/2006/04/contextaware_life_coaching_ser.html">the Freds House blog</a></em><em>.</em>
</p>