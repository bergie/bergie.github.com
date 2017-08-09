---
  title: "Maemo.org goes Ragnaroek"
  categories: 
    - "midgard"
    - "mobility"
  layout: "post"

---
<p>
<a href="http://maemo.org/">Maemo.org</a>, the community site for Nokia's <a href="http://en.wikipedia.org/wiki/Maemo_Platform">mobile Linux environment</a> has this week been upgraded to <a href="http://www.midgard-project.org/updates/midgard_8-09-2-bosporus_queries-released/">8.09.2 Ragnaroek</a>, the much faster and <a href="http://www.midgard-project.org/midgard/8.09/">long-term supported version</a> of the <a href="http://en.wikipedia.org/wiki/Midgard_(software)">Midgard framework</a>. Thanks to <a href="http://maemo.org/profile/view/xfade/">Niels</a> and <a href="http://maemo.org/profile/view/piotras/">Piotras</a> for working with me on this!
</p><p>
in October, I spent quite a bit of time optimizing this release, shaving off an estimated 60-70% of queries through some smart caching and removed redundancies. In addition, a new database server is now in place. Together, these should get us quite far in the "<a href="http://wiki.maemo.org/Task:Fast_Server">Fast Server</a>" agenda.
</p><p style="text-align:center;">
<img src="https://d2vqpl3tx84ay5.cloudfront.net/maemo-20081118.jpg" height="230" width="298" border="1" hspace="4" vspace="4" alt="Maemo on Nov 18th" title="Maemo on Nov 18th" /></p><p>
We're however still not done, and now we will do more optimizations that will be part of <a href="http://trac.midgard-project.org/milestone/8.09.3%20Ragnaroek">8.09.3</a>, due next week, and will move static files (images and javascript) to a separate <a href="http://www.lighttpd.net/">lighttpd</a> instance to remove that load from the normal Apache. When all this is done, <a href="http://maemo.org/profile/list/">the Maemo community</a> should have infrastructure that will be able to serve it for a long time.
</p><p>
In addition to optimization, <a href="http://wiki.maemo.org/Maemo.org_Sprints/November_08">we've been working</a> on some other features related to the website:
</p><ul><li>Many new activities, such as <a href="http://maemo.org/profile/list/category/itt_thanks/">Internet Tablet talk</a> and <a href="http://maemo.org/profile/list/category/mediawiki_edits/">Maemo Wiki</a> now count towards karma, with <a href="http://wiki.maemo.org/Karma#Proposed_improvements">more karma refinements</a> on the way</li>
<li>Issues with <a href="http://trac.midgard-project.org/ticket/286">weird email formatting</a> in <a href="http://maemo.org/community/maemo-users/">Maemo forums</a> has been fixed and will be part of 8.09.3</li>
<li>Per-module karma listings are now showing correctly, making it possible to see the top contributors to different aspects of the community</li>
</ul><p>
Midgard is a <a href="http://www.ohloh.net/projects/midgard/analyses/latest">big and complex</a> piece of software. If you notice any issues related to this upgrade, please <a href="https://bugs.maemo.org/enter_bug.cgi?classification=maemo.org%20Website">let us know</a>. And if you have any ideas on improving the website, be sure to <a href="https://bugs.maemo.org/enter_bug.cgi?classification=maemo.org%20Website">file those</a> too!
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/lighttpd" rel="tag">lighttpd</a>, <a href="http://www.technorati.com/tag/maemo" rel="tag">maemo</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/ragnaroek" rel="tag">ragnaroek</a></p>
