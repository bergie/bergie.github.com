---
  title: "PHP and GObject Introspection"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
[GObject Introspection](https://live.gnome.org/GObjectIntrospection) is one of the hidden jewels of the [GNOME stack](http://developer.gnome.org/platform-overview/stable/): you write a library in C or [Vala](http://en.wikipedia.org/wiki/Vala_%28programming_language%29), and it becomes automatically available to [a wide variety](https://live.gnome.org/GObjectIntrospection/Users) of languages and runtimes, including [Python](https://live.gnome.org/PyGObject), [JavaScript](https://live.gnome.org/Gjs), [Java](https://live.gnome.org/JGIR) and [Qt](http://blogs.kde.org/node/4444).

Now I would like to bring GObject Introspection to PHP. Why?

For many years we in the [Midgard](http://www.midgard-project.org/) community have been using GNOME infrastructure on the web server side, by building our persistence layer on top of GObjects, and providing [D-Bus notifications](http://teroheikkinen.iki.fi/blog/midgard_workshop_at_fscons/) when content changes. So far this has been done with our own [custom PHP extension](https://github.com/midgardproject/midgard-php5).

I believe a common PHP extension providing GObject Introspection support would make more sense, as it wouldn't just benefit our own community, but also support efforts like [php-gtk](http://gtk.php.net/).

[Alexey Zakhlestin](http://github.com/indeyets) already [started a project](https://github.com/indeyets/gobject-for-php) for this a while back, but unfortunately has been unable to finish it. Because of this, [we](http://nemein.com/en/) would be willing to sponsor anybody interested in making the [gobject-for-php](https://github.com/indeyets/gobject-for-php) extension work.

Benefits for the GNOME community:

* New supported development language and a large community of potential contributors
* The possibility of making the GNOME stack relevant in web space. Just think of Telepathy or GStreamer in a web app

Benefits for the PHP community:

* Access to the rich collection of GNOME libraries, many which may be useful when building web applications
* Being able to use your PHP skills to build GNOME applications and bring them to interesting environments like [Ubuntu](http://www.ubuntu.com/ubuntu) and [Cordia](http://cordiahd.org/)

Benefits for the Midgard community:

* No need to maintain our own custom PHP extension
* A more generic GObject Introspection extension has better chances of being included into Linux distributions and being available on hosting providers

Let [me](http://nemein.com/en/people/bergie/) know if you are interested. We're coming to the [Desktop Summit](https://desktopsummit.org/) with [Piotras](http://blogs.nemein.com/people/piotras/), so for example that is a great opportunity to talk more about this.
