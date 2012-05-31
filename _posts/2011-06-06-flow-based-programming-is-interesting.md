---
title: "Flow-Based Programming is interesting"
source: "http://www.qaiku.com/channels/show/programming/view/dbf047f0908311e0bcdaf33de9b3e433e433/"
layout: post
location: San Francisco, California
categories:
  - fbp
  - javascript
---
[Quite a different way](http://en.wikipedia.org/wiki/Flow-based_programming) of doing software:

* Application logic is defined by building a graph
* The graph consists of reusable "black box" components, and their connections to each other
* Components can send each other packets through the connections

Done in a right way, this would finally enable true productive visual programming. Maybe the developer tool tablets are waiting for? 

I'm currently reading [the book](http://www.jpaulmorrison.com/fbp/) on the subject, and building a proof-of-concept implementation in Node.js and CoffeeScript: <http://github.com/bergie/noflo>

GUI is slowly coming up, powered by [jsPlumb](http://jsplumb.org/jquery/demo.html):

![NoFlo GUI](/files/3677011cbd0411e0b128fb6ff22253e453e4.png)

And after a bit of styling:

![NoFlo GUI](/files/a8d40946bd1111e087e041fe349b82d982d9.png)

There is also a domain-specific language for flow-based programming. The example above, as FBP:

    'package.json' -> SOURCE Read(ReadFile) OUT -> IN Split(SplitStr)
    Split() OUT -> IN Count(Counter) COUNT -> IN Display(Output)
    Read() ERROR -> IN Display()

Added support for generating docs from FBP source files with Docco:

![](/files/b7bef516dae311e09ada75210ed4998a998a.png)
