---
title: Flow-Based Programming, a way for AI and humans to develop together
location: Berlin, Germany
categories:
  - fbp
  - javascript
  - desktop
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/28a14660-c698-11ed-8b42-09bd596b6d87Robot%20software.png'
---
I think by now everybody reading this will have seen how the new generation of [Large Language Models](https://en.wikipedia.org/wiki/Large_language_model) like ChatGPT are able to produce [somewhat useful code](https://tylerglaiel.substack.com/p/can-gpt-4-actually-write-code). Like any advance in software development&mdash;from IDEs to high-level languages&mdash;this has generated some discussion on the future employment prospects in our field.

This made me think about how these new tools could fit the world of [Flow-Based Programming](https://en.wikipedia.org/wiki/Flow-based_programming), a software development technique I've been involved with for quite a while. In Flow-Based Programming these is a very strict boundary between reusable "library code" (called _Components_) and the "application logic" (called the _Graph_).

Here's what the late [J. Paul Morrison](https://jpaulm.github.io) wrote on the subject in his seminal work, _Flow-Based Programming: A New Approach to Application Development_ (2010):

> Just as in the preparation and consumption of food there are the two roles of cook and diner, in FBP application development there are two distinct roles: the component builder and the component user or application designer.

> ...The application designer builds applications using already existing components, or where satisfactory ones do not exist s/he will specify a new component, and then see about getting it built.

Remembering that passage made me wonder, could I get one of the LLMs to produce useful [NoFlo](https://noflojs.org) components? Armed with [New Bing](https://www.bing.com/new), I set out to explore.

![AI and humans working together](https://d2vqpl3tx84ay5.cloudfront.net/800x/b8c302b0-c698-11ed-8b42-09bd596b6d87Robot%20software.png)

The first attempt was specifying a pretty simple component:

![New Bing writing a component](https://d2vqpl3tx84ay5.cloudfront.net/800x/new-bing-noflo-component.png)

That actually looks quite reasonable! I also tried asking New Bing to make the component less verbose, as well as generating TypeScript and CoffeeScript variants of the same. All seemed to produce workable things! Sure, there might be some tidying to do, but this could remove a lot of the tedium of component creation.

In addition to this trivial math component I was able to generate some that to call external REST APIs etc. Bing was even able to switch between HTTP libraries as requested.

What was even cooler was that it actually _suggested_ to ask it how to _test the component_. Doing as I was told, the result was quite astonishing:

![New Bing writing fbp-spec tests](https://d2vqpl3tx84ay5.cloudfront.net/800x/new-bing-fbp-spec.png)

That's [fbp-spec](https://github.com/flowbased/fbp-spec)! The declarative testing tool we came up with! Definitely the nicest way to test NoFlo (or any other FBP framework) components.

Based on my results, you'll definitely want to check the generated components and tests before running them. But what you get out is not bad at all.

I of course also tried to get Bing to produce NoFlo graphs for me. This is where it stumbled quite a bit. Interestingly the results were better in the [fbp language](https://github.com/flowbased/fbp#language-for-flow-based-programming) than in the JSON graph format. But maybe that even more enforces that the _sweet spot would be AI writing components and a human creating the graphs that run those_.

![AI and humans working together](https://d2vqpl3tx84ay5.cloudfront.net/800x/28a14660-c698-11ed-8b42-09bd596b6d87Robot%20software.png)

As I'm not working at the moment, I don't have a current use case for this way of collaborating. But I believe this could be a huge productivity booster for any (and especially Flow-Based) application development, and expect to try it in whatever my next gig ends up being.

<small>Illustrations: MidJourney, from prompt _Robot software developer working with a software architect. Floating flowcharts in the background_</small>
