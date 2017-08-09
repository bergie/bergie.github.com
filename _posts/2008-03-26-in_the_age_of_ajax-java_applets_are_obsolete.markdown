---
  title: "In the Age of Ajax, Java applets are obsolete"
  categories: 
    - "oscom"
  layout: "post"

---
<p>
<a href="http://suomi.sampopankki.fi/">Sampo Pankki</a>, the bank that was formerly known as <a href="http://fi.wikipedia.org/wiki/Postipankki">Postipankki</a>, <a href="http://fi.wikipedia.org/wiki/Leonia">Leonia</a> and just <a href="http://fi.wikipedia.org/wiki/Sampo_Pankki">Sampo</a> was recently bought by the Danish <a href="http://www.danskebank.com/en-uk/Pages/default.aspx">Danske Bank</a>. As part of the merger they <a href="http://www.reuters.com/article/rbssFinancialServicesAndRealEstateNews/idUSL2568442120080325">switched their IT systems</a> to Danske Bank infrastructure in <a href="http://www.hs.fi/english/article/Serious+problems+with+launch+of+new+online+service+of+Sampo+Bank/1135235064450">a huge EUR 200 million operation</a> over the Easter. The switch had a lot of issues, causing website downtime, faulty account data and non-functioning credit cards.
</p><p>
However, the downtimes were not the only big issue with the switch: in the process Sampo also switched from a reputedly very functional HTML-based web banking interface into a <a href="http://kks.cabal.fi/SampoApplet">Java Applet that is doing some quite dubious snooping</a> on user's computer. And of course they didn't do much cross-browser testing. Here is what I see with <a href="http://wiki.mozilla.org/Firefox3">Firefox 3</a> beta:
</p><p>
<a href="https://d2vqpl3tx84ay5.cloudfront.net/sampo-verkkopankki-firefox3.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/sampo-verkkopankki-firefox3-tm.jpg" height="268" width="400" border="1" hspace="4" vspace="4" alt="Sampo verkkopankki broken with Firefox 3" title="Sampo verkkopankki broken with Firefox 3" /></a>
</p><p>
I remember when our former accounting software <a href="http://en.wikipedia.org/wiki/Software_as_a_service">SaaS</a> vendor <a href="http://www.procountor.com/">Procountor</a> did a switch from HTML to Java Applet. Suddenly a very fast and easy UI was changed to slow and unusable semi-desktop-ish application. Needless to say, <a href="http://nemein.com/en/">my company</a> dumped them immediately. <a href="http://en.wikipedia.org/wiki/Java_applet">Java Applets</a> may have had advantages in 90s, but in the <a href="http://arstechnica.com/news.ars/post/20050808-5183.html">Age of Ajax</a> they are <a href="http://blog.beplacid.net/2007/09/03/why-java-is-obsolete/">mostly obsolete</a>.
</p><p>
<strong>Update:</strong> Apparently the Sampo service also has <a href="http://www.digitoday.fi/tietoturva/2008/03/26/rss/20088576/66">a Cross-Site Scripting vulnerability</a>. All this bungling makes me remain quite a happy <a href="http://www.nordea.fi">Nordea</a> customer.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/ajax">ajax</a>, <a href="http://www.technorati.com/tag/java">java</a>, <a href="http://www.technorati.com/tag/security">security</a>, <a href="http://www.technorati.com/tag/sampopankki">sampopankki</a></p>
