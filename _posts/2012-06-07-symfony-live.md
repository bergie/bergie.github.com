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

![Symfony Live 2012 venue](https://d2vqpl3tx84ay5.cloudfront.net/symfony_live_2012_venue.jpg)

## Keynote

First session of the day was Fabien Potenciers's keynote on the community. The numbers there are simply staggering, as the PHP community seems to converge on this project:

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

![Symfony Jeopardy](https://d2vqpl3tx84ay5.cloudfront.net/symfony_live_2012_jeopardy.jpg)

*Intermission, was giving my [Create.js](http://createjs.org) and PHPCR talk. [Slides are available](http://www.slideshare.net/mobile/bergie/decoupling-content-management-with-createjs-and-phpcr)*

## Drupal 8 meets Symfony2

Drupal is the biggest PHP CMS out there, but its PHP4-style codebase has caused a lot of problems for developers. Drupal's focus is on the end-user experience, not developers, and this shows. A lot of focus has been put into the administrative interface.

> Clients want Drupal, because that is what they know is used for a lot of sites. This makes it extremely easy to sell.

But for developers, Drupal sucks, especially if what you need is a framework.

> Drupal is a CMS 1st, a framework only 2nd

* No clean separation of configuration, logic, and content
* No clean deployment and staging and concept
* No good caching strategy
* Callback-based AOP-style programming paradigm can be strange
* Lots of legacy baggage
* Not Invented Here syndrome (like many other traditional PHP4 projects)

The NiH syndrome is getting better in the PHP world, especially through PSR standards and Composer. But the other issues also need fixing. Drupal 8 has a Web Servicex and Context Core Initiative, where the plan is to transform Drupal from a CMS to a REST server that happens to have a CMS on top.

Drupal's templating model shows a strong background in blog-style systems and makes it hard to write more sophisticated layouts. In Drupal 8, the page flow will be completely rewritten to use proper Request, application kernel, and routing components.

> As long as we're fixing that, we might as well bake in proper REST support

At this point Drupal developers realized that they're not the only ones tackling these problems. They looked at PECL HTTP, Symfony2's HttpFoundation, and Zend Framework. Symfony components won because they're more flexible and powerful. Zend Framework's Contributor License Agreement was another hurdle the Drupal Project didn't want to deal with. Input and engagement from Symfony2 developers also played a major part.

> Community matters more than code when choosing libraries. And this is a community we felt we can rely on

Distributions, Contrib Modules, Core Modules, and Core Libraries in Drupal 7 are not very well separated, and have lots of interdependencies. Distributions are an increasingly popular concept of _prepackaged Drupal sites_.

Symfony, on the other hand has much cleaner separation of concerns. Silex proves that a completely different web framework can also be built on Symfony components.

> We're all in. Drupal 8 is now powered by HttpKernel, HttpFoundation, Routing, and EventDispatcher

> This should make it possible to run other Symfony applications inside Drupal, and vice versa

Right now the Drupal 8 router just wraps the old Drupal router in Symfony's router. A typical Drupal site has over 1000 routes, and improvements here can really help. Database-backed routing will follow the Apache negotiation module concepts.

> We're not doing anything esoteric here. We want to make the core of the system as Symfony-like as possible.

Dependency Injection will be used to slowly get rid of Drupal's old global dependencies.

> "Dependency Injection Container" - the scariest name for a giant array of objects we could come up with

Drupal already has an event system, called _hooks_. They use `function_exists` for registering, but this makes them hard to test. It is faster that Symfony EventDispatcher. But on the other hand, no autoloading means all code has to be loaded for events to work. And each module can only have one hook. The current best guess for Drupal 8 is that it will have both EventDispatcher (used in core), and hooks (used in modules). But this is mostly because converting everything takes time.

Drupal 7 follows the _PHP as a templating language_ approach, with preprocessing and filtering capabilities. This is very flexible and makes it easy for front-end developers to get started.

> All templating languages eventually become Turing-complete. We just decided to cut the chase and use PHP

But this has issues. For example Edge Side Includes don't play well with this.

> We must get rid of these Arrays of Doom

Twig is substantially more secure, and opens the potential to use Twig.js for client-side templating. But it is completely different than old Drupal templates, and so the migration will be difficult.

> We could use help from Twig developers to get going

Drupal is also considering to use YAML and Composer, as well as the Symfony CMF ChainRouter. Also some non-Symfony libraries, like Zend Atom.

> Drupal 8 means not just some dozen Symfony newbies, but instead thousands. This is an enormous influx of people who want to learn Symfony

If you want to see what is going on, checkout out the _symfony_ tag in Drupal issue tracker.

One of the first contributions from the Drupal developers to the upstream Symfony ecosystem will be an improved "Flash message" API. File Streaming in HttpFoundation is also being worked on.

> Work with the upstream. Make less code in the world! Anybody else excited?

> My hope is that Symfony and Drupal working together will end up with stronger framework in Symfony, and a stronger CMF in Drupal

DrupalCon Munich will be a big gathering of Drupal developers, with over 2000 expected. It will also be their first event to feature speakers from outside projects, including some Symfony talks, and my talk on Create.js.

## Symfony CMF

CMF provides all the infrastructure you need to build a CMS. It doesn't attempt to compete with CMSs like Drupal or TYPO3, but instead to offer tools for situations where more customized solutions are needed, or where Symfony2 developers need to add some manageable content into their applications. CMF is essentially a set of bunles that focus on scalability, usability, documentation, and testing.

> Some find the architecture of the CMF quite complex, but in the end the API for developers won't be very compilated

> Developers just write normal Symfony code and use Doctrine ODM.

Symfony CMF has been under development by Liip for two years.

> We feel that it is important that there is something in the ecosystem that allows customized CMSs to be built

The CMF Sandbox offers a simple way to install and play with the Symfony CMF. Routing comes straight out of the content repository, as do content blocks and menus. Everything is inline-editable (using Create.js). 

All content can be translated, but the layouts don't need to deal with localization as all of that is handled in the ODM backend. If something is not translated, CMF provides a rule system on whether and how the site should fall back to other languages if something hasn't been translated. The translatability of content can be defined on a per-property basis.

There is also an administrative interface on the back-end, where you can manipulate the whole PHPCR content tree.

![Demoing the CMF admin interface](https://d2vqpl3tx84ay5.cloudfront.net/symfony_live_2012_cmf_admin.jpg)

The menu struture and routing is completely decoupled from the actual content structure, which gives more flexibility on how the site can be built. This way it is a lot easier to do multi-channel publishing where for example some content is not served for mobile. It also allows defining different routing structures for different languages, so you can also have localized URLs. But if you want, the routing and menu can also just simply follow the content stucture, as it usually does in traditional CMSs.

Because CMF knows where a particular piece of content is displayed on a website, it can allow websites to actively invalidate caches like Varnish when content changes.

Blocks and pages on the site can be pointed either to content inside the respository, or actions inside Symfony.

Apache Stanbol allows the CMF front-end editor to automatically tag content based on recognized entities inside the content. So mentioning people, companies, places, or whatever you have in your Stanbol knowledge base, becomes suggested tags for the content. The tags are used by the image handling tools to suggest related pictures for the content.

Content in CMF stored into a PHPCR-compliant repository, which allows using the hugely-scalable Apache Jackrabbit Java project, or a relational database using Midgard2. The CMF Sandbox functional tests are run against all these different repository variants on Travis.

PHPCR comes from the Java Content Repository standard, where the Java guys have spent ten years thinking about and refining the repository concepts. This makes PHPCR very consistent and well thought out. The PHPCR API test suite provides more than thousand tests to ensure interoperability between the implementations.

On the front-end CMF uses Create.js, which allows decoupling also on the editing side of things. A generic admin interface won't work in all scenarios, and so having a standard API there as well makes sense.

CMF provides a bunch of components and bundles so that users can pick and choose what they need. The ChainRouter allows chaining different Symfony2 routers after each other. This way some routes can come from the database, and others can be traditional static routes. With the Dynamic Content Router, the matched content objects will be automatically placed in the request object so that it will be available to the controller.

Storage uses Doctrine ODM, so the APIs are similar to the MongoDB interface, but everything related to content management is easier.

PHPCR and ODM, especially running on Jackrabbit, are already production-ready. The first alpha version of the whole CMF is coming soon. You can read more about CMF, and see a screencast [on the Symfony.com blog](http://symfony.com/blog/the-symfony-content-management-framework-is-getting-ready).

## WebSockets

The web is built on the concept of requests and responses. This is a powerful concept that has allowed the web to expand, but it is not without issues:

* HTTP requests are unidirectional. A client has to ask for data for the server to send it

> HTTP is like the annoying donkey in Shrek, where the browser has to constantly poll for information. _Are we there yet, are we there yet_

* Latency can be a problem as each HTTP request is essentially a new TCP connection (HTTP 1.1 keepalive helps here, SPDY will do more)
* HTTP is stateless, so every request has to contain all the information needed to identify that request and user. This means the requests can become big, especially with cookies

> What if we could use the underlaying TCP session and expose that?

The WebSocket specification does exactly this, allowing persistent, bidirectional connections on the web. With the WebSocket protocol specifies things like the connection handshake and TCP framing. After upgrading a HTTP request it becomes a WebSocket connection where both sides can send data at any time using the existing connection. While TCP is just an infinite stream of data, WebSockets provides you with messages.

Some proxies cause issues with WebSockets, as they may reject the session, or just kill it after 30 seconds. This can be worked around by using SSL. WebSockets are specified in RFC 6455.

WebSocket API:

    var ws = new WebSocket("ws://example.net");

	ws.onopen = function() {
	  ws.send("hello");
	}

	ws.onmessage = function(event) {
	  console.log(event.data);
	}

Use cases for WebSockets include:

* Games
* Notifications
* Collaboration
* Statistics
* Chat

Supporting WebSockets in traditional server-side programming frameworks can be tricky, but Node.js does it very well. There is also the Pusher service that provides managed WebSocket connections.

Google Wave was a good example of the collaboration possibilities given by WebSockets. Similar things can be done in Node.js applications with ShareJS.

Chrome 4.0+, Firefox 6.0+, Safari 5+, IE 10+, etc. support WebSockets. Socket.io is useful because it provides fallbacks for browsers that don't support WebSockets. But Socket.io also bundles lots of features like broadcasting, serialization, and more in the monolithic bundle which has a different API than WebSockets. SockJS is simpler in that it only provides the transport layer.

    var ws = new SockJS(url);

> Think of it as a sort of WebSockets polyfill

If you want to have a server that can support long-running WebSocket sessions, you'll probably want an asynchronous stack. With PHP, you'd need a process for each connected user, which becomes heavy quickly. SockJS integrates nicely on the standard Node.js + Express stack. You could also use something like Tornado or EventMachine if you can't use Node.js.

PHP is optimized for the traditional HTTP use case, where the server starts the PHP interpreter for a request, PHP handles it, and then gets killed. This makes it quite unsuitable for WebSockets.

This means you may end up with two stacks side-by-side:

* Async stack for handling WebSockets
* Synchronous stack, like PHP, Symfony, and Nginx for the actual web application

How do you make them talk to each other? One solution is a message queue, like 0MQ. Most message queues need a daemon for providing the queue, which makes your stack more complicated. 0MQ is nice in that in it your processes talk directly with each other so you can skip this step. In PHP 0MQ can be installed as an extension.

    <?php
	$ctx = new ZMQContext();

	$pub = $ctx->getSocket(ZMG::SOCKET_PUB);
	$pub->connect('tcp://127.0.0.1:5555');

	$pub->send("Some message");

Node.js subscriber:

	var sub = zmq.socket('sub');
	sub.suscribe('');
	sub.bind('tcp://*:5555');

	sub.on('message', function(message) {
	    console.log(message);
	});

Another option for communicating between Node.js and PHP would be [my DNode library](/blog/dnode-make_php_and_node-js_talk_to_each_other/).

Debugging WebSockets can be difficult, but at least the Canary build of Chrome provides a WebSocket connection inspector in the developer tools. wssh is a command-line debugging client and server for WebSockets. ngrep allows seeking for content in network connections. zmqc is a bit like netcat for 0MQ, and can also be useful.

In nutshell:

* Use SockJS instead of Socket.IO, as it plays nicely with existing solutions
* Polyglot applications are the future
* Learn from message queues

Examples at <http://github.com/igorw/websockets-talk>.

For those who don't want to go polyglot, [ReactPHP](http://nodephp.org) brings asynchronous I/O into PHP, making it possible to do WebSockets and other async communications in PHP.
