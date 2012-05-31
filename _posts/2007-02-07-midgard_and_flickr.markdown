---
  title: "Midgard and Flickr"
  categories: 
    - "midgard"
  layout: "post"

---
While my site is publishing a lot of photos, <a href="http://www.flickr.com/photos/bergie/">I'm using Flickr</a> as my central photo storage location. The reason for this is simple:

There are <a href="http://www.flickr.com/tools/">dozens of tools</a> that can upload to Flickr easily, including <a href="http://connectedflow.com/flickrexport/iphoto/">FlickrExport for iPhoto</a> and <a href="http://r2.nokia.com/nokia/0,,71739,00.html">Nokia Lifeblog</a>, but very few tools that could do the same for <a href="http://www.midgard-project.org/">Midgard</a>. By centralizing to Flickr I make my life a lot easier, but also lock myself to a proprietary service.

Luckily Flickr has a <a href="http://www.flickr.com/services/api/">quite comprehensive API</a> for photo management. By using the nice <a href="http://phpflickr.com/">phpFlickr library</a> I am able to synchronize the photos uploaded to Flickr to my blog. The result is that I can upload photos more easily, and both Flickr users and my blog readers can see them. Here are the first photos imported:


<img src="/files/photostream-flickr-import-latest.jpg" height="272" width="336" border="1" hspace="4" vspace="4" alt="Photostream-Flickr-Import-Latest" />

The way this works is that I've subscribed my <a href="http://www.midgard-project.org/documentation/midcom-components/">org.routamc.photostream</a> installation to my Flickr account. By default it checks every hour whether there are new photos, but I can also do a manual synchronization:

<img src="/files/photostream-flickr-import-raw.jpg" height="169" width="336" border="0" hspace="4" vspace="4" alt="Photostream-Flickr-Import-Raw" />

This functionality is available in <a href="http://www.midgard-project.org/documentation/running-latest-midcom-from-subversion/">MidCOM SVN trunk</a>.

<strong>In related news</strong>, thanks to the <a href="http://beta.plazes.com/raffle/">Plazes raffle</a> last year, I now have two more years of <a href="http://www.flickr.com/upgrade/">Flickr pro account</a> available. And <a href="http://blog.thinkphp.de/archives/189-Plazes,-European-PHP-Startup,-raised-EUR-2.7-Mio-Venture-Capital.html">Plazes seems to be doing well</a> all around.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/flickr" rel="tag">flickr</a>, <a href="http://www.technorati.com/tag/photos" rel="tag">photos</a>, <a href="http://www.technorati.com/tag/php" rel="tag">php</a></p><!-- technorati tags end -->