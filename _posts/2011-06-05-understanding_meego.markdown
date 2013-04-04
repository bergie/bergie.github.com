---
  title: "Understanding MeeGo"
  categories: 
    - "business"
    - "desktop"
    - "kde"
    - "meego"
    - "mobility"
    - "bestof"
  layout: "post"

---
_Disclaimer: I'm a software developer with a background in Nokia's Maemo mobile Linux ecosystem. I've built both software and community services for it. As a Maemo enthusiast, I've also been following MeeGo with interest, and am helping to build some of the project infrastructure there as well. But I do not speak with the authority of the MeeGo project, and what is written below is my personal view into what MeeGo is._

After the recent [San Francisco MeeGo Conference](http://sf2011.meego.com/) there has been surprisingly much negative reporting about MeeGo, mostly centered at [Nokia's MeeGo story](http://www.latestnewsin.com/meegos-state-of-development-was-an-oh-shit-moment-for-nokia/). While Nokia's strategy changes are unfortunate, much of the reporting around it appears to come from misunderstanding what MeeGo is about.

Many see MeeGo just as _Android without Java_, but it is much more, as I'll explain here.

## Industrial Linux

MeeGo is much more than just handsets or tablets. It is an attempt at creating a standardized industrial Linux distribution that can be used anywhere from in-vehicle infotainment devices to TVs to, indeed, handsets.

It is a true open and collaborative environment, managed by [Linux Foundation](http://www.linuxfoundation.org/). The [governance model](https://meego.com/about/governance) is there to ensure that MeeGo stays a vendor-neutral platform that anybody can build their products on top.

Many device segments have very long development, and especially usage times. For this MeeGo has a predictable release schedule of a major release every six months, and [a roadmap](https://meego.com/about/roadmaps) kept by the Technical Steering Group.

If MeeGo succeeds in this, you will be using it in your TV, in your car stereo, and at the back of an airline seat. But in most of these situations you won't be able to know that it is MeeGo. It is simply there to make building products faster and cheaper for the manufacturer.

## Openness

As I argued in my earlier piece [Open Source? Free Software? What we need is Open Projects](http://bergie.iki.fi/blog/open_source-free_software-what_we_need_is_open_projects/), being an open platform is much more than just the licensing terms of the code. There needs to be transparency into the development process, a clear procedure on how to participate and much more. And of course licensing has to be such that the participants can actually use the results in whatever they're doing.

For this, most of [MeeGo is licensed](https://meego.com/about/licensing-policy) under permissive terms, like the GNU LGPL and BSD-style licenses.

But indeed, the other aspects of openness are more important. With MeeGo you can see every commit happening on Gitorious, and you can see the bugs and features being worked out in a public Bugzilla.

MeeGo as a project is still quite young, and many participants are still learning how to work in the open. This has lead to [some issues in project transparency](http://lwn.net/Articles/444567/). But hopefully those are now getting resolved.

## User Experience

MeeGo allows anyone to build their own user experience on top of the platform. Actually, this is expected of any serious manufacturer. Sure, there are some reference UXs available, including Tablet, Handset and Netbook, but none of these are quite product-ready, and are not necessarily even intended to be.

Because of this it is quite funny to see reviews of the reference UXs. They're not the ones most devices will run, though obviously some manufacturers or community members are going to use them anyway. A full MeeGo product will look and feel like something completely different.

This is not like Android manufacturers adding their own skins. With MeeGo anybody has the full freedom to build a complete user experience that suits their device, branding and other goals. The whole platform has been built to allow this sort of differentiation, without a risk of fragmenting the ecosystem. I'll explain the fragmentation question soon.

Actually, the freedom of defining your own user interface is big enough that both Android and WebOS could theoretically be rebased on top of MeeGo to be just different MeeGo UXs. Obviously they would need to allow running MeeGo-compliant Qt applications in addition to ones written for them directly, but that is minor detail. WebOS already ships Qt, so it isn't even that far from this. Similarly, KDE or GNOME could run as MeeGo UXs.

## Compliance

At the core of MeeGo there is [a set of compliance rules](http://wiki.meego.com/Quality/Compliance). Being Open Source, anybody can take MeeGo, modify it, and run it on their devices. But only if their implementation passes MeeGo compliance it can be called MeeGo.

*Device Compliance* is a set of rules that ensures any MeeGo-compliant software can run on a particular device. *Application Compliance* similarly ensures an app can be installed and run on any MeeGo-compliant device.

Both of these sets of compliance rules have automated tests that anybody can run. So, between non-compliant MeeGo-related software there may be fragmentation, but anything branded MeeGo (and therefore compliant) must be fully compatible.

## App Stores and business models

MeeGo is an open source project, not a company. This means it comes without strings attached, compliance rules aside. There are no limitations on the business model of a MeeGo device manufacturer, no mandatory online services or app stores to enable, and no royalty payments.

With this, each vendor can decide what they want to enable their users to do with the device. An embedded device might have no concept of installable applications, a tablet might come with the vendor's own app store.

For those who do not want to go through trouble of building their own developer ecosystems and app stores, there are some generic solutions available in the MeeGo sphere:

Intel's [AppUp](http://www.appup.com/applications/index) is a "white label" app store. This means that a device manufacturer, or even retailer or operator can get an instance of AppUp with their own branding and a revenue sharing deal with Intel. Developers submit software only once and it will be available on all the different branded AppUps.

On the more open side, there is also the upcoming [MeeGo Community Apps](http://wiki.meego.com/MeeGo_Apps), a fully community driven "store" of free software written for MeeGo. It comes with its own, OCS-compatible client application, a web frontend, and clear set of [crowdsourced app quality assurance](http://bergie.iki.fi/blog/application_quality_assurance_in_linux_distributions/) processes. The similarly handled Maemo Downloads has served over 80 million downloads for the Nokia N900, so the user and developer interest is clearly there.

## The future of MeeGo

At this early stage of the project it is hard to make predictions, but there are many things MeeGo gets right. I think it has a bright future ahead of it, especially in more specialized devices. There the shared infrastructure and clear development schedule give manufacturers substantial advantages in both development time and cost.

Product development times in the embedded sector are quite long, and it may well take years before we'll see MeeGo in a airline multimedia system. But if the project shows the necessary durability and longevity, this will eventually happen. Now many of those systems run on customized Linux distributions that their manufacturers have to spend quite a bit of money to maintain. MeeGo removes that problem, and allows easier collaboration through the compliance rules.

As for consumer devices like tablets and handsets, that area mostly requires there to be a vendor that wants to properly differentiate itself from the grey masses of the Android ecosystem. MeeGo provides all the necessary tools on both systems side and user interface development to make that happen.

Currently there are many different ideas floating around on how to build user experiences on connected devices. There is the "wall of apps" approach of iPhone, there are the fully cloud-connected WebOS and Android approaches, and now Microsoft is also starting to enter the game with their own ideas.

I don't think the "post-PC" world is yet complete. What MeeGo gives is a fast way to build products differentiating from that crowd. It just needs companies who are willing to go for it.

The next couple of years will be quite interesting.

**Update:** everything written in this blog post should be applied to [Mer Project](http://merproject.org/) as the proper heir of MeeGo.
