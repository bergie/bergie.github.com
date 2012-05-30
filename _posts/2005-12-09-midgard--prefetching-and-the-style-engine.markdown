---
  title: "Midgard, prefetching and the style engine"
  categories: 
    - "midgard"
  layout: "post"

---
[Edi ran into some issues][1] with [link prefetching][2] and [MidCOM administrative interface][3]:

> The whole idea is to prefetch links. Well what if we have som ajax stuff there, and forms etc. It of course tries to prefetch them also. When this is done, they trigger functions, and this ends up to (at least) these nice situations like:

>    * article control in Midcom
       - approve / unapprove => when sent several times, it messes up the system. try reloading the page and see what happens, it's like russian roulette
       - hide / unhide: the same as with approvals

This is the classic [idempotent GET][4] issue that surfaced last spring with [Google Web Accelerator][5]. We've tried to take this into account with [OpenPsa][6] and use only POST requests for things that actually change something.

Luckily Edi reported this quickly, and we were able to [identify and fix][7] the problem. The initial way to fix this was to [block prefetching entirely][8] in AIS so that we can take the time and fix the couple of places affected by this so that they will use POST.

__Another major discussion__ in the community has been the [style engine unification][9] proposal. The idea has simply been to merge [Midgard's style engine][10] and [MidCOM's style engine][11] to provide better consistency and performance. 

However, the style engine in Midgard has traditionally been considered one of the best in the industry, and any changes to it obviously make [tensions][12] [run][13] [high][14] in the mailing list.

At the moment the path forward seems to get Midgard's grand old guru [Jukka][15] to arbitrate and provide a new neutral spec to work on. After that we must work swiftly to implement the spec across core, MidCOM and the new Style Editor so that there will be actually something concrete for people to experiment with.

[1]: http://jemi.iki.fi/midcom-permalink-f3b01b1f69c75e199211c1b462d7ce8d
[2]: http://www.mozilla.org/projects/netlib/Link_Prefetching_FAQ.html
[3]: http://www.midgard-project.org/midcom-permalink-c8073a0bb8675c0bf08f34bef2284cd4
[4]: http://www.intertwingly.net/blog/784.html
[5]: http://www.37signals.com/svn/archives2/google_web_accelerator_hey_not_so_fast_an_alert_for_web_app_designers.php
[6]: http://www.openpsa.org/
[7]: http://midcom.tigris.org/issues/show_bug.cgi?id=349
[8]: http://www.ilovejackdaniels.com/php/block-prefetching/
[9]: http://www.midgard-project.org/development/mrfc/0022.html
[10]: http://www.midgard-project.org/midcom-permalink-2732f47bbdf5a868fd7811d696886149
[11]: http://www.midgard-project.org/midcom-permalink-7856ea3bafeccf218226ec3cd8f05df8
[12]: http://comments.gmane.org/gmane.comp.web.midgard.devel/6103
[13]: http://comments.gmane.org/gmane.comp.web.midgard.devel/6136
[14]: http://marc.theaimsgroup.com/?t=113388203700003&r=1&w=2
[15]: http://yukatan.fi/