---
  title: "CouchDb and Midgard talking with each other"
  categories: 
    - "mobility"
    - "desktop"
    - "midgard"
    - "openpsa"
  layout: "post"

---
<p>
<a href="http://bergie.iki.fi/blog/jquery_and_couchdb-001/">CouchDb</a> is a really cool document-oriented map/reduce database that is nowadays an Apache project. Previously we created the <a href="http://bergie.iki.fi/blog/previewing_ajatus-the_distributed_crm/">distributed CRM application Ajatus</a> on top of the system and <a href="http://bergie.iki.fi/moblog/photo/4756887498ee11dcb5f3d7132ea5e37fe37f/">ported CouchDb to Maemo</a>.
</p><p>
Here in <a href="http://www.grancanariadesktopsummit.org/">Gran Canaria Desktop Summit CouchDb</a> has been somewhat a hot topic, as the <a href="https://wiki.ubuntu.com/DesktopTeam/Specs/Karmic/IntegratingWithUbuntuOne">Ubuntu project is planning to use it</a> as the content repository for desktop applications.
</p><p>
We had a lunch with <a href="http://twitter.com/janl">Jan Lehnardt</a> today and discussed how to make <a href="http://www.midgard2.org/">Midgard2</a> and <a href="http://couchdb.apache.org/">CouchDb</a> interoperate better, and as it happens, it is actually very easy: CouchDb has a replication protocol that we can support also in Midgard, making the two repositories able to <a href="http://blogs.gnome.org/rodrigo/2009/06/03/desktop-datasettings-replication/">synchronize content</a> with each other.
</p><p>
There is now a first test implementation of <em>Midgard-to-CouchDb</em> synchronization support, with better Midgard integration and <em>CouchDb-to-Midgard</em> coming soon. Check out <a href="http://github.com/bergie/org_couchdb_replication/tree/master">the Midgard MVC component on Github</a>. Anyway, already pretty cool!
</p><p>
Setting up replication on CouchDb admin UI:
</p><p>
<a href="https://d2vqpl3tx84ay5.cloudfront.net/couchdb-midgard-replication-setup.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/couchdb-midgard-replication-setup-tm.jpg" height="206" width="400" border="1" hspace="4" vspace="4" alt="Replicating from Midgard to CouchDb" title="Replicating from Midgard to CouchDb" /></a>
</p><p>
Midgard record replicated successfully into CouchDb:
</p><p>
<a href="https://d2vqpl3tx84ay5.cloudfront.net/couchdb-replicated-midgard-person.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/couchdb-replicated-midgard-person-tm.jpg" height="216" width="400" border="1" hspace="4" vspace="4" alt="Replicated Midgard person record in CouchDb" title="Replicated Midgard person record in CouchDb" /></a>
</p><p>
I'll talk more about this and <em>repository-oriented application development</em> in my <a href="http://www.grancanariadesktopsummit.org/node/210">Midgard2: Content repository for desktop and the web</a> talk <a href="http://www.grancanariadesktopsummit.org/node/270">tomorrow at 16:45</a>. Be there!
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/replication" rel="tag">replication</a></p>
