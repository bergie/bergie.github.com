---
title: Flying a Quadrocopter with NoFlo
categories:
  - nodejs
  - fbp
layout: post
location: Berlin, Germany
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/ardrone.png'
---
The [Parrot AR.Drone](http://ardrone2.parrot.com/) is quite a lot of fun, and also [quite hackable](http://nodecopter.com/). We recently got one, and the first thing to do was to connect the excellent [Node.js ar-drone module](https://github.com/felixge/node-ar-drone) with the [NoFlo](https://noflojs.org/) flow-based programming framework.

![AR.Drone and a NoFlo flow](https://d2vqpl3tx84ay5.cloudfront.net/ardrone.png)

While [quite a lot of work](https://github.com/noflo/noflo-ardrone#todo) remains, it was already very satisfying to see how the drone was able to fly patterns based on the NoFlo graphs we created.

![NoFlo graph for take off and land](https://d2vqpl3tx84ay5.cloudfront.net/takeoffland.png)

This will obviously be more interesting when we have the rest of the motion commands implemented, and can start reading the output of the various sensors on the drone to make it react to its environment. Also interesting would be to connect this to the various other [NoFlo libraries](https://noflojs.org/library/) so that the Drone could be controlled by other protocols, or could react to things happening in other web services.

You can see some example flows in [Susanna's](http://cannonerd.wordpress.com/) [droning project](https://github.com/cannonerd/droning).

NoFlo and flying robots. What could go wrong? Just a little hint from [back in April](https://twitter.com/bergie/status/327906353957990400/photo/1):

![skynet likes NoFlo](https://d2vqpl3tx84ay5.cloudfront.net/skynet-small.png)

*The [NoFlo Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment) reached 100% of the funding goal this morning! Now that things are going smoothly there, I can focus more on this and [other examples](https://noflojs.org/example/). Stay tuned!*
