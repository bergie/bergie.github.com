---
  title: "Benefiting from the GLib core"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
[Midgard CMS][1] differs [architecturally][2] quite much from the [typical open source CMSs][3] in that its core is written in C on top of the [GLib][4] library.

The C core means that potential users need to have [superuser privileges][5] on their server in order to [install Midgard][6]. This is obviously a major obstacle to people running smaller sites, but it also carries quite cool benefits, as [Piotras][13] points our in [his recent blog post][7]:

> First. Midgard core is not a CMS core, it's just database abstracion layer with authentication mechanism and some built in additional features. Thus , core is not your ideas aware. That's good , because its generic purpose doesn't limit your ideas. So together with other components ,( like midgard-apache module or midgard-php ) it turns into powerfull CMS framework which can be written in any language , like [MidCOM][8]  is written in PHP.

> Second. Just imagine that your favourive PHP ( only PHP ) based CMS which has been developed for last three years begins to be interesting for java community. Imagine that CMS contains 50 000 lines of code. 20 000 is database releated code, another 20 000 creates logic and only 10 000 defines user interface. What java community should do in such case? Write 50 000 lines of java code and be in sync with PHP based development branch. Sounds good? No.
Now imagine that you want to build Your new project with python and Midgard as basement. It's enough then to write python language bindings ( which is done only once ) and focus on Your application. Amount of code which must be written depends on project only. You do not have to worry about anything else.

Now most Midgard functionality still resides in [PHP space][9], but Java is already being used much for [data migration and application integration][10]. Piotras is also working a new [GNOME][11] desktop application, [Magni][12] that can manage Midgard's data repository.

__Updated:__ We're trying to highlight some of this on the new [Midgard 1.8 release page][14]. If you have any ideas on how to communicate Midgard's uniqueness better, [drop me a line][15].

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/midgard/1.7/architecture.html
[3]: http://www.opensourcecms.com/index.php?option=com_frontpage&Itemid=1
[4]: http://www.gtk.org/tutorial/c2044.html
[5]: http://en.wikipedia.org/wiki/Superuser
[6]: http://www.midgard-project.org/documentation/installation/
[7]: http://www.nemein.com/people/piotras/magni.html
[8]: http://www.midgard-project.org/documentation/midcom/
[9]: http://www.midgard-project.org/documentation/midcom-components/
[10]: http://www.midgard-project.org/documentation/exorcist
[11]: http://www.gnome.org/
[12]: http://www.nemein.com/people/piotras/mob-needs-name.html
[13]: http://www.midgard-project.org/community/whoswho/pp.html
[14]: http://www.midgard-project.org/midgard/1.8/
[15]: http://bergie.iki.fi/about/contact/
