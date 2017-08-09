---
  title: "Tomboy web synchronization, Conboy and Midgard"
  categories: 
    - "midgard"
    - "desktop"
    - "mobility"
  layout: "post"

---
<p>
Some very interesting developments in desktop wiki land: <a href="http://projects.gnome.org/tomboy/">Tomboy</a>, the popular note-taking application for GNOME and OS X now supports web synchronization.
</p><p>
The developers of Tomboy have <a href="http://automorphic.blogspot.com/2009/05/tomboy-0151-release-brings-new-online.html">launched Snowy</a>, a web service that allows you to synchronize and access your notes online. As <a href="http://live.gnome.org/Tomboy/Synchronization/REST">the API</a> is documented, I decided to add support for it in <a href="http://www.midgard-project.org/">Midgard</a> too. This way the Tomboy notes will become regular objects in the <a href="http://bergie.iki.fi/blog/midgard_and_jcr-a_look_at_two_content_repositories/">content repository</a>.
</p><p>
At the moment there is only the sync service, provided <a href="http://trac.midgard-project.org/browser/trunk/midcom/org_gnome_tomboy">as a component</a> for the <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">MidCOM3 MVC framework</a>. However, a web user interface will also be coming soon. Here's how <a href="http://library.gnome.org/users/tomboy/0.14/synchronization.html.en">synchronization</a> with Midgard looks like:
</p><p>
<a href="https://d2vqpl3tx84ay5.cloudfront.net/tomboy-synchronization-midgard.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/tomboy-synchronization-midgard-tm.jpg" height="248" width="400" border="1" hspace="4" vspace="4" alt="Tomboy synchronizing with Midgard" title="Tomboy synchronizing with Midgard" /></a>
</p><p>
In addition to Tomboy, the <a href="http://wiki.maemo.org/MozillaMaemoDanishWeekend">Mozilla/Maemo Danish Weekend</a> also showed new advances in mobile <a href="http://www.midgard-project.org/midgard2/">Midgard2</a> land: We <a href="http://maemo.org/community/maemo-developers/re-fwd-conboy-midgard/">launched a Midgardized version</a> of <a href="http://maemo.org/downloads/product/OS2008/conboy/">Conboy</a>, the maemo port of Tomboy. Both Midgard2 and Conboy were also built for <a href="http://repository.maemo.org/extras-devel/pool/fremantle/free/m/midgard2-core/">Fremantle</a> and tested on <a href="http://talk.maemo.org/showthread.php?p=292386#post292386">a developer preview machine</a>. Very promising!
</p><p>
With the Midgard storage back-end Conboy will gain all the regular benefits of using a content repository:
</p><ul>
<li>The data format is immediately scriptable with any language that there are <a href="http://www.midgard-project.org/midgard2/">Midgard2</a> bindings for</li>
<li><a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">Midgard's MVC framework</a> makes it very easy to build web interfaces for managing and sharing the contents</li>
<li><a href="http://teroheikkinen.iki.fi/blog/midgard_workshop_at_fscons/">D-Bus signals are automatically fired</a> for all changes to the content, allowing multiple applications to work on the data and still stay up-to-date with what is happening</li>
<li>Contents can be stored to SQLite, MySQL, or any <a href="http://www.gnome-db.org/Providers_status">other backend libgda supports</a></li>
<li>All content benefits from a set of <a href="http://www.midgard-project.org/documentation/mgdschema-metadata-object/">standardized metadata</a></li>
</ul><p>
While <a href="https://garage.maemo.org/forum/forum.php?forum_id=3759">there are plans</a> to add web synchronization to next release of Conboy, the Midgard version will also be able to <a href="http://teroheikkinen.iki.fi/blog/how_midgard_2_talks_between_between_machines/">synchronize via XMPP</a> in true <a href="http://bergie.iki.fi/blog/midgard2_at_fscons-your_data-everywhere/">peer-to-peer fashion</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>
