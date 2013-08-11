---
title: Software is not text
categories:
  - fbp
  - tablet
  - desktop
location: Berlin, Germany
layout: post
published: false
---
It has been interesting to watch the reactions to [Bret Victor's The Future of Programming](https://vimeo.com/71278954) and our [NoFlo Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment). While much of it has been supportive, there seems to be a largish group of people that are offended by these notions. *How dare we suggest that software could be made in other ways than textually?*

This is somewhat understandable. We all feel pride in being able to master the arcane skills our daily work needs. Even commanding a text editor like Vim can be daunting to a beginner, and yet we do it effortlessly! But therein lies the danger, as Bret Victor explains:

> The most dangerous thought that you can have as a creative person is to think that you know what you're doing. Because once you think you know what you're doing you stop looking around for other ways of doing things. You stop being able to see other ways of doing things. You become blind.

Now, software development has been happening textually for quite a while &mdash; ever since [Fortran](http://en.wikipedia.org/wiki/Fortran) came about. Some even see programming evolving into [a form of literature](http://en.wikipedia.org/wiki/Literate_programming). Nothing wrong with that!

## Input is the problem

But at the same time, why not explore other avenues of building software? Visual programming has been around nearly as long as the textual variant, but has always stayed outside of the mainstream. There are many reasons for this, but I believe the primary one has been the lack of suitable input devices.

*Until quite recently, the keyboard was the only efficient way of communicating with a computer.*

But interestingly, while computer keyboards have become worse, the other input tools have improved. Graphics tablets, touchpads, and touchscreens are all way better and more ubiquitous now than ever before. As I've [argued before](http://bergie.iki.fi/blog/tablet-productivity/) this may eventually make our culture less textual.

> Until now, text has been the dominant way of handling business communications. Touchscreens are bad for writing, and so the professions that have most benefitied from them have been from outside the traditional business domain: [musicians](http://www.techradar.com/news/mobile-computing/tablets/how-musicians-are-using-the-ipad-921391), [photographers](http://terrywhite.com/techblog/ipad-fits-photography-workflow/), and many others can already do some things better on a tablet than they could on a traditional computer.

> With tablets and smartphones becoming ubiquitous, it might not be far-fetched to imagine the business culture to change as well. Consider:

> * Video conferencing instead of email
 * Not being bound to a desk. Maybe offices will look more like lounges?
 * Large, zoomable visualizations of business data instead of rigid report generators
 * Bringing software and connectivity to areas outside of traditional office work
 * Replacing dedicated hardware for measurements, analysis, etc

Why should programming stand apart?

## Building software by touch

One big benefit of [flow-based programming](http://en.wikipedia.org/wiki/Flow-based_programming) is that the flow graph definitions are quite nicely disconnected from the way they're produced. You can write them "[as code](http://noflojs.org/documentation/fbp/)", or you can draw them [in an editor](http://www.kickstarter.com/projects/noflo/noflo-development-environment). The system doesn't care. A graph is a graph.

To give the necessary car analogy: *When you power a car with electricity, you suddenly have many more options for generating that power... Solar, wind, or even just burning hydrocarbons. Similarly, when you decouple the logic &mdash; the flow of your software &mdash; from text you will have new ways to build and visualise it.*

Writing software textually is to work on a 1D medium. The visual representation given by NoFlo UI allows us to interact better with the software with the 2D input tools we have now, like touch screens and mice.

## Building software by speaking

But it would be easy to imagine other input types as well. Given that the problem domain of building graphs is quite nicely constrained, it is an area where *speech input* could actually work. Think of speaking to your computer and telling it to:

* *add node with component Foo*
* *connect node Foo with node Bar*

This might be something interesting to experiment with using the web-based NoFlo UI and the [speech recognition API in Google Chrome](http://www.google.com/intl/en/chrome/demos/speech.html)!

## Building software by gestures

I recently ran into the concept videos by [Meta](https://www.spaceglasses.com/), a company building augmented reality glasses that include a Kinect-like gesture sensor.

<iframe width="500" height="281" src="//www.youtube.com/embed/b7I7JuQXttw" frameborder="0" allowfullscreen></iframe>

While the current technology won't be able to [bring hard AR into reality](http://blogs.valvesoftware.com/abrash/why-you-wont-see-hard-ar-anytime-soon/), something like these glasses could be awesome when collaborating on software design with a group of people. Imagine seeing the graph floating in space in the middle of the room, and to be able to collaboratively pick up and move things around!

## Letting all this merge

In the end, I think we will end up using some combination of various of these together. Sometimes we'll want to have a desk and a keyboard to dive in and write some tests or new components. But sitting at a desk the whole day is also bad for you, and so sometimes it may be nice to move around and do development on your tablet. Or even dictate changes to the graph while sitting in a car?

By moving the logic [into a graph](http://www.kickstarter.com/projects/noflo/noflo-development-environment), we can let software free.
