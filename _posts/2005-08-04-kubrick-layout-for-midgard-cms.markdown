---
  title: "Kubrick layout for Midgard CMS"
  categories: 
    - "midgard"
  layout: "post"

---
Because of the [dead development server][1] I had a bit of downtime today. To compensate for it, I decided to finally port the elegant [Kubrick template][2] to [Midgard CMS][3]. 

Kubrick is a style template designed by [Michael Heilemann][4] for the [WordPress][5] weblog system. While Midgard's range of functionalities is [much wider][6] than those of a blog system, the template still fit quite well:

![Kubrick running a Midgard test site](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midcom-template-kubrick.jpg)

To make the template work more nicely out-of-the-box, I'm utilizing the new `midcom_helper_find_node_by_component()` helper function from [MidCOM][7] to automatically [populate][8] designated places in the layout with things like latest news items or photos.

This level of component integration is acceptable, but in the future it would be very good to also include component-specific CSS rules into the templates to make the components fit the layout even better. This is made easier as more and more components are embracing standard [microformat][9] class semantics.

To get the new Kubrick template for Midgard [download it from CVS][10], and [install via datagard][11]. Once this has been done it should appear in the style selection dialog of your [Site Wizard][12]:

![Kubrick in Site Wizard style selector](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/kubrick-in-sitewizard.jpg)

Next up would be to make the Site Wizard actually create MidCOM site structures based on user-selected "site type". This way user could say "I want a blog", and automatically get newsticker with [comments enabled][13], etc. The feature was in original [Site Wizard specs][14] but hasn't quite been designed yet.

Now a blank Kubrick-powered site created by Site Wizard looks [like this][15].

[1]: http://bergie.iki.fi/midcom-permalink-62990b068e3af64513cc9431420e89dc
[2]: http://binarybonsai.com/kubrick/
[3]: http://www.midgard-project.org/
[4]: http://binarybonsai.com/
[5]: http://wordpress.org/
[6]: http://bergie.iki.fi/midcom-permalink-551a106fbbce70d7478a0fa434cc48bf
[7]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[8]: http://www.midgard-project.org/midcom-permalink-9342a0efcab41d4ee06435f1aafd83f7
[9]: http://www.microformats.org/wiki/Main_Page
[10]: http://midgard.tigris.org/source/browse/*checkout*/midgard/src/templates/layout-kubrick.xml
[11]: http://www.midgard-project.org/midcom-permalink-15c471ecf0f4e1ef9692ed3d4f337c6e
[12]: http://bergie.iki.fi/midcom-permalink-8928b46c23b862209f4c8e70c5fbd4e8
[13]: http://www.midgard-project.org/midcom-permalink-b013d11b56ad35e1389750942aa37c9b
[14]: http://www.midgard-project.org/midcom-permalink-e95b212e3d79f6ddd251e5f1634d2939
[15]: http://www.nemein.com/debconf/
