---
  title: "Switching to Intel MacBook"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
Since [we][1] have some new members in [the team][2], it was time to grab some new Intel [MacBooks][3]. I also decided to switch and recycle my 12" PowerBook to another team member.

![The white MacBook](/files/intel-macbook.jpg)

As usual the switch between Macs was reasonably painless - just connect the two laptops with a FireWire cable and wait. However, after the switch my [DarwinPorts-built][4] [Midgard][5] ceased to work.

I suspect this is because it was built on a PPC box and I'm now on Intel, but unfortunately today is not the best day for [downloading Xcode][6] as Apple servers are probably getting hammered during the [WWDC keynote][7]. I'll make the recompile tomorrow and report how my development environment runs here.

As a summary, the development tools I use daily are:

* [DarwinPorts package install][4] of Midgard
* [Subversion checkout][8] of MidCOM
* [Eclipse][9] or [SubEthaEdit][10] for editing, a bit depending on situation
* [Firefox][14] and [Firebug][11] for testing AJAX stuff
* [Phing][12] and [PEAR][13] for packaging

__In the other news__, the [GPGreasemonkey][15] Summer of Code project sounds interesting. The aim there is to build a Firefox extension that would enable encrypting and decrypting parts of web pages using [GPG][16]. This would be very useful for Wikis and CMSs...

> When you view a PGP encrypted message via your webmail account, GPGreasemonkey would detect the encrypted text, prompt for passphrases as needed, decrypt the message, and automagically display the unencrypted text.

__Updated 2006-08-10:__ The MacBook was slightly painful to use with the default 512MB of RAM. Luckily [GNT][17] was able to deliver new 2GBs of memory ahead of schedule. Now the Mac feels like a completely different machine...

[1]: http://www.nemein.com/
[2]: http://www.nemein.com/en/team/
[3]: http://www.apple.com/macbook/macbook.html
[4]: http://www.midgard-project.org/documentation/installation-distros-mac-os-x/
[5]: http://www.midgard-project.org/
[6]: http://developer.apple.com/tools/download/
[7]: http://www.engadget.com/2006/08/07/live-from-wwdc-2006-steve-jobs-keynote/
[8]: http://www.midgard-project.org/documentation/running-latest-midcom-from-subversion/
[9]: http://www.eclipse.org/
[10]: http://www.codingmonkeys.de/subethaedit/
[11]: https://addons.mozilla.org/firefox/1843/
[12]: http://phing.info/trac/
[13]: http://pear.php.net/package/PEAR
[14]: http://www.mozilla.com/firefox/
[15]: http://www.shmoo.com/soc/gpgreasemonkey.html
[16]: http://en.wikipedia.org/wiki/GNU_Privacy_Guard
[17]: http://www.gnt.fi/