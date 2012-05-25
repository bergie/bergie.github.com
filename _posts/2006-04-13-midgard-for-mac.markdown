---
  title: "Midgard for Mac"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
Thanks to [Jyrki Wahlstedt][1] there is now a new way to install [Midgard CMS][2] on a Mac: [DarwinPorts][3].

I'm now testing his packages and will update the [installation instructions][4] as soon as I'm done.

![DarwinPorts Mac installer](http://bergie.iki.fi/midcom-serveattachmentguid-cd5129842c1fd7281a64e907a91e65cf/darwinports-installer.jpg)

__Updated 2006-04-21:__ I've got the DarwinPorts Midgard now running on my PowerBook G4.  At first look, it is __a lot faster__ than the Fink packages, possibly due to using MySQL 5.

Unfortunately the installation procedure is not as smooth as it could be, mostly because the PHP and Apache packages lack decent default configurations. I hope we'll be able to resolve that later.

[1]: http://www.midgard-project.org/community/whoswho/jwa.html
[2]: http://www.midgard-project.org/
[3]: http://www.darwinports.org/
[4]: http://www.midgard-project.org/documentation/installation-distros-mac-os-x/