---
  title: "My secret agenda for PHP Content Management Systems"
  categories: 
    - "midgard"
    - "oscom"
    - bestof
  layout: "post"

---
As I've written before, I'm concerned about the state of the PHP ecosystem. There are lots of good applications written in the language, but there is very little code sharing between different projects, mainly because of framework incompatibilities, but also because of quite a strong [NIH](http://en.wikipedia.org/wiki/Not_Invented_Here) culture.

But there are also bright points. I've recently seen lots of exchange of ideas, and even potential code sharing between some communities including Symfony2, Midgard, TYPO3 and eZ Publish. Much of the vision in these systems is similar, as are many of the engineering principles. When everybody uses reasonable object-oriented design, namespaces, and test-driven development, it is much easier to share.

If I had to list three areas where there is most potential for collaboration, these would be:

## Content model on the browser: VIE and RDFa

The age of communicating with your web audience via _forms_ is almost over, and it is time to evolve. HTML5 includes support for the [contentEditable](http://blog.whatwg.org/the-road-to-html-5-contenteditable) attribute which allows rich editing interaction straight on the pages, and there are cool editors supporting that, including [Aloha Editor](http://aloha-editor.org/) and [Mercury](https://github.com/jejacks0n/mercury#readme).

To do proper front-end editing, your CMS and the JavaScript environment have to agree on the content model. Fortunately there is a great solution for this: just annotate your content with some RDFa.

Having RDFa on a page allows the browser to understand the content. What is a collection of blog posts for instance, and what is the title of a blog post. With this, my VIE library will provide you with a nice in-browser content management API based on [Backbone.js](http://documentcloud.github.com/backbone/). Getting there is easy:

1. Annotate your pages with RDFa
2. Include [vie.js](https://github.com/bergie/VIE) to the pages
3. Implement [Backbone.sync](http://documentcloud.github.com/backbone/#Sync)

This allows a great deal of [decoupling in the CMS stack](http://bergie.iki.fi/blog/decoupling_content_management/). Suddenly the server side just has to worry about content management and page generation, and newer in-browser technologies can be used for actual content authoring.

Using RDFa annotations in your content comes also with another benefit: suddenly your pages themselves are an API into your content model. And search engines can understand and present your content better.

If you want to learn more about this, [watch my talk](http://bergie.iki.fi/blog/midgard_create_and_vie_in_the_aloha_editor_conference/) from the Aloha Editor Dev Con.

## Content persistence and retrieval: PHPCR

Historically, all CMSs have implemented persistence in their own way. There have been systems using relational databases like MySQL, systems providing their own content repository APIs like Midgard, and also some systems just using XML and the file system. This has reduced integration and code re-use possibilities between systems. In the Java world, a solution exists for this: the [Java Content Repository](http://en.wikipedia.org/wiki/Content_repository_API_for_Java) standard (JCR).

Now JCR has been ported to PHP. [PHPCR](http://phpcr.github.com/) provides a standard interface for all content management needs, and has multiple back-ends available. Depending on your deployment needs, you could store your content into a relational database, into Apache Jackrabbit, or into for example MongoDB.

PHPCR is great in that you can start small: just model your content with a simple, filesystem-like tree of nodes and properties. Then when you need it, a wealth of functionality is available. Versioning? Query builders? Access control? It is all there for you to use. And, depending on the PHPCR back-end, you'll have the ability to scale up to insane amounts of content.

While I've advocated [using content repositories](http://bergie.iki.fi/blog/why_you_should_use_a_content_repository_for_your_application/) for years now, this is the first time PHP has a true standardized, vendor-neutral API for it. And PHPCR is even being integrated [into the JCR specification](http://java.net/jira/browse/JSR_333-28), eventually making it an official standard.

![PHPCR discussion in Sursee, Switzerland](http://farm7.static.flickr.com/6053/5915517564_ba20056559.jpg)

Adoption is also picking up. Yesterday I was in a meeting where we had developers from TYPO3, Symfony2, Doctrine and Midgard discussing issues and solutions in the content repository space. I just hope the other projects also pick this specification up.

## Improving performance: AppServer-in-PHP

Of the three, this is probably the most controversial idea. Traditionally PHP is run as a scripting environment on a regular web server, like Apache or Nginx. In such setup, when the server receives a request, it passes it on to the PHP environment. The PHP environment loads all the code needed to fulfill the request, runs it, sends the response back, and unloads everything loaded.

This is fine when PHP is being used in the way Rasmus originally intended, as a simple display layer. But nowadays most of [PHP runs on a big framework](http://www.sitepoint.com/rasmus-lerdorf-php-frameworks-think-again/), whether it is MVC or something custom like Drupal. And loading and then discarding a whole framework for each request is simply insane.

With [AppServer-in-PHP](http://github.com/indeyets/appserver-in-php) (AiP), you have an environment where even a big framework can perform. AiP provides you with a full server environment for PHP, _written in PHP_. In this setup, your framework is loaded when the server boots up, and then each request just runs the request processing part of it.

During the [San Francisco Aloha Dev Con](http://www.aloha-editor.org/wiki/Aloha_Editor_Dev_Con_SanFrancisco_11) we ported TYPO3 to run on AiP, and the performance results where staggering. A simpler request with not much I/O would run 3-4 times faster than the same code on regular PHP setup, and an I/O -intensive request would still be _twice as fast_. AiP can't do much about I/O performance, but at least the cost of having a framework is greatly reduced.

In short, AppServer-in-PHP is something any developer running web services with a PHP framework should consider. It is also a great way for framework developers to see if they have request isolation problems in their design.

_This post has been written in the [TYPO3 Developer Days 2011](http://t3dd11.typo3.org/) event where I was invited to discuss these ideas, and also help run the RDFa part of the [TYPO3 Goes Semantic](http://www.slideshare.net/jocrau/semantic-typo3) workshop._
