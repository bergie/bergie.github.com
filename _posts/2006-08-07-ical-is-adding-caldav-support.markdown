---
  title: "iCal is adding CalDAV support"
  categories: 
    - "desktop"
    - "openpsa"
  layout: "post"

---
The mysterious collaborative feature of [iCal][2] hinted at the [WWDC keynote][1] seems to actually be [CalDAV][3]:

> Simply posting your group’s calendar to the Internet is a one-way transaction. Turn it into a conversation with iCal sharing in Leopard. Whether you’ve got an activities calendar or a work schedule, your friends, family, and colleagues can participate in managing the group’s events, thanks to support for the CalDAV standard in iCal. And don’t worry about prying eyes: Security features built into iCal let you control who has access to your calendars.

If this is true, it will be a complete change from the earlier [iCal synchronization problems][4] that resulted from Apple trying to push .Mac lock-in. CalDAV is an [open standard][5] that any groupware package, [OpenPsa][6] included can implement. Let us hope the iCal implementation of it will be open as well...

__Updated:__ OpenPsa already includes a quite competent [vCal parser][7], and using PEAR's [HTTP\_WebDAV\_Server][8] it is easy to develop DAV features so supporting CalDAV quickly should be feasible. Especially as while we wait for Leopard we can test the calendar sharing features with [Chandler][9].

__Updated 2006-08-08:__ Apple has open sourced their [CalDAV server][10] so this really looks like a move to the right direction.

[1]: http://www.engadget.com/2006/08/07/live-from-wwdc-2006-steve-jobs-keynote/
[2]: http://www.apple.com/macosx/leopard/ical.html
[3]: http://en.wikipedia.org/wiki/CalDAV
[4]: http://www.nemein.com/people/rambo/calendar_webdav.html
[5]: http://www.caldav.org/
[6]: http://www.openpsa.org/
[7]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.helpers/vx_parser.php?rev=3799&root=midcom&view=markup
[8]: http://pear.php.net/package/HTTP_WebDAV_Server
[9]: http://chandler.osafoundation.org/
[10]: http://trac.macosforge.org/projects/collaboration