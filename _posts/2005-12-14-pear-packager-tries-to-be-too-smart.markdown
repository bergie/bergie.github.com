---
  title: "PEAR packager tries to be too smart"
  categories: 
    - "midgard"
  layout: "post"

---
When trying to [PEAR][3]-package [MidCOM][1] components with our new [`pear-package.php`][2] utility I ran into this error message:

> Error: PHP5 packages must be packaged by php 5 PEAR

Now, it seems that the PEAR 1.x packager tries to be a bit too smart and sniff if files contain [PHP5 OOP features][4] like [abstract][7] or [interface][8] classes. That is all good and well, except that the packager doesn't really parse the PHP code, it just looks for words like `abstract` in the file.

This taken into account, guess what happens with code like this (coming from Midgard's [MetaWebLog API interface][9]):

	if ($key == "mt_excerpt") {
		$article->abstract = $value->scalarval();
	}

A quick fix for this is to edit the `PEAR/Common.php` file of your installation and comment out the following:

    if (version_compare(zend_version(), '2.0', '<')) {
        if (in_array(strtolower($data),
            array('public', 'private', 'protected', 'abstract',
                  'interface', 'implements', 'clone', 'throw')
                 )) {
            PEAR::raiseError('Error: PHP5 packages must be packaged by php 5 PEAR');
            return false;
        } 
    }

This should be quite safe to do, as [MidCOM doesn't run on PHP5][5] yet, and so can't contain any PHP5 files.

No idea if [PEAR 1.4][6] fixes this.

__Updated 14:58:__ The MidCOM packages themselves work now. Pretty cool! See my [posting to dev][10].

__Updated 2005-12-27:__ The decision has been made to package using PEAR 1.4 only. Read the [mRFC 0021][11] for details.

[1]: http://www.midgard-project.org/documentation/midcom/
[2]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/support/pear-package.php?view=markup
[3]: http://pear.php.net/manual/en/developers.packagedef.php
[4]: http://www.php.net/manual/en/language.oop5.php
[5]: http://midcom.tigris.org/issues/show_bug.cgi?id=284
[6]: http://greg.chiaraquartet.net/archives/88-RELEASE-ANNOUNCEMENT-PEAR-1.4.0-provides-revolution-in-PHP-Development.html
[7]: http://www.php.net/manual/en/language.oop5.abstract.php
[8]: http://www.php.net/manual/en/language.oop5.interfaces.php
[9]: http://bergie.iki.fi/midcom-permalink-9496e99a793a6e8761a7813a64f9c567
[10]: http://permalink.gmane.org/gmane.comp.web.midgard.devel/6247
[11]: http://www.midgard-project.org/midcom-permalink-912ed7142e595c67b0339d1217e93d25
