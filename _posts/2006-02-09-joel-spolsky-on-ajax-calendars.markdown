---
  title: "Joel Spolsky on AJAX calendars"
  categories: 
    - "openpsa"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/openpsa-calendar-createevent.jpg'

---
There is a new [Joel on Software post about calendars][1]. Lets see how the [OpenPsa 2 calendar][2] fares with his feature requirements:

> Enter flights. Many of these calendars only lets me enter things that start on 15 minute intervals, and flights are just not scheduled that way. Many of these calendars insist I specify the duration, which I don't know -- I know when the flight lands, but not the duration.

In OpenPsa calendar you specifically choose start and end time, not start and duration. By default when you click the _Create event_ button the new event will have a duration of one hour. The times can be entered either by writing, or by clicking the button next to time to open a [calendar selection widget][3]:

![Event creation in OpenPsa Calendar](https://d2vqpl3tx84ay5.cloudfront.net/openpsa-calendar-createevent.jpg)

> Understand enough about time zones so I can enter a flight. Flights from New Zealand to Los Angeles arrive before they departed.

Actually this we don't do yet. Now all times are supposed to be in the server's local timezone, meaning that you need to calculate the timezoned times into your local time. Would be a great idea and not very difficult to add optional timezone pulldown to the editor though.

> Allow my assistant to enter appointments and see my schedule, although some things may be private.

The calendar events in the editor may be marked _Public_ or _Private_. With private events, everybody can see the duration of the event, but only participants can see the details. Everybody can see the details of the public events. 

![Event access controls in OpenPsa Calendar](https://d2vqpl3tx84ay5.cloudfront.net/openpsa-calendar-createevent-publicprivate.jpg)

> Notify me in advance of a meeting using some reliable mechanism. Surprisingly many of the hot new Ajax calendars omitted this basic feature because they're web apps. At the very least, I'd like something to pop up on Windows, which means a downloadable widget, and an SMS message on my cell phone. Different meetings need different advance warnings ... I need to be notified 3 hours before a flight at Kennedy but 3 minutes before a meeting in my office.

OpenPsa calendar doesn't support alerts yet. With the [OpenPsa version 1 calendar][6] you could edit the events via [webcal][5] or [SyncML][4], and the alerts would be handled by your mobile phone, or a desktop calendar subscribed to the event feed.

We haven't ported this feature to OpenPsa 2 yet.

> Print out something reasonable that I can take with me before a trip listing my complete schedule for the trip. Some of my appointments have driving directions or complicated notes attached. I just want a list of where I need to be, when, and it's surprising that very few online calendars can handle this.

Again, this was something OpenPsa 2 did well with its _Week list_ feature. OpenPsa 2 is fully [hCalendar][7] and CSS, and so creating a suitable [print CSS][8] should be easy.

In any case, these were important points about attention to detail. On the other hand, we also have to decide [what is essential][9] for the 2.0 release.

[1]: http://www.joelonsoftware.com/items/2006/02/08.html
[2]: http://bergie.iki.fi/midcom-permalink-df83bc0eaae94a5d215826678e507653
[3]: http://www.dynarch.com/projects/calendar/
[4]: http://www.nemein.com/people/rambo/calendar_syncml.html
[5]: http://www.nemein.com/people/rambo/openpsa_1_11_11_and_ical.html
[6]: http://www.openpsa.org/midcom-permalink-72bcc2a46ce396afc5b5fd3c4ffa33b5
[7]: http://microformats.org/wiki/hcalendar
[8]: http://www.alistapart.com/articles/goingtoprint/
[9]: http://37signals.com/svn/archives2/essential_vs_nonessential.php
