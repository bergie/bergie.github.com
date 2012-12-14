---
  title: "Join the MidCOM Performance Sprint on August 30th"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/documentation/midcom/">MidCOM</a> is the PHP-level framework of <a href="http://www.midgard-project.org/">Midgard CMS</a>. With its <a href="http://www.ohloh.net/projects/3309?p=Midgard">nearly 500K lines of code</a>, it every now and then is good to sit down and focus on performance optimization.

<ul><li>In 2004 MidCOM code <a href="http://bergie.iki.fi/blog/2004-09-08-001/">moved from database to file system</a> for both performance and ease-of-development reasons, though later the performance point has been disputed by Alexander's tests that revealed 10% speed advantage for loading code from DB.</li><li>In 2005 we <a href="http://bergie.iki.fi/blog/performance-tips-for-midcom-2-5/">stopped using the shared "MidCOM site template"</a> in favor of faster, static MidCOM start-up for websites.</li><li>In 2006 I removed lots of query duplication with navigation and ACLs, with <a href="http://bergie.iki.fi/blog/optimizing-the-latest-midcom/">quite dramatic speed improvements</a> on big sites.</li></ul>MidCOM has again gathered some heft, and so this year we have to do more:


<img src="/files/midcom-performance-sprint-beforeafter.jpg" height="334" width="398" border="0" hspace="4" vspace="4" alt="Midcom-Performance-Sprint-Beforeafter" />

Lots of MidCOM code is still from the <a href="http://www.midgard-project.org/documentation/reference/#9f42c2021f0b0efedacd0ae9d6801c5c">old Midgard 1.x API</a> and PHP4 times. In <a href="http://trac.midgard-project.org/query?status=new&amp;status=assigned&amp;status=reopened&amp;milestone=MidCOM+3.0">MidCOM 3</a> we can build everything around <a href="http://www.midgard-project.org/documentation/reference/#3855e6325f5459c1d4f3b9863bc7debe">modern Midgard API</a> and PHP 5.2, which will make performance a lot easier. Some of the focus areas will be:

<ul><li></li><li>Removing duplicate queries</li><li>Rewriting the <a href="http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-nap/">Navigation Access Point</a> system with performance in mind</li><li>Loading less and <a href="http://trac.midgard-project.org/ticket/23">faster javascript</a></li><li>Utilizing <a href="http://en.wikipedia.org/wiki/Memcached">memcached</a> where it makes sense</li><li>Loading only the PHP code we actually need</li></ul>I have created <a href="http://trac.midgard-project.org/ticket/102">bug #102</a> for keeping track of all performance-related commits originating from the sprint.

To make all of this happen, a group of Midgard hackers will gather on August 30th to <a href="http://beta.plazes.com/plazes/39685">Ingels</a> in the Finnish countryside. Anybody interested is welcome to join us either on-site or over IRC. Obviously some PHP5 hacking skills will be required :-)

Everybody attending the sprint will get a cool Midgard t-shirt designed by <a href="http://www.andreasn.se/">Andreas Nilsson</a>.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>