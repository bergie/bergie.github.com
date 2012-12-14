---
  title: "Introduction to Midgard's database abstraction system"
  categories: 
    - "midgard"
  layout: "post"

---
I've noticed this is something I end up showing to people in every conference, and therefore probably makes sense to blog it.

[Midgard][1] abstracts database storage on C library level, and provides [a set of classes and interfaces][3] for accessing it on PHP extension level. PHP scripts cannot bypass the C-level abstraction and don't get information about the database connection or passwords being used. While this sacrifices some flexibility, it also helps a lot with consistency and security.

## Defining database structure

Developers can define database structures to Midgard as [MgdSchema files][2]. Midgard ships with some pre-defined types like Articles and Persons, and others can be shipped in [component packages][4].

MgdSchema files are XML:

    <type name="org_routamc_statusmessage_message" table="org_routamc_statusmessage_message" parent="midgard_person" parentfield="person">
        <property name="id" type="integer" primaryfield="id"/>
        <property name="status" type="text" />
        <property name="person" link="midgard_person:id" reverse="no" type="integer" parentfield="person"/>
        <property name="source" type="string" />
        <property name="externalid" type="string" />
    </type>

Actual MySQL database tables are generated from these files by the [midgard-schema tool][7]:

    mysql> describe org_routamc_statusmessage_message;
    +-------------------------+--------------+------+-----+---------------------+----------------+
    | Field                   | Type         | Null | Key | Default             | Extra          |
    +-------------------------+--------------+------+-----+---------------------+----------------+
    | id                      | int(11)      | NO   | PRI | NULL                | auto_increment | 
    | status                  | longtext     | NO   |     |                     |                | 
    | externalid              | varchar(255) | NO   |     |                     |                | 
    | source                  | varchar(255) | NO   |     |                     |                | 
    | guid                    | varchar(80)  | NO   | MUL |                     |                | 
    | sitegroup               | int(11)      | NO   | MUL |                     |                | 
    | metadata_creator        | varchar(80)  | NO   |     |                     |                | 
    | metadata_created        | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_revisor        | varchar(80)  | NO   |     |                     |                | 
    | metadata_revised        | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_revision       | int(11)      | NO   |     | 0                   |                | 
    | metadata_locker         | varchar(80)  | NO   |     |                     |                | 
    | metadata_locked         | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_approver       | varchar(80)  | NO   |     |                     |                | 
    | metadata_approved       | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_authors        | longtext     | NO   |     |                     |                | 
    | metadata_owner          | varchar(80)  | NO   |     |                     |                | 
    | metadata_schedule_start | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_schedule_end   | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_hidden         | tinyint(1)   | YES  |     | 0                   |                | 
    | metadata_nav_noentry    | tinyint(1)   | YES  |     | 0                   |                | 
    | metadata_size           | int(11)      | NO   |     | 0                   |                | 
    | metadata_published      | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_score          | int(11)      | NO   |     | 0                   |                | 
    | metadata_imported       | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_exported       | datetime     | NO   |     | 0000-00-00 00:00:00 |                | 
    | metadata_deleted        | tinyint(1)   | YES  |     | 0                   |                | 
    | person                  | int(11)      | NO   | MUL | 0                   |                | 
    +-------------------------+--------------+------+-----+---------------------+----------------+
    28 rows in set (0.03 sec)

As you can see, lots of metadata columns get added to the definition we made in XML. In addition to metadata, there is also a GUID field and a sitegroup field. Sitegroups are used for controlling access to content in different "virtual databases" in same Midgard instance.

## Accessing storage in PHP

When Apache is started Midgard generates PHP classes for all installed MgdSchema types. The class provides the needed I/O functionality.

Here is some example code using the Article object that ships with Midgard. It is hopefully understandable by itself:

    <?php
    // Get empty article instance
    $article = new midgard_article();
    
    // Set some data into it
    $article->title = 'Headline';
    $article->content = '<p>This is my interesting article</p>';
    
    // Store it in database
    if (!$article->create())
    {
        echo "Failed storing the article \"{$article->title}\", reason " . mgd_errstr();
        // Note: Midgard 2 raises exceptions in these situations
    }
    
    // Extend the object. This will be stored in the record_extension table
    $article->set_parameter('domain', 'name', 'value');
    
    // Switch language context, IDs point to midgard_language records
    mgd_set_lang(58);
    
    // Set translated data
    $article->title = 'Otsikko';
    $article->content = '<p>Tämä on mielenkiintoinen artikkelini</p>';
    
    // Store it in database
    if (!$article->update())
    {
        echo "Failed updating the article \"{$article->title}\" in language {$_MIDGARD['lang']}, reason " . mgd_errstr();
        // Note: Midgard 2 raises exceptions in these situations
    }
    
    // Then get rid of the article translation of language 58 that we just made
    $article->delete();

    // Switch back to default language context
    mgd_set_lang(0);

    // Delete also the default article translation, therefore deleting the whole article
    $article->delete();
    ?>

## Making queries

Midgard provides two classes for making queries in the database: [Query Builder][6] and [Collector][5]. Both classes have same query features, but differ in that `midgard_query_builder` returns full MgdSchema objects and `midgard_collector` returns array of values requested by the user.

Here is a simple example:

    <?php
    // Query for full midgard_article objects
    $qb = new midgard_query_builder('midgard_article');
    
    // WHERE title LIKE 'Midgard sucks%'
    $qb->add_constraint('title', 'LIKE', 'Midgard sucks%');
    
    // ORDER BY metadata_published
    $qb->set_order('metadata.published');
    
    // Run the query, return matching articles
    $articles = $qb->execute();
    
    // Iterate through the article objects
    foreach ($articles as $article)
    {
        // These are full MgdSchema objects so we can do things with them
        $article->delete();
    }
    ?>

More complex things like [querying by linked information][13] is also possible.

## What about MidCOM DBA?

[MidCOM][8] adds [an abstraction layer][9] on top of the regular MgdSchema and query classes by extending them on PHP level. This is where lots of additional functionality happens:

* [ACL checks][12] are done on every I/O step
* Metadata datetime properties are translated to timestamps (in future [DateTimes][10]) for easier PHP usage
* Content changes are [versioned in RCS][11]

To make MidCOM DBA aware of new MgdSchema types, a component has to define a `midcom_dba_classes` configuration file, and refer to it in the manifest:

    array(
        'table' => 'org_routamc_statusmessage_message',
        'old_class_name' => null,
        'new_class_name' => 'org_routamc_statusmessage_message',
        'midcom_class_name' => 'org_routamc_statusmessage_message_dba'
    ),

When MidCOM refreshes its cache, it will create a new MidCOM DBA class `__org_routamc_statusmessage_message_dba` that will extend the `org_routamc_statusmessage_message` MgdSchema class.

If a component developer wants to add additional business logic to the object, he can then define his own `org_routamc_statusmessage_message_dba` class in the component that will extend the `__org_routamc_statusmessage_message_dba` class.

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/documentation/mgdschema-file/
[3]: http://www.midgard-project.org/documentation/mgdschema-in-php/
[4]: http://www.midgard-project.org/documentation/midcom-component-packaging/
[5]: http://www.midgard-project.org/documentation/php-midgard_collector/
[6]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[7]: http://www.midgard-project.org/documentation/command-line-tools-midgard-schema/
[8]: http://www.midgard-project.org/documentation/midcom/
[9]: http://www.midgard-project.org/documentation/midcom-dba-object-api/
[10]: http://maetl.coretxt.net.nz/datetime-in-php
[11]: http://www.midgard-project.org/documentation/midcom-services-rcs/
[12]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_6/introduction-into-acl.html
[13]: http://www.midgard-project.org/documentation/midgardquerybuilder-complex-constraints/