---
  title: "MidCOM indexer setup notes"
  categories: 
    - "midgard"
  layout: "post"

---
Here are short notes on how I installed the MidCOM indexer for a client. The client has an intranet site running on [Midgard 1.6][4] and MidCOM 2.1.0 on Red Hat Linux 7.3.

## Install MidCOM 2.3

Download [MidCOM 2.3][1] and install it:

	# cd /usr/local/share/midgard/
	# wget http://www.midgard-project.org/midc...1c9/MidCOM-2.3.0.tar.bz2
	# tar jxvf MidCOM-2.3.0.tar.bz2
	# ln -s /usr/local/share/midgard/MidCOM-2.3.0 /usr/local/share/midgard/midcom

Install the [PHP Compat][3] PEAR package:

	# pear install PHP_Compat

Upgrade the MidCOM template site installation:

	# repligard -a -i MidCOM-2.3.0/midcom-template/midcom-template.xml

**Note:** if you are using a [MultiLang][5]-formatted database you need to install the package via [Datagard installer][6] instead.

## Install the indexer

Download and install the [Java 1.4.2 runtime][9]:

	# ./j2re-1_4_2_07-linux-i586-rpm.bin
	# rpm -i j2re-1_4_2_07-linux-i586.rpm

Download and install [Apache Lucene search engine][8]:

	# mkdir /usr/local/share/midgard/indexer
	# cd /usr/local/share/midgard/indexer
	# wget http://apache.intissite.com/jakarta/lucene/binaries/lucene-1.4.3.jar
	# mv lucene-1.4.3.jar lucene.jar

Download and install the [MidCOM indexer][7]:

	# wget http://www.nathan-syntronics.de/midc...80b/indexer.jar
	# wget http://www.nathan-syntronics.de/midc...116/xml-communication-response.dtd
	# wget http://www.nathan-syntronics.de/midc...c3c/xml-communication-request.dtd

## Deploy the indexer

Start the indexer daemon:

	# /usr/java/j2re1.4.2_07/bin/java -jar indexer.jar

Set the site to use the indexer:

- Point your browser to http://www.example.net/midcom-admin/settings/
- Log in as administrator
- Set _Which indexer backend to use_ to **xmltcp**

Reindex the site:

- Point your browser to http://www.example.net/midcom-exec-midcom/reindex.php

**Note:** the current indexer seems to give a big number of _iconv()_ errors if the site is in latin-1 encoding. Switch to [UTF-8][5] instead or wait until [bug 201][11] is resolved. 

I needed to also install the [mbstring PHP extension][10] for the indexer to work.

## Deploy the search engine

Once the site has been reindexed, the only thing needed for setting up the search engine is to create a new topic handled by the _midcom.helper.search_ component.

After that, just run searches and enjoy!

**Note:** if content is edited outside MidCOM using tools like [Aegir][12], you might want to run the reindexing command from cron periodically to prevent search index corruption. Content edits made in Aegir do not currently update the index.

[1]: http://www.midgard-project.org/projects/midcom/download/2.3.html
[2]: http://www.kaffe.org/ftp/pub/kaffe/binaries/linux/
[3]: http://pear.php.net/package/PHP_Compat
[4]: http://www.midgard-project.org/
[5]: http://www.midgard-project.org/documentation/concepts/i18n/
[6]: http://www.midgard-project.org/documentation/installation/additional-packages.html
[7]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_4/the-midcom-indexer.html
[8]: http://www.apache.org/dyn/closer.cgi/jakarta/lucene/binaries/
[9]: http://java.sun.com/j2se/1.4.2/download.html
[10]: http://fi2.php.net/manual/en/ref.mbstring.php
[11]: http://midcom.tigris.org/issues/show_bug.cgi?id=201
[12]: http://www.midgard-project.org/projects/aegir/