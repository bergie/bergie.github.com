---
title: Too much free software
categories:
  - midgard
layout: post
---
Freshmeat has an interesting editorial titled [Too Much Free Software](http://freshmeat.net/articles/view/774/) dealing with lack of standardization and "not invented here" syndrome in the Free Software / Open Source community causing appearance of multiple versions of same software.

We can see the same happening in the Midgard world as well. Consider admin interfaces:

* Old Admin
* Asgard
* Aegir CMS
* PHPmole
* Spideradmin
* MidCOM AIS

While each of these has their strong points - ranging from simplicity to user-friendliness, this is obviously too much for a moderately-sized development community like ours. We should have the guts to standardize to only one of those.

If the licensing issues in [Aegir CMS](http://www.aegir-cms.org/) would get resolved, we could easily standardize to it, and integrate MidCOM's AIS system as the default content management interface there. In addition to this there could be a WebDAV server enabling developers to connect to the Midgard database using whatever IDEs they want.

This standardization would enable us to focus on making the selected interface as good as possible, instead throwing effort around. If we took this standardization as far as to make this interface the only one installed from midgard-data, this would make things much clearer to users as well. 
