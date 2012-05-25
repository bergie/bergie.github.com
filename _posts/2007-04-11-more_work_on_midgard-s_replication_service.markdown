---
  title: "More work on Midgard's replication service"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://bergie.iki.fi/blog/midgard-replication-service-starts-to-shape-up.html">Midgard's new replication service</a> has been under work since January. Now the work is finally starting to bear fruit, as we're doing the first tests with real production data.

This week lots of functionality has been added to the system, including scheduled replication runs (for <a href="http://www.midgard-project.org/documentation/midcom-helper-metadata-approvals/">scheduled publication</a>) and a nice debug view for seeing the replication status of an object:


<img src="http://bergie.iki.fi/midcom-serveattachmentguid-3dc340e4e82811db9d6a311851eb3f8a3f8a/midcom-replicator-debug-log.jpg" height="187" width="400" border="1" hspace="4" vspace="4" alt="Midcom-Replicator-Debug-Log" />

This view should make it easier to figure out what replication actions have been undertaken with the object. In the example above, the object was imported twice from an external source (probably two edits), and then also exported twice for a replication queue. The queue however has not yet been processed and so the object is still not fully replicated to the external service.

The replication queues are managed in a user interface on the MidCOM site itself. Site administrator can set up multiple replication pipelines including archival or emailing of backups and HTTP-based replication to remote hosts:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-4304f192e82811db910ef9b2e2847e6d7e6d/midcom-replicator-manage-list.jpg" height="113" width="400" border="1" hspace="4" vspace="4" alt="Midcom-Replicator-Manage-List" /><span style="font-size:0pt;">

</span><strong>Updated 2007-04-12:</strong> Replication seems to work quite fine, but we're still running tests with it. Those who want to play with it will benefit from the <a href="http://www.midgard-project.org/documentation/staging_to_live_setup_with_midcom/">setup instructions draft</a>.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/replication" rel="tag">replication</a>, <a href="http://www.technorati.com/tag/synchronization" rel="tag">synchronization</a></p><!-- technorati tags end -->