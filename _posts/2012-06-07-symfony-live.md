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

BBC works in two-week sprints Cucumber-based BBD. Their Wally tool gives a simple, end-user friendly overview on all their defined behaviors and their status. This way management can instantly see what is the status of various initiatives, and what is being worked on.

> I belive native apps have a place, but at the same time that it is possible to reuse our responsive pages inside them. Handling advertisements in responsive pages can be difficult
