---
  title: "MidCOM is becoming the default API"
  categories: 
    - "midgard"
  layout: "post"

---
<img src="https://d2vqpl3tx84ay5.cloudfront.net/midcom.gif" style="float: right; height: 124px; width: 124px; border: none;" alt="midcom.gif" />
Looking at the recent developments in [Midgard CMS][1] space, it looks like the [MidCOM][2], the Midgard Component Framework developed by [Torben Nehmer][3] has finally established itself as the default Midgard development framework for [PHP][4].

While I already forecasted this in my April 2003 article [Why MidCOM rocks][5], it is still not a surprise that this has taken so long. MidCOM requires very different and much stricter development style than "pure Midgard" applications have used to follow. However, the [advantages][6] are substantial:

* MidCOM provides standardized services like authentication, localization, debugger, templating, caching and configurable object editors (via datamanager)

* MidCOM's filesystem oriented approach for code makes version control and distribution easy

* MidCOM is a standardized way to build applications with midgard-php, meaning that it is much easier to get contributions to the code

* MidCOM mandates using a strict coding and code documentation standard (although all code has not yet been ported to it)

* MidCOM provides the indexing service that allows building interesting views to data

* ...and finally, MidCOM is always available with Midgard

In the most recent developments, [OpenPSA 2.0][8] is being written using MidCOM, and similar plans are also around for a [Aegir rewrite][9].

Of course, even if most application development has moved to MidCOM, this doesn't yet force site maintainers to convert. But even for that, there are some [attractive benefits][10]:

> Another point to consider here is that after "MidCOMizing", your
sites will no longer be custom-made, but instead using a shared
and commonly maintained platform.

> This means that ideally it will be the last conversion hassle you have
to face as from then on you can live easily with future MidCOM versions,
or even convert to other CMS using Exorcist if required. MidCOM's
content model is the defacto standard, so there will definitely
be conversion tools for it, no matter how much Midgard's structure
will change.

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/midcom-permalink-85e86ba5433b5566da29fe9b32e2a425
[3]: http://www.nathan-syntronics.de/midcom-permalink-221788aaf0c0afded60678f24b00864e
[4]: http://www.php.net/
[5]: http://www.midgard-project.org/midcom-permalink-2caa60bb5a3340767578b0f8128f59c6
[6]: http://comments.gmane.org/gmane.comp.web.midgard.devel/5429
[7]: http://people.best-off.org/~dsr/cubelog/
[8]: http://www.openpsa.org/development/version_20/
[9]: http://comments.gmane.org/gmane.comp.web.midgard.user/7264
[10]: http://permalink.gmane.org/gmane.comp.web.midgard.user/7325
