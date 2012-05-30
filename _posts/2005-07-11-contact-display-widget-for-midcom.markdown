---
  title: "Contact display widget for MidCOM"
  categories: 
    - "midgard"
    - "openpsa"
  layout: "post"

---
There are several places in [OpenPsa][1] where persons are displayed in some list: Search results, campaigns, buddy lists, project participants, etc. To make them more informative, I've now implemented a [contact widget][2] library that can be used anywhere in [MidCOM][3].

With this library the listings provide all the basic contact information in a nicely formatted manner:

![MidCOM contact widget in action](http://bergie.iki.fi/midcom-serveattachmentguid-74879bb1dfca2fca3a8b64d6d6db201a/openpsa-contactwidget.jpg)

The nice part about this is that the output is in the [hCard microformat][4], enabling it to be machine-readable, and easily [converted into vCards][5].

In addition to hCard support, the widget has also integrated support for [photos from Gravatar][6] and Jabber instant messaging [presence from Edgar][7]. The Edgar server can also be installed and used locally. Other ideas I've had include blog RSS integration.

To use the _org.openpsa.contactwidget_ library, add it to the `_autoload_libraries` array of your [component interface class][8]. Then to display a [person object][9], do the following:

	// Fetch the person
	$person = new MidgardPerson($id);

	// Display the contact
	$contact = new org_openpsa_contactwidget($person);
	$contact->show();

__Updated 2005-08-02:__ This is now documented and maintained in the [Midgard Wiki][10].

[1]: http://www.openpsa.org/
[2]: http://openpsa.tigris.org/source/browse/openpsa/src/fs-midcom/openpsa/contactwidget/
[3]: http://www.midgard-project.org/midcom-permalink-85e86ba5433b5566da29fe9b32e2a425
[4]: http://www.microformats.org/wiki/hcard
[5]: http://suda.co.uk/projects/X2V/index.php
[6]: http://www.gravatar.com/
[7]: http://edgar.netflint.net/
[8]: http://www.nathan-syntronics.de/midcom-permalink-8d5d3d8efa5d4d904ac2bd653ad866e2
[9]: http://www.midgard-project.org/midcom-permalink-b8b90678eb3902f03cb3df2669a78b30
[10]: http://www.midgard-project.org/midcom-permalink-922834501b71daad856f35ec593c7a6d