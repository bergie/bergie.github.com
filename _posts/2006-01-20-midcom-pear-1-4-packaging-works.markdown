---
  title: "MidCOM PEAR 1.4 packaging works"
  categories: 
    - "midgard"
  layout: "post"

---
After a bit of discussion and [goading][6] from the PEAR community, we decided to package [MidCOM][7] for the [package.xml 2.0][8] format and only support PEAR 1.4 or newer.

This decision meant a bit of extra work for me as I had to rewrite the supporting utilities that handle component packaging. However, now that work is done, and I made my first PEAR-powered MidCOM installation today. The result was a working but a bit limited MidCOM environment, as can be seen from this [AIS][12] screenshot:

![Component selector in AIS](https://d2vqpl3tx84ay5.cloudfront.net/pear-packaged-ais.jpg)

## Nice points

PEAR packaging of MidCOM brings lots of benefits, including:

* Components can have other PEAR packages, components, or even PHP extensions as dependencies that PEAR installer will handle
* Users can install only the components that they actually need
* MgdSchema file installation in components is much easier than it [used to be][9]
* We can start shipping static files inside the component package and install using [Role_Web][10]

## Trying it out

Since packaging is not 100% complete yet, you need an existing Midgard 1.7.x and MidCOM installation to try it out. Here are the steps to follow:

* Upgrade PEAR to 1.4

        # pear clear-cache
        # pear upgrade PEAR

* Download MidCOM PEAR packages from <http://www.nehmer.net/~bergie/pear/>

* Create a new empty MidCOM site using [Midgard Site Wizard][13]

* Log into the site as administrator and go to `midcom-admin/settings`

* Set _Path to Filesystem MidCOM_ to point to `midcom/lib` your PEAR directory
  * In my case the path is `/usr/share/php/midcom/lib`
  * You can find the directory out by running `pear config-get php_dir`

* Install the packages you need. Probably at least these:

        # pear install Role_MgdSchema-1.0.0.tgz
        # pear install midcom-2.5.1cvs.tgz
        # pear install midcom_helper_datamanager-1.tgz
        # pear install de_linkm_taviewer-2.tgz
        # pear install midcom_admin_content-1.tgz

* Invalidate the [MidCOM cache][14] by calling `http://www.example.net/midcom-cache-invalidate`

* Enjoy! You should now have a working but limited MidCOM 2.5 installation

__Note:__ You might have to create the database tables used by MidCOM core by importing the `/usr/share/php/midcom/lib/midcom/config/mgdschema/sql/midcom_dbobjects_full.sql` file

## Caveats

PEAR packaging of MidCOM is still a bit unfinished. The main missing points are:

* Most components don't have the necessary `package.xml` and `status` keys in their [manifest files][1] yet
* Actual database tables are not generated for installed [MgdSchema XML files][2]. This should be done by calling the [midgard-schema utility][3]
* Package installation and dependency handling is not yet as easy as it will be when we [set up a PEAR channel][4]
* Static files are not packaged yet pending their reorganization [in CVS][11]

These missing pieces should be resolves quickly after the [mRFC 0021][5] gets approved.

[1]: http://www.midgard-project.org/midcom-permalink-a49e6562d06a3ce713e88e268ca66ab0
[2]: http://www.midgard-project.org/midcom-permalink-5958b308aed8e5f00d2f23a9345aafcc
[3]: http://www.nemein.com/people/piotras/table-and-columns-ok.html
[4]: http://www.schlitt.info/applications/blog/index.php?/archives/308-Set-up-your-own-PEAR-channel.html
[5]: http://www.midgard-project.org/midcom-permalink-912ed7142e595c67b0339d1217e93d25
[6]: http://bergie.iki.fi/blog/pear-packager-tries-to-be-too-smart/#comments
[7]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[8]: http://pear.php.net/manual/en/guide.developers.package2.php
[9]: http://www.openpsa.org/documentation/openpsa-2-installation/
[10]: http://pearified.com/index.php?package=Role_Web
[11]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/
[12]: http://www.midgard-project.org/midcom-permalink-c8073a0bb8675c0bf08f34bef2284cd4
[13]: http://www.midgard-project.org/midcom-permalink-6a5e2b2fc1b998f6f1ac70946f355f1d
[14]: http://www.midgard-project.org/midcom-permalink-31a2252283aaf488a997b7f693726672
