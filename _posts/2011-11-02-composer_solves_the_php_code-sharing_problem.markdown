---
  title: "Composer solves the PHP code-sharing problem"
  categories: 
    - "midgard"
  layout: "post"

---
In PHP we've had [a lousy culture](http://bergie.iki.fi/blog/php-finally_getting_an_ecosystem/) of code-sharing. Because depending on code from others as been tricky, every major PHP application or framework has practically had to reimplement the whole world. Only some tools, like [PHPUnit](https://github.com/sebastianbergmann/phpunit/), have managed to break over this barrier and become de-facto standards across project boundaries. But for the rest: just write it yourself.

But now [Composer](http://packagist.org/about-composer), and its repository counterpart [Packagist](http://packagist.org/), promise to change all that. And obviously new conventions like PHP's [namespacing support](http://www.php.net/manual/en/language.namespaces.rationale.php) and the [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) standard autoloader help.

Composer is heavily inspired by [NPM](http://npmjs.org/) which has built a strong culture of code-sharing and easy deployment in the Node.js community.

## Easy for users

With Composer, managing dependencies in your project is very easy. Simply create a `composer.json` file where you state your dependencies, and let the package management system worry about the rest.

Packages that are registered with packagist.org are obviously easiest to depend on, but you can also state packages coming from custom repositories (like your company's internal version control system), or PHP extensions that you need.

Here is for example the `composer.json` from the [Midgard PHPCR provider](https://github.com/bergie/phpcr-midgard2):

    {
        "name": "midgard/phpcr",
        "type": "library",
        "require": {
            "php": ">=5.3.0",
            "ext-midgard2": ">=10.05.5",
            "phpcr/phpcr": ">=2.1.0-beta1"
        }
    }

With this file, Composer knows that our PHPCR provider runs only on PHP 5.3 or newer (as it uses namespaces), and that it needs the [Midgard PHP extension](http://new.midgard-project.org/midgard2/) and the [PHPCR interface classes](http://phpcr.github.com/) to be available.

Now installing the project is easy:

    $ wget http://getcomposer.org/composer.phar 
    $ php composer.phar install

How about autoloading? Traditionally PHP required you to manually `include` or `require` all files you wanted to use in your code, with the possibility to [write an autoloader](http://php.net/manual/en/language.oop5.autoload.php) to handle it automatically when you call an undefined class. But managing these autoloaders is also a chore.

Composer helps here too, by automatically generating an autoloader that will be able to load your own code, and the code from all your dependencies. So you can get rid of your own autoloaders and `include` statements, and just include the Composer-generated autoloader in your code:

    require 'vendor/.composer/autoload.php';

After this all the classes you've stated your application needing will be available.

## Easy for developers

While ease-of-installation is important, it isn't enough to build an ecosystem. The other thing that has to be easy is publishing code. Basically: _if you've written a piece of functionality in PHP that you could see yourself using in another project, it should be effortless to publish it as a library._

This is where approaches like PEAR mostly failed, by making it too cumbersome to define your packages, to build them, and to upload them to the repository.

With Composer [this is very easy](http://packagist.org/about). You again define a `composer.json` for your package, and push that to your project's Git repository. Then just [register](http://packagist.org/packages/submit) the Git repository URL with packagist.org.

After this Packagist will spider your repository and make it available as a package.

Publishing new versions is very easy: simply keep your `composer.json` up-to-date, and [tag your releases](http://learn.github.com/p/tagging.html) in Git.

## Where are we now?

It is still early days for Composer, and [the project](https://github.com/composer/composer) is being worked on at a hectic pace. However, it is already good enough for managing dependencies to modern, PSR-0 compatible libraries.

What I would like to see happen next is support for custom package roles and autoloaders. This would allow us to handle more specific cases, like for example installation of [Midgard MVC components](http://new.midgard-project.org/midgardmvc/#structure_of_a_component) and their non-namespaced autoloading needs. After that we should be able to get rid of our custom installer code and just join the Composer crowd.

But if your code is already fully namespaced, this is a great time to get started with [Composer](http://packagist.org/about-composer).
