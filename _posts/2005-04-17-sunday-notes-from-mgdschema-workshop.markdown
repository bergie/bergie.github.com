---
  title: "Sunday Notes from MgdSchema Workshop"
  categories: 
    - "midgard"
  layout: "post"

---
## Midgard Query Builder

[Jukka][1] developed a new query builder addition to the [MgdSchema][2] system that enables Midgard developers to easily optimize the SQL queries used in their applications.

![Jukka's Query Builder presentation](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/MgdSchema_Workshop_Query_Builder.jpg)

Currently the Query Builder is available in the Midgard C API, and the PHP mapping should be relatively easy to do. [Piotras][3] or Jukka will implement it next week.

The PHP API will provide a MidgardQueryBuilder class which works like the following:

	<?php
	// Instantiate the Query Builder for seeking MidgardArticles
	$query = new MidgardQueryBuilder("MidgardArticle");

	// Next add the SQL constraints you need

	// List articles only from specific topic
	$query->addConstraint("topic", "=", $topic->id);

	// List only articles that have been approved since some timestamp
	$query->addConstraint("approved", ">", $starting_time);

	// Order the articles based on their approval time
	$query->addOrder("approved", "DESC");

	// Get only 20 articles for this particular view
	$query->setLimit(20);

	// Start from the Nth page of this article list
	$query->setOffset($_REQUEST["startfrom"]);

	// Execute the query returning an array of matching MidgardArticle objects
	// The MidgardArticles are the full article objects with all regular methods
	$articles = $query->execute();

	if (!$articles)
	{
		// Handle error
	}

	// And then display your articles
	print_r($articles);
	?>

Once the Query Builder is available for PHP, we can start really developing __Midgard2__. One of the tasks I'm eager to begin is developing a compatibility layer of the [Classic Midgard API][4] in PHP. [Midgard Lite][5] already has a 70% complete implementation of the API in pure PHP that will be easy to modify to use the Query Builder instead of [DB_DataObject][6]. And when we have the API implemented in PHP, we can start removing huge chunks of legacy code from midgard-php.

## Java in Midgard

While [PHP][7] is still the web development language of choice in [Midgard CMS][8], Java programming language support is also rising. Jukka has already [implemented][9] support for the [Java Content Repository][10] standard. JCR has been originally developed by [Day Software][11] in Switzerland as a generic content management API, the "[JDBC of Content Management Systems][12]".

![Site building tutorial](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/MgdSchema_Workshop_Sitebuilders.jpg)

### JSR-170, the Java Content Repository

With JCR, the content repository is divided into _workspaces_ that in Midgard are represented by [Sitegroups][13]. JCR spec also defines a method for copying content between workspaces that is not yet implemented in [midgard-java][14]. However, this could be interesting future way to implement [staging-live][15].

Within the workspace the content is managed as a tree. With Midgard, there is a virtual root node, and under that are the content roots like [topic][16] and [style][17] trees. Non-hierarchical structures are stored as _references_.

JCR provides an API for traversing the content hierarchy, and making modifications to different properties. The modifications can be collected into a set of atom operations that can be saved together. JCR would also provide real transactions, but these are not yet supported by Midgard.

Midgard JCR support also supports [XPath][18] queries and XML import/export we already utilize in the [Exorcist][19] cross-CMS content migration tool. JCR also has an introspection system that can be used by clients for creating custom administrative interfaces that automatically support all new content types in the repository.

With the JCR Server system, the Midgard repository is also available through [RMI][20] and [WebDAV][21].

![Preparing for the sightseeing flight](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/MgdSchema_Workshop_Sightseeing_Flight.jpg)

The big question with JCR is whether the standard will be adopted by different CMS developers. If it catches up, the [benefits][22] will be big especially in creating cross-CMS tools. IBM has [already announced][23] support for the standard, and it has also been noted by [OSCOM][24].

### Midgard-java installation

The suggestion for making JCR installation easier would be to add it to the [Midgard Core package][25]. The Java Native Interface would then be compiled by default, and server administrator could simply enable JCR by installing a Java Virtual Machine.

Another consumer for a JVM in Midgard is the [Lucene-based][26] [indexing system][27] in MidCOM, and the installation locations and dependencies should be synchronized between the two.

Jukka will try to produce an installation HOWTO for setting up _midgard-java_ together with the JCR Server next week.

### MidCOM indexing with Lucene

[MidCOM][28] uses a [Lucene-based indexer][29] for providing a full-text search system that provides a "live" index into the site data. All MidCOM components notify the indexer every time they change the data, meaning that all searches made in the system will return current content.

With the search system, users can easily query either text from anywhere in the Midgard content structure, or using [advanced syntax][30] for searching based on specific content fields or value ranges.

![Discussion after sauna](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/MgdSchema_Workshop_After_Sauna.jpg)

Documents are organized within the MidCOM index based on their _resource identifier_, which is typically the [object GUID][31]. The fields are indexed separately, but they are also combined into the _content_ field for the regular full-text search of all data. For native MidCOM content, the _topic_ field is also stored into the index. External indexed data like [OpenPSA content][32] should not utilize that field.

The index also contains metadata like creation, revision and indexing timestamps. These can be used for limiting searches.

Indexing is handled by PHP class _midcom\_services\_indexer\_document_, and its more contextual children for handling [datamanager][33] documents and [file attachments][34]:

	<?php
	// Get the indexer service from MidCOM
	$indexer = & $GLOBALS["midcom"]->get_service('indexer');

	if ($_REQUEST["action"] == "update")
	{
		// Pass your datamanager data array to be indexed
		$indexer->index($datamanager);
	}
	elseif ($_REQUEST["action"] == "delete")
	{
		// Drop the document from the index
		$indexer->delete($article->guid());

		// Delete the actual content object
		midcom_helper_purge_object($article->guid());
	}
	?>

The datamanager schemas can [contain some hints][35] for the indexer on how to handle them.

MidCOM indexer is relatively [easy to set up][36], but needs yet to be integrated into [Midgard packages][37]. The suggested directory for the index is _$MIDGARD\_PREFIX/share/midgard/indexer/$INDEX\_NAME_.

The index can be accessed in two different ways. The _midcom.helper.search_ component provides a normal site search engine with both a [simple interface][38] and an [advanced search][39] with support for limiting the search based on content types, topic trees and modification dates. The simple search form can be easily included into the site layout using MidCOM's [dynamic_load][40] method.

The other method is by using the [midcom.services.indexer][41] API. For example, to list all images in a photo gallery taken with ISO rating 400, the code would be:

	<?php
	// Search for value "400" in schema field "ISO"
	$query = "ISO:400";

	// Search only in photo galleries
	$query .= " AND __COMPONENT:net.siriux.photos";

	// Search only photos taken since $date
	$query .= " AND __CREATED > $date";

	// Execute the query with Lucene
	$result = $indexer->query($query);

	// $result contains all matches as midcom_services_indexer_document objects
	// sorted by relevance
	print_r($result);
	?>

At the moment the indexer is only available within MidCOM context, but [Torben][42] is working on adding support for external Midgard/PHP applications.

[1]: http://snip.yukatan.fi/space/start
[2]: http://www.midgard-project.org/midcom-permalink-43cfefd2ab4ce5fe95dbfc1741e304ef
[3]: http://www.nemein.com/people/piotras/
[4]: http://www.midgard-project.org/midcom-permalink-fb9a9fca8e8c29b35a875feb73cb96c0
[5]: http://midgardlite.tigris.org/source/browse/midgardlite/src/
[6]: http://pear.php.net/package/DB_DataObject
[7]: http://www.php.net/
[8]: http://www.midgard-project.org/cms/
[9]: http://snip.yukatan.fi/space/start/2005-03-23/1#Midgard-JCR_demo_browser
[10]: http://www.jcp.org/en/jsr/detail?id=170
[11]: http://www.day.com/en.html
[12]: http://snip.yukatan.fi/space/start/2005-02-04/1#The_JDBC_of_Content_Management_Systems
[13]: http://www.midgard-project.org/midcom-permalink-f624e440f76a466d5870374bca8e1449
[14]: http://midgard.tigris.org/source/browse/midgard/src/apis/java/
[15]: http://www.ngogeeks.com/node/136
[16]: http://www.midgard-project.org/midcom-permalink-f47e4764bfcd5f897bd6af53ea51a75f
[17]: http://www.midgard-project.org/midcom-permalink-2732f47bbdf5a868fd7811d696886149
[18]: http://www.w3schools.com/xpath/xpath_intro.asp
[19]: http://snip.yukatan.fi/space/start/2005-02-21/1#CMS_migration_with_the_Exorcist
[20]: http://jcr.yukatan.fi/rmi/
[21]: http://mail-archives.eu.apache.org/mod_mbox/incubator-jackrabbit-dev/200410.mbox/%3ceb7e219041026064862d367b8@mail.gmail.com%3e
[22]: http://snip.yukatan.fi/space/start/2005-02-04/2#Benefits_of_a_JCR_adapter
[23]: http://snip.yukatan.fi/space/start/2005-02-23/1#IBM_planning_to_adopt_JCR
[24]: http://www.oscom.org/standards/
[25]: http://www.midgard-project.org/midcom-permalink-c477cb2263057e6c32fef6c364b21a1f
[26]: http://lucene.apache.org/java/docs/index.html
[27]: http://bergie.iki.fi/midcom-permalink-fcd64afd3d4a119759535c28bbef364c
[28]: http://www.midgard-project.org/midcom-permalink-85e86ba5433b5566da29fe9b32e2a425
[29]: http://www.nathan-syntronics.de/midcom-permalink-68666d1ae755a05479a50b83ae89aef4
[30]: http://lucene.apache.org/java/docs/queryparsersyntax.html
[31]: http://www.midgard-project.org/midcom-permalink-ad4daed9d56f1ca0049b7ce116efc197
[32]: http://www.openpsa.org/
[33]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
[34]: http://www.midgard-project.org/midcom-permalink-18279cef4fb7583bc942c0e3c2067c07
[35]: http://www.nehmer.net/~torben/midcom-docs/midcom.services/midcom_services_indexer_document_datamanager.html
[36]: http://bergie.iki.fi/midcom-permalink-656cda78fb6086ecad96e6d2f86bcb49
[37]: http://www.midgard-project.org/midcom-permalink-759af20dabbe737403d65e822a30f2bd
[38]: http://www.midgard-project.org/search/
[39]: http://www.midgard-project.org/search/advanced.html
[40]: http://www.slideml.org/files/slidesets/499/slide_24.html
[41]: http://www.nehmer.net/~torben/midcom-docs/midcom.services/midcom_services_indexer.html#query
[42]: http://www.nathan-syntronics.de/midcom-permalink-452393c0de662104d98a9608d28c7ed0
