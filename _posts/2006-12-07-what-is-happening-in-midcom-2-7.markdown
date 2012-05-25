---
  title: "What is happening in MidCOM 2.7"
  categories: 
    - "midgard"
  layout: "post"

---
[MidCOM 2.6.0][1] has been out for a while, with 2.6.1 scheduled for today. While that branch has now been stabilized for bug fixes and small tweaks only, there is work going on in the SVN trunk, or what is to become MidCOM 2.7.

Here's a quick list of what has happened so far:

* [Midgard Collector][2] is now getting rolled out in a lot of places in MidCOM core. Compared to [Query Builder][3] this brings notable performance gains in every place where full objects are not needed

* [midgard_metadata properties][4] are now used instead of the parameters described in [mRFC 0010: MidCOM Metadata Interface][5]

* [Topic component][6], style and style inheritance information are now [topic properties][7] instead of parameters

* [Classic Midgard API][8] calls have mostly been removed

* MidCOM is now properly aware of [Multilingual Content][9]. [Site Wizard][10] still needs to be adapted to aid creation of multilingual sites

* PHP5 is now fully supported

To summarize, 2.7 is much faster than 2.6 and handles its metadata and multilingual content much better. It also requires Midgard 1.8.1, due to be released soon.

[1]: http://freshmeat.net/projects/midcom
[2]: http://www.midgard-project.org/documentation/php-midgard_collector/
[3]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[4]: http://www.midgard-project.org/documentation/mgdschema-metadata-object/
[5]: http://www.midgard-project.org/development/mrfc/view/0010.html
[6]: http://www.midgard-project.org/documentation/midcom-components/
[7]: http://www.midgard-project.org/documentation/reference-topic/
[8]: http://www.midgard-project.org/documentation/reference/#9f42c2021f0b0efedacd0ae9d6801c5c
[9]: http://www.midgard-project.org/documentation/mgdschema-and-multilingual-content/
[10]: http://www.midgard-project.org/documentation/midgard-admin-sitewizard/