---
  title: "Midgard in the Symfony2 world"
  categories: 
    - "midgard"
  layout: "post"

---
So, [Symfony2 was released](http://symfony.com/blog/symfony-2-0) today. Now, you may remember me complaining about the [fragmentation in the PHP community](http://bergie.iki.fi/blog/php-finally_getting_an_ecosystem/), as well as [suggesting various technologies](http://bergie.iki.fi/blog/my_secret_agenda_for_php_content_management_systems/) that have the power to bring the community together. But what I haven't talked about is convergence in the area of PHP frameworks.

Frameworks are generally problematic concerning [cross-project collaboration](http://bergie.iki.fi/blog/on_cross-project_collaboration/), as most of the code written against a particular framework tends to run only on that framework. If things are [properly decoupled](http://bergie.iki.fi/blog/decoupling_content_management/), and most of the logic is in generic libraries, this doesn't matter so much. But still, having a common framework most of the code is written for helps, as can be seen [in the Ruby community](http://rubyonrails.org/).

So, to advance this goal, we in the [Midgard Community](http://www.midgard-project.org/) have [made a decision](http://lists.midgard-project.org/pipermail/dev/2011-July/003022.html) to start aligning our PHP code [to Symfony2](http://lists.midgard-project.org/pipermail/dev/2011-July/003016.html). The [ideas behind SF2](http://symfony.com/blog/symfony-2-0) are quite compatible with our views:

> _Symfony2 embraces standards_: First, Symfony2 is willingly centered around the HTTP specification (just have a look at the built-in HTTP reverse proxy). Then, we are embracing the PHP standards: PHPUnit, namespaces, PSR-0 autoloader, ... That makes Symfony2 easily interoperable with many other great PHP libraries.

> _Symfony2 is decoupled_: Beside being a full-stack framework, Symfony2 is also a set of decoupled and cohesive components; Symfony2 is made of 21 components that can be used as standalone libraries: they have their own Git repositories, and they are all available as PEAR packages.

For us this alignment means making sure code written for MidCOM and Midgard MVC, our two PHP frameworks runs properly under Symfony2, and filling various functionality gaps that exist between our frameworks and SF2.

I believe this to be a great opportunity for both communities. Especially for Midgard users this brings a great promise of future functionality coupled with full backwards compatibility.

Here are some very early results of this collaboration:

* Symfony2 can now be *run on AppServer-in-PHP* with our [AppServerBundle](https://github.com/bergie/MidgardAppServerBundle). Great performance and deployment benefits can be had by adopting AiP, so having a simple way to run SF2 with it is useful
* There is a [ConnectionBundle](https://github.com/bergie/MidgardConnectionBundle) which is responsible for initializing and *connecting to a [Midgard2 content repository](http://www.midgard-project.org/midgard2/)*
* *Midgard MVC components can now be run as part of a Symfony2* application with the [MvcCompatBundle](https://github.com/bergie/MidgardMvcCompatBundle). Lots of work there still remains, but it is a good start

Here you can see a screen from a simple AiP-powered SF2 application, running the [org_midgardproject_news](https://github.com/bergie/org_midgardproject_news) component displaying content from the Midgard2 repository rendered via [TAL](http://phptal.org/):

![Midgard says Hello World](http://static.qaiku.com/e2b/919/62b/e2b91962b92e11e0a362916cb7aa58f358f3.jpg)

After the Midgard MVC compatibility work is done we will also focus on ensuring full MidCOM applications run on Symfony2. There is already some precedent for this sort of compatibility work, as you can also run [Zend Framework applications under Symfony2](https://github.com/beberlei/WhitewashingZFMvcCompatBundle).

Congratulations to the Symfony2 community for a great release! I look forward to a lot more collaboration in the future.