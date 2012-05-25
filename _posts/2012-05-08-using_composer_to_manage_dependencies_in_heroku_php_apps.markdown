---
  title: "Using Composer to manage dependencies in Heroku PHP apps"
  categories: 
    - "midgard"
  layout: "post"

---
[Heroku](http://www.heroku.com/) is a very nice [Platform-as-a-Service](http://en.wikipedia.org/wiki/Platform_as_a_service) provider that allows you to focus on writing applications instead of managing servers. If your application code is already managed in Git, in most cases you only need to create a Heroku app setup, and then `git push` to deploy it on Heroku. [Scaling your app](http://www.heroku.com/how/scale) is easy and there are many [useful add-ons](https://addons.heroku.com/) available in their "app store".

While Heroku [got its start](http://www.flourish.org/blog/?p=687) from hosting Ruby on Rails applications, it nowadays supports [many different environments](https://devcenter.heroku.com/articles/cedar) in the Cedar stack. Node.js is what many use, but they also [do support PHP](http://www.gravitywell.co.uk/blog/post/deploying-php-apps-to-heroku).

Dependency management is easy for Node.js applications as Heroku recognizes your `package.json` files and [automatically installs](https://devcenter.heroku.com/articles/nodejs#declare_dependencies_with_npm) the libraries needed via [NPM](http://search.npmjs.org/).

Until now PHP developers haven't had this convenience, but as [Composer](http://packagist.org/) is emerging as the [default PHP package manager](http://bergie.iki.fi/blog/composer_solves_the_php_code-sharing_problem/), I've now [added support](https://github.com/heroku/heroku-buildpack-php/pull/10) for it. Before the [pull request](https://github.com/heroku/heroku-buildpack-php/pull/10) gets accepted, Composer dependency handling can already be used by specifying [my custom PHP buildpack](https://github.com/bergie/heroku-buildpack-php) when creating Heroku apps.

I've written [a simple example app](https://github.com/bergie/urlizer_service) to show how this works.

First you need to create the folder for your app and make it a Git repository:

    $ mkdir myapp
    $ cd myapp
    $ git init

Then create the Heroku app using a custom buildpack (when the pull request is accepted you can skip the buildpack definition):

    $ heroku create -s cedar --buildpack https://github.com/bergie/heroku-buildpack-php.git my-cool-app

Then it is time to write your [composer.json](http://packagist.org/) file. In this case we'll only depend on the [urlize library](http://packagist.org/packages/midgard/midgardmvc-helper-urlize):

    {
        "require": {
            "php": ">=5.2.0",
            "midgard/midgardmvc-helper-urlize": "*"
        }
    }

For Heroku to recognize the app as a PHP one, you also need to have an `index.php`. In this case with the following code:

    <?php
    // URLizer service
    require 'vendor/midgard/midgardmvc-helper-urlize/interface.php';
    if (isset($_GET['urlize'])) {
        $data = array();
        $data['from'] = $_GET['urlize'];
        $data['to'] = midgardmvc_helper_urlize::string($_GET['urlize']);
        header('Content-type: application/json; charset=utf-8');
        die(json_encode($data));
    }
    header('Content-Type: text/html; charset=utf-8');
    ?>
    <h1>Urlizer service</h1>
    <form method="GET">
        <label>
            String to URLize
            <input name="urlize" type="text" />
        </label>
        <input type="submit" value="URLize" />
    </form>

Now add and commit these files, and then deploy to Heroku:

    $ git push heroku master

You should see that Heroku notices the Composer dependencies and installs them:

    -----> Heroku receiving push
    -----> Fetching custom buildpack... done
    -----> PHP app detected
    -----> Bundling Apache version 2.2.22
    -----> Bundling PHP version 5.3.10
    -----> Installing Composer dependencies
    Installing dependencies
      - Package phptal/phptal (dev-master)
        Cloning e146361f25b8672d364695b757eddf1c169e05d2

      - Package midgard/midgardmvc-core (dev-master)
        Cloning 2b00d38cb2fea42c8f9791c5ecc7270dc81182e8

      - Package midgard/midgardmvc-helper-urlize (dev-master)
        Cloning 92d0c8c638c389b7be1887ca67cd334f51932912

    midgard/midgardmvc-core suggests installing ext-midgard2 (>=10.05.5)
    Writing lock file
    Generating autoload files
    -----> Discovering process types
           Procfile declares types -> (none)
           Default types for PHP   -> web
    -----> Compiled slug size is 13.2MB
    -----> Launching... done, v13

And that is it! You can see an example of this app at <http://urlizer-service.herokuapp.com/>.