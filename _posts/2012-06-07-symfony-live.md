---
title: Notes from Symfony Live 2012
layout: post
location: Paris, France
categories:
  - midgard
  - php
---
*This is a liveblog from the Symfony Live 2012 event, and will be updated as the conference progresses. You can also follow the `#Symfony_live` Twitter hashtag*

The Symfony Live event is held in the old Cite Universitaire building in Paris. While tomorrow the RER strike will make things slightly more complicated, more than 600 developers have made it here. A very active crowd. I even got to give a quick tutorial on Flow-Based Programming with PhpFlo/NoFlo during the first coffee break.

## Keynote

First session of the day was Fabian Potenciers's keynote on the community. The numbers there are simply staggering, as the PHP community seems to converge on this project:

* More than 1000 pull requests have been merged into Symfony2 since July 2011, from 250 different contributors
* Symfony is the most popular and active PHP project on GitHub, and 12th most popular GitHub project overall
* The Symfony website has had 1.5 million unique visitors in a year

According to the Symfony2 developer survey, a vast majority of the community is in Europe, and works in small companies. Most have also used WordPress or Drupal, which is great given that Drupal is now starting to use more and more of Symfony components. 74% of the developers use Linux or OS X for their developer work, which seems to conform to the conference audiences I've seen. For the people building the web, Windows PCs are a legacy curiosity. As developers are often the first wave of the technology adoption curve, this might be the reason why Microsoft feels the need to do [such drastic changes](/blog/how-do-i-turn-this-off/) in the next version of their OS.

Drupal starting to use Symfony components showcases one crucial advantage of the Symfony framework, in that it is constructed out of components tied together by dependency injection. These components are highly decoupled, and can be used without having to have the full framework. This way other PHP projects can replace some of their own code, like for example routing or form handling, with Symfony code. This means less code to maintain, and therefore less technical debt in the long run.

Out of Symfony's components, Drupal uses:

* HttpFoundation
* HttpKernel
* EventDispatcher
* ClassLoader
* DependencyInjection
* Yaml

Many of these would also make our older frameworks, like MidCOM and Midgard MVC a lot easier to maintain. And it would improve interoperability and code-sharing between us and the greater PHP world. Composer, the new packaging system used by Symfony and several other PHP projects should make it easy to manage such component dependencies.

The ideas of Decoupled Content Management seem to be reaching an audience here as well. So far everybody I've talked with has already known about Create.js. Tomorrow I'll be speaking about the big picture of decoupled CMS with PHPCR and Create, and Lukas will have a talk about the specific Symfony2 implementation of Symfony CMF.

SensioLabs, the company behind Symfony2, is providing Sensio Connect, a social website for finding and recognizing developers. The site has the merit badges you'd expect, and is available over both the web and a REST API. SensioLabs labs also has a developer certification programs. While I don't personally put much weight into official certifications, this can certainly help bigger companies in finding the right developers for their Symfony projects. In the Live conference there will be a chance to take the exam for 100 euros.

More Symfony conferences will also be coming to San Francisco, London, and Berlin.

## BBC's responsive website

Unfortunately I missed quite a lot of the BBC talk because of scheduling changes. But they indeed seem to have some interesting points:

* All requests go through Varnish to ensure the site is fast
* Data access happens through an API, so you can work with the same information whether you're writing PHP, JavaScript, or JavaScript
* Web design is done in a responsive way where the same pages can be delivered to desktops, mobile, and tablets with only some CSS and JavaScript changes

> Render templates and translation on the server, and keep them simple. JavaScript rendering can be slower

* BBC uses Zend Framework, but with Symfony's Dependency Injection Container added
* Symfony's Event Dispatcher allows decoupling the system so that some process can start in PHP, and then continue in JavaScript
* Dependency Injection and event-based programming allows BBC to replace their current implementation with Symfony piece-by-piece instead of having to do one huge rewrite
* Instead of large JavaScript frameworks, they used smaller separate JavaScript libraries like Reqwest, Qwery, Bonzo, Event Emitter, and Curl
* AMD (by way of RequireJS) allows the JavaScript dependencies to stay manageable

> jQuery is quite big, mostly because of animations and IE6 support, both of which we don't really need. We try to keep our JavaScript under 35K

Simple AMD module example:

    define(
  	  // dependencies, loaded locally to this module
	  ['vendor/reqwest', 'vendor/pubsub'],
	  function (reqwest, pubsub) {
	    // Code of a module
	  }
    );

BBC works in two-week sprints using Cucumber-based BBD. Their [Wally tool](https://github.com/BBC/Wally) gives a simple, end-user friendly overview on all their defined behaviors and their status. This way management can instantly see what is the status of various initiatives, and what is being worked on.

> I believe native apps have a place, but at the same time that it is possible to reuse our responsive pages inside them. Handling advertisements in responsive pages can be difficult

## Security on Symfony2

Authentication works in the following way:

* FirewallListener passes requests to FirewallMap
* FirewallMap passes requests to enabled listeners
* Listeners can be things like SessionAuthenticationStrategy and AuthSuccessHandler/AuthFailureHandler
* Actual authentication is handled by AuthenticationProvider which provides tokens that authentication strategies can use
* AuthenticationProviders can talk to UserProviders and UserCheckers, but these are not mandatory

Authorization (the actual permissions, _who can do what_) is handled separately from authentication:

* There is an AccessListener, SecurityContext, and MethodSecurityInspector
* MethodSecurityInspector can be used with PHP annotations to generate proxy classes for your code that handle security checks
* All of the components talk with an AccessDecisionManager, which allows Voters to vote whether a particular operation should be allowed
* There are voters like AclVoters that use a PermissionMap, RoleVoter that looks at user role, and AuthenticatedVoter that just cares whether there is an authenticated user
* ACLs can be provided by AclProviders
* Roles are provided by a RoleHierarchy
* There is also an ExpressionVoter that can replace all other voters. This allows faster authorization decisions by not having to load all the dependencies of the various other Voters

Expression authorization example with annotations:

    <?php
	class PostController
	{
		/**
		 * @PreAuthorize("isAuthenticated() && hasPermission("Edit", #post)")
		 */
	    public function postEditAction(Post $post) {}
    }

_I want to functionally test my application. How can I test parts that need a logged in user?_

If you're using Basic Auth, then just include authentication to your tests. Form-based authentication should also be part of a test suite, even if this can be slow.

_In my application I want to customize what happens when access is denied_

Technically you could listen for AccessDeniedExceptions, but this is not a good idea as it can either end up in real access denied, but it can just as well end up providing the user a way to log in, depending on your configuration. You may also have multiple firewalls (for instance, for API and application separately), where you want different behavior. It is better to use an AccessDeniedHandler. Just register your handled class as the `default_access_denied_handler` in the Dependency Injection Controller, and configure `access_denied_handler` to point to it.

_I want my application to use the ACL system. How to integrate it?_

For basic ACL checks, use a listener-based approach. Listener is better than doing checks in controllers, because this way you can make sure no operations pass without being checked. This however means that you also need to populate the security context in your console scripts. You'll need a SuperAdminVoter for the following code to pass:

        /**
		 * @RunAs("ROLE_IDDQD")
         */
        public function fetchFeeds()
        {
		    // All security checks will pass here
        }

To handle authentication failures on a AJAX back-end you can provide a separate authentication failure handles, that check that the request is an XmlHttpRequest before proceeding, and then serve their message as JSON.

JMSI18nRoutingBundle allows localized routing for login actions. As long as their names are `login` and `login_action`. You can also disable i18n for one of these.

To use multiple authentication systems, like Facebook, Twitter, and local accounts, you need to provide a UserProvider for each of them. You also need entry points for each of them, and you can route to each of them in a DefaultEntryPoint.

    firewalls:
	    default:
		    provider: id_based
			entry_point: default_entry_point

			fos_facebook:
			  provider: facebook
			  ...

			login:
			  provider: email

You can also ensure account completeness by having a request listener that checks whether there is an user that is not "complete", and redirects user to an account completion form then.

## Composer

I've [written about Composer before](/blog/composer_solves_the_php_code-sharing_problem/), so this is just a quick status update:

1500 packages now on Packagist, of which 450 were added in May. 350K package installs via Packagist. Alpha4 will be released soon, and Symfony 2.1 will come with Composer install by default. Facebook's PHP SDK is now supporting Composer, as is Zend Framework:

> If you find a library that doesn't support Composer, just send them a pull request with a `composer.json` instead of adding a custom repository to your own configuration.

Some PaaS providers also are going to support Composer. There is my pull request to [add this to Heroku](/blog/using_composer_to_manage_dependencies_in_heroku_php_apps/), and ServerGrove is also interested.

Plea from the Composer developers:

> Look around. Write small libs. Share code. Reuse things. Reinvigorate PHP

> If it becomes normal in PHP to not build everything yourself, but instead to reuse things others have built, we can all build things that are bigger and better, more cheaply

## Silex

[Silex](http://silex.sensiolabs.org/) is a microframework for PHP that is built on top of some of the Symfony2 components. If you've used Sinatra with Ruby, or Express with Node.js, the concept will already be familar to you.

This allows you to build routes like:

    <?php
    $app = new Silex\Application();
    $app->get('/page/{id}', function($id) use ($app) {
	    return "Hello, " . $app->escape($id);
	});
	return $app;

Then you should have another file that actually starts your application:

    <?php
    require __DIR__ .'/vendor/autoload.php';
    $app = require __DIR__.'/../src/app.php';
	$app->run();

And finally just require Silex with Composer:

    {
	  "require": {
	    "silex/silex": "dev-master"
	  }
	}

Silex applications are reasonably easy to test, both as unit tests (individual classes/methods) and functional tests (whole application, or a part of it). Functional tests can be slow, as they always need to prepare and clean up your data store between tests.

Unit tests are in no way Silex-specific. Functinal tests are, and Symfony components like BrowserKit, CssSelector, and DomCrawler help in making these. These classes essentially model HTTP requests inside PHP, so you can simulate requests in memory.

The components you use only for tests should be in `require-dev` of your Composer configuration, so they're only installed when you intend to do testing or development.

The whole Silex example application can be found from <https://github.com/igorw/trashbin>.

## Symfony components to the rescue of your PHP projects

In the last couple of years, a lot has changed in PHP: 5.3 brought us namespaces and proper closures, Composer provides a better way to share code, and unit testing a continuous integration have gained more acceptance, especially thanks to Travis. PHP has become more professional.

PSR-0 is the autoloading standard that most modern PHP code follows. It, together with Composer, makes it very easy to use libraries from other projects in your application. This way we can finally get rid of the PHP tradition of everybody having to re-invent all the wheels.

Symfony2 is in the bleeding edge of these developments, providing components that other frameworks can also use to replace their homegrown code for common tasks like request/response handling, authentication, and application bootstrapping.

> Composer is like apt-get on Debian. Not only the libraries you need will be installed, but also their dependencies. You can write your own post-install scripts to clear caches or to do other common tasks. This makes deployment much easier.

> Definitely forget about PEAR or distro packages. Just use Packagist.

Conclusions:

* PHP is not anymore an amateur language
  - Continuous Integration (Jenkins, Sismo, and Travis)
  - Unit tests (PHPUnit, SimpleTest, Atoum)
  - Code quality analysis and metrics
  - Code improvement tools (PHP Coding Standards fixer)
* PHP developers have grown up since 2002
  - The language is more mature
  - The community is too

While not PHP-specific, GitHub has given the community a social coding platform that makes it a lot easier to collaborate around PHP code.

> It should be compulsory for a developer to know GitHub by now

The old, bad PHP was different:

* HTML and PHP were fixed
* The `@` operator was used to hide warnings
* URLs tied to code structure
* Duplicate code

> The shit of today was great yesterday

But that was 10 years ago, and there was no PHP5 with a strong object model. How have things improved since?

* First professional PHP frameworks, like Zend Framework, CodeIgniter, CakePHP, Symfony1, (MidCOM), ...
* These brought conventions, and concepts like ORM, Ajax support, caching, unit tests, i18n, routing, MVC, ... _Developers say hurra_
* They had severe limits, like being monolithic, inflexible, and were performing badly

After this wave, the frameworks got better. But how to migrate your old projects? There are lots of big projects written in these old frameworks that are now starting to suffer from all the accumulated technical debt.

> You'd like to trash all the code, and code like in 2012

But [full rewrites are always risky](http://www.joelonsoftware.com/articles/fog0000000069.html):

* Pros
  - A new and solid framework
  - Leave behind the old crappy codebase
  - Feel more happy
* Cons
  - Stops the company's business
  - Spend more than a year re-developing everything
  - Clients usually don't want to finance or wait for rewrites

A more gradual approach is safer:

* Rewrite step-by-step
* Control the way you build things
* Use parts of a framework, now a whole framework. Choose the parts you use
* Gradually raise the competence level of your team
* Keep the application constantly in a working state

What to do first? Switch to 5.3 or 5.4 **now**. PHP 5.2 is not supported any longer. If you're on Debian or Ubuntu, upgrade your distro version and update packages, and you'll have newer PHP in 5 seconds. For OS X there is <http://php-osx.liip.ch>.

Then start building a new solid foundation for future developments. This can happen on the side of the old codebase. New code should be written on the new foundation. New code and old code should be able to run side-by-side.

Use Symfony2 components, like DependencyInjection, ClassLoader, and HTTPFoundation. This will make life a lot easier. And install these dependencies with Composer instead of using Git submodules or straight copies of code.

ClassLoader allows autoloading to happen in a standards-based way. DependencyInjection allows you to restructure your application piece-by-piece, and reducing risk of backwards-compatibility breaks. HTTPFoundation gives you a better way to deal with HTTP requests and responses. If you're using Composer, then autoloading will be already be handled by it.

With HTTPFoundation you can move from using old superglobals like `$_GET` whenever you work on some part of your old codebase. With it, as with any other new-style library you want to use, the migration process is similar:

* Integrate the component, make it loaded
* Use it in new code
* Refactor old code piece-by-piece
* Add tests

Just remember to keep your codebase constantly in a runnable state! It is best to only add one new library at a time.

While there are lots of useful libraries on Packagist, Symfony Components are a great starting point. They're well-documented and tested standalone libraries, and Symfony2 is simply a framework built by combinding them.

Symfony Console is useful writing cronjobs, or commandline tasks. It manages input and output for you, and has ways to handle different options. It should be easy to migrate your existing commandline tools to it, and that generally won't disrupt the other parts of your application, so that may be a good place to practice the usage of 3rd-party Composer libraries and PHP 5.3 coding standards.

Dependency injection allows you to expose services or APIs inside your application in a way that allows them to work more robustly when you need to change things. For example, if the signature of a function changes, access to it via the DependencyInjectionContainer will still work.

Your existing application probably already sends emails, writes logs, and stores things to a database. These can be refactored to happen through dependency injection.

* Resources are instantiated only when needed
* Services can be extended
* Each item in DIC is called a _service_

In your migration:

* Convert "service" functionalities in your application into real Symfony services
* Create a binding to existing calls so your old code will remain working

Now your service will be instantiated only once and it can have a centralized configuration. And it is easy to override or change when needed.

## Symfony2 Jeopardy

The last session of the day was pure fun: a Symfony community version of Jeopardy! _What is Silex?_

![Symfony Jeopardy](/files/symfony_live_2012_jeopardy.jpg)

*More to come tomorrow, when I'm also giving my [Create.js](http://createjs.org) talk*
