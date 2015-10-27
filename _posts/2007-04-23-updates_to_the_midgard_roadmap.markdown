---
  title: "Updates to the Midgard roadmap"
  categories: 
    - "midgard"
  layout: "post"

---
There has been discussion on some changes to the near future roadmap of [Midgard][1] and [MidCOM][2]. Here are the proposed changes in nutshell:

* Midgard 1.8.3: _due out this week_
  - The Midgard release [currently in oven][3]
  - Adds [replication support][13] to core
  - Makes it possible to run Midgard without legacy API

* MidCOM 2.8.0: _entering beta soon_
  - Fully legacy-free MidCOM (i.e. doesn't require legacy Midgard API)
  - Uses Midgard [core metadata][4] instead of [parameters][6]
  - Works with both PHP4 and PHP5
  - [Replication][7], [multilang][8], [collector][5] and many other improvements
  - Requires Midgard 1.8.3

* Midgard 1.8.4: _when MidCOM 2.8.0 is out_
  - Installs MidCOM 2.8.0 and [MidCOM indexer][9] from packages
  - Sets up MidCOM cron service as needed
  - PHP 5.2 as the default, not PHP4

* MidCOM 2.9 series: _after 2.8.0 is branched off_
  - Support for PHP4 is removed
  - Handling all [MgdSchema datetime][12] fields as PHP native [DateTime objects][10]
  - Uses [autoload][11] to speed up file inclusion
  - Starts to utilize all the [PHP 5 object-oriented goodness][14]
  - Hopefully pushes us to use and contribute to [PEAR libraries][15] instead of [our own][16]

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/documentation/midcom
[3]: http://www.midgard-project.org/development/download/1-8-branch.html
[4]: http://www.midgard-project.org/documentation/mgdschema-metadata-object/
[5]: http://www.midgard-project.org/documentation/php-midgard_collector/
[6]: http://www.midgard-project.org/documentation/reference-oop-methods-parameter/
[7]: http://bergie.iki.fi/blog/more_work_on_midgard-s_replication_service/
[8]: http://www.midgard-project.org/documentation/building-multilingual-sites-with-midcom/
[9]: http://www.midgard-project.org/documentation/midcom-services-indexer-installation/
[10]: http://maetl.coretxt.net.nz/datetime-in-php
[11]: http://fi.php.net/autoload
[12]: http://www.midgard-project.org/documentation/mgdschema-file-properties/#a70f9107bb30b15ee9efca3ace76884d
[13]: http://www.midgard-project.org/documentation/php-midgard_replicator/
[14]: http://www.php.net/manual/en/language.oop5.php
[15]: http://pear.php.net/
[16]: http://www.midgard-project.org/documentation/midcom-purecode-components/
