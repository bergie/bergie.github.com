---
title: Development dependencies considered harmful
location: Tahanea, French Polynesia
layout: post
categories:
  - fbp
  - desktop
cover: "https://d2vqpl3tx84ay5.cloudfront.net/dependency-black-hole.jpg"
---
Time is a precious resource for open source maintainers, especially if you aren't doing it as part of paid work. The constant churn of changing development tools steals a huge chunk of that time.

For example, I'm running [NoFlo](https://noflojs.org) on a daily basis, but do changes to the library itself quite rarely. There were nearly six years between releases recently.

The other day I wanted to add some functionality, and ran immediately to a huge set of issues with the development tooling we use. Basically everything we rely on is deprecated and has a huge set of security issues. Just to show some:
- _Karma_, which we use to run browser tests [is deprecated since 2023](https://github.com/karma-runner/karma#karma-is-deprecated-and-is-not-accepting-new-features-or-general-bug-fixes)
- _eslint_ has made a huge backwards incompatible release, and the AirBnB rules we use [haven't been carried over](https://github.com/airbnb/javascript/issues/2961)

On top of these our test runner, the assertion library, coverage checker, etc all have major releases out. Not upgrading means having a growing list of security warnings on every install. At worse they may affect the security of your development machine and CI environment.<br />
Now, to be fair, many of these projects do provide recommendations for the path forward.<br />
And yet, upgrading means spending hours or even days just shoveling. And you just wanted to add a feature or fix a bug.

In the modern world you could probably direct an AI agent to fix these things. But even then, wouldn't those precious tokens be better used for the actual work you wanted to do? And when updating the development tooling past breaking changes, who knows what sort of subtle changes in behavior there are? Somebody still needs to have an overall understanding on how things work.

This constant churn is a good example of [reality drift](https://therealitydrift.substack.com/p/reality-drift-in-everyday-life), things just needing more constant attention and maintenance.

### Batteries included

So, what's the solution? Some sort of digital minimalism. Maybe it is best to accept less tooling and automation, and rely on things that come with your platform.

Node.js now has a [built-in test runner](https://nodejs.org/learn/test-runner/using-test-runner). This removes a couple of development dependencies.

With Deno you could go even further and rely on their [built-in linter](https://docs.deno.com/runtime/reference/cli/lint/) and [formatter](https://docs.deno.com/runtime/reference/cli/fmt/).

Skipping any build steps seems like a reasonably safe bet. Just write standard JavaScript [using modules](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules), and it'll run everywhere as-is for the foreseeable future.<br />
If you want type safety, [use JsDoc to add types](https://thathtml.blog/2025/12/nuances-of-typing-with-jsdoc/) to the JavaScript code directly.

For browser applications, rely on the platform. [Web Components are good](https://jakelazaroff.com/words/web-components-will-outlive-your-javascript-framework/) now. [ES Modules work](https://www.bryanbraun.com/2020/10/23/es-modules-in-production-my-experience-so-far/),  and instead of minification you can let the server compress your files.
Any dependencies you have can likely be [built once into vendor files](https://www.bryanbraun.com/2021/08/27/a-minimalist-development-workflow-using-es-modules-and-esinstall/) and kept in git.

Every dependency comes with a huge maintenance burden. Try to have as few as possible. [Cheat entropy](https://blog.jim-nielsen.com/2020/cheating-entropy-with-native-web-tech/).

This seems like the way to build software that can endure and be maintainable for the years to come.

I know I will be going on a merry little [konmari adventure](https://konmari.com/about-the-konmari-method/) with the dependencies of my main projects.

### Postscript

As a matter of fact, I started writing this blog post much earlier. But then I first had to [patch Jekyll](https://talk.jekyllrb.com/t/android-termux-installation-jekyll/1280/4) so that my phone could render a preview of it. And then when I uploaded the cover image to S3, it turned out some AWS policies had expired and new images couldn't be rescaled by my serverless worker. At that point I gave up and decided to row to the beach instead.
