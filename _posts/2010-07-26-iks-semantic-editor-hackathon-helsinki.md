---
title: IKS Semantic Editor hackathon in Helsinki on July 26-27
source: "http://www.qaiku.com/channels/show/iks-project/view/76af099e82a611df9e483b5520ffbefebefe/"
location: Helsinki, Finland
layout: post
categories:
  - midgard
  - oscom
---
[Want to work on the next generation of web editors?](http://wiki.iks-project.eu/index.php/Semantic_Editor/Helsinki_hackathon_2010)

There is an IKS interview with me and the Gentics team about the new editor: <http://vimeo.com/12914595>

[Some notes](http://www.midgard-project.org/discussion/developer-forum/aloha_editor-and_hrungnir_user_interface/) about the possible role of Aloha / IKS Semantic Editor in Midgard 3 CMS UI.

Norbert Pomaroli is presenting Aloha basics. _Now we use Ext JS, but that may be changed if necessary._ Now Ext is used for some of the UI elements, like the floating menu.

Code of the day:

    if (typeof EU == "undefined") {
        var EU = {};
    }

Courtesy of Jerry hacking our first [Aloha](http://aloha-editor.org) plugin :-)

We were able to insert a [RDFa person](http://www.google.com/support/webmasters/bin/answer.py?answer=146646) into the page with Aloha! New plugin coming up... 

The first IKS Aloha plugin is up: <http://github.com/jerryjj/Aloha-Editor/tree/master/WebContent/plugins/eu.iksproject.plugins.Person/>

Woohoo! We just saved content to Midgard2 via Aloha.

Here's the initial Midgard saving plugin for Aloha: <http://github.com/nemein/Aloha-Editor/blob/master/WebContent/plugins/org.midgardproject.plugins.Integration/plugin.js>

Now the content edited in Aloha and saved to Midgard2 is also sent to FISE for semantic analysis. It'd be great if we could send HTML5+RDFa directly to FISE

<http://github.com/nemein/eu_iksproject_fise>

Sometimes FISE produces a bit funny results. This is from copy-pasting the [hackathon page](http://wiki.iks-project.eu/index.php/Semantic_Editor/Helsinki_hackathon_2010) to Midgard:

![FISE enhancements](/files/594e6a94998911df9b46a1a76f95c0fac0fa.png)

![RDFa annotation](/files/182bc2c0999611dfa68cddcc93875b5b5b5b.png)

Managed to get Jerry's latest Aloha version working (Ext JS forms plugin was missing from the bundle). With it the RDFa editing is even cooler. Here's an example of the HTML after annotating a person.

Time to wrap up the hackathon and head for beer :-)

Seems the sidebar is also looking a bit nicer now:

![Aloha details sidebar](/files/8d38bed49af811df973847511a0fdfe9dfe9.png)
