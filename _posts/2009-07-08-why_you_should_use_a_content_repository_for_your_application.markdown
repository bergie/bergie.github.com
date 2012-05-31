---
  title: "Why you should use a content repository for your application"
  categories: 
    - "desktop"
    - "midgard"
    - "mobility"
    - ""
  layout: "post"

---
<p style="text-align:right;">
<img src="/files/midgard2-bubble-1.png" height="137" width="128" border="0" align="right" hspace="8" vspace="4" alt="Midgard2" title="Midgard2" />
</p><p>
I gave my <a href="http://www.grancanariadesktopsummit.org/node/210">Midgard2: Content repository for desktop and the web</a> talk yesterday in <a href="http://www.grancanariadesktopsummit.org/">GCDS</a>. The <a href="http://www.slideshare.net/bergie/midgard2-content-repository-for-desktop-and-the-web">slides are available on SlideShare</a>. The main idea was that any application that deals with structured data could benefit from using a content repository like <a href="http://www.midgard2.org/">Midgard2</a> or <a href="http://couchdb.apache.org/">CouchDB</a>.
</p><p>
So, what is a content repository? It is a service that sits between an application and a data store. It provides several advantages:
</p><ul>
<li><strong>Common rules for data access</strong> mean that multiple applications can work with same content without breaking consistency of the data</li>
<li><strong>Signals about changes</strong> let applications know when another application using the repository modifies something, enabling collaborative data management between apps</li>
<li><strong>Objects instead of SQL</strong> mean that developers can deal with data using APIs more compatible with the rest of their desktop programming environment, and without having to fear issues like <a href="http://xkcd.com/327/">SQL injection</a></li>
<li><strong>Data model is scriptable</strong> when you use a content repository, meaning that users can easily write Python or PHP scripts to perform batch operations on their data without having to learn your storage format</li>
<li><strong>Synchronization and sharing</strong> features can be implemented on the content repository level meaning that you gain these features without having to worry about them</li>
</ul><p>
<a href="http://www.midgard2.org/">Midgard2</a> is a content repository library that is built on top of <em>glib</em>, <em>libgda</em> and <em>dbus</em>, making it fit the general free desktop infrastructure very well. You can use it in any application that is written in <a href="http://www.midgard-project.org/api-docs/midgard/core/mjolnir/">C</a>, <a href="http://www.mdk.org.pl/2009/3/26/midgard-objc-bindings">Objective-C</a>, <a href="http://www.midgard-project.org/documentation/python_midgard/">Python</a>, <a href="http://www.midgard-project.org/documentation/mgdschema-in-php/">PHP</a>, or soon <a href="http://www.flickr.com/photos/bergie/2439346766/">Mono</a>. Learn more <a href="http://www.slideshare.net/bergie/midgard2-content-repository-for-desktop-and-the-web">from the slides</a>!
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/gnome" rel="tag">gnome</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/mono" rel="tag">mono</a></p>