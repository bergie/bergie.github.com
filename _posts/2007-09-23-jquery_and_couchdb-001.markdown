---
  title: "jQuery and CouchDB"
  categories: 
    - "midgard"
    - "mobility"
    - "openpsa"
  layout: "post"

---
<a href="http://couchdb.com/">CouchDB</a> is a <a href="http://intertwingly.net/blog/2007/09/07/Ascetic-Database-Architectures">very interesting evolution</a> in open source data storage: an ad-hoc <a href="http://www.couchdbwiki.com/index.php?title=Basic_Concepts#What.27s_a_Document.3F" title="Basic_Concepts#What.27s_a_Document.3F">document database</a> with <a href="http://www.couchdbwiki.com/index.php?title=Technical_Overview#Distributed_Updates_and_Replication" title="Technical_Overview#Distributed_Updates_and_Replication">replication</a> support. I heard the first time about CouchDB when <a href="http://jan.prima.de/">Jan Lehnardt</a> was <a href="http://jan.prima.de/~jan/plok/archives/72-Some-Context.html">presenting it</a> in <a href="http://froscon.phpugdo.de/">FrOSCon</a> a month ago, and became immediately very interested.

The database is available for various different platforms, and provides a <a href="http://www.couchdbwiki.com/index.php?title=HTTP_REST_API" title="HTTP_REST_API">RESTful JSON API</a>, which makes it very easy to access basically from any programming languages. To make things even simpler, access libraries have emerged for various languages like <a href="http://www.couchdbwiki.com/index.php?title=Getting_Started_with_PHP" title="Getting_Started_with_PHP">PHP</a> and <a href="http://www.couchdbwiki.com/index.php?title=Getting_Started_with_Ruby" title="Getting_Started_with_Ruby">Ruby</a>.

This weekend <a href="http://protoblogr.net/blog/view/pre_release_of_the_couchdb_jquery_lib.html">Jerry Jalava released</a> a <a href="http://protoblogr.net/downloads/jqcouch.js">jQuery CouchDB access library</a>. This is an important step for us as <a href="http://www.midgard-project.org/">Midgard</a> is already making the <a href="http://trac.midgard-project.org/ticket/23">jQuery migration</a>, and <a href="http://www.nemein.com/en/">we</a> are considering to use CouchDB for a project.
<p style="text-align:center;"><img src="/files/couch-hacking.jpg" height="300" width="400" border="1" hspace="4" vspace="4" alt="Couch-Hacking" /></p>So, <a href="http://www.couchdbwiki.com/index.php?title=Why_CouchDb">why CouchDb</a>? First of all, it is something <a href="http://damienkatz.net/2007/09/couchdb_strikes.html">new and interesting</a>. And it is multiplatform and replicated, meaning that we should be able to get our data everywhere, from a web server to <a href="http://www.apple.com/macosx/leopard/">Mac desktop</a> to an <a href="http://maemo.org/">Internet Tablet</a>. Besides regular database usage, some of the <a href="http://damienkatz.net/2006/10/couchdb_and_php.html">PHP code deployment ideas</a> are also promising.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/jquery" rel="tag">jquery</a></p>