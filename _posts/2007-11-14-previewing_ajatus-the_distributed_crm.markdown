---
  title: "Previewing Ajatus - the distributed CRM"
  categories: 
    - "mobility"
    - "openpsa"
    - ""
  layout: "post"

---
While there is no public release yet, I though to give a heads-up on a project we're working on with <a href="http://protoblogr.net/">Jerry</a>: <strong><a href="http://www.ajatus.info/">Ajatus</a></strong> is a distributed, or peer-to-peer CRM system built on top of <a href="http://bergie.iki.fi/blog/jquery_and_couchdb-001.html">CouchDb</a>.

<a href="/files/ajatus-note-related.png"><img src="/files/ajatus-note-related-tm.jpg" height="246" width="398" border="1" hspace="4" vspace="4" alt="Ajatus-Note-Related" /></a>

What makes Ajatus so special is the approach we're taking with it. Having with <a href="http://www.openpsa.org/">OpenPsa</a> found the traditional, hierarchical CRM approach unworkable we wanted to solve the problem in a different way:

<ul><li>Local, rich AJAX client everybody can run on their laptop or internet tablet</li><li>Replication to allow sharing data with partners, customers and the employer</li><li>Simple base data types (note, event, contact, ...) that users can customize and extend</li><li>Possibility to build integration tools and plug-ins in almost any language (with CouchDb's <a href="http://www.couchdbwiki.com/index.php?title=HTTP_REST_API" title="HTTP_REST_API">restful JSON interface</a>)</li><li>Speed</li></ul>
To help us stay on the right path we even wrote an <a href="http://www.ajatus.info/documentation/ajatus_manifesto/">Ajatus Manifesto</a> to guide ourselves.

Currently the software already runs and does pretty much all the basic things needed. Once we get it into state where we can <a href="http://en.wikipedia.org/wiki/Eating_one%27s_own_dog_food">dogfood</a> it (in interoperation with <a href="http://www.nemein.com/en/">the company</a> OpenPsa) we will make the first release. Until then, <a href="http://www.ajatus.info/news/">stay tuned</a>, check the <a href="http://repo.or.cz/w/ajatus.git">Git repository</a> and <a href="http://jaiku.com/channel/ajatus">join the talk</a>!

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/ajatus" rel="tag">ajatus</a>, <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/openpsa" rel="tag">openpsa</a></p>