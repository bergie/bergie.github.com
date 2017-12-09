---
  title: "Firefox extension for Microformat utilization"
  categories: 
    - "openpsa"
    - "oscom"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/tails-extension-openpsa-contacts-small.jpg'

---
I'm now running [Tails][1], a Firefox extension that recognizes and handles [Microformats][2] embedded in web pages. This means that if I browse to a compliant event calendar I can add an event there to my [calendar][6] with single click, or add contacts from a web page into my [address book][5].

It seems to like at least the Microformats embedded in various Midgard applications. For example, [OpenPsa Calendar][3]:

![Tails displaying hCalendar entries in OpenPsa Calendar](https://d2vqpl3tx84ay5.cloudfront.net/tails-extension-openpsa-calendar-small.jpg)

and [OpenPsa Contacts][4]:

![Tails displaying hCars entries in OpenPsa Contacts](https://d2vqpl3tx84ay5.cloudfront.net/tails-extension-openpsa-contacts-small.jpg)

The Tails extension is also scriptable, allowing developers to [build their own][7] actions to be made available for Microformats. For example, if I wanted my browser to support adding events directly to OpenPsa Calendar instead of the desktop calendar, I could write a [Tails Script][7] for it.

I've been a Microformats supporter for [a while already][8]. However, tools like this can really increase the adoption rates for the standard as more and more people will find it useful.

__Updated:__ There is a Midgard documentation page about [Microformat usage in MidCOM][9].

[1]: http://blog.codeeg.com/tails-firefox-extension-03/
[2]: http://microformats.org/about/
[3]: http://www.openpsa.org/version2/openpsa/calendar.html
[4]: http://www.openpsa.org/version2/openpsa/contacts.html
[5]: http://www.apple.com/macosx/features/addressbook/
[6]: http://www.apple.com/macosx/features/ical/
[7]: http://blog.codeeg.com/tails-firefox-extension-03/creating-a-tails-script/
[8]: http://bergie.iki.fi/blog/openpsa-calendar-goes-horizontal/
[9]: http://www.midgard-project.org/documentation/microformat-usage-in-midcom/
