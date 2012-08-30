---
title: Introduction to Node.js and CoffeeScript
published: false
---
## Asynchronous programming

The first thing most people here about Node.js is that it is an asynchronous programming environment.

## Why another JavaScript syntax?

JavaScript the environment and JavaScript the syntax are two completely different things. Under the misleadingly Java-like surface lies something inspired by the most powerful and flexible languages out there.

Folklore has it that JavaScript creator Brendan Eich had something like Lisp in mind. But then corporate politics kicked in, and Netscape's then-partner Sun Microsystems mandated the syntax we now know. Netscape's LiveScript became JavaScript in order to build hype for the up-and-coming Java ecosystem.

Because of this the JavaScript syntax may not be the best way to write something for JavaScript the environment.

Enter CoffeeScript.

CoffeeScript is a new programming language inspired by Ruby and Erlang and designed by Jeremy Ashkenas ground-up for the JavaScript environment.

## Backgrounds

For the past sixteen years I've been working as a professional web developer. During the most of this, my go-to language was PHP, in which I've done most of my big projects. My involvement with Node.js started innocently enough. I had written the first version of Create.js, a client-side JavaScript tool for Content Management Systems. I was presenting it an event in Vienna, Austria, and we came to the idea of building a demo where we could showcase its collaborative editing capabilities. This is when Haymo Meran from the Aloha Editor project suggested that I should do it in Node.js.

I had already quite extensive JavaScript experience from the past years working on UIs for the Midgard Content Management System. So, I picked up the environment quite easily. The asynchronous concept and the easy way to work with multiple protocols in same application blew me away. In a long afternoon, we had a collaborative editor demo working. After the event was over and I flew to Helsinki, I discovered the joys of CoffeeScript. In Create.js I had already been using the Backbone MVC library made by Jeremy Ashkenas. When I saw that he had also written a compiler for writing JavaScript more easily, it became the natural way to follow.

This book's story begins in Warsaw, Poland. I was attending the Falsy Values JavaScript conference, and Tom Hughes-Croucher, the author of O'Reilly's Up and runnign with Node.js was giving a tutorial there. By that time I was already quite familiar with the environment, and so busied myself with porting his excercises to CoffeeScript. I published them as a public Gist which received quite a bit of attention, ending up to sites like Hacker News and Web Worker Daily. Slightly later on we met again in San Francisco for some Node.js chat and board games.

The visibility for my CoffeeScript code was pleasant, but I expected this to be the end of it. Later in the same summer I was working on a project in Salzburg, Austria, while I received an enquiry from O'Reilly on whether I'd be interested in writing a book on the subject. After some pondering, and lots of gentle goading from Susanna Huhtanen, I agreed. I've been an active Open Source contributor for more than a decate, and many have seen pieces of my code, or my blogs. Now it was time to scale up, and wrap things up in a more scalable and reusable format.

Then of course life intervened. Nemein, the software consulting company I had co-founded back in 2001, merged with another company. I moved from Helsinki to Berlin in order to be closer to our clients. All of this ensured that the progress on the book was slow in the first six-or-so months. And of course there were the actual Node.js software projects I had to work on for our clients. After many false starts and faltered attempts I did what any self-respecting 19th Century author would do and took an extended writing retreat in Istanbul.

This proved to be the right choice. Not only the delay gave me the time necessary to gain more experience with Node.js in real-world deployments. This will hopefully show in the book, allowing readers to skip many of the mistakes I made in the early stages of working with this young ecosystem. Also, Istanbul is an amazing place if you want to focus on something big. Inspiring surroundings, and cafes where the uninterrupted supply of tea and waterpipe coal give provide an author with an inspiring environment. Thanks to it, the bulk of this book came into being on the terraces of places like Tophane and Sultanahmet, where a weary author would only need to lift his head to rest and gaze on Medieval architecture or ships passing by on the Bosphorus.

The flurry of exotic locations in the preceding paragraphs may also serve as a testament to the mobility of a modern hacker-nomad. Wherever electricity and WiFi is available is a potential place to work, so why not in a place that truly inspires you?

## Acknowledgements

I would like to extend my thanks to:

* Susanna Huhtanen for her unwavering support for this book project, and for giving me the gentle kick needed whenever it wasn't proceeding
* Haymo Meran for setting me on the road to Node.js
* Szaby Grunwald and Rene Kapusta for being able to deal with my early CoffeeScript
* Jukka Zitting for patiently teaching me to program in the long-gone days of the 90s
* Jeremy Ashkenas, who I've never met, for creating awesome tools like Backbone.js and CoffeeScript that so much of my work is built on
* The IKS Consortium and the European Union for funding much of my programming work in the past few years. And EU also for building an unified Europe where the hacker-nomad can live and work wherever convenient
* and of course everybody who has discussed my code on GitHub, Hacker News, and all those other places in the Internets

In Cafe Pierre Loti, Eyup, Istanbul

Henri Bergius
