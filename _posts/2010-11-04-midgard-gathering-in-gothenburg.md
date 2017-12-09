---
title: Midgard Gathering in Gothenburg IT University
location: Gothenburg, Sweden
layout: post
categories:
  - midgard
source: "http://www.qaiku.com/channels/show/midgard/view/67d2ca6ae7f411df8b2a53b8481496ff96ff/"
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/8ff6591ee9b911df83e7dbe57b7f50a850a8.png'
---
So far on the agenda:

* Midgard3 API review
* Making OpenPSA installable
* Midgard3 installation
* Object Manager for MVC
* Midgard website plan

Plan for making OpenPSA installable:

First phase: running OpenPSA on Ratatoskr instead of Ragnaroek

* Reorganize OpenPSA and dependencies (MidCOM core, DM2 etc) to a single Git repository in the proper folder structure (`/org/openpsa/core` instead of `org.openpsa.core`)
* Write a Midgard2 RootFile for running OpenPSA
* Install procedure:
  - Install php5-midgard2
  - Get OpenPSA from Git
  - Copy or symlink MgdSchemas
  - Set up database with a PHP script
  - Create topic tree
  - Set up appropriate RewriteRule
  - Run

Second phase: running OpenPSA under MVC instead of MidCOM

* Write Midgard MVC component provider for running MidCOM-style components
* Implement MidCOM interfaces required by OpenPSA components into a wrapper that maps them to appropriate MVC services
* Implement DM2 compatibility layer on top of midgardmvc_helper_forms
* Set up the necessary application.yml for running OpenPSA
* Result: way faster MidCOM

Just installed Midgard3. You need [latest Vala](http://live.gnome.org/Vala/Release) to build it, but later we'll publish tarballs with the Vala-generated C so that won't be necessary.

I have just stored generic RDF into Midgard3 triplestore :-)

[Midgard3 API](http://www.midgard-project.org/api-docs/midgard/core/unstable/midgard3/MidgardCR/index.htm) explanations from Piotras:

* You have Models that are sort of Metaclasses that describe something
* Then you have Managers that actually manage your data. ContentManagers handle content types, StorageManagers their storage etc
* In Midgard2 you had a midgard_connection singleton, in MidgardCR you have StorageManagers that handle their own connections
* From StorageManager you can get a Model Manager that knows how to store models using that particular storage (file formats, database table creation)
* Then you create an ObjectModel for your data, including defining possible properties you want your Model to have
* If you want to make your Model persistent, you need to create a StorageModel for it. In the Storage Model you define you you want things to be stored. With an SQLTableModel you match properties of an ObjectModel to database columns
* After this you send provide your Storage Models to a StorageModelManager and tell that to create the storage
* Then you have your database and models set up and you can start working with your persistent objects

ObjectModels are not needed for creating persistent objects, but ObjectModels are persistent by themselves, so you can share the definitions of your Objects between application processes. So in nutshell: ObjectModel is a class definition, and StorageModel is a serialization recipe for objects.

This means we can in the future implement other StorageModels than just SQL. Want to talk to some NoSQL database, LDAP, or even just flat files?

Simplified example of the Midgard3 concepts:

    // Class would correspond to an ObjectModel
    class person
    {
        // ObjectPropertyModels for the ObjectModel
        public $firstname = '';
        public $lastname = '';
    }

    // Since we have a model we can instantiate it
    $person = new person();
    $person->firstname = 'Vali';

    // file_put_contents would in this case be a ContentManager as it knows how to store and access content
    // "/tmp/foo" would be a configuration of a StorageModel, and serialize() the way StorageModel deals
    // with serializing objects into the store
    file_put_contents('/tmp/foo', serialize($person));

Some results from Midgard3 API review:

* Rename ObjectModelProperty to ObjectPropertyModel
* Defining references in Models (see [example1](https://github.com/piotras/midgard-core/blob/master/src/vala/examples/example1.vala#L70)) needs clarification

Arttu comments:

> This sounds like an evil master plan to rule the world one day. Me likes. :)

> It is interesting in general to see that the trend has really been to create tools for data storage rather than CMS as it used to be still some 3-4 years ago. I wish we would one day still build the CMS around and I think that the problem is that we are often reaching for too much at once (at least when we have been doing planning) – even if we really have been scratching the surface.

> Come to think of it, Midgard3 is on its way and I haven't ever even used Midgard2 for anything. I think I am too comfortable in the solid grounds of Ragnaroek and need to get rid of those bounds. At least for now the end of the year seems relatively calm so I'd love to participate in some daytime hacking sessions for Midgard2 or Midgard3. 

I just got OpenPSA running on top of Midgard2, so there certainly is a migration path forward :-)

ApacheCon presentation slides about [Stanbol](http://www.slideshare.net/bdelacretaz/stanbol-apachecon2010bdelacretaz), the semantic engine that we will utilize in Midgard3 CMS

If beginning of December works for you, we have quite a bit to do with MVC and Aloha before the demo in the [IKS Amsterdam workshop](http://wiki.iks-project.eu/index.php/Workshops/EAworkshopAmsterdam) can happen.

This [semantic feature comparison table](http://wiki.apache.org/incubator/SemanticComparison) might be useful when prioritizing Midgard3 RDF features.

Piotras comments:

> There is one more advantage if you think about MidgardCR (Midgard 3). Thanks to GObject Introspection, you can run some app on top of Midgard and provide own implementation if it's needed. Full or partial.

Alexey comments:

> one more RDF example (the way I want API to be): <http://bit.ly/9RiE1R>

> updated example: <http://bit.ly/bir1AO>

Some additional status reports:

* OpenPSA (and therefore MidCOM) now works almost completely on Midgard2 (without Ragnaland/MVC), we still need content migration scripts for moving things from ML tables to the actual tables, and moving accounts from `midgard_person` to `midgard_user`
* We have new visual identity for different Midgard products, and Andreas has made sketches for the product websites
* We also have most of the functionality needed for actually running the websites
* Piotras and Alexey are looking today at lowering build requirements of MidgardCR so it could be built with stock Vala on Ubuntu

The OpenPSA Midgard2 porting progress can be followed in Flack's [GitHub repo](https://github.com/flack/openpsa)

Quick update on OpenPSA debian packaging: now the package installs and runs nicely. Remaining issue is with some parts of Debian Policy compliance. For example, we should use separately-packaged jQuery, Markdown etc. instead of our bundled copies.

Very initial Midgard3 CMS UI sketch:

![Midgard3 CMS UI](https://d2vqpl3tx84ay5.cloudfront.net/8ff6591ee9b911df83e7dbe57b7f50a850a8.png)
