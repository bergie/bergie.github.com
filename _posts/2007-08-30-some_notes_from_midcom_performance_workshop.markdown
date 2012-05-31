---
  title: "Some notes from MidCOM performance workshop"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
Today we've been hacking [in the woods][1] as part of the [MidCOM Performance Sprint][2]. Together with yesterday's [bug day][3] this has resulted in [quite a few commits][4].

While [results][12] obviously were not as dramatic [as the last time][5] due to better overall status of the code, we still scored about _20% reduction_ in database I/O and debug log lines dropping from over 700 to a _more readable 103_ per regular, fully debugged request. _Memory usage_ should be much better now as well.


<p style="text-align:center;"><img src="/files/jerry_and_bugless_macbook.jpg" height="225" width="300" border="1" hspace="4" vspace="4" alt="Jerry and bug-free Macbook Pro" title="Jerry and bug-free Macbook Pro" /></p>

Focus areas today were:

* Switching from [Query Builder][7] to [Collector][8] where possible
* Switching [from Prototype to jQuery][10] in many bundled AJAX tools
* [New access control][6] for enabling/disabling AJAX features
* [Smart windowing][13] for Query Builder queries
* [Refactoring][11] the URL parser subsystem
* Removal of [MidCOM 2.4 AIS][9] classes
* Removal of several legacy libraries
* Simplification of some class inheritance chains

Thanks to everybody involved!

[1]: http://www.plazes.com/plazes/61207:ingels
[2]: http://bergie.iki.fi/blog/join_the_midcom_performance_sprint_on_august_30th.html
[3]: http://bergie.jaiku.com/presence/10604235
[4]: http://trac.midgard-project.org/timeline?from=08%2F30%2F07&#38;daysback=1&#38;changeset=on&#38;update=Update
[5]: http://bergie.iki.fi/blog/optimizing-the-latest-midcom.html
[6]: http://trac.midgard-project.org/changeset/11843
[7]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[8]: http://www.midgard-project.org/documentation/php-midgard_collector/
[9]: http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-ais/
[10]: http://jquery.com/blog/2006/08/20/why-jquerys-philosophy-is-better/
[11]: http://www.midgard-project.org/development/mrfc/view/0035.html
[12]: http://bergie.jaiku.com/presence/10744884
[13]: http://rambo.pbt-unknown.org/blog/view/1188546036.html