---
title: "Node.js is quite a promising tool"
source: "http://www.qaiku.com/channels/show/programming/view/d7411884449711e0b11e813231910c080c08/"
location: Helsinki, Finland
categories:
  - javascript
  - nodejs
layout: post
---
<http://www.theregister.co.uk/2011/03/01/the_rise_and_rise_of_node_dot_js/>

For the VIE demo I wrote my first Node service last Saturday. Surprisingly little work to synchronize RDF across multiple browsers in real time.

Alexey says:

> Node is a great tool, but shouldn't be overestimated. It has it's problems like no "real" multi-threading (current recipe is to use [multi-node](https://github.com/kriszyp/multi-node) instead).

> Erlang and Clojure still can handle a lot more requests.

> In it's current form, Node.js is great for prototyping, but if you need a robust solution — rewrite the prototype in python/clojure/erlang 

sure, Erlang and Clojure can handle more requests, but they both use a "weird" programming syntax. For many programmers, [this can be a hindrance](http://steve-yegge.blogspot.com/2007/02/next-big-language.html). Everybody understands JS syntax when they see it.

Alexey says:

> sure. that's why Node is good for prototyping — everyone can build "first version". I just say that it's important to remember, that under high-load, this "first version" will probably suffer badly and there will be need to hire someone, who will rewrite solution in a language with "weird" syntax. Hopefully, at this moment, concept is already proven and there is money to be spent on reimplementation

sure, especially if you're building the "next Facebook". But for a regular web service Node.js should perform well enough :-)

Alexey says:

> I just can't forget the history of twitter. Initially, they were implemented as a naive ruby-on-rails application. And, suddenly, people liked them. They had some interesting months, rewriting stuff in Scala and "not so naive" ruby code :)

getting to that situation is a "happy problem", I think.

Trying out the browser-based development tool [Cloud9IDE](http://cloud9ide.com/). Pretty fast and cool, but seems some features (like git commits and running with Node.js module dependencies) are not there yet.

![Cloud9 IDE](https://d2vqpl3tx84ay5.cloudfront.net/4671b67a44b911e0874a7db8a60bcd3dcd3d.png)

Kusti says:

> there's much debate going on about whether twitter failed with ruby on rails because they sucked at it. 37signals has millions of users in it's ruby on rails sites and they have no such problems. Groupon and GitHub both use it. My understanding is that at least currently it is very well possible to write a robust solution with ruby on rails. And I'd expect you can do it with node.js too, at least in the future. 

Alexey replies:

> that's why I told "naive". the failure was not because of RoR, but because of using it without thinking of complexities/limitations.

> you can get a lot of power from RoR and from Node.js, but it will require considerably more effort. 

what is your take on this? <http://github.com/davidcoallier/node-php>

Alexey comments:

> at the moment, this is a toy. also, if the direction of project doesn't change, it will be eventually superseded by "official" php web server.

> this might become interesting, if there will be some way of runtime interaction between php and node.js, but I am not sure this is among the goals of the project 

Node.js guide: <http://nodeguide.com/>

Interesting, PHP can perform better than Node in some situations. <http://bergie.iki.fi/blog/php_can_perform_better_than_node-js/>
