---
  title: "OpenPsa will have real SyncML"
  categories: 
    - "mobility"
    - "openpsa"
  layout: "post"

---
We have just contracted [Yukatan][1] to work on integrating [SyncML][7] support into [OpenPsa 2][2]. The idea is to enable users to synchronize their web-based calendar and contact registry with cell phones, PDAs and [Outlook][3].

![SyncML synchronization settings in Outlook](/files/outlook-sync4j-settings-small.jpg)

The SyncML implementation will be utilizing the [Funambol][4] open source SyncML server that will talk with OpenPsa through the [Java Content Repository API][5].

Astute readers will remember that OpenPsa 1 had a [PHP-based SyncML 1.0 implementation][6]. However, this didn't work with many typical devices including Nokia handsets and so we had to look for another and more easily maintainable solution. 

We should have first beta of the Funambol OpenPsa Connector in March.

[1]: http://yukatan.fi/
[2]: http://www.openpsa.org/
[3]: http://office.microsoft.com/en-us/FX010857931033.aspx
[4]: http://www.funambol.com/opensource/
[5]: http://bergie.iki.fi/blog/jukka_back_from_hiatus__jcr_for_midgard/
[6]: http://www.nemein.com/people/rambo/calendar_syncml.html
[7]: http://www.openmobilealliance.org/tech/wg_committees/ds.html