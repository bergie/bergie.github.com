---
  title: "First day of Nonprofit Technology Conference"
  categories: 
    - "midgard"
  layout: "post"

---
The first day of [Nonprofit Technology Conference 2005][0] started with a [breakfast session][5] where [Mena Trott][1] of [Six Apart][2] was telling about community building with blogging tools. Her examples included [Save Karyn][3] and the [Star Wars Kid][4] raising money through popularity in the weblog world.

![Jacob asking a question][18]

The main idea with weblogs is to capture the _personal voice_ of the author, and to make publishing that as easy as possible. Most blogging tools are either [inexpensive][6] or [Open Source][7], and allow easy publication of media rich content. Another important point is that all blogs share some common user interface elements like archives, RSS feeds, comments and posts arranged by date. This makes it easier for readers to use and follow the site. The presentation ended with a demo how _Ryan Jacobs_ from [Ungana-Afrika][8] (yes, a [familiar organization][11]) created a blog for himself in couple minutes.

The TypePad [blog creation UI][24] is quite similar in concept to the [Midgard Site Wizard][9]:

- You create an user account (in Midgard, an organization)
- You give a name to the website
- You select a layout from set of templates provided
- You select whether the blog is public or password protected

...and that's it, then you're online and ready to publish. Now the challenge for the Midgard Community is to [ensure][10] that this all happens out-of-the-box with the upcoming 1.7 release.

Another interesting point regarding blogging would be the usage of [moblogs][12] to report the field work of NGOs. For example, my roommate _Jacob Patton_ from [Free The Slaves][13] saw this as an interesting opportunity for reporting in real time how freed slaves and human trafficking victims are being rehabilitated.

## Data security

The next session of the day was [Data Security in High Risk Organizations][14] held by fellow Midgardian, [Robert Guerra][15] from [Privaterra][16] and [Matt Kestian][25] from [Microsoft][26]. An important point made in the presentation is that security is not only computer security, but also physical security.

![Robert's presentation][17]

_Defense in Depth_ is the concept of building several layers of security. For example, one layer is the perimeter of an internal network, then comes the security of actual applications, and then things like backups and disaster security. However, data security is still just one layer. For example, one network security company I've visited had a very strongly firewalled working environment where online access would've been difficult. However, backup tapes containing all the confidential data were just lying on shelves in corridor near the office lobby. It would've been childishly easy to walk in, grab a tape, and then examine it in good time.

It is important to know what devices and services run in the network of a company, and to periodically check that they're present, working and not tampered with. It is also important to scan the network to see that nothing unknown has popped in there. The question to ask about each asset is "_Is this a device I can trust?_"

All devices should be examined to ensure they have all required protection like automated security patches, antivirus software, host-based firewalls and that they run only services that are really needed. It is also a good idea to keep in mind that it is usually possible to switch insecure or troublesome applications to more secure ones, like switching from [Internet Explorer][20] to [Firefox][19].

Email communications can be secured easily by running the email protocols encrypted by SSL. Most email applications support encryption in their preferences. While this secures the communication between the email application and the server from password sniffers, it doesn't actually protect email transmitted between organizations. Solution to that is to encrypt the actual emails using tools like [S/MIME][21] or [GPG][22]. For human rights groups there is also a special-purpose email-like bulletin system named [Martus][23].

## After lunch

After lunch I helped Robert to set up SSL encryption for his Midgard sites running on [Ubuntu][27]. I also briefly met [Ben Ramsey][31] who [criticized us][32] of making Midgard too hard to [install][33].

In the evening we went to a dinner with some people from [EngenderHealth][28] to discuss possibilities of using [OpenPSA][29] for project portfolio management in NGOs. Apparently this would require a higher-level tracking of targets and initiatives in a Balanced Scorecard-like fashion. However, as my fortune cookie reminded, "_Too much confidence has deceived many a one._"

After the lunch the evening ended in the Microsoft party in [House of Blues][30]. A night walk through the center of Chicago showed the old skyscrapers very beautifully.

[0]: http://www.nten.org/ntc
[1]: http://mena.typepad.com/
[2]: http://www.sixapart.com/
[3]: http://www.savekaryn.com/
[4]: http://www.screamingpickle.com/members/StarWarsKid/
[5]: http://www.nten.org/ntc-2005-trott
[6]: http://www.typepad.com/
[7]: http://wordpress.org/
[8]: http://www.ungana-afrika.org/
[9]: http://bergie.iki.fi/blog/site_creation_wizard_runs/
[10]: http://permalink.gmane.org/gmane.comp.web.midgard.devel/5228
[11]: http://www.nemein.com/en/news/press/2004-02-11-000.html
[12]: http://en.wikipedia.org/wiki/Moblog
[13]: http://www.freetheslaves.net/home.php
[14]: http://www.nten.org/ntc-2005-datasec
[15]: http://www.privaterra.org/blog-rg/
[16]: http://www.privaterra.org/
[17]: http://bergie.iki.fi/midcom-serveattachmentguid-ddbd3f5ad3f5d15b1071859677bcda39/rguerra-scaled.jpg
[18]: http://bergie.iki.fi/midcom-serveattachmentguid-31a230f04a901c1745ca30e7b177e0bc/jacob-breakfast-scaled.jpg
[19]: http://www.mozilla.org/products/firefox/
[20]: http://www.microsoft.com/windows/ie/default.mspx
[21]: http://www.imc.org/smime-pgpmime.html
[22]: http://www.gnupg.org/
[23]: http://www.martus.org/
[24]: http://help.typepad.com/weblogs/intro.html#creating_a_new_weblog
[25]: http://www.net.ohio-state.edu/security/bios/matt-kestian.shtml
[26]: http://www.microsoft.com/
[27]: http://www.ubuntulinux.org/
[28]: http://www.engenderhealth.org/
[29]: http://www.openpsa.org/
[30]: http://www.hob.com/venues/clubvenues/chicago/
[31]: http://benramsey.com/
[32]: http://benramsey.com/2005/03/24/name-dropping-at-the-ntc/
[33]: http://www.midgard-project.org/documentation/installation/