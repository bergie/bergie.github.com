---
  title: "Notification management in OpenPsa 2"
  categories: 
    - "openpsa"
  layout: "post"

---
Another [minor feature][1] worth mentioning about: We today added a [notification manager][2] into the [OpenPsa 2][3] system.

With the notification manager users and groups can control what things they want to be notified of and how. 

The first OpenPsa component to implement notifications is [OpenPsa Calendar][4], allowing users to choose whether they get emailed about new events or not:

![OpenPsa Calendar notification settings](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/openpsa2-calendar-notification-management.jpg)

For now the notification manager supports only emailing or disabling notices, but other transports are being planned. For some things [SMS][5], [Jabber][6] or even [Growl][7] could make more sense. For example, it would be nice to get a Growl notice when a client approves a completed project.

The inspiration for creating a sane way to manage notices was the silly amount of [informational popups][9] provided by the [Hearts of Iron][8] strategy game we played yesterday after sauna.

[1]: http://www.bergie.iki.fi/blog/openpsa2--minor-features-matter/
[2]: http://pear.midcom-project.org/index.php?package=org_openpsa_notifications&release=0.0.1&downloads
[3]: http://www.openpsa.org/version2/
[4]: http://www.openpsa.org/version2/openpsa/calendar.html
[5]: http://en.wikipedia.org/wiki/Short_message_service
[6]: http://en.wikipedia.org/wiki/Jabber
[7]: http://www.mamasam.com/projets/net_growl
[8]: http://www.heartsofiron2.com/
[9]: http://www.heartsofiron2.com/images/hoi2_041112.jpg
