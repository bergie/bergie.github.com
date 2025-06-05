---
title: Mobile blogging, the past and the future
layout: post
location: Spanish Water, Curaçao
categories:
  - mobility
  - life
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/psions5.jpg'
---
This blog has been running more or less continuously since mid-nineties. The site has existed in multiple forms, and with different ways to publish. But what's common is that at almost all points there was a mechanism to publish while on the move.

## Psion, documents over FTP

In the early 2000s we were into adventure motorcycling. To be able to share our adventures, we implemented a way to publish blogs while on the go. The device that enabled this was the Psion 5, a handheld computer that was very much a device ahead of its time.

![Psion S5, also known as the Ancestor](https://d2vqpl3tx84ay5.cloudfront.net/psions5.jpg)

The Psion had a reasonably sized keyboard and a good native word processing app. And battery life good for weeks of usage. Writing while underway was easy. The Psion could use a mobile phone as a modem over an infrared connection, and with that we could upload the documents to a server over FTP.

Server-side, a cron job would grab the new documents, converting them to HTML and adding them to our CMS.

In the early days of GPRS, getting this to work while roaming was quite tricky. But the system served us well for years.

If we wanted to include photos to the stories, we'd have to find an Internet cafe.

* [To the Alps](/blog/to-to-alps/) is a post from these times. Lots more in the [motorcycling category](/blog/category/motorcycles/)

## SMS and MMS

For an even more mobile setup, I implemented an SMS-based blogging system. We had an old phone connected to a computer back in the office, and I could write to my blog by simply sending a text. These would automatically end up as a new paragraph in the latest post. If I started the text with `NEWPOST`, an empty blog post would be created with the rest of that message's text as the title.

* [In the Caucasus](/blog/in-the-caucasus/) is a good example of a post from this era

As I got into neogeography, I could also send a `NEWPOSITION` message. This would update my position on the map, connecting weather metadata to the posts.

As camera phones became available, we wanted to do pictures too. For the Death Monkey rally where we rode minimotorcycles from Helsinki to Gibraltar, we implemented an MMS-based system. With that the entries could include both text and pictures. But for that you needed a gateway, which was really only realistic for an event with sponsors.

* [Mystery of the Missing Monkey](https://web.archive.org/web/20061013183009/http://www.deathmonkey.org/view/mystery-of-the-missing-monkey.html) is typical. Some more in [Internet Archive](https://web.archive.org/web/20060804205237/http://www.deathmonkey.org/)

## Photos over email

A much easier setup than MMS was to slightly come back to the old Psion setup, but instead of word documents, sending email with picture attachments. This was something that the new breed of (pre-iPhone) smartphones were capable of. And by now the roaming question was mostly sorted.

And so my blog included a new "moblog" section. This is where I could share my daily activities as poor-quality pictures. Sort of how people would use Instagram a few years later.

![My blog from that era](https://d2vqpl3tx84ay5.cloudfront.net/bergie_layout_2006.jpg)

* [Internet Archive has some of my old moblogs](https://web.archive.org/web/20110604011733/http://bergie.iki.fi/moblog) but nowadays I post similar stuff [on Pixelfed](https://pixelfed.de/bergie)

## Pause

Then there was sort of a long pause in mobile blogging advancements. Modern smartphones, data roaming, and WiFi hotshots had become ubiquitous.

In the meanwhile the blog also got [migrated to a Jekyll-based system](/blog/blog-2012-edition/) hosted on AWS. That means the old Midgard-based integrations were off the table.

And I traveled off-the-grid rarely enough that it didn't make sense to develop a system.

But now that we're [sailing offshore](https://lille-oe.de), that has changed. Time for new systems and new ideas. Or maybe just a rehash of the old ones?

## Starlink, Internet from Outer Space

Most cruising boats - ours included - now run the Starlink satellite broadband system. This enables full Internet, even in the middle of an ocean, even video calls! With this, we can use normal blogging tools. The usual one for us is [GitJournal](https://gitjournal.io), which makes it easy to write Jekyll-style Markdown posts and push them to GitHub.

However, Starlink is a complicated, energy-hungry, and fragile system on an offshore boat. The policies might change at any time preventing our way of using it, and also the dishy itself, or the way we power it may fail.

But despite what you'd think, even on a needy boat like ours, loss of Internet connectivity is not an emergency. And this is where the old-style mobile blogging mechanisms come handy.

* Any of the [2025 Atlantic crossing posts](https://lille-oe.de/2025/) is a good example of this setup in action

## Inreach, texting with the cloud

Our backup system to Starlink is the Garmin Inreach. This is a tiny battery-powered device that connects to the Iridium satellite constellation. It allows tracking as well as basic text messaging.

When we head offshore we always enable tracking on the Inreach. This allows both our blog and our friends ashore to follow our progress.

I also made a simple integration where text updates sent to Garmin MapShare get fetched and published on our blog. Right now this is just plain text-based entries, but one could easily implement a command system similar to what I had over SMS back in the day.

One benefit of the Inreach is that we can also take it with us when we go on land adventures. And it'd even enable rudimentary communications if we found ourselves in a liferaft.

## Sailmail and email over HF radio

The other potential backup for Starlink failures would be to go seriously old-school. It is possible to get email access via a SSB radio and a Pactor (or Vara) modem.

Our boat is already equipped with an isolated aft stay that can be used as an antenna. And with the popularity of Starlink, many cruisers are offloading their old HF radios.

Licensing-wise this system could be used either as a marine HF radio (requiring a Long Range Certificate), or amateur radio. So that part is something I need to work on. Thankfully post-COViD, radio amateur license exams can be done online.

With this setup we could send and receive text-based email. The [Airmail](https://sailmail.com) application used for this can even do some automatic templating for position reports. We'd then need a mailbox that can receive these mails, and some automation to fetch and publish.
