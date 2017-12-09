---
  title: "New event calendar for MidCOM"
  categories: 
    - "midgard"
    - "desktop"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/ical-hcalendar.jpg'

---
[net.nemein.calendar][1] is the new default calendar in [Midgard CMS][2]. It replaces the old _de.linkm.events_ component with several clear advantages:

* Repeating events support (different rules, weekly, daily, monthly etc)
* Storage of the events is [MidgardEvent][7] instead of [MidgardArticle][8], meaning that the 
  DB queries are more optimal, storage more semantic, and the structure supports 
  things like event participants
* Output is by default in the [hCalendar microformat][3].

The calendar uses the [OpenPsa Calendar][4] libraries to provide its features. This means that it is easy to add new capabilities like [publish/subscribe webcal][5] feeds and [SyncML][6] as we go.

![hCalendar feed on Midgard site](https://d2vqpl3tx84ay5.cloudfront.net/midgard-site-hcalendar.jpg)

I've deployed the new calendar for [Midgard events][9]. Converting events from _de.linkm.events_ to the new format was done with a [simple PHP script][10]. Prior to running this script inside a Midgard style I [installed OpenPsa][11] and the [latest net.nemein.calendar][12].

The hCalendar feed can be subscribed to iCalendar-aware applications using the [X2V][13] application. Unfortunately as X2V doesn't yet support [iCalendar UIDs][14], [Evolution][15] will not display the calendar. But here is what it looks like on [Apple iCal][16]:

![hCalendar feed subscribed to iCal](https://d2vqpl3tx84ay5.cloudfront.net/ical-hcalendar.jpg)

[1]: http://www.midgard-project.org/midcom-permalink-494b568ce5a2735decf2593742e9dc98
[2]: http://www.midgard-project.org/midgard/
[3]: http://www.microformats.org/wiki/hcalendar
[4]: http://www.openpsa.org/
[5]: http://www.nemein.com/people/rambo/calendar_webdav.html
[6]: http://www.nemein.com/people/rambo/calendar_syncml.html
[7]: http://www.midgard-project.org/midcom-permalink-94fa39c53f83015f3089171525999fdb
[8]: http://www.midgard-project.org/midcom-permalink-3dff352892fce8eecd49334531c865cf
[9]: http://www.midgard-project.org/midcom-permalink-51adc309c408d85d2c417493ce1d6566
[10]: http://www.nehmer.net/~bergie/convert-event-topics.phps
[11]: http://www.openpsa.org/documentation/installation/
[12]: http://www.nehmer.net/~bergie/calendar.tgz
[13]: http://suda.co.uk/projects/X2V/
[14]: http://microformats.org/wiki/hcalendar-brainstorming#UID_handling
[15]: http://www.gnome.org/projects/evolution/
[16]: http://www.apple.com/macosx/features/ical/
