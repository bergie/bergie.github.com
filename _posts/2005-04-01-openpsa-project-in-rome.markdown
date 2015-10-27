---
  title: "OpenPSA project in Rome"
  categories: 
    - "openpsa"
  layout: "post"

---
We're now spending a week in [Rome][1] to get a major [OpenPSA][2] development project started. The project is done for the Italian [regional competence centers][3] together with the local [Midgard][4] consultancy, [Ware.it][5]. This project will add much more granular access controls into OpenPSA, and will enable its usage as a more general [project communication tool][14].

While we sit in the meetings with _Alessio_ from Ware.it, _Kerttu_ is touring the sights of the city. We're looking forward with _Rambo_ to also doing the tourist thing this weekend. However, we'll have to see how much the [trouble brewing][7] in [Vatican][8] will affect our options, as countless pilgrims and mourners flock to the city.

![Kerttu and Bergie on St. Peter's square][6]

Yesterday we went through the list of new features needed for OpenPSA. These include:

* Switching from hierarchical departments to more flexible concept of "workgroups"
* Having different access levels to all data, including "private", "workgroup private" and "public"
* Versioning and [indexing][10] of documents
* [Jabber][11] Instant Messaging presence notifications
* [Discussion forum][12] integration

To make these happen, we have defined a [new object-oriented architecture][15] for OpenPSA and will migrate all main modules to use it. You can also check out Ware.it's [conceptual demo for CRC][13].

![Castle San Angelo and the Tiber river][9]

The new OpenPSA architecture will help also with the eventual [MgdSchema][16] migration.

[1]: http://en.wikipedia.org/wiki/Rome
[2]: http://www.openpsa.org/
[3]: http://www.crcitalia.it/Elenco_sezione.aspx?Categoria=691
[4]: http://www.midgard-project.org/
[5]: http://www.ware.it/
[6]: http://bergie.iki.fi/midcom-serveattachmentguid-60af97a619b7f327738bb3ddf413465e/Rome_St_Peter_Square.jpg
[7]: http://news.bbc.co.uk/2/hi/europe/4400605.stm
[8]: http://www.cia.gov/cia/publications/factbook/geos/vt.html
[9]: http://bergie.iki.fi/midcom-serveattachmentguid-8dcc146ed353b248d1637f7dc2749874/Rome_San_Angelo_and_Tiber.jpg
[10]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_4/the-midcom-indexer.html
[11]: http://www.jabber.org/about/overview.shtml
[12]: http://www.midgard-project.org/midcom-permalink-bdcb61850ba577b877cdfb7e30c3c438
[13]: http://www.ware.it/crcdemo/
[14]: http://www.basecamphq.com/manifesto.php
[15]: http://www.openpsa.org/development/version_20/core_spec.html
[16]: http://bergie.iki.fi/midcom-permalink-3a0b80c085bff804800914311a05143c
