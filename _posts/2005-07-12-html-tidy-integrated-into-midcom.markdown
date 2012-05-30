---
  title: "HTML Tidy integrated into MidCOM"
  categories: 
    - "midgard"
  layout: "post"

---
I've today [integrated][1] John Coggeshall's [Tidy PECL extension][2] into [Midgard CMS][3]. This means that all WYSIWYG-edited content should now be stored in proper, cleaned and indented XHTML.

The way this works is that `widget_html`, the [Datamanager widget][5] for the [HTMLAREA editor][4] checks if the [Tidy PHP functions][6] are available, and if they can be found runs the HTML through the [cleaner][7].

The commit didn't quite make it to the [MidCOM 2.4.3 release][8] so get it from CVS or patch manually if you want to try it out.

There are still some things I would like to do using the Tidy extension, including displaying possible content [accessibility warnings][9], and making the [Tidy options][10] configurable. Now the Tidy options used are:

- show-body-only
- output-xhtml
- enclose-block-text
- drop-empty-paras
- indent
- break-before-br
- drop-font-tags
- drop-proprietary-attributes
- bare

I had planned to do this integration much earlier, but always had issues getting the tidy extension to compile. The reason for this was that the binaries distributed on the [tidy site][7] don't include the shared libraries and compiling tidy was needed. Some Linux distributions apparently provide packages for the tidy libraries.

[1]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/lib/midcom/helper/datamanager/widget_html.php?r1=1.12&r2=1.13
[2]: http://pecl.php.net/package/tidy
[3]: http://www.midgard-project.org/cms/
[4]: http://www.kaukolaweb.com/midcom-permalink-7ad486895a53b91697f9313c16f4fe7c
[5]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
[6]: http://fi.php.net/tidy
[7]: http://tidy.sourceforge.net/
[8]: http://www.midgard-project.org/midcom-permalink-97e11b45dbff632d089a7cfc6235de6a
[9]: http://fi.php.net/manual/en/function.tidy-access-count.php
[10]: http://public.planetmirror.com/pub/tidy/