---
  title: "Interested in the Zend PHP Framework"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
Zend, IBM and others have announced a [collaboration project][1] to create a [Zend Framework][2] using the following mission statement:

> *   Keep PHP competitive among other technologies including Ruby-on-Rails, Spring, .NET, etc..
> * No framework today supports extreme simplicity
> * Provide "clean" IP to enable commercial use
> * Structured development process will lead to uniform code base
> * Take full support of PHP 5

The general community feeling on [Planet PHP][3] seems to be [quite scared][31], as the new framework "threatens" to change the way PHP applications are developed, by providing a common set of tools and development methodologies. This is obviously a big change for everybody used to work either in the [free-form fashion][5], or using one of the [community-built frameworks][4].

## The need for consistency

However, even though I'm a developer in one of the [PHP application frameworks][6], I see the need for some standardization. Now the common ground shared between all the different PHP frameworks is just the language itself, forcing all projects to focus on building lots of low-level plumbing infrastructure instead of focusing on the features that could differentiate the applications.

Each application project or framework having to write their own low-level services means that by large the applications are not compatible with each other. If you want to for instance run a site that would contain blogs (using [Wordpress][10]), forums (using [SM Forum][11]) and photo galleries (using [Gallery][12]), each of them would most likely use different user and permission system, style templates and configuration tools.

This kind of inconsistency has lead to the state where each framework and CMS [rolls their own][13] instead of using the best-of-breed PHP applications. This means huge amount of wasted effort, and an opportunity for other programming environments like [Ruby on Rails][14] to pass PHP frameworks in functionality and appeal.

This situation is similar to the effort wasted by all the different Linux [desktop environments][15] in the past. However, instead of two or three serious contenders, the ease of PHP development has given rise to hundreds of different frameworks and [content management systems][16]. In the desktop environment scene, the different projects are [already collaborating][17] on lots of the [base infrastructure][18], and are now starting to do the same in the [look-and-feel space][19]. 

If done well, the Zend Framework _could_ do the same for PHP projects. If done badly, it would merely introduce a yet another framework to the space.

## Midgard point-of-view

Looking at the still-vapourwareish Zend Framework from the point-of-view of the [Midgard Project][20], I see the possibility of benefitting from it. Currently [MidCOM 2.5 framework][21] is about 75k lines of code. Much of this is because functionalities like [ACL][22] and [style engine][23] have not yet been rolled into the [Midgard Core][24], but also because lots of other base infrastructure like localization must still be done by MidCOM.

Now, if you think about Midgard, it consists of several separate parts:

### Data abstraction layer

[MgdSchema][25] allows developers to abstract the database storage, and use [query tools][26], [access controls][22] and [extensibility][23] with it. As common database abstraction is one of the Zend Framework goals, the way to access these tools would possibly change for PHP-level Midgard. But as Midgard's scope extends outside the PHP world also to [Java Content Repositories][27], using a straight SQL abstraction system would be out of question. It remains to be seen, if Midgard's database abstraction layer could be used as a storage provider for the Zend Framework.

### Style Engine

Templating and page assemply have traditionally been the strong points of Midgard, as [often][34] [noted][33] by [CMS Watch][35]. The power of it was slightly broken by the double standard imposed by MidCOM, but this is now getting [wrapped back together][36].

The style engine and [URL handling][37] of Midgard is definitely something that should be still possible to keep as-is, even if something like Zend Framework would be used beneath.

### User interfaces

The user interface layer would benefit a lot of collaboration and shared tools. We're planning to follow [Tango][19] visuals and the [GNOME Human Interface Guidelines][38] to quite a big degree in Midgard. This part of UI is best collaborated using shared CSS rules and XHTML naming standards like [Microformats][40].

However, form handling and [AJAX][41] are something where the Zend Framework could make things easier, consistent and [more secure][39].

### Development tools

The Zend Framework also has the possibility of making [Eclipse][7] the standard development environment for PHP development. As this is already the [recommendation for Midgard developers][8], we are obviously eager to see the rise of [better PHP tools][9] for it.

## So, what's going to happen?

The Zend Framework project seems to be still a quite early stages, and despite claims that some code and specs exist, they still remain to be seen by the PHP developer community. Even in this stage, it would be crucial for the Zend Framework project to be available for peer review. Otherwise, it will be seen as just a corporate intrusion into the formerly open PHP framework space. Statements like this don't help much:

> We're now working on setting up the collaboration infrastructure and engagement guidelines. We expect to have them ready by January 2006. In the meantime, we will use this medium to share progress on the project development.

I feel some urgency in seeing what is going on and planned in the project. The Midgard community is now starting to refactor the MidCOM framework to work on [PHP5][30], and to utilize new language features like interface classes and exceptions. At the same time we're starting to utilize functionalities moved from MidCOM to Midgard Core. This would be the optimal spot to take the Zend Framework into mind if it was available, making MidCOM even more consistent with the [KISS ideology][32].

As we in [Midgard community][29] have quite a bit of experience with PHP component architecture, and with following [strict coding standards][28], we could have some things to contribute to the [PHP Collaboration Project][1], but unfortunately the process is still closed.

[1]: http://www.zend.com/collaboration/
[2]: http://www.zend.com/collaboration/framework-overview.php
[3]: http://www.planet-php.net/
[4]: http://www.hotscripts.com/PHP/Scripts_and_Programs/Development_Tools/Application_Framework/
[5]: http://an9.org/devdev/why_frameworks_suck?sxip-homesite&checked=1
[6]: http://www.midgard-project.org/documentation/midcom/
[7]: http://www.eclipse.org/
[8]: http://www.midgard-project.org/documentation/using-eclipse-for-midcom-development/
[9]: http://www.phpeclipse.de/tiki-view_articles.php
[10]: http://wordpress.org/
[11]: http://www.simplemachines.org/
[12]: http://gallery.menalto.com/
[13]: http://bergie.iki.fi/midcom-permalink-551a106fbbce70d7478a0fa434cc48bf
[14]: http://www.rubyonrails.org/
[15]: http://linuxresource.com/X_Window_System/Desktop_Environments/index.php
[16]: http://www.hotscripts.com/PHP/Scripts_and_Programs/Content_Management/
[17]: http://freedesktop.org/wiki/
[18]: http://freedesktop.org/wiki/Standards
[19]: http://www.tango-project.org/
[20]: http://www.midgard-project.org/
[21]: http://www.midgard-project.org/development/projects/midcom/
[22]: http://www.nathan-syntronics.de/midcom-permalink-7105771203e762aa01902dbdb96150ca
[23]: http://www.midgard-project.org/midcom-permalink-7856ea3bafeccf218226ec3cd8f05df8
[24]: http://www.midgard-project.org/midcom-permalink-c477cb2263057e6c32fef6c364b21a1f
[25]: http://www.midgard-project.org/documentation/mgdschema/
[26]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[27]: http://www-128.ibm.com/developerworks/java/library/j-jcr/
[28]: http://www.midgard-project.org/midcom-permalink-2e4394b43693dc6c5c6b7ae77037b4c3
[29]: http://www.midgard-project.org/community/
[30]: http://midcom.tigris.org/issues/show_bug.cgi?id=284
[31]: http://blogs.phparch.com/mt/?p=108
[32]: http://www.cmswatch.com/Trends/561-Discussing-KISS-and-OSS-in-polite-company?source=RSS
[33]: http://www.cmswatch.com/Feature/131-CMS-Marketplace
[34]: http://www.cmswatch.com/Feature/83-Supergroup
[35]: http://www.cmswatch.com/Feature/96-2nd-Annual-Supergroup
[36]: http://www.midgard-project.org/development/mrfc/0022.html
[37]: http://www.midgard-project.org/documentation/concepts-host_and_page/
[38]: http://developer.gnome.org/projects/gup/hig/
[39]: http://shiflett.org/archive/164
[40]: http://www.microformats.org/
[41]: http://bergie.iki.fi/links/ajax.html