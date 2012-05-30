---
  title: "Repligard, your days are numbered"
  categories: 
    - "midgard"
  layout: "post"

---
Focus of the [Midgard][1] [developer][3] [community][4] is swiftly moving to the [Midgard2 architecture][2], and this means that changes will be coming to the rest of the framework.

One obvious victim is the [Repligard][5] database replication and packaging tool. While Repligard works acceptably for its intended purpose, stretching it to situations like [filtered staging/live][6] and [database structure conversions][7] has caused issues with both reliability and performance. And in addition to this, Repligard is not yet able to work with [MgdSchema objects][8].

Clearly something needs to be done about the situation. What could be the viable replacement is [Exorcist][9], the [cross-CMS replication tool][10] created by Midgard Project co-founder and [JCR][13] contributor [Jukka Zitting][11]. Not only is Exorcist built on much more robust model, it also communicates with Midgard using the [Midgard-Java bindings][12] that are built directly on top of the MgdSchema and [Query Builder][14].

Pros for making Exorcist the Repligard replacement:

- Possibility to create workflow and content filters using [XSLT][18]
- Cross-CMS capabilities, replicate between Midgard and other CMSs using either one-to-one bindings or [Portable Site Information][15]
- Real possibility for multidirectional replication
- P2P replication using the [Digital Business Ecosystem][16] network
- Project could be shared between [different CMSs][19]
- No need to separately port it to support new Midgard features

And cons:

- Existing scripts and working habits based on Repligard will cease to work
- More Java dependency (although we recommend it [already now][17])

[1]: http://www.nathan-syntronics.de/midcom-permalink-dda9a3b68e3f06b8be9d17b17113102d
[2]: http://www.midgard-project.org/midcom-permalink-30060725e11ec9472825fd8bce02725c
[3]: http://www.midgard-project.org/midcom-permalink-1c73f9106ef089483fe96d776bf14e45
[4]: http://bergie.iki.fi/midcom-permalink-4a5932e606710d5d57a29cdd047cb0cf
[5]: http://www.midgard-project.org/midcom-permalink-0aee1736f8d60d4f01b6dbd1039327d9
[6]: http://www.midgard-project.org/midcom-permalink-64e737d06684f7498f1296ce836a6a79
[7]: http://www.opensubscriber.com/message/user@midgard-project.org/1462287.html
[8]: http://bergie.iki.fi/midcom-permalink-3a0b80c085bff804800914311a05143c
[9]: http://svn.yukatan.fi/exorcist/
[10]: http://yukatan.fi/display/yukatan/2005/02/21/CMS+migration+with+the+Exorcist
[11]: http://zitting.name/jukka/JukkaZitting.html
[12]: http://yukatan.fi/pages/viewpage.action?pageId=65
[13]: http://www.jcp.org/aboutJava/communityprocess/final/jsr170/
[14]: http://www.nemein.com/people/piotras/midcom-permalink-8312e0e1eaeb0dec677519191b9390d8
[15]: http://psilib.sourceforge.net/
[16]: http://yukatan.fi/display/yukatan/2005/06/19/DBE+workshop+summary
[17]: http://bergie.iki.fi/midcom-permalink-656cda78fb6086ecad96e6d2f86bcb49
[18]: http://www.w3.org/TR/xslt
[19]: http://www.oscom.org/