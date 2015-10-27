---
  title: "Midgard2: Future in the clouds"
  categories: 
    - "midgard"
  layout: "post"

---
<p style="text-align:right;">
<a href="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midgard2-cloud-processing.png"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midgard2-cloud-processing-tm.jpg" height="257" width="200" border="0" align="right" hspace="0" vspace="4" alt="Cloud computing with Midgard2" title="Cloud computing with Midgard2" /></a>
</p><p>
There has been quite a lot of <a href="http://vertonghen.wordpress.com/2008/07/05/erlang-or-utility-computing-vs-appliance-computing/">talk about cloud computing</a> lately. When we had the previous <a href="http://bergie.iki.fi/blog/midcom_3_and_built-in_webdav/">MidCOM3 coding sprint</a> we discussed over beer how <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms/">Midgard2</a> could fit into the cloud. As <a href="http://bergie.iki.fi/blog/xmpp_publish-subscribe_for_midgard_and_ajatus_replication/">replication</a> has been a core Midgard feature <a href="http://www.midgard-project.org/documentation/concepts-repligard/">since the early days</a>, that was the obvious angle to start looking from.
</p><p>
The way I see Midgard2 in the cloud is the following:
</p><ul><li>There are clouds of specialized Midgard2 and MidCOM3 processing nodes that can easily be duplicated. This could be done by setting up an easy Midgard <a href="http://www.amazon.com/gp/browse.html?node=201590011">EC2 image</a> for instance</li>
<li>The processing clouds could act as front-ends by themselves via <a href="http://en.wikipedia.org/wiki/Round_robin_DNS">round-robin DNS</a>, or there could be front-end MidCOM servers that would call the processing nodes via <em>MidCOM3 remote routing</em> (feature that we've discussed but not implemented yet)</li>
<li>Each processing node would be completely independent and contain its own database</li>
<li>There would be a replication queue stored on permanent storage service like <a href="http://www.amazon.com/gp/browse.html?node=16427261">S3</a> that each processing node would replicate to and from</li>
<li>When a processing node would boot up, it would connect to the appropriate S3 bucket and populate itself with data</li>
</ul><p>
Implemented this way it would be easy to add or subtract Midgard servers as needed. Each of them would be autonomous from application developer's perspective, but data replication would ensure each node would stay in sync with others.
</p><p>
This would certainly be worth experimenting with. Only things needed would be easy EC2 images, queue handling with S3 buckets, and possibly remote routing support, though the latter wouldn't be needed for simpler services where each Midgard node could contain a copy of all data of the web service. For faster replication of data between nodes, <a href="http://bergie.iki.fi/blog/interprocess_communications_in_midgard-d-bus_comes_to_the_web/">D-Bus update notices</a> could be passed through <a href="http://www.amazon.com/Simple-Queue-Service-home-page/b?ie=UTF8&amp;node=13584001">a message queue service</a>.
</p>
