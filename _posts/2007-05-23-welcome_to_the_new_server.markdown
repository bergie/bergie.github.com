---
  title: "Welcome to the new server"
  categories: 
    - "life"
    - "midgard"
  layout: "post"

---
My blog is now running on a [Kotisivut.com][2] virtual Debian box. It should provide much [faster response times][1] and better stability for my blog than the older solution. I will be sharing the server with [Arttu from kaktus.cc][4].

Switching to a new server environment also brings the possibility to run PHP5 instead of PHP4, and use a [Squid cache front-end][3]. Squid is useful as the virtual server itself is quite slow.

Old setup:

> Apache/1.3.34 (Debian) Midgard/1.8.2 mod\_gzip/1.3.26.1a PHP/4.4.4-8 mod\_ssl/2.8.25 OpenSSL/0.9.8c

New setup:

> Apache/2.2.3 (Debian) PHP/5.2.0-8+etch4 Midgard/1.8.3

Thanks to [Torben][5] for hosting me for the past couple of years!

[1]: http://bergie.iki.fi/blog/solution_to_slowness_of_my_site_coming/
[2]: http://www.kotisivut.com/
[3]: http://www.midgard-project.org/documentation/setting-up-squid-reverse-proxy.html
[4]: http://www.kaktus.cc/
[5]: http://www.nathan-syntronics.de/me/bewerbung/
