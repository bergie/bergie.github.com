---
  title: "MidCOM PEAR channel not working with PEAR 1.4.7"
  categories: 
    - "midgard"
  layout: "post"

---
It seems the [MidCOM PEAR channel][1] is incompatible with the [PEAR 1.4.7][2] release. When you try to discover the PEAR channel you get:

    # pear channel-discover pear.midcom-project.org
    Discovery of channel "pear.midcom-project.org" failed

Until this issue is resolved you can use the MidCOM channel by downgrading PEAR:

    # pear upgrade -f PEAR-1.4.6

If somebody wants to help debug this, the channel server was installed using [these instructions][3]. The [channel.xml][4] is also available.

__Updated 15:00:__ Seems we ran into a bug in PEAR 1.4.7. [Bug #6960][5] contains a patch. Thanks to [Greg Beaver][6] for the fix!

__Updated 2006-03-04:__ [PEAR 1.4.8 is coming soon][7] containing a probable fix to this problem.

[1]: http://www.midgard-project.org/midcom-permalink-f28d8c2989f3465e757c23427d6e862e
[2]: http://pear.php.net/package/PEAR/download/1.4.7
[3]: http://www.schlitt.info/applications/blog/index.php?/archives/308-Set-up-your-own-PEAR-channel.html
[4]: http://pear.midcom-project.org/channel.xml
[5]: http://pear.php.net/bugs/bug.php?id=6960
[6]: http://pear.php.net/user/cellog
[7]: http://greg.chiaraquartet.net/archives/118-if-you-run-your-own-PEAR-channel,-please-watch-pear-qa.html