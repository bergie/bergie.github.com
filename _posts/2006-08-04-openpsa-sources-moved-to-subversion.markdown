---
  title: "OpenPsa sources moved to Subversion"
  categories: 
    - "midgard"
    - "openpsa"
  layout: "post"

---
[OpenPsa2][1] source code has now been moved to the [Subversion repository][2] used by [MidCOM][3]. Since OpenPsa is now a pure MidCOM component system this should aid in cross-project collaboration.

This should also make it easier for MidCOM developers to utilize some of the useful OpenPsa libraries, including:

* [org.openpsa.contactwidget][5], a "business card" library for displaying person records
* [org.openpsa.mail][11], library for sending and parsing emails
* [org.openpsa.notifications][6], a centralized tool for sending notifications to users in media selected by them
* [org.openpsa.qbpager][7], library for displaying large sets of Query Builder results in a paged view
* [org.openpsa.queries][8], system for storing queries into database
* [org.openpsa.relatedto][9], library and AJAX UI for managing relations between objects
* [org.openpsa.smslib][10], library for sending SMS messages through various gateways

To run OpenPsa2 from the Subversion checkout, follow [these instructions][4].

__Updated:__ Obviously the OpenPsa 2 beta is also available [via PEAR installation][12].

[1]: http://www.openpsa.org/version2/
[2]: http://gforge.nehmer.net/scm/?group_id=6
[3]: http://www.midgard-project.org/documentation/midcom/
[4]: http://www.midgard-project.org/documentation/running-latest-midcom-from-subversion/
[5]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.contactwidget/?root=midcom
[6]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.notifications/?root=midcom
[7]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.qbpager/?root=midcom
[8]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.queries/?root=midcom
[9]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.relatedto/?root=midcom
[10]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.smslib/?root=midcom
[11]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/org.openpsa.mail/?rev=3800&root=midcom
[12]: http://www.openpsa.org/version2/documentation/openpsa-2-installation.html
