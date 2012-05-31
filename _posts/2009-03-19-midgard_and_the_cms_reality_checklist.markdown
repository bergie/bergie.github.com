---
  title: "Midgard and the CMS reality checklist"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
<a href="http://grep.codeconsult.ch/2009/03/18/the-cms-vendor-meme/">Via Bertrand</a> there is a meme of CMS vendors analyzing how they are doing with CMS Watch's <a href="http://www.cmswatch.com/Trends/1518-A-reality-checklist-for-vendors">CMS reality checklist</a>. Here's how <a href="http://www.midgard-project.org/midgard/8.09/">Midgard 8.09</a> copes:
</p><blockquote>
1. Our software comes with an installer program.
</blockquote><p>
Yes. First you install Midgard using your distributions's <a href="http://www.midgard-project.org/documentation/installation-distros/">native package management tools</a>, and then let <a href="http://www.midgard-project.org/documentation/datagard/">datagard</a> do the rest. It will install all necessary PEAR packages, create a database for you, tune cron and SOLR setup, and finally set up a working Midgard website.
</p><blockquote>
2. Installing or uninstalling our software does not require a reboot of your machine.
</blockquote><p>
Yep. Apache needs to be restarted, though when you install Midgard or new <a href="http://bergie.iki.fi/blog/introduction_to_midgards_database_abstraction_system/">MgdSchemas</a>.
</p><blockquote>
3. You can choose your locale and language at install time, and never have to see English again after that.
</blockquote><p>
Language isn't asked at install time. Instead, we use <a href="http://en.wikipedia.org/wiki/Content_negotiation">browser content negotiation</a> to figure out the appropriate UI language.
</p><blockquote>
4. Eval versions of the latest edition(s) of our software are always available for download from the company website.
</blockquote><p>
Midgard is <a href="http://www.midgard-project.org/midgard/8.09/licensing/">free software</a>, so you can always <a href="http://www.midgard-project.org/download/">get the full version</a>.
</p><blockquote>
5. Our WCM software comes with a fully templated "sample web site" and sample workflows, which work out-of-the-box.
</blockquote><p>
Yes, there is a default template datagard will set your initial website with. We could do more to make the sample site "do more" out-of-the-box though.
</p><blockquote>
6. We ship a tutorial.
</blockquote><p>
The stuff <a href="http://www.midgard-project.org/documentation/getting-started/">is</a> <a href="http://www.midgard-project.org/documentation/howto-midcom/">online</a>. There <a href="http://www.midgard-project.org/discussion/developer-forum/solving_the_midgard_documentation_issues/">are plans</a> to start shipping it with Midgard, though.
</p><blockquote>
7. You can raise a support issue via a button, link, or menu command in our administrative interface.
</blockquote><p>
Nope, but you can <a href="http://trac.midgard-project.org/newticket">do it on our Trac</a> install. A good idea to add it to the UI, and so it <a href="http://trac.midgard-project.org/changeset/21322">will be there</a> in next release.
</p><blockquote>
8. All help files and documentation for the product are laid down as part of the install.
</blockquote><p>
Currently <a href="http://www.midgard-project.org/documentation/">documentation is online</a>, but more and more of it <a href="http://marcin.soltysiak.com/6e8e234cc05d11ddbd788f585fd3eb96eb96/">is being included</a> to the install packages.
</p><blockquote>
9. We run our entire company website using the latest version of our own WCM products.
</blockquote><p>
<a href="http://uptime.netcraft.co.uk/up/graph?site=nemein.com">Yes</a>.
</p><blockquote>
10. Our salespeople understand how our products work.
</blockquote><p>
Yep, seems so :-)
</p><blockquote>
11. Our software does what we say it does.
</blockquote><p>
Yes, though <a href="http://www.midgard-project.org/midgard/1.8/features/">the list from 1.8</a> would have new items in 8.09.
</p><blockquote>
12. We don't charge extra for our SDK.
<br />13. Our licensing model is simple enough for a 5-year-old to understand.
<br />14. We have one price sheet for all customers.
</blockquote><p>
Free software. Need I say more? <a href="http://nemein.com/en/solution/pricing/">Services pricing</a> is relatively straightforward too.
</p><blockquote>
15. Our top executives are on Skype, Twitter, or some similar channel, and: Feel free to contact them directly at any time.
</blockquote><p>
<a href="http://nemein.com/en/people/">Yep</a>. And <a href="http://www.qaiku.com/home/bergie/">Qaiku</a> too :-)
</p><blockquote>
To help people find pages related to this meme around the web, I suggest adding the string 9c56d0fcf93175d70e1c9b9d188167cf to such pages, so that <a href="http://www.google.com/search?hl=en&amp;q=9c56d0fcf93175d70e1c9b9d188167cf">a Google query</a> can find them all.
</blockquote>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/cms" rel="tag">cms</a></p>