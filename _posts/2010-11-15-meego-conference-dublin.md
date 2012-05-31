---
title: MeeGo Conference, Aviva Stadium Dublin
source: "http://www.qaiku.com/channels/show/MeeGo/view/a353cb4cf09711df9e6133ce7c141c621c62/"
categories:
  - meego
  - mobility
layout: post
location: Dublin, Ireland
---
You can tell this is a big conference: registration is a chaos, and keynote room doesn't have enough chairs. Lots of familiar faces! This is like half of this year's conferences compressed together.

MeeGo - Connecting the world animation: sharing stuff between people, across devices

Doug Fischer, Intel. First showing that he actually runs his slideshow from MeeGo :-)

MeeGo opportunity is 1 billion new users, 15 billion connected devices. In couple of years there will be more mobile internet users than desktop. And not just cellphones, but TVs, cars, tablets...

You don't want to shut all these new users, the new use cases into a single vendor cage. You want the ecosystem to be open. Innovation is social process, not something coming from a single inventor.

But open ecosystem shouldn't be fragmented. A shared platform helps. MeeGo is governed under Linux Foundation to enabe anybody to participate, and nobody to dominate.

Carsten on stage, telling about the MeeGo adaptation for the #N900.

* Upstream 1st philosophy
* Meritocracy
* Inclusion
* Transparency

demo: moving a video between devices (laptop - tv - tablet) while it is playing.

Everybody gets a Lenovo Ideapad netbook/tablet convertible running MeeGo. Cool! <http://www.slashgear.com/free-meego-ideapad-s10-3t-for-developers-as-intel-get-open-source-serious-15114066/>

Alberto Torres, Nokia: we're committed at delivering a contemporary user experience with MeeGo. Evolution from punch cards to CLI to WIMP to touch and NUI. _We're at the stage of creating the next evolution of computing._ Direct manipulation and gestures finally make computer usage intuitive - 2 year olds can play games and browse pictures.

Qt is the way to create software for MeeGo. Your software can run on phones, cars, desktops, TVs... There are already 400.000 developers using Qt.

Demo: same QML app running on Arm developer board, MeeGo netbook, Windows netbook, Nokia N8.

Amino: going with a stock industrial Linux like MeeGo will reduce your time-to-market from 18 months since SoC release to about 6 months. Amino's toolkit:

* GNU toolchain
* Git
* Qt
* Python
* PyQt
* WebKit
* Gstreamer
* Kickstart
* OBS ("key role in our success", "rebase our code with great speed, around 5 hours for the whole environment")

60% of Apple's revenue is coming from products that didn't exist four years ago. The computing landscape is moving quickly.

Cool, PySide can now show QML, and can even register DataModels there.

Niels is speaking about MeeGo community OBS. It'll be able to build packages for all MeeGo releases and latest MeeGo snapshot on both x86 and ARM. It can also build for Maemo Fremantle and Harmattan.

Tero speaks: Community software in MeeGo will have a process quite similar to the [Maemo devel-testing-extras process](http://bergie.iki.fi/blog/application_quality_assurance_in_linux_distributions/). Developer uploads sources to OBS, they get built, testers try it out and give feedback. When the application is good enough, testers approve it and it goes to the _Community Applications_ repository and becomes available to all MeeGo devices. End users can rate the application and give feedback.

The whole end-user Community Applications experience is handled with a native MeeGo 'appstore' client that talks OCS to the repository.

Overheard:

> I don't think people should work together before they've shared a beer

Open Collaborative Services BoF:

> Originally the Content Module was created for finding and downloading wallpapers, but now it is used for Maemo's appstore as there are no other open, vendor-independent appstore APIs

OCS supports multiple data providers, multiple servers that a client can talk to and put the results together. So same client could theoretically talk to both Ovi Store and MeeGo Community Applications.

MeeGo ships Attica, a Qt OCS client library that your applications can use.

Tablet UX 101, Thalient Interfaces

* One app, one task
* Fast to load, fast to quit
* No more save/load/cancel/yes/no
* Design for the crowd
* If it requires a help document, then you need help!

Some tips:

* Stick to the platform's HIG
* Look also at the iOS HIG
* Steal from apps you love
* Often stealing is not stealing, but _best practices_
* Design, don't decorate. Mobile apps are not a WinAmp design contest
* Less features, more impact
* Design by dictatorship, not by committee. Don't listen to your users
* Read a book about typography. Robert Bringhurst's _Elements of Typographic Style_ is great

Tablet specifics:

* Different pixel size, contrast than on computer screen or paper
* Touch is very immersive
* Go 2D, fake 3D is very... fake. Skip the fake wood/metal/paper/leather
* No buttons, please (why do a zoom button when you can just pinch)
* When you switch context, switch also the design. Dark colors for video interfaces, light ones for text
* Unclutter, use bigger fonts than you'd use on a website

Examples:

* Pull feed down to refresh (iOS Twitter app has patent on this)
* Shake device to shuffle or refresh

The netbooks are here! Quite a huge queue.
