---
  title: "Replicating Ajatus with your colleagues"
  categories: 
    - "openpsa"
    - ""
  layout: "post"

---
<a href="http://bergie.iki.fi/blog/previewing_ajatus-the_distributed_crm/">I've mentioned before</a> that <a href="http://www.ajatus.info/">Ajatus</a> is a P2P CRM, but what does that mean? It means that Ajatus has been <a href="http://www.ajatus.info/documentation/ajatus_manifesto/">designed</a> to be a personal tool for information management, but that is has also been designed to help you connect with anyone you need to work with.

The means to that is <a href="http://www.couchdb.org/">CouchDb's</a> integrated <a href="http://www.couchdbwiki.com/index.php?title=Basic_Concepts#Distributed" title="Basic_Concepts#Distributed">replication feature</a>. With it you can easily share your Ajatus data with anybody in the network, or just keep your laptop and desktop system in sync.

At the moment we only support full replication over HTTP, but the plan is to support replicating only data with specific tags (for example, only data related to a specific project), and to do it over <a href="http://www.xmpp.org/">XMPP</a>.

As things are, here is how you set up Ajatus replication on a Mac OS X system:

First allow CouchDb to talk to the outside world (<strong>note:</strong> it is a good idea to keep the firewall up when not replicating!):

<a href="/files/beam-accept-connections-leopard.png"><img src="/files/beam-accept-connections-leopard-tm.jpg" height="109" width="258" border="1" hspace="4" vspace="4" alt="Beam-Accept-Connections-Leopard" /></a>

Then access the CouchDb <a href="http://bergie.iki.fi/blog/couchdb_0-7-0_is_out/">management console</a> in <a href="http://localhost:5984/_utils/">http://localhost:5984/_utils/</a> and go to &quot;Replication&quot;. Set up the replication paths there. The database you're interested in is &quot;<em>ajatus_db_content</em>&quot; (by default, see <a href="http://www.ajatus.info/documentation/installation/#d3f49ff7e6e57d0a1a3671214fc1681a">advanced setup</a>):

<a href="/files/ajatus-replication-setup.png"><img src="/files/ajatus-replication-setup-tm.jpg" height="104" width="398" border="1" hspace="4" vspace="4" alt="Ajatus-Replication-Setup" /></a>

Once you have entered the paths just click &quot;Replicate&quot; and wait a sec. Replication is one way, so remember to also replicate back from the other server!

When replication is done your Ajatus system should have data entered on multiple systems:

<a href="/files/ajatus-multiple-creators.png"><img src="/files/ajatus-multiple-creators-tm.jpg" height="81" width="296" border="1" hspace="4" vspace="4" alt="Ajatus-Multiple-Creators" /></a>

<a href="http://www.nemein.com/en/">My company</a> is now <a href="http://en.wikipedia.org/wiki/Dogfooding">dogfooding</a> Ajatus. At the moment we use it in <a href="http://jaiku.com/channel/ajatus/presence/22541792">full peer-to-peer mode</a>, but there are some plans to install a central server for security and backup purposes. I will post some notes on our experiences later this month.

<strong>In related news:</strong> CouchDb <a href="http://damienkatz.net/2008/01/new_gig.html">lead developer Damien Katz has been hired by IBM</a> to work full-time on the database. This is great news for both CouchDb and Ajatus. Congratulations!

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/ajatus">ajatus</a>, <a href="http://www.technorati.com/tag/couchdb">couchdb</a>, <a href="http://www.technorati.com/tag/replication">replication</a></p>