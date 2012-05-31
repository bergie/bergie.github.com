---
  title: "First look at the new AIS"
  categories: 
    - "midgard"
  layout: "post"

---
AIS, the _Authoring Interface System_ in [Midgard CMS][1] is now getting a [new look][2]. The tables and old HTML are now gone, replaced by much more streamlined XHTML and CSS.

Technology is not the only change, however. We've now recognized the two different uses of the system, and provide different UI styles for them. A button for switching between them is available, and the interface remembers the user's preference

* __[Aegir style][4]__ is a comprehensive content and site administration tool used 
  by administrators. It will contain both the authoring features and the 
  [administrative capabilities][3] of old Aegir CMS

* __Simple style__ is a further simplification of the [current AIS][5] targeted 
  mainly at users who are hopping in and out of the administrative mode using the 
  _Edit this page_ links on their MidCOM site

I did some basic CSS work for the Simple version of AIS today.

The main view of AIS now combines the different toolbars into a unified item, and hides the navigation by default to give more room for the content being edited. Typography comes from the site style.

![Simple AIS with hidden navigation](/files/ais-new-simple-look.jpg)

To go to manage another part of the MidCOM site, user can expand the navigation by clicking the "location arrow".

![Simple AIS with navigation shown](/files/ais-new-simple-look-navi.jpg)

Get the new AIS from [MidCOM CVS][6].

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/midcom-permalink-09462793a563774b8d2606b3a8cc15e9
[3]: http://www.midgard-project.org/midcom-permalink-87d0f3248c14106154958ddad0e20936
[4]: http://www.midgard-project.org/midcom-permalink-2cd9f4d77f18212c9c5e22b377c99a0f
[5]: http://www.midgard-project.org/midcom-permalink-9127df5899fa095bff45f92c9893d9a3
[6]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/