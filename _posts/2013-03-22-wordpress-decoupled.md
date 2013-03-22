---
title: Why WordPress needs to get Decoupled
location: Berlin, Germany
layout: post
categories:
  - oscom
  - midgard
---
Couple of days ago there was an interesting post on [the Dire State of WordPress](http://jshakespeare.com/the-dire-state-of-wordpress/), talking about the issues developers have when working with this [hugely popular](http://en.wordpress.com/stats/) content management system:

> When you learn PHP from WordPress as I (and probably many other people) did, you just assume that all the idiosyncrasies and illogicalities are par for the course when building a CMS-driven site. It’s taken me several years to realise that it doesn’t have to be like this. In fact, it wasn’t really until I started learning more about OO principles and working with frameworks that I started looking at WP in a different light. Why is every instance of every model treated like a post? Why can’t I extend the functionality of a post type without writing a whole mess of hooks, filters and functional code into a file that isn’t semantically related to that post in any way?

> These may sound like the gripes of someone whose needs will never be met by something like WordPress, but the lack of fundamental logic that gives rise to the above issues is what makes WordPress problematic for developers at all levels. And because the crossover on the venn diagram of ‘people who know good application development practises’ and ‘people who build sites in WordPress’ is such a thin sliver, it just trundles along in its current hokey state, baffling both the unseasoned and the proficient developer alike.

As expected, this generated a [lively discussion on Hacker News](https://news.ycombinator.com/item?id=5407879).

## Technical debt

Now, I've used WordPress on-and-off ever since it was [still called b2 cafelog](http://codex.wordpress.org/History), but I wouldn't consider myself a WordPress developer. But still, looking at it mostly from the outside, it is clear that many of the issues WordPress users and developers face today result from [technical debt](http://en.wikipedia.org/wiki/Technical_debt) accruing from bad architectural decisions done a decade ago, and the missing will to correct those.

WordPress is still undergoing a transition from a blogging platform [to a general-purpose CMS](http://www.ducttapemarketing.com/blog/2011/02/28/wordpress-3-1-is-big-leap-into-cms/). The changes this requires mean that without a sound architecture, the problems with the underlaying engine will only become exacerbated.

This is not something unique to WordPress. Many popular CMSs, including Drupal and TYPO3 have been suffering from the same problem. We all in the open source CMS community have been there. The difference however is that these projects have identified this issue, and have taken steps to correct it.

## Start decoupling

The reason why CMSs become so messy is because they all try to be so many things at once. A CMS is a web framework, a CMS is a web editing tool, and a CMS is a content store. But each of these are in reality their own, specialized areas, and so the principle of [separation of concerns](http://en.wikipedia.org/wiki/Separation_of_concerns) tells us that they should be handled by separate pieces of software.

I wrote a still-popular post titled [Decoupling Content Management](http://bergie.iki.fi/blog/decoupling_content_management/) two years ago to argue just that. Projects like [PHPCR](http://phpcr.github.com) and [Create.js](http://createjs.org) have since then sprung up to move that from idea to practice, and have already been adopted by many CMSs.

In nutshell, the transition I want CMSs &mdash; WordPress included &mdash; to make is this:

![Decoupling Content Management](/files/decoupled-cms-architecture.png)

Here is my [talk on the subject](http://youtu.be/j4NoAFK-KNY) from JS.everywhere in Paris late last year:

<iframe width="560" height="315" src="http://www.youtube.com/embed/j4NoAFK-KNY" frameborder="0" allowfullscreen></iframe>

We also talk about the cross-CMS collaboration this enables in the [TYPO3 Neos launch video](http://vimeo.com/50883868).

Think about it, developers from Midgard CMS and TYPO3 working together and sharing substantial parts of the user interface codebase, while still enabling each project to retain a unique look-and-feel!

## Non-participation

Over the past two years I've given tens of talks about Decoupled Content Management in various developer and CMS conferences. In these events I've talked with a lot of developers from various different CMSs from both the open source and proprietary worlds. But despite its popularity, WordPress core developers have been absent.

Symfony activist Lukas Smith [has noticed the same](https://news.ycombinator.com/item?id=5414441):

> I think the first step would be that the WordPress core developers start to mingle with the PHP community. I simply have not met a single WordPress core developer at any PHP conference and I tend to go to 6-10 a year in various countries around the world.

> I have also not seen any WordPress core dev participate on an php-src internals discussion let alone something like the Framework Interoperability Group that outs out the PSRs.

> But without communication the chances of collaboration are low and without collaboration imho its going to be hard for WordPress to identify and assess the potential for new directions.

## Moving forward

While WordPress is still the top dog of the CMS world, it is a precarious position that shouldn't lull them into complacency. The web moves forward, things change, and all technical debt must be paid eventually. And that is what can fatally slow down a project.

Solving the architectural issues is a big amount of work, and so I would start by examining how other projects like [Drupal have made their transition](http://bergie.iki.fi/blog/drupal-and-collaboration/). The part *Symfony components to the rescue of your PHP projects* of my [Symfony Live Paris liveblog](http://bergie.iki.fi/blog/symfony-live/) is a good place to start.

For WordPress, like for any PHP content management system, [my secret agenda for PHP CMSs](http://bergie.iki.fi/blog/my_secret_agenda_for_php_content_management_systems/) should apply. If you're a WordPress core developer, I'd love to chat about how to move forward.
