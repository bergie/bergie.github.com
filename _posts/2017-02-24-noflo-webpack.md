---
title: 'Building NoFlo browser applications with webpack'
location: Berlin, Germany
categories:
  - fbp
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/noflo-browser-app-webrtc.png'
---
I was looking at some of the [Stack Overflow _noflo_ questions](http://stackoverflow.com/questions/tagged/noflo) yesterday, and there were a few related to building NoFlo for the browser. This made me realize we haven't really talked about the major change we made to browser builds recently: [webpack](https://webpack.js.org).

Originally NoFlo was designed to only run on Node.js &mdash; the name itself is a portmanteau for _Node.js Flow_. But in 2013 we added support for [Component.js](/blog/sharing-javascript-libraries-node-browser/) to package and run NoFlo and its dependencies also on the browser.

This enabled lots of exciting things to happen: NoFlo example projects people could run simply by opening them in the browser, and building full-fledged client applications like [Flowhub](https://flowhub.io) in NoFlo.

Unfortunately Component.js foundered and was [eventually deprecated](https://github.com/componentjs/component/issues/639). Luckily others were picking up the ball &mdash; [Browserify](http://browserify.org) and [webpack](https://webpack.js.org) were created to fulfill a similar purpose, the latter picking up a lot of momentum. In summer 2016 we jumped on the bandwagon and updated NoFlo's browser build to webpack.

Compared to Component.js, this gave several advantages:

* Separating module installation and builds &mdash; allowing us distribute also the browser modules via NPM
* No need to maintain separate `component.json` manifests on top of the existing `package.json`
* Pluggable [loaders](https://webpack.js.org/concepts/loaders) providing a nicer way to deal with CoffeeScript, `.fbp`, ES2015, and much more
* [Code splitting](https://webpack.js.org/guides/code-splitting/) for cleaner and more modular builds

And of course all other benefits of a thriving ecosystem. There are tons of plugins and tutorials out there, and new features and capabilities are added constantly.

## The build process

In nutshell, making a browser build of a NoFlo project involves the following steps:

1. Find all installed browser-compatible components using the [fbp-manifest](https://github.com/flowbased/fbp-manifest) tool
2. Generate a custom NoFlo component loader that requires all the component files and registers them for NoFlo to load
3. Configure and run webpack with the application entry point, replacing NoFlo's standard component loader with the generated custom one

To automate these steps we have **[grunt-noflo-browser](https://github.com/noflo/grunt-noflo-browser)**, a plugin for the [Grunt](https://gruntjs.com) task runner that we use for build automation.

## Runtime annotations

Since we're using NPM packages for distributing NoFlo modules for both Node.js and the browser, it is important to be able to communicate which platforms a component works with.

By default, we assume all components and graphs in a module work on both platforms. For many typical NoFlo cases this is true. However, some components may use interfaces that only work on one platform or the other &mdash; for example webcam or accelerometer access on the browser, or starting a web server on Node.js.

JSON graph files already have a standardized property for the environment information. But for textual files like components or `.fbp` graphs, we added support for _runtime annotations_ via a `@runtime` comment string:

```coffeescript
# This component only works on browser
# @runtime noflo-browser
```

or

```coffeescript
# This component only works on Node.js
# @runtime noflo-nodejs
```

We also support a `@name` annotation for naming a component differently than its filename. This is useful if you want to provide the same component interface on both platforms, but need separate implementations for each:

* [CreateImage.coffee](https://github.com/noflo/noflo-image/blob/master/components/CreateImage.coffee) - `CreateImage` component for browsers
* [CreateImage-node.coffee](https://github.com/noflo/noflo-image/blob/master/components/CreateImage-node.coffee) - `CreateImage` component for Node.js

## Project scaffolding

For faster project setup, we have a template for creating NoFlo browser applications: **[noflo-browser-app](https://github.com/noflo/noflo-browser-app)**. To use it, follow these steps:

* Fork the project
* Import the repository in [Flowhub](http://app.flowhub.io)
* Make changes, synchronize to GitHub
* If you need additional modules, use `npm install --add`

The project contains a fully working build setup, including [Travis CI](https://travis-ci.org) compatible test automation. If you supply Travis CI a GitHub access token, all tagged versions of your app will automatically get published to [GitHub Pages](https://pages.github.com).

The default setup enables live-debugging the app in Flowhub via a WebRTC connection:

[![WebRTC debugging a NoFlo browser app](https://d2vqpl3tx84ay5.cloudfront.net/noflo-browser-app-webrtc_small.png)](https://d2vqpl3tx84ay5.cloudfront.net/noflo-browser-app-webrtc.png)

If you want to disable the WebRTC runtime option, simply pass a `debug: false` option to grunt-noflo-browser.

More details for using the template can be found from the [project README](https://github.com/noflo/noflo-browser-app/#readme).

## Node.js bundles

In addition to building browser-runnable bundles of NoFlo projects, the [grunt-noflo-browser](https://github.com/noflo/grunt-noflo-browser) plugin can &mdash; despite its name &mdash; be also used for building Node.js runnable bundles.

While a typical Node.js NoFlo project doesn't require a build step, bundling everything into a single file has its advantages: it can reduce process start-up time drastically, especially in embedded devices with slow storage.

This is quite useful for example when building [interactive installations with NoFlo](/blog/ingress-table/). To make a Node.js build,  add the following build configuration options:

```coffeescript
noflo_browser:
  options:
    webpack:
      target: 'node'
      node:
        __dirname: true
```

In addition you'll want to define any native NPM modules as [webpack externals](https://webpack.js.org/configuration/externals/).

## Current status

We're using this setup in production with some Node.js applications, all browser-capable [NoFlo modules](https://github.com/noflo), as well as the [Flowhub web app](https://app.flowhub.io).

If you want to get started, simply fork the [noflo-browser-app](https://github.com/noflo/noflo-browser-app) repo and start drawing graphs!
