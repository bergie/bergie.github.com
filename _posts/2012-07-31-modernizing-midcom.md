---
title: Modernizing MidCOM
location: Berlin, Germany
layout: post
categories:
  - midgard
published: false
---
For those who haven't been following the [Midgard](http://midgard-project.org/)-land, there have been some interesting developments recently. The [long-term supported](http://bergie.iki.fi/blog/long-term_support_for_midgard-ragnaroek_is_here/) Ragnaroek branch of [Midgard1](http://midgard-project.org/midgard1/) is slowly fading away, and much of the recent activity has focused on making [Midgard2](http://midgard-project.org/midgard2/) available via the [PHPCR](http://midgard-project.org/phpcr/) standard, and on the new [Create.js](http://createjs.org/) inline editing tool.

At the same time the installation story of Midgard2 has greatly improved, with for instance [Ubuntu](http://www.ubuntu.com/) 12.04 LTS providing it straight from the [distribution's package repositories](http://packages.ubuntu.com/search?keywords=midgard&searchon=names&suite=precise&section=all). And [Andreas Flack](http://www.iks-project.eu/community/people/andreas-flack) from Content Control has kept on working on MidCOM in [his own fork](https://github.com/flack/openpsa), slowly bringing it towards the state of modern PHP frameworks.

This post focuses on the new improved state of [MidCOM](http://midgard-project.org/midcom/), and how that will bring the _Midgard CMS story_ forward. So if you've been using Midgard and MidCOM, or if you've been curious about them but have never figured out how to exactly try, keep reading.

## Why MidCOM?

In 2012 the obvious question might be: _why bother with MidCOM at all?_ Haven't modern PHP frameworks like [Zend](http://framework.zend.com/) and [Symfony](http://symfony.com/) already made it obsolete?

Well, yes and no. MidCOM is a web framework that has been going on for quite a long time. And as such, it has organizations like Nokia, Lufthansa, and Aalto University that have big and important websites and applications running on it. And it has a lot of functionality needed for building content-oriented web services.

[An old saying](http://www.joelonsoftware.com/articles/fog0000000017.html) in the industry is that _it takes ten years to build great software_, and with MidCOM this very much holds true. While new technologies have emerged, few of them can match MidCOM when you get to details.

But at the same time, the long development and maintenance time of course imposes its own constraints. Programming practices, and especially the PHP ecosystem have evolved. And so it is imperative that MidCOM joins this new collaborative space where projects like [Symfony CMF](http://cmf.symfony.com/) allow us to share code and ideas.

## A better, cleaner MidCOM

Having been [launched in 2003](http://bergie.iki.fi/blog/why-midcom-rocks/), the original MidCOM was starting to show age. There has been a consensus in the Midgard world that several improvements would be needed, but so far the requirement for LTS stability has kept our hands tied.

[Midgard MVC](http://midgard-project.org/midgardmvc/) was created as the testbed for how a simpler framework would work with MidCOM's concepts. It proved a great framework for building web applications, as seen with the [Qaiku](http://www.qaiku.com/) microblogging service and the [Apps for MeeGo](http://communitizer.blogspot.de/2012/01/apps-for-meego.html) appstore. But for real content management, you'd still want the features that MidCOM provides.

If you want to modernize a big framework like MidCOM, the obvious first place to start is tests. You want enough coverage that when you change something, you can be sure that it won't break something else. Otherwise the refactoring effort would be like _dancing tango on a minefield_.

Flack's team has built an [extensive suite](http://travis-ci.org/#!/nemein/openpsa/builds/1684520) of PHPUnit tests for their MidCOM fork, and recently we made them run in the [Travis Continuous Integration service](http://travis-ci.org). With Travis we can easily cover not only the environments developers use, but also variants like different PHP versions. So yes, the new MidCOM supports PHP 5.4 without problems.

Support for Midgard2 was added into MidCOM already during my exploratory [Ragnaland work](http://bergie.iki.fi/blog/ragnaland_is_coming/) back in 2009, but was never finalized then. The renewed MidCOM development efforts have now brought this to the limelight, and now MidCOM runs just as well on both Midgard1 and Midgard2.

The migration to Midgard2 is critical, as the older Midgard generation is starting to show age, and will be EOLd next year. This will allow the Midgard community to focus on a single content repository implementation, and provides developers new powerful tools like [MidgardQuery](http://midgard-project.org/docs/api/core/ratatoskr/midgard-Midgard-Query.html).

Another important improvement is that now our dependency injection container is accessed through a regular static method instead of a custom superglobal. So, use `midcom::get('auth')` instead of `$_MIDCOM->auth`. This reduces our dependency on tweaks only a PHP C extension could provide.

Not all of the MidCOM components have been updated to the new APIs. For the less commonly used ones this is probably best to be handled on per-project basis anyway. More on that a bit later.

## Collaboration in the PHP space

After years of isolated projects, the PHP space is finally starting to come together. Partly this is due to projects adopting the [Composer](http://packagist.org/) dependency manager, and partly because there simply are more good-quality, reusable PHP libraries out there.

Much of this activity centers are Symfony. You may have seen projects like [Drupal](http://symfony.com/blog/symfony2-meets-drupal-8), [eZ Publish](http://share.ez.no/blogs/ez/an-explosive-cocktail-symfony-and-ez-publish-5-joining-forces), and [phpBB](http://area51.phpbb.com/phpBB/viewtopic.php?f=78&t=32433) announcing that they're porting their applications on top of shared Symfony2 Components. Efforts like Symfony CMF and [PHPCR](http://phpcr.github.com/) aim to provide even better building blocks for content-oriented PHP applications, and so I'm sure we'll see even more movement in this space.

With Midgard we've also been eager adopters of this new collaborative mindset. We made Midgard2 available [via the PHPCR API](http://midgard-project.org/phpcr/), and made the [Create.js](http://createjs.org) editing interface so generic that projects like Symfony CMF, OpenCms, and TYPO3 have been able to adopt it.

We've also done several explorations of how rebasing MidCOM on Symfony Components might look. The initial approach was the [MidgardMidcomCompatBundle](https://github.com/bergie/MidgardMidcomCompatBundle), a Symfony2 library that allows running MidCOM components inside a regular Symfony application.

The compatibility bundle work gave us a quite good idea how to map concepts between MidCOM and Symfony2. There is quite a lot of overlap! Now that we have a good, stable and tested base with the new MidCOM, you can expect a lot more to happen in this space.

Using Composer for MidCOM installations has already provided an unexpected benefit: we were able to remove MidCOM's own URL generation library, and start reusing the [one from Midgard MVC](http://packagist.org/packages/midgard/midgardmvc-helper-urlize). Eventually functionalities like access controls, i18n, and routing are likely to follow suit.

## New application structure

The traditional way of building Midgard applications was to keep everything in the database: the code, the content, and the templates. This was great for our original usecase of less technical users that needed to edit things without a shell or FTP access.

At the same time, it unfortunately made Midgard applications very hard to manage using standard version control tools. There were scripts for using Midgard's replication tools to import and export data from the file system, but this obviously wasn't enough: _programmers want to use their favourite editor, not a textarea_.

The first step towards the files was taken when MidCOM 2.0 [migrated its codebase](http://bergie.iki.fi/blog/2004-09-08-001/) to the filesystem. But even then things like configuration and templates have remained there.

With the new MidCOM we aim to change this, and bring everything needed to bootstrap and develop and application to standard, version-controllable files. _Content remains in the Midgard2 content repository, but everything related to running code should be loaded from files._

Inspired by the [Symfony Standard Edition](https://github.com/symfony/symfony-standard/) and the [CMF Sandbox](https://github.com/symfony-cmf/cmf-sandbox), we've built a new [MidCOM Project Template](https://github.com/flack/midcom-project-template) to guide developers to this new approach. The Project Template provides a simple, standardized structure for your MidCOM applications:

* `config` for MidCOM, Midgard, and component configuration, and for the MgdSchemas
* `src` for application-specific components
* `vendor` for common components and libraries, managed by Composer
* `theme` for application's layout themes
* `web` for the MidCOM rootfile and static files like CSS and images

For long-time MidCOM users, the main point here is moving component configuration from `sitegroup-config` snippets to the `config` directory, and the Midgard2 style templates to the `theme` directory.

As soon as the Project Template stabilizes, you'll be able to bootstrap new MidCOM projects simply with:

    $ composer create-project midgard/midcom-project-template myproject

This will perform all the necessary steps from fetching package dependencies to creating the project structure and configuring a Midgard2 database. The resulting project can then be managed using your favourite version control system.

## Easiest setup ever

Improving MidCOM itself is not enough, however. We also need to improve the life of the developers by making it easier to manage dozens of active projects.

[Vagrant](http://vagrantup.com/) provides a very useful tool for this. Designed exactly for software developers who need to deal with different deployment environments, it makes managing local virtual machines a snap.

I feel strongly that this is the right way to run and test applications. Instead of managing your development environments manually, let Vagrant build you virtual machines that closely match the actual deployment environments, without the risk of messing up your own computer, and at the same time allowing you to keep working with your normal development tools.

Vagrant is essentially a wrapper on [VirtualBox](https://www.virtualbox.org/) which provides handy [command-line tools](http://vagrantup.com/v1/docs/commands.html) for creating and starting and stopping virtual machines. It also comes with a full integration with the [Puppet](http://puppetlabs.com/) configuration management system that allows us to do the full setup needed for MidCOM on the first run.

The MidCOM Project Template includes a [ready-made Vagrant setup](https://github.com/flack/midcom-project-template/tree/master/setup/vagrant). You simply have to go to the `setup/vagrant` folder, and run:

    $ vagrant up

This is a great time to get some coffee. The first Vagrant VM initialization will take quite some time, as it needs to fetch a Ubuntu image, and run all the MidCOM setup on it.

In the end of the process you will have _a fully configured MidCOM setup with Midgard2 and PHP 5.3_. Just point your browser to <http://localhost:8181> and start using it!

If the complexity of the Midgard CMS stack has been putting you off, _this is a good way to get started_. And experienced developers ought to value the complete isolated environment this approach provides to each MidCOM project.

## Building a migration path

## Next steps

_Written on a hot summer evening on the terrace of the Helion pub in Wilmersdorf, after a long workday in Kreuzberg._
