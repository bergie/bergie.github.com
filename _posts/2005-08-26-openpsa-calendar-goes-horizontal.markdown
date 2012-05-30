---
  title: "OpenPsa Calendar goes horizontal"
  categories: 
    - "openpsa"
  layout: "post"

---
After a bit of thought we've returned the [Group Calendar module][1] of [OpenPsa 2][2] to using horizontal layout for days. The [earlier versions][3] used a vertical layout designed with [Tigert][4] that proved to be a problem with larger number of resources. This should solve the scalability issue:

![Horizontal weekly calendar in OpenPsa 2](http://bergie.iki.fi/midcom-serveattachmentguid-b38347765de5ccab0d35fd5092a5dcf6/openpsa-calendar-horizontal2.jpg)

In addition to being more flexible, the new calendar layout provides the events in the [hCalendar microformat][5]. The vertical layout of [org.openpsa.calendarwidget][6] will be modernized into similar state and made into a configuration option useful for small organizations. Alan's [XUL calendar interfaces][9] could also be useful although OpenPsa already integrates with [desktop calendars][10] and [mobile phones][11].

Besides regular group calendar usage, OpenPsa Calendar is being used for things like [airplane reservations][7] and [work shift planning of medical staff][8].

[1]: http://www.openpsa.org/midcom-permalink-92985cb9b0360b4e807716fa9e2ff8c3
[2]: http://www.openpsa.org/
[3]: http://bergie.iki.fi/midcom-permalink-4a5932e606710d5d57a29cdd047cb0cf
[4]: http://www.tigert.com/
[5]: http://www.microformats.org/wiki/hcalendar
[6]: http://openpsa.tigris.org/source/browse/openpsa/src/fs-midcom/openpsa/calendarwidget/
[7]: http://www.paradox.fi/aviation.html
[8]: http://www.coss.fi/midcom-permalink-f710f702daf5a7b8019ed2e1a27209df
[9]: http://www.akbkhome.com/blog.php/View/102/Why_XUL_will_win.html
[10]: http://www.nemein.com/people/rambo/midcom-permalink-4ac8ca8593f32e8d0ffcbab73c043891
[11]: http://www.nemein.com/people/rambo/midcom-permalink-fbe787f1c87886409eaa0f032646aae7