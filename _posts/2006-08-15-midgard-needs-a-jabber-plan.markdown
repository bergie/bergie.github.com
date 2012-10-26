---
  title: "Midgard needs a Jabber plan"
  categories: 
    - "midgard"
  layout: "post"

---
I love the things [LiveJournal is doing with Jabber][1]: 

> - Posting to LiveJournal: (Partly done) You can post to your LiveJournal account using Jabber. Just look for Frank the robot goat on your buddy list. Fleshing this out more later. Also, we'll let you post to your LiveJournal from a non-LJ JID in the future. That means you can post from GMail/GTalk, once you prove your gmail address (or any other Jabber address) is yours.

> - Alerts: (Mostly done, not enabled) Get alerts of new posts, comments, replies (anything you want to subscribe to) over Jabber. Even if you're using a Jabber address that isn't our Jabber. Want IM alerts to GTalk/GMail? We want you to too.

Lots of [good ideas][1] in there. With [Google Talk][3], LiveJournal, [Gizmo Project][4] and others [gathering behind][2] the [Jabber protocol][6], it looks like it will become the default [instant messaging][5] system.

In addition to becoming popular, Jabber has other advantages: it is open, standardized, easy to [integrate with][8] (even [with PHP][7]), and reasonably [easy to secure][9]. This all means we should definitely plan how to integrate instant messaging with the [Midgard framework][10].

Lots of plumbing is already in place, including a [buddy list manager][11] and a centralized [notification service][12]. We just needs to ensure these communicate with the Jabber world.

[1]: http://www.livejournal.com/ljtalk/
[2]: http://www.imfederation.com/
[3]: http://www.google.com/talk/
[4]: http://www.gizmoproject.com/
[5]: http://en.wikipedia.org/wiki/Instant_Messaging
[6]: http://en.wikipedia.org/wiki/Jabber
[7]: http://cjphp.netflint.net/?section=about
[8]: http://www.jabber.org/software/libraries.shtml
[9]: http://bergie.iki.fi/blog/more-on-secure-instant-messaging/
[10]: http://www.midgard-project.org/
[11]: http://pear.midcom-project.org/index.php?package=net_nehmer_buddylist
[12]: http://pear.midcom-project.org/index.php?package=org_openpsa_notifications