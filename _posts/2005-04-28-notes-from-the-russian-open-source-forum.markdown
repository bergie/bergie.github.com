---
  title: "Notes from the Russian Open Source Forum"
  categories: 
    - "business"
    - "midgard"
  layout: "post"

---
[Russian Open Source Forum][1] was a gathering of local software companies, Open Source developers and government IT people that brought together about 1500 participants. The event's celebrities were [Jon "Maddog" Hall][4] from [Linux International][2] and [Larry Wall][3], the Perl creator.

Prior to the event I took a walk. from the Moscow white house to the [Kremlin][11] and the "chinatown" neighborhood. The whole center of the city was preparing for the [Victory Day][12] celebrations with posters and flags everywhere.

![Gala dinner on the Viking boat](/files/OSF_Viking_Boat_Gala.jpg)

The first day of the event introduced the exhibition hall set up in Radisson [Moscow][7] to the speakers, and there was an evening gala in a floating restaurant on the river.

## Ideas for Midgard's future

After the gala winded down we went to a nearby cafe with [Alexander Bokovoy][5], the Belorussian Midgard developer now working for IBM's Linux Competence Center. Alexander was very happy to hear about the new [Midgard 2 developments][6], and maybe a bit smug about the stuff he proposed three years ago finally becoming a reality.

![Alexander Bokovoy at the IBM booth](/files/OSF_Alexander_IBM_Booth.jpg)

The recent advances in Midgard got us talking about the long-term vision, and obviously Alexander had a bunch of ideas:

Alexander's view of computing includes most processing moving to be [grid-handled web services][10]. The Open Source infrastructure for building grid-able services already exists in the form of the [Globus toolkit][9]. Globus enables web services to be built in C or Java, and supports things like Kerberos authentication between the grid scheduler and the service providers.

Another idea was to enable Midgard to use the new [Git][13] version control system as a distributed storage system. Currently Git is available only as a set of command-line tools but once the format stabilizes, a _libgit_ could make this kind of work easy. Git repositories would know from which system each modification was coming from, and make Notes-like multi-direction replication possible. LWN has [more information][14] about Git.

We also talked about the problems of making Midgard bindings into different languages due to the inability to remove classes that have been declared once during runtime, and messy C APIs. Alexander had the idea of implementing the Midgard 2 API natively only for PHP and Java, and handling other languages through Web Services passed either remotely or via [D-BUS][15]. There are already D-BUS bindings to both Python and .Net (Mono), which would make creating Midgard bindings for them relatively easy.

## Free Software and economy

![Press Conference](/files/OSF_Celeb_Panel.jpg)

Maddog's keynote dealt with how local economies benefit from Open Source. The basic nature of Free Software is that it enables local service companies and software developers to easily create IT solutions without expensive licensing costs. Currently Brazil funnels a billion dollars every year out of their economy in software license fees. With Open Source, this money could be kept in the local circulation, and the solutions could be created by the local experts.

Free software also enables software users to localize the software for their own language, character set and cultural environment. In the proprietary world, American companies have very little incentive to translate their tools to Icelandic or some of the hundreds of Indian languages, but with Open Source this is happening constantly.

Open Source also means better security and longevity of solutions. Companies go out of business and change their product lines, but Free Software stays in running order as long as somebody still has interest in it.

## Other projects

Other interesting talks included Michael Sparks' talk about how [BBC Research & Development][8] is developing Open Source video and audio streaming tools like the [Dirac][22] video codec. They have archive of hundreds of thousands of hours of footage, and moving that to a digital format and making publicly available might provide a really interesting service. Their [Kamaelia][23] tools are currently built in Python using the Unix toolkit methodology where different pieces of the system can be changed easily.

![Penguins on the walk](/files/OSF_Penguins.jpg)

[Rob Page][17] was presenting the product strategies of the [Zope Corporation][16]. His presentation used the old Gartner OS CMS report as a source on market positioning, and mentioned that in the last year the number of Zope deployments have doubled to about 58k, probably due to [Plone][18]. Zope Corp itself is not an Open Source company. Instead, their products are distributed following a _visible source_ model where end customers get the source code but are not allowed to redistribute it. Most of Zope Corp's revenue is generated through hosting (40%) and product licenses (30%).

The professional services of Zope Corporation are fairly similar to the ones [Nemein][21] provides for the Midgard platform: Support with possibility of Service Level Agreement, feature development including projects split between multiple clients, localized documentation, and so on.

## Community building

Larry Wall's very funny talk, _Building Open Source Communities_ dealt with building a thriving ecosystem for a Free Software project. Building a successful community is much more difficult than making a successful engineering product, and few developers are really familiar how the communities really work.

![Audience during a HP presentation](/files/OSF_Crowd.jpg)

One major question is about the personalities involved, _who_ will be interested in the project, who will be excluded, etc? The _what_ questions included the goal of the community, and what the contributors will get out of it. In the _where_ space, the questions deal on locations and services needed for running the community. _When_ is a question of project maturity, and of when to allow community to form. Also, when the different project services should be opened, and when, if ever, the project should be terminated. _Why_ is also relevant. Why should contributors join up, and also, why to release the project as Open Source.

The structure of the community should not be made too complex, or too designed before the actual community forms. People are all individuals, and as they succeed and fail, enter and leave, the community should be still able to function.

In general, communities succeed if they have a good habitat, plentiful food, they're healthy, and practice plentiful cross-fertilization. Similarly, they die if one of these aspects fails. "_A community needs to share a set of core values, but also allow honest differences of opinion on side issues_."

![After the dinner on Old Arbat](/files/OSF_Georgian_Dinner.jpg)

On thursday evening we had a very nice dinner with most of the speakers in a Georgian restaurant on the Old Arbat street. Especially the roasted [khinkali][20] and [khatchapuri][19] were very good.

[1]: http://www.opensource-forum.ru/index.php
[2]: http://www.li.org/
[3]: http://www.wall.org/~larry/
[4]: http://www.li.org/who/bio.php?name=hall
[5]: http://www.midgard-project.org/midcom-permalink-01ed9894c409cae82b929b0f0f928d52
[6]: http://bergie.iki.fi/midcom-permalink-0ca727a1a16a493d5e8b62a509b28c46
[7]: http://en.wikipedia.org/wiki/Moscow
[8]: http://www.bbc.co.uk/rd/index.shtml
[9]: http://www-unix.globus.org/toolkit/
[10]: http://www.gridcomputingplanet.com/news/article.php/3304571
[11]: http://en.wikipedia.org/wiki/Moscow_Kremlin
[12]: http://en.wikipedia.org/wiki/Victory_Day
[13]: http://en.wikipedia.org/wiki/Git
[14]: http://lwn.net/Articles/131657/
[15]: http://www.freedesktop.org/Software/dbus
[16]: http://www.zope.com/
[17]: http://www.zope.com/Corporate/Management/Page.html
[18]: http://plone.org/
[19]: http://www.recipesfood.com/Recipes/Khatchapuri-(Georgian-Cheese-Bread).aspx
[20]: http://members.tripod.com/ggdavid/georgia/cuisine/khinkali.htm
[21]: http://www.nemein.com/
[22]: http://dirac.sourceforge.net/
[23]: http://kamaelia.sourceforge.net/