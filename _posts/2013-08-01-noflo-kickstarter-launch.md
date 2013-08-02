---
title: "NoFlo Kickstarter, the hacker's perspective"
categories:
  - fbp
  - nodejs
  - javascript
  - tablet
  - desktop
  - kde
  - business
  - mobility
location: San Francisco, California
layout: post
---
This has been a big week for [NoFlo](http://noflojs.org/), the flow-based programming environment for JavaScript. Yesterday we released [NoFlo 0.4](https://github.com/noflo/noflo/releases/tag/0.4.0), which added support for running flow-based programs in web browsers. And today we launched our [NoFlo Development Environment effort on Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment). Before continuing, make sure to watch [the video](http://www.kickstarter.com/projects/noflo/noflo-development-environment)!

<iframe width="480" height="360" src="http:&#x2F;&#x2F;www.kickstarter.com&#x2F;projects&#x2F;noflo&#x2F;noflo-development-environment&#x2F;widget&#x2F;video.html" frameborder="0"> </iframe>

This is our effort to bring visual and collaborative flow-based tools into the world of mainstream software development. Similar tools are already in use in many specialized industries from movie special effects to hardware simulation, but we programmers still have to *construct these complex maps of our software's control flow* inside our brains based on their textual representation. With [your support](http://www.kickstarter.com/projects/noflo/noflo-development-environment), we could change that!

**We've already reached a third of our goal on the first day. Clearly people see the need for these tools. Exciting times!**

The stories from [TechCrunch](http://techcrunch.com/2013/08/01/noflo-launches-kickstarter-campaign-to-provide-a-way-for-everyone-to-understand-and-visualize-code/) and [GigaOm](http://gigaom.com/2013/08/01/noflo-turns-to-kickstarter-to-expand-program-to-help-non-techies-read-code/) tell the story well for non-programmers. But based on the questions I've received today, I thought it would be good to clarify various points from a more programmer-centric point of view.

## Hasn't visual programming been tried before?

The story of visual programming tools started with the [GRaIL system](http://youtu.be/QQhVQ1UG6aM) of the 60s, and has progressed to tools like [LabView](http://www.ni.com/labview/) and [Pure Data](http://puredata.info/). So far none of these tools has reached mainstream acceptance outside of their (sometimes fanatic) industry niches.

This is partly because these tools were built originally with a particular problem domain in mind, and partly because of the user experience. Execution matters, as we've seen so many times in the tech industry. After all, there were tablets a lot before the iPads.

With [our team](http://www.kickstarter.com/profile/noflo) I have the confidence that we have the necessary skills and vision to build something that is actually a pleasure to use, and that makes it truly easier to work with the control flow of your software than it is with the text editors.

*This is not a rehash of UML*. UML is a diagram mapping out object-oriented constructs, often used for code generation. NoFlo graphs instead are only the *coordination layer* that manages the control flow of your software. The components are still handcrafted and unit-tested code that NoFlo merely wires together at runtime, following the edges specified in a [JSON file](http://noflojs.org/documentation/json/). No code generation here.

## Why map out the control flow?

All software is inherently a graph. Functions call other functions, sending data along. Signals are emitted and connections are made. But outside of some debugging tools we rarely see this in a visual format. Instead, when starting to work on a program you have to parse the code and build this map in your head.

This imposes a lot of cognitive load that tools like NoFlo could avoid. When you can see visually how things are connected, you can focus on the bigger picture and build the software you need in a more efficient way. This is what [Bret Victor talked about recently](http://vimeo.com/71278954).

<iframe src="http://player.vimeo.com/video/71278954?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

## What is the role for code, then?

However, there still remains a role for text-based code. The actual components, the boxes in the graph, are still written out in JavaScript. But since they're isolated from their surroundings until a NoFlo graph wires them together, each component can focus on accomplishing a single task well.

My original [NoFlo UI prototype](http://bergie.iki.fi/blog/inspiration-for-fbp-ui/) already included the code editor for modifying and creating new components. By the principles of [TDD](http://en.wikipedia.org/wiki/Test-driven_development), each component is always edited alongside its unit tests, and the tests can be run at any point with a single click. We're now bringing that back into the new UI:

[![Editing code in the NoFlo UI](/files/noflo-ui-code-small.jpg)](/files/noflo-ui-code.jpg)

For those who don't want this UI, NoFlo is still fully usable also without it. As a matter of fact, we don't have a UI before the Kickstarter succeeds, and yet many companies are already building their applications with NoFlo. One way is by using the [`.fbp` language](http://noflojs.org/documentation/fbp/).

## Why now?

Another reason why the [NoFlo development environment](http://www.kickstarter.com/projects/noflo/noflo-development-environment) may succeed where many others failed is that programming has changed.

We no longer target a single protocol &mdash; whether the Win32 API or HTTP &mdash; in our applications. Instead, we need to talk multiple protocols and with multiple devices at the same time. Even just dealing with both REST and WebSockets is difficult to many traditional programming environments.

The other big change is the usage of [different web APIs](http://bergie.iki.fi/blog/internet-application-blueprint/) as part of your applications. Authentication, handling asynchronous requests and services that are sometimes down can be a pain.

NoFlo brings a *controlling layer* to your software that allows you to map out these scenarios and isolate the handling of each protocol or API into its own set of small, simple components.

## Where could this be used?

Many of the nodal editing tools built in the past have been very domain-specific. However, [flow-based programming](http://en.wikipedia.org/wiki/Flow-based_programming) is a general software development paradigm. NoFlo has already been used for a wide variety of tasks, including:

* Business data extraction and reporting
* Automating billing workflows
* Receiving, routing, and sending text messages
* Static site generation
* Building server-side web applications

Now that we [added browser support](https://github.com/noflo/noflo/releases/tag/0.4.0) it will be possible to also build physics-based user interfaces with NoFlo. There should be some interesting examples of that coming up soon.

NoFlo being a general JavaScript library could in future enable us to coordinate the flows also in new kinds of places like desktop applications. There are [several](http://www.gnome.org/) [desktop](http://kde.org/) [environments](http://en.wikipedia.org/wiki/Windows_Runtime) where JavaScript is a first-class citizen. Combining flow-based interactions with declarative UI definitions could be something very powerful!

Many of the giants of the software industry, like Google, Facebook, Microsoft, Adobe, and Mozilla are all working on improving the JavaScript development tools. It would be awesome to have their support for what we're doing.

## How about open source?

If you're following this blog, you probably know that I feel strongly for software freedom. Everything I've done during my [professional career](http://www.linkedin.com/in/bergie) has been possible only thanks to the open source community.

[NoFlo](http://noflojs.org/) and the UI we're building are and will remain open source available under the [MIT license](https://en.wikipedia.org/wiki/MIT_License). As a matter of fact, the UI is designed to not only work with NoFlo, but also to be adaptable to work with other flow-based systems. I feel this is an area with a lot of potential for collaboration with the various functional and dataflow projects out there.

We will however be offering a hosted version of the software for a fee. The various [Kickstarter rewards](http://www.kickstarter.com/projects/noflo/noflo-development-environment) will give our backers an early and cheaper access to that.

But still, you'll always be able to run the whole stack on your own infrastructure if you choose to do so.

## What happens next?

Our [Kickstarter campaign](http://www.kickstarter.com/projects/noflo/noflo-development-environment) has been up for less than a day, and we're already *above 30%* of our goal. This makes me quite optimistic for the effort. But of course we won't succeed without the help of the wider open source and JavaScript community!

There are still quite a lot of days left in the campaign. Tonight I'll be flying back to Europe, and then we'll focus on the next steps.

One important area of attention is publishing more demos and examples of NoFlo in real-world use. I hope by early next week we'll be able to show a few applications running on both browser and Node.js. I will also publish our flow-based port of the [Jekyll static site generator](http://jekyllrb.com/). These should help people getting started with this style of programming.

We also have quite a lot of content lined up and waiting for editing. Something of interest to everybody working with flow-based or functional programming will be the long cut of the interview we made with [J. Paul Morrison](http://en.wikipedia.org/wiki/John_Paul_Morrison), the father of FBP. My hope is that video will be live by the end of the next week.

If you're interested in the developments, make sure to follow NoFlo on [Twitter](https://twitter.com/noflojs), [Facebook](https://www.facebook.com/noflo), or [Google+](https://plus.google.com/u/0/112372998187205178398). If you back [our campaign](http://www.kickstarter.com/projects/noflo/noflo-development-environment), you'll also receive the updates via Kickstarter.

Thanks everybody for helping to make this possible! Keep spreading the world and giving [your support](http://www.kickstarter.com/projects/noflo/noflo-development-environment)!
