---
  title: "Will content repositories kill the file?"
  categories: 
    - "mobility"
    - "desktop"
    - "midgard"
  layout: "post"

---
<p>
<a href="http://www.mdk.org.pl/">MDK</a> <a href="http://www.mdk.org.pl/2009/7/30/the-great-demise-of-the-file">laments the demise of the simple file</a> in the onslaught of storage services:
</p><blockquote>
Sure, the applications still give you a way to share things and take them out of the storage. You can export a contact out of your address book as a vcard file. But the role of The File here is slowly being reduced to a role of an intermediate storage medium. The business card is temporarily put in the .vcf file before it gets injected into somebody else’s database (another address book?).
<br />
<br />As more and more applications operate on databases, the computer is becoming a monolithic black-box that “has things”. How exactly (and where) the data is stored is becoming less clear. The application and the interface becomes united with the user data. It becomes one.
</blockquote><p>
This echos the sentiments of <a href="http://al3x.net/">Alex Payne</a> when he <a href="http://al3x.net/2009/01/31/against-everything-buckets.html">warned against what he calls Everything Buckets</a>:
</p><blockquote>
Computers work best with structured data. Everything Buckets discourage the use of structured data by providing a convenient place to commingle “structureless” data like RTF and PDF documents. Rather than forcing the user to figure out the rhyme and reason of their data (for example, by putting receipts in a financial management application and addresses in an address book), Everything Buckets cry: “throw it all in here! Search it! Maybe I’ll corrupt my proprietary database, but maybe I won’t and you’ll have the joy of sifting through a mire of RTF documents. Doesn’t that sound great?”
</blockquote><p>
And yes, I agree that obscure application-specific databases are not really better than obscure proprietary file formats.
</p><p>
This is exactly why I've <a href="http://bergie.iki.fi/blog/why_you_should_use_a_content_repository_for_your_application/">been talking about content repositories</a>, services like <a href="http://www.midgard2.org/">Midgard2</a> and <a href="http://couchdb.apache.org/">CouchDb</a> that not only can provide superior content storage and organization, but do it in a way that multiple applications can share. You can easily write your own scripts to perform batch operations on the data, and receive <a href="http://teroheikkinen.iki.fi/blog/midgard_workshop_at_fscons/">D-Bus notifications</a> when something changes.
</p><p>
And good repositories also provide <a href="http://bergie.iki.fi/blog/couchdb_and_midgard_talking_with_each_other/">easy synchronization tools</a> so you can have your data available on all of your computers, and even <a href="http://bergie.iki.fi/blog/tomboy_web_synchronization-conboy_and_midgard/">on the web</a>. If they can also do peer-to-peer sharing, we're close to achieving the <a href="http://bergie.iki.fi/blog/free_desktop_and_the_cloud/">fully free cloud</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/couchdb" rel="tag">couchdb</a>, <a href="http://www.technorati.com/tag/gnome" rel="tag">gnome</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>