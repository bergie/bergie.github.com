---
  title: "WiFi autologins with Devicescape"
  categories: 
    - "mobility"
  layout: "post"

---
I have blogged earlier of our plans to [add WiFi autologin support to MaemoPlazer][1]. However, [I found out][2] that there is already an autologin applet for the N800: [Devicescape][3]

> Devicescape says its Agent now supports [WISPr][9] (Wireless Internet Service Provider Roaming), a new login protocol standardized by a subcommittee of the [Wi-Fi Alliance][4] aimed at enabling faster logins and roaming support. Some networks supported by the Agent -- including AT&T WiFi, FON, and T-Mobile -- will switch to WISPr logins as of Friday, Mar. 2, according to the Devicescape. Therefore, users are encouraged to upgrade as soon as possible, to ensure continuous service. 

While I'm not entirely happy about [giving my passwords][5] to an external service, I tried Devicescape on my N800 and it worked as advertised: As soon as I connected to my [home FON network][6] it performed the web-based login, letting me use the internet without any manual intervention.

![Autoconnection to FON with DeviceScape on N800](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/devicescape_n800_small.jpg)

FON and [Sonera HomeRun][7], two of the three WiFi networks requiring web login that I use frequently are supported by Devicescape. Now if they could add support for the free [City of Helsinki WiFi][8]...

[1]: http://bergie.iki.fi/blog/maemo_plazer_released/
[2]: http://www.linuxdevices.com/news/NS4622554621.html
[3]: http://www.devicescape.com/download/
[4]: http://www.wi-fi.org/
[5]: http://www.devicescape.com/learnmore/started.php
[6]: http://bergie.iki.fi/blog/fon-for-free-in-finland/
[7]: http://www.homerun.telia.com/eng/start/
[8]: http://www.hel.fi/wps/portal/Helsinki_en/Artikkeli?WCM_GLOBAL_CONTEXT=/en/Helsinki/City+government/City+administration+and+economy/Transactions/WLAN
[9]: http://english.martinvarsavsky.net/fon/fon-improves-wifi-log-on-.html
