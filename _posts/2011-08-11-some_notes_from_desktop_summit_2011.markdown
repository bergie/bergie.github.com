---
  title: "Some notes from Desktop Summit 2011"
  categories: 
    - "desktop"
    - "kde"
    - "midgard"
    - fbp
  layout: "post"

---
As usual, [Desktop Summit 2011](https://desktopsummit.org/) has been a lot of fun. I've been to most of the GUADEC and aKademy free desktop events in the past few years, but this was the first time I didn't give a talk. Even that way, it was definitely worth spending a week in Berlin.

While much of the corporate involvement around the desktops has evaporated through some recent events, this seems to have given the developers lots more creative freedom. I've seen many very promising concepts from both communities.

Here are some things that happened during the week:

* The *[roadmap for Midgard](http://lists.midgard-project.org/pipermail/dev/2011-August/003045.html)* to become closer to the JCR specification solidified, including a reasonably good plan on backwards compatibility
* We published the first version of [GICR](https://github.com/midgardproject/GICR), generic *Content Repository interfaces for GObject*. Midgard will probably be the first project to implement them, but we hope others will follow. It'd be a great fit for [GNOME Documents](https://live.gnome.org/Design/Apps/Documents), among other things
* The project to replace our own PHP frameworks with *[Symfony2](http://symfony.com/)* continued by implementing the [MidCOM compatibility layer](https://github.com/bergie/MidgardMidcomCompatBundle) that will allow Midgard1 web applications to be run in the new environment
* My work on the *[NoFlo](https://github.com/noflo/noflo) flow-based programming tool* got some positive attention and interest. Still lot of stuff to do
* We at [Nemein](http://nemein.com/) co-sponsored the *[GObject Introspection hackfest](https://live.gnome.org/Hackfests/Introspection2011)*. [GIR](https://live.gnome.org/GObjectIntrospection/) is important for bringing GNOME libraries to new environments like scripting languages and the web
* *Lots of ice cream* got eaten. I think it will be fair if I stay out of next year's deathmatch and focus on coaching ;-)

Tomorrow back to Helsinki for a week, then onwards to [FrOSCon](http://froscon.de/) and Salzburg...
