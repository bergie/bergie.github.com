---
  title: "Embrace and extend"
  categories: 
    - "desktop"
    - "midgard"
    - "oscom"
    - "politics"
  layout: "post"

---
I'm getting worried about Google. Long one of the champions of [the open web](http://www.mozilla.org/about/manifesto.en.html) alongside Mozilla, the rise of [social networking silos](http://www.facebook.com/) and the [app economy](http://www.apple.com/iphone/apps-for-iphone/) seem to have scared them. And like any scared organism, they lash out.

Many of their plans to make web competitive against native development environments are good, there is indeed much to improve in the stack. But what I'm uneasy with is the unilateral way they go about it, preferring "big reveals" and post-facto standardization instead of [the open conversation](http://www.wired.com/wired/archive/3.10/ietf.html) that built most of the Internet we have today. This is not the way [to collaborate](http://bergie.iki.fi/blog/on_cross-project_collaboration/).

Consider some of their recent efforts:

* [SPDY](http://www.chromium.org/spdy/spdy-whitepaper), a protocol to replace HTTP which Web is built on. Currently only supported by Chrome, which uses it to talk to several Google services
* [Dart](http://www.2ality.com/2011/09/google-dart.html), their JavaScript-killer which recently surfaced through a [leaked email](http://news.ycombinator.com/item?id=2980267)
* [Microdata and Schema.org](http://manu.sporny.org/2011/false-choice/) that seek to replace last ten years of semantic web development with a spec cooked up by couple of big vendors in secret

These - together with [WebSQL](http://en.wikipedia.org/wiki/Web_SQL_Database), [NaCl](http://code.google.com/p/nativeclient/wiki/NativeClientInGoogleChrome), [WebM](http://www.webmproject.org/) and [WebP](http://code.google.com/speed/webp/) - mean that Google has active efforts to replace practically every layer of the web (except HTML itself) with something of their own design.

The way all of these were introduced bears strong reminders of how Microsoft tried to [embrace, extend, and extinguish](http://en.wikipedia.org/wiki/Embrace,_extend_and_extinguish) the web in late 90s. That period brought horrors like ActiveX and the awful, unkillable IE6. Though, for the sake of fairness, it also brought us XmlHttpRequest which was the enabler of the AJAX revolution.

Google's new technologies may end up being beneficial for web developers, but they also threaten to fragment the platform. After all, as the competition in the ["post-PC"](http://bergie.iki.fi/blog/why_the_tablet_form_factor_is_winning/) space heats up, the competitors are unlikely to embrace Google's extensions of the web stack. That would be a loss to all.

[Brendan Eich](http://brendaneich.com/), the original author of JavaScript [comments on Hacker News](http://news.ycombinator.com/item?id=2982949):

> So "Works best in Chrome" and even "Works only in Chrome" are new norms promulgated intentionally by Google. We see more of this fragmentation every day. As a user of Chrome and Firefox (and Safari), I find it painful to experience, never mind the political bad taste.

> Ok, counter-arguments. What's wrong with playing hardball to advance the web, you say? As my blog tries to explain, the standards process requires good social relations and philosophical balance among the participating competitors.

> Google's approach with Dart is thus pretty much all wrong and doomed to leave Dart in excellent yet non-standardized and non-interoperable implementation status. Dart is GBScript to NaCl/Pepper's ActiveG.

_Disclaimer: I've been a long-time fan of many of Google's services, and have visited some of their offices a few times. I like the company. Which is exactly why I'm so concerned about this unilateral approach at standards. I am also involved in some standards processes through the IKS Project._
