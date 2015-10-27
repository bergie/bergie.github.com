---
  title: "Midgard and content filtering"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
Gadgetopia has a post on how CMS's <a href="http://gadgetopia.com/post/6607">should provide an API for content filtering</a>. Since Midgard is <a href="http://bergie.iki.fi/blog/introduction_to_midgards_database_abstraction_system/">persistent storage API</a> first, and <a href="http://www.midgard-project.org/documentation/getting-started/">CMS only second</a> we obviously have <a href="http://www.midgard-project.org/documentation/reference/#3855e6325f5459c1d4f3b9863bc7debe">nice APIs</a> for doing exactly this.
</p><p>
In this case we're running a query and checking if a different user is allowed to see something, as specified by Gadgetopia:
</p><blockquote>
Hey, CMS, I have this list of content IDs here… How did I get them? Yeah, well, that’s not that important right now…
<br /><br />Anyway, can you look at this and tell me which ones I can show Nathaniel Snerpis? Here, just take them all, and give me back the ones I can show him.
</blockquote><p>
With Midgard you do this by fetching the objects first with <a href="http://www.midgard-project.org/documentation/midgardquerybuilder/">Query Builder</a>, and then checking their permissions via <a href="http://midgardwiki.contentcontrol-berlin.de/index.php/Midcom.services.auth">MidCOM auth service</a>. When user is logged in, his ACLs are already automatically applied to the results so no checks are needed.
</p><pre>
&lt;?php
// In this example we have some pre-gathered list of GUIDs
$guids_array
(
    '35c2b080736b11dd935ab300c51623d723d7',
    '18aa22ee736b11dd935ab300c51623d723d7',
);

// Instantiate a query builder
$qb = midcom_db_article::new_query_builder();
$qb-&gt;add_constraint('guid', 'IN', $guids_array);

// Get the articles
$articles = $qb-&gt;execute();

// We need Nathaniel Snerpis' GUID to perform the ACL check
$nathaniel = $_MIDCOM-&gt;auth-&gt;get_user_by_name('nathaniel');

// Loop through the articles and check permissions
foreach ($articles as $article)
{
    // Check if Nathaniel is allowed to see this
    if ($_MIDCOM-&gt;auth-&gt;can_do('midgard:read', $article, $nathaniel))
    {
        // Show the article to Nathaniel
    }
}
?&gt;
</pre><p>
You can see here that we're using <a href="http://www.midgard-project.org/api-docs/midgard/core/cvs/group__guid.html">GUIDs</a>, not IDs to refer to content. This is because GUIDs (compliant with the <a href="http://www.midgard-project.org/development/mrfc/0018/">UUID spec</a>) are <a href="http://bergie.iki.fi/blog/midgard2_at_fscons-your_data-everywhere/">replication</a>-safe, and you can trust them to be the same on every system in your <a href="http://bergie.iki.fi/blog/midgard2-future_in_the_clouds/">Midgard cluster</a>.
</p><p>
<strong>Note:</strong> in this case the API example was in PHP. But with <a href="http://trac.midgard-project.org/milestone/9.03%20Vinland">Midgard 9.03</a> you will be able to use the exact same APIs <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">with Python and Mono</a>.
</p>
