---
  title: "Sketch your website with DENIM"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
[DENIM][1] is an interesting, [BSD-licensed][2] desktop application from University of Washington. It allows web developers to [sketch site][3] and [page structures][4] easily with a stylus. Pages can be [interlinked][9], and contain [operable components][5] like forms.

DENIM is available for Linux, Windows and Mac. I downloaded the [OS X version][8], and scribbled with it for a while. Obviously the results would be nicer if I had a stylus or an [I-pen][6]...

![Simple three-page site with DENIM](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/denim-simplesite.jpg)

This could be the perfect tool for [rapid web prototyping][7]. Once the site sketch has been created it can be exported as a set of HTML imagemaps for easier sharing.

However, to make DENIM a really useful prototyping tool for [Midgard CMS][12], we would need to create a set of [custom DENIM components][10] for typical [MidCOM components][13] like news lists and event calendars so that users could really grasp how the site is put together by running different components (or their [dynamically loaded][14] representations).

Even nicer would be if the resulting DENIM file could be imported into Midgard to generate some of the site automatically. The DENIM file format is an [XML file][15], so it might be possible to extract the page names, relations, and components shown on a page out of it. If so, the DENIM files might be convert-able via [Exorcist][16] to something that could be imported as a MidCOM site structure. 

This would truly make DENIM a tool that would beat the usefulness of [paper prototyping][17] while retaining the ease-of-sketching.

Found DENIM via [Maemo][11].

[1]: http://dub.washington.edu/denim/
[2]: http://directory.fsf.org/All_Packages_in_Directory/DENIM.html
[3]: http://dub.washington.edu/projects/denim/docs/tutorial/3.html
[4]: http://dub.washington.edu/projects/denim/docs/tutorial/6.html
[5]: http://dub.washington.edu/projects/denim/docs/tutorial/8.html
[6]: http://www.the-gadgeteer.com/review/i_pen_electronic_pen_and_pen_internet_s_complete_note_taking_solution_review
[7]: http://builder.com.com/5100-6371-1058664.html
[8]: http://dub.washington.edu/projects/denim/download/mac/download_alone.shtml
[9]: http://dub.washington.edu/projects/denim/docs/tutorial/10.html
[10]: http://dub.washington.edu/projects/denim/docs/tutorial/Using_Custom_Components.htm
[11]: http://www.maemo.org/
[12]: http://www.midgard-project.org/
[13]: http://www.midgard-project.org/documentation/midcom/
[14]: http://www.midgard-project.org/documentation/midcom-method-dynamic_load/
[15]: http://guir.berkeley.edu/projects/denim/docs/samples/denim_daily.dnm
[16]: http://freshmeat.net/projects/exorcist/
[17]: http://www.guuui.com/posting.php?id=53
