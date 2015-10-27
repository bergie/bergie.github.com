---
  title: "Big changes in the MidCOM project"
  categories: 
    - "midgard"
  layout: "post"

---
Late July sees a lot of changes in the [Midgard Components Framework][1] project. Since its appearance in March 2003, MidCOM has established itself as the standard way of building and managing [Midgard CMS][2] sites.

There has been lots of evolution during the way, but the current set of changes is a quite major one:

* [Torben Nehmer][4], the father of the project [stepped down][6] as the maintainer in favor of [Tarjei Huse][5]
* The project has migrated from CVS to a new [Subversion repository][3]
* New build system powered by [Phing][7] is under work to replace the custom [PEAR packaging scripts][8]
* Phing can also be used now for generating components from a template:

        $ phing scaffold -Dmodule=some.component.name

In addition to actual project management and maintenance changes, there is discussion of two interesting points on the [developer forum][9]:

* I've posted a plan for [integrating MultiLang into MidCOM][10]
* It seems MidCOM should soon [run on PHP5][11]

__BTW,__ is there anybody from [Pearified][12] reading this? I'm wondering if we could get [Icons\_Tango][13] repackaged using [Role\_Web][14] so that the images would automatically go under _DocumentRoot_ for easier serving. I could do this easily myself, but I'd rather keep the package on Pearified.

[1]: http://www.midgard-project.org/documentation/midcom/
[2]: http://www.midgard-project.org/
[3]: http://gforge.nehmer.net/scm/?group_id=6
[4]: http://www.midgard-project.org/community/whoswho/torben.html
[5]: http://www.midgard-project.org/community/whoswho/tarjei.html
[6]: http://www.midgard-project.org/updates/withdraw-from-midcom.html
[7]: http://phing.info/trac/
[8]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/support/?root=midcom
[9]: http://www.midgard-project.org/discussion/developer-forum/
[10]: http://www.midgard-project.org/discussion/developer-forum/read/d73dcc04bc54140a694acc10a1d08c3d.html
[11]: http://www.midgard-project.org/discussion/developer-forum/midcom-2-5-on-php5/
[12]: http://pearified.com/
[13]: http://pearified.com/index.php?package=Icons_Tango
[14]: http://pearified.com/index.php?package=Role_Web
