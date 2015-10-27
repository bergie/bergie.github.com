---
  title: "ETech 2009 CFP: Building the peer-to-peer business network"
  categories: 
    - "desktop"
    - "openpsa"
  layout: "post"

---
<p>
<a href="http://en.oreilly.com/et2009/public/content/home">ETech 2009</a>, the O'Reilly conference on emerging technologies now <a href="http://www.boingboing.net/2008/08/04/etech-2009-call-for.html">has a call for papers</a>. Here is my proposal for the <em>"Nomadism &amp; Shedworking"</em> track:
</p><blockquote>
The recent direction of business applications has been centralization to web-based systems, easing deployment, upgrades and management of application security. However, at same time centralization provides new risks like the introduction of a <a href="http://www.chrisbrogan.com/when-google-owns-you/">single point of failure</a> for application usage and in most cases inability to work offline.
<br /><br />At the same time, working culture has started so shift more towards networked individuals, or "web workers" forming ad-hoc coalitions to work on various projects. For them, centralized applications might not be desirable due to data ownership and infrastructure requirements.
<br /><br />Moving the applications from centralized web servers to a peer-to-peer network allows web workers to be in control of their own data, stay productive even in unstable connectivity situations, and collaborate easily with their colleagues in an ad-hoc way.
<br /><br />This talk outlines some ways to move forward in building peer-to-peer networked business applications. There are many open source frameworks targeting the problem, including replicated databases like <a href="http://incubator.apache.org/couchdb/">CouchDb</a> and <a href="http://syncwith.us/">Prophet</a>, and application-oriented P2P networks like <a href="http://swallow.sourceforge.net/">Swallow/DBE</a>. These will be discussed together with some real-world examples of business applications built with them:
<br /><br /><a href="http://www.ajatus.info/">Ajatus</a> - a "<a href="http://blogs.law.harvard.edu/vrm/2007/11/16/crm-gets-personal/">Personal CRM</a>" built on top of CouchDb, a RESTful replicated object database
<br /><a href="http://bergie.iki.fi/blog/how-openpsa-uses-dbe/">OpenPsa</a> - project management system <a href="http://bergie.iki.fi/blog/finding-resources-automatically-in-openpsa/">doing resourcing</a> over the <a href="http://www.digital-ecosystem.org/">DBE</a> P2P network
<br /><a href="http://syncwith.us/">Simple Defects</a> - a P2P bug tracking system built on top of the Prophet replicated database
<br /><br />The first phase of P2P business applications will likely be services operating in closed networks of users' social networking or instant messaging contacts. But the P2P model can also provide opportunities for wider networking, making it possible to find new project partners or collaborators anywhere in the world. This wider-ranging business network will introduce new challenges like security and reputation management. Some ideas related to this will also be discussed.
</blockquote><p>
Other interesting projects in this sphere I did not mention are <a href="http://telepathy.freedesktop.org/wiki/Tubes">Telepathy Tubes</a> and <a href="http://ulno.net/f2f/">F2F</a>. We have also had some ideas for how <a href="http://bergie.iki.fi/blog/xmpp_publish-subscribe_for_midgard_and_ajatus_replication/">Midgard could do this</a>...
</p>
