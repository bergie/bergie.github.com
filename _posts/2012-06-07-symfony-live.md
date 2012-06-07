---
title: Notes from Symfony Live 2012
layout: post
categories:
  - midgard
---
*This is a liveblog from the Symfony Live 2012 event, and will be updated as the conference progresses. You can also follow the `#Symfony_live` Twitter hashtag*

The Symfony Live event is held in the old Cite Universitaire building in Paris. While tomorrow the RER strike will make things slightly more complicated, more than 600 developers have made it here.

First session of the day was Fabian Potenciers's keynote on the community. The numbers there are simply staggering, as the PHP community seems to converge on this project:

* More than 1000 pull requests have been merged into Symfony2 since July 2011, from 250 different contributors
* Symfony is the most popular and active PHP project on GitHub, and 12th most popular GitHub project overall
* The Symfony website has had 1.5 million unique visitors in a year

According to the Symfony2 developer survey, a vast majority of the community is in Europe, and works in small companies. Most have also used WordPress or Drupal, which is great given that Drupal is now starting to use more and more of Symfony components. 74% of the developers use Linux or OS X for their developer work, which seems to conform to the conference audiences I've seen. For the people building the web, Windows PCs are a legacy curiosity.

Drupal starting to use Symfony components showcases one crucial advantage of the Symfony framework, in that it is constructed out of components tied together by dependency injection. These components are highly decoupled, and can be used without having to have the full framework. This way other PHP projects can replace some of their own code, like for example routing or form handling, with Symfony code. This means less code to maintain, and therefore less technical debt in the long run.

Out of Symfony's components, Drupal uses:

* HttpFoundation
* HttpKernel
* EventDispatcher
* ClassLoader
* DependencyInjection
* Yaml

Many of these would also make our older frameworks, like MidCOM and Midgard MVC a lot easier to maintain. And it would improve interoperability and code-sharing between us and the greater PHP world.

