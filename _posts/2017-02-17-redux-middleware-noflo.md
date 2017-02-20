---
title: Redux-style middleware with NoFlo
location: Berlin, Germany
categories:
  - fbp
layout: post
cover: 'https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo_middleware_chaining.png'
---
_This post talks about some useful patterns for dataflow architecture in NoFlo web applications. We're using these concepts to build [Flowhub](https://flowhub.io), the flow-based programming IDE._

[Flux](https://facebook.github.io/flux/) is an application architecture for web applications published by Facebook back in 2014. It uses a unidirectional data flow heavily inspired by flow-based programming concepts &mdash; events are sent from views to a dispatcher, which directs them to the appropriate data stores. The stores modify application state based on these events, and send updated state back to the view.

> This structure allows us to reason easily about our application in a way that is reminiscent of _functional reactive programming_, or more specifically _data-flow programming_ or _flow-based programming_, where data flows through the application in a single direction — there are no two-way bindings. Application state is maintained only in the stores, allowing the different parts of the application to remain highly decoupled. Where dependencies do occur between stores, they are kept in a strict hierarchy, with synchronous updates managed by the dispatcher.

Given its nature, the Flux pattern is quite easy to implement in NoFlo. [Here is an example](http://app.flowhub.io/#example/1d42f66f5cc4614df935) of a simple web-based TODO list using a Flux-esque NoFlo graph communicating with a React component:

[![Flux-style dataflow in NoFlo](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo_flux_example.png)](http://app.flowhub.io/#example/1d42f66f5cc4614df935)

In the image above you can see the graph in the middle, with the rendered React application on the right, and on the left an edge inspector showing the packets flowing from the view to the dispatcher.

In this example we decided to use [bracket IPs](http://jpaulmorrison.com/fbp/tree.shtml) to convey the action type. This allows any payload to be sent as the action, and usage of a standard NoFlo router component for packet dispatching.

## Problems with Flux in NoFlo

We've been following a very similar Flux-like pattern as in the example above also in [Flowhub](https://flowhub.io), a flow-based programming IDE implemented in NoFlo. Over time the flows started becoming messy because:

* Different stores would need access to different parts of application state
* Some stores needed to generate their own actions
* Some actions would need to pass through multiple stores

Since the only way to transmit information between components in NoFlo is to sent them as packets along a connection, these interdependencies cause a lot of wiring back and forth. Visual spaghetti code!

To find a better approach, I sat down couple of months ago with [Moritz](https://mobile.twitter.com/4ngrymo), a former colleague who has done [quite a bit of work](https://medium.com/@JohnRandom/defining-user-on-boarding-flows-with-redux-middlewares-217885acbafc#.b5y2wivwk) with both Flux and Redux. He suggested looking at Redux middleware as a pattern to follow.

## Introducing middleware

[Redux](http://redux.js.org/) is a recent refinement on the Flux pattern that has become quite popular. One of the concepts it adds on top of Flux is [middleware](http://redux.js.org/docs/advanced/Middleware.html), something that is more common in server-side programming frameworks like Express:

> Redux middleware solves different problems than Express or Koa middleware, but in a conceptually similar way. _It provides a third-party extension point between dispatching an action, and the moment it reaches the reducer_. People use Redux middleware for logging, crash reporting, talking to an asynchronous API, routing, and more.

Middleware can be chained so that all actions pass through each of them. A middleware that receives an action can either pass it on (maybe logging it on the way), or capture it and send out new actions instead.

Here is how a middleware looks like as a NoFlo component:

![Redux-style middleware as NoFlo component](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo_middleware_node.png)

Actions arrive at the `in` port. If the middleware passes them along, it will send them via the `pass` port, and if it instead generates new actions, these will be sent via the `new` port.

With this structure, chaining becomes very simple:

![Chaining NoFlo middleware](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo_middleware_chaining.png)

The image above is from the _main graph_ of Flowhub. In Flowhub we have both very simple middleware, like the logger that just writes the event details to the developer console, and more complex ones like the _UserMiddleware_ that deals with user information and OAuth, or _RuntimeMiddleware_ that handles communications with [FBP runtimes](https://flowbased.github.io/fbp-protocol/).

The middleware themselves can be [generator components](/blog/noflo-process-api/), listening for external events and creating new actions based on them. This way for example the _UrlMiddleware_ generates new actions when the application URL changes, allowing the other middleware then load the appropriate content for that particular screen.

## Actions and state

In the Flowhub graph, the actions are sent as NoFlo information packets from the view to the middleware chain. The packet flow of an action looks like the following:

```
< github
< pull
{
  "payload": {
    "repo": "noflo/noflo-ui"
  },
  "state": {
    // The application state when the action was triggered
  }
}
>
>
```

The brackets surrounding the action payload tell the action type, in this case `github:pull`. The data packet contains both the actual action payload, and the application state as it was when the action was triggered.

Including the state object means that each middleware can access the parts of the application state is in interested in while dealing with the action, removing interdependencies between them.

It also means that middleware become super easy to test, as you can send any kind of state/action combinations to exercise different flow paths.

![Some of our middleware tests](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/noflo_middleware_tests.png)

## Current status

I've started introducing middleware quite carefully to the Flowhub code base, so right now we're running a mix of old-style Fluxified stores and new-style middleware/reducer combinations. The idea is to migrate different parts of the flow to the new pattern subgraph-by-subgraph as we fix bugs and add features.

So far this pattern has felt quite comfortable to work with. It makes testing easier, and fits generally well in how NoFlo does FBP.

If you'd like to try building something with Redux-style middleware and NoFlo, it is a good idea to take a peek at the middleware graphs in the [Flowhub repo](https://github.com/noflo/noflo-ui). And if you have questions or comments, [get in touch](mailto:henri.bergius@iki.fi)!
