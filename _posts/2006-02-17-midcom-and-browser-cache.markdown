---
  title: "MidCOM and browser cache"
  categories: 
    - "midgard"
  layout: "post"

---
[Tarjei][2] was experiencing problems with [MidCOM's cache system][1]:

> [12:17] __tarjei:__ I'm stuck with IE not letting users log out (seemingly) because IE doesn't refresh the pages<br />
[12:17] __tarjei:__ any tips ?<br />
[12:18] __bergie:__ use `$GLOBALS['midcom']->cache->content->no_cache();`<br />
[12:19] __tarjei:__ Hmm, I tried setting caching to NO in the settings page without any effect, but you think this will help?<br />
[12:21] __bergie:__ yeah, no_cache() forces browser to not cache as well<br />
[12:21] __bergie:__ call it before any output in style<br />
[12:22] __tarjei:__ bergie you are my hero.

Another good moment in [community involvement][3]...

[1]: http://www.midgard-project.org/midcom-permalink-31a2252283aaf488a997b7f693726672
[2]: http://www.midgard-project.org/community/whoswho/tarjei.html
[3]: http://blog.guykawasaki.com/2006/02/the_art_of_crea.html
