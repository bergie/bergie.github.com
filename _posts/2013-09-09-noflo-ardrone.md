---
title: Flying a Quadrocopter with NoFlo
categories:
  - nodejs
  - fbp
layout: post
location: Berlin, Germany
---
The [Parrot AR.Drone](http://ardrone2.parrot.com/) is quite a lot of fun, and also [quite hackable](http://nodecopter.com/). We recently got one, and the first thing to do was to connect the excellent [Node.js ar-drone module](https://github.com/felixge/node-ar-drone) with the [NoFlo](http://noflojs.org/) flow-based programming framework.

![AR.Drone and a NoFlo flow](/files/ardrone.png)

While [quite a lot of work](https://github.com/noflo/noflo-ardrone#todo) remains, it was already very satisfying to see how the drone was able to fly patterns based on the NoFlo graphs we created.

![NoFlo graph for take off and land](/files/takeoffland.png)

This will obviously be more interesting when we have the rest of the motion commands implemented, and can start reading the output of the various sensors on the drone to make it react to its environment. Also interesting would be to connect this to the various other [NoFlo libraries](http://noflojs.org/library/) so that the Drone could be controlled by other protocols, or could react to things happening in other web services.

You can see some example flows in [Susanna's](http://cannonerd.wordpress.com/) [droning project](https://github.com/cannonerd/droning).

*The [NoFlo Kickstarter](http://www.kickstarter.com/projects/noflo/noflo-development-environment) reached 100% of the funding goal this morning! Now that things are going smoothly there, I can focus more on this and [other examples](http://noflojs.org/example/). Stay tuned!*
