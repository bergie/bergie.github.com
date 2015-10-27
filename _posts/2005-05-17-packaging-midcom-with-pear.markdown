---
  title: "Packaging MidCOM with PEAR"
  categories: 
    - "midgard"
  layout: "post"

---
The number of components and libraries in [MidCOM][1] is raising rapidly, especially as both [Aegir][2] and [OpenPSA][3] are being [rewritten on it][4]. As now all MidCOM packages ship in the [distribution][5], this causes lots of unnecessary clutter on systems.

## New packaging policy

I'm now proposing to improve the situation by packaging MidCOM using the [PEAR package format][6]. This would enable us to change the distribution strategy so that

- MidCOM framework ships as its own package
- Each component has its own package
- MidCOM distribution includes a _meta package_ that depends on a set of _core components_
- The _core components_ would be chosen from the best quality and most general MidCOM components, and would include things like _de.linkm.taviewer_
- Rest of the components could then be installed one-by-one using the [PEAR installer][7]

Besides removing clutter, PEAR packaging would also enable components and libraries to clearly state their dependencies from both MidCOM world and [PEAR packages][8]. This would promote code reuse and closer cooperation with the PEAR community.

## Proof of concept

To test this approach, I created a [package definition][9] for the _net.nemein.personnel_ component. It seemed quite easy to define the component in PEAR's format, although the package name had to use underscores instead of dots as class path separator, making it _net\_nemein\_personnel_.

The package seemed to work quite well:

	$ pear package-validate package.xml
	Validation: 0 error(s), 0 warning(s)

	$ pear package package.xml

	$ sudo pear install net_nemein_personnel-1.0.tgz
	install ok: net_nemein_personnel 1.0

	$ ls /usr/lib/php/midcom/lib/net/nemein/personnel/
	admin.php       locale          navigation.php  viewer.php
	config          midcom          style
	$ ls /usr/lib/php/docs/net_nemein_personnel/documentation/
	CHANGES

	$ sudo pear uninstall net_nemein_personnel
	uninstall ok: net_nemein_personnel

With this experience, it looks like we should be able to quite easily [create the package definitions][11] for MidCOM files, and possibly also automate part of this work using the [PEAR PackageFileManager][10] tool or some custom script.

The only real change required in MidCOM to make the PEAR packaging work would be to change _midcom-template_ to load MidCOM by default from the PEAR installation directory.

## Distribution mechanisms

Once the packages have been done we have several options for distributing them:

1. Just providing them as downloads on the Midgard site
2. Setting up our own [PEAR 1.4 channel][13]
3. [Contributing][14] the packages to the actual PEAR repository, and _midgard-php_ to [PECL][15]

The first of these options would be the easiest, and is probably the right way to start. We can consider the others with better time.

__In the other news:__ [congratulations, Torben][16]!

[1]: http://www.midgard-project.org/midcom-permalink-85e86ba5433b5566da29fe9b32e2a425
[2]: http://www.midgard-project.org/midcom-permalink-636eb5003c9600bb7dc9c2e8028bb2eb
[3]: http://www.openpsa.org/
[4]: http://bergie.iki.fi/midcom-permalink-b091d0652432d63cbd717578e7133745
[5]: http://www.midgard-project.org/midcom-permalink-da3b1596a4c6ce008191e86d13e76404
[6]: http://pear.php.net/manual/en/developers.packagedef.php
[7]: http://pear.php.net/manual/en/installation.cli.php
[8]: http://pear.php.net/packages.php
[9]: http://www.nehmer.net/~bergie/package.xml
[10]: http://pear.php.net/package/PEAR_PackageFileManager
[11]: http://www.zend.com/pear/tutorials/howtopackage.php
[12]: http://www.schlitt.info/applications/blog/index.php?/archives/304-PEAR-1.4-at-the-horizon.html
[13]: http://www.schlitt.info/applications/blog/index.php?/archives/308-Set-up-your-own-PEAR-channel.html
[14]: http://pear.php.net/manual/en/newmaint.when-to-contribute.php
[15]: http://pecl.php.net/
[16]: http://www.nathan-syntronics.de/midcom-permalink-0d7928a46ca7bdc57227408c53f8f79b
