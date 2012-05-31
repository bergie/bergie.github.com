---
  title: "Neutron Protocol: Separating UI from the CMS"
  categories: 
    - "desktop"
    - "midgard"
    - "oscom"
    - ""
  layout: "post"

---
<p>
At the moment the prevailing wisdom is that each CMS should have its own user interface, and that user interface should be web-based. But there is also another way: separating the user interface from the CMS using a CMS-neutral protocol called Neutron.
</p><p>
According to <a href="http://www.w3.org/People/Berners-Lee/">Sir Tim Berners-Lee</a>, the earliest web browser was <a href="http://en.wikipedia.org/wiki/WorldWideWeb#Features">also an editor</a>. And the late 90s <a href="http://en.wikipedia.org/wiki/Netscape_Composer">Netscape Communicator</a> followed this ideal by including a HTML editor that could publish changes to pages using the <a href="http://www.apacheweek.com/features/put">HTTP PUT</a> method. But then the idea of editing via the web browser transformed to clunky forms and Java applet -based WYSIWYG editors, brought about by the rise of content management systems.
</p><p>
The problems of the user interface being part of the web page were multiple: it cluttered the produced HTML, it was possible to break by layout changes, sometimes the login and editing options were hard to find. It also meant that each and every CMS would have a completely different user interface. A problem made especially difficult if you had to use multiple systems. For example:
</p><p>
If you are <a href="http://maemo.org/profile/view/qgil/">Quim Gil</a>, working for Nokia's <a href="http://maemo.org/">maemo.org</a>, you're living in a world of many, many CMSs. The <a href="http://maemo.org/">marketing and community parts</a> of the website are run by <a href="http://www.midgard-project.org/">Midgard</a>, the <a href="http://wiki.maemo.org/">documentation wiki</a> by <a href="http://www.mediawiki.org/">MediaWiki</a>, your <a href="http://flors.wordpress.com/">own blog</a> by <a href="http://wordpress.org/">WordPress</a>, and the list goes on. While in this kind of corporate setup it has been possible to mostly unify usernames and passwords, it still means each part of your work runs with different UIs, and different usage logic. Back in 2003, I named this syndrome <a href="http://oscom.org/projects/documentation/midgard/case-oscom.html">Frankenstein CMS</a>.
</p><p>
In addition to consistency and usability, offline editing has been a big issue with most CMSs. In typical situation, it simply doesn't exist, making copy-and-paste way of taking documents with you to edit on a laptop while traveling.
</p><p>
There have been several initiatives in solving these problems. A quite limited, but so far successful example is the <a href="http://universaleditbutton.org/Universal_Edit_Button">Universal Edit Button</a> specification, making rounds earlier this summer. The idea is that CMSs would include metadata on where the editing view of a particular page was in the page itself, and then browsers would display a button leading to it. The approach has been adopted by several big players, including Wikipedia, and we also made it a part of the new CMS that will be built on <a href="http://bergie.iki.fi/blog/midgard_2-more_than_just_php-more_than_just_cms.html">Midgard 2</a>:
</p><p>
<img src="/files/midcom3-ueb.jpg" height="186" width="260" border="1" hspace="4" vspace="4" alt="Universal Edit Button in MidCOM 3" title="Universal Edit Button in MidCOM 3" /></p><p>
Another, also somewhat limited example is the <a href="http://www.xmlrpc.com/metaWeblogApi">MetaWeblog API</a> provided by most blogging platforms. It has enabled vendors to produce great offline blogging software like <a href="http://infinite-sushi.com/software/ecto/">Ecto</a> and <a href="http://www.red-sweater.com/marsedit/">MarsEdit</a> that provide offline editing and work with almost any blogging system out there. As I write this, I'm using Ecto on my MacBook Air, and will later use it to publish this entry to my Midgard server. The <a href="http://www.rfc-editor.org/rfc/rfc5023.txt">Atom Publishing Protocol</a> will likely be the successor of MetaWeblog, but appears to still keep the blog-only focus.
</p><p>
Back in the earlier days of <a href="http://oscom.org/">OSCOM</a> we had another initiative called <a href="http://www.oscom.org/projects/twingle/">Twingle</a>. It was a XUL-based desktop CMS client that utilized WebDAV and some XML introspection files to edit and publish data on different CMSs. After a <a href="http://www.oscom.org/events/sprints/1--zurich-march-2003/">March 2003 OSCOM Sprint </a>in Zurich we were able to demo the same client browsing and editing resources on three CMSs, including Zope and Midgard. Unfortunately, then CMS market became so hot that vendors were simply too busy to pick this up and the project died.
</p><p>
Luckily <a href="http://www.wyona.com/people/michael-wechner/index.html">Michael Wechner</a>, of OSCOM and <a href="http://lenya.apache.org/">Apache Lenya</a> fame didn't let the idea die. He worked it onwards, naming the protocol used for conversation between the client and the server <a href="http://neutron.wyona.org/">Neutron Publishing Protocol</a>, a play on Atom. He also built a new client, <a href="http://www.yulup.org/index.html">Yulup</a>, as a Firefox extension that could manage content on compatible servers.
</p><p>
<a href="/files/michael_wechner_in_horgenberg.jpg"><img src="/files/michael_wechner_in_horgenberg-tm.jpg" height="249" width="400" border="1" hspace="4" vspace="4" alt="Michael Wechner in Horgenberg" title="Michael Wechner in Horgenberg" /></a>
</p><p>
In summer 2007 I saw a demo of Yulup and discussed Neutron with Michi and was impressed. But was back then too depressed by <a href="http://bergie.iki.fi/blog/when_a_holiday_gets-interesting.html">the Czech episode</a> and other personal issues to press on with the idea. Having watched another year of the directions the community is taking Midgard CMS to, and how clients view CMS deployments, I'm starting to think the time would be ripe for going full forward with Neutron.
</p><p>
In nutshell Neutron is a metadata layer that allows a CMS to specify the actions user can take, and the methods provided for those actions. The methods can either be full-blown WebDAV, or simpler GET-and-POST that more limited CMSs can support. Neutron also provides its own authentication mechanism, though I would gladly see that overtaken by  a more secure and widely supported standard like <a href="http://oauth.net/">OAuth</a>.
</p><p>
Widely-supported Neutron would provide huge advantages: letting the developers of a CMS to focus on the actual management and presentation layers of the system, and allowing more innovation to happen in the client end due to combined efforts from multiple CMS projects. It would allow building of different content management interfaces for different audiences or usage scenarios. Simple editing and publishing clients that could run fully in browser's AJAX space for casual bloggers or wiki editors, workflow tools for gatekeepers of corporate publishing processes, and full-blown desktop content management tools for site editors. Other special cases like mobile content management could also be provided for.
</p><p>
So what is needed for this future to become reality? First of all, we need to make CMS developers aware of the possibility. Then we need a killer client that every CMS provider would want to support. And then we can expand the protocol, and build additional clients to cater for special needs.
</p><p>
The big question is how this will happen. Industry groups in CMS space are loose or non-existing, and so they lack the muscle to push any standards. Effort by single CMS vendor would probably stay partisan, as developers of different systems are quite suspicious or ignorant of each other. But maybe a combination of the two would work: industry group, such as OSCOM organizing some compatibility hacking events for the developer community, and a company dedicated at building a killer client application. It warrants serious consideration if <a href="http://nemein.com/">Nemein</a> should be that company.
</p><p>
<em>This manifesto on transforming how CMSs are used was written in an Eurostar London-Brussels train, sipping Dourthe's Bordeaux white and listening to the Karelia cycle by Sibelius.</em>
</p>