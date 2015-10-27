---
  title: "Next Midgard will be PHP5 only"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://gophp5.org" title="Support GoPHP5.org">
<img src="http://gophp5.org/sites/gophp5.org/buttons/goPHP5-200x65.png" 
height="65" width="200" alt="Support GoPHP5.org" style="float: right; margin: 5px; border: none;" />
</a>

It took us a while to get here, but [Midgard][7] is finally [entering a release cycle][6] which will drop support for PHP4. The reasons are quite clear: simplicity and speed.

The whole [PHP4 end of life][2] business has caused quite a bit of discussion in the PHP community. Especially Matt Mullenweg from [WordPress][4] has [raised vocal opposition][3]. [Commenter Johan Delinger said well][1]:

> The problem of PHP 4 is its own success. Its so big of a success that it is hard to get people to the (sometimes incompatible) next generation versions. It is definitely the apps working with PHP 4 that drive people to use PHP 4, not PHP 4 itself. If crucial apps, like phpMyAdmin were developed for some other technology at their time, then that would become the de-facto everywhere installed programming environment to work with.

## Why Midgard can choose

Midgard's situation differs quite a lot from most other PHP applications. Since much of Midgard works on [Apache module][8] and [PHP extension][9] space the users of the framework are not usually relying on hosting providers and their versions but instead run their own servers.

This makes us free to focus on the PHP version (and other dependencies) that work best with our framework. Midgard core developer Piotras has estimated that some Midgard functionalities like [Query Builder][10] will be substantially faster on PHP5.

An important point also is that the PHP part of Midgard is [MidCOM][11], a quite large object-oriented component framework. While MidCOM has been possible to develop on PHP4, [new OOP features in PHP5][5] will make the code much easier to develop and understand.

## March to Midgard 2

Another reason for making the PHP5 switch now is that Midgard 2 is coming soon. I wanted to have a Midgard 1 series release requiring PHP5 before that just to play safe. Otherwise many users would find themselves trying to upgrade to PHP5 and Midgard2 at the same time, never knowing which one was causing a problem with their code.

[1]: http://photomatt.net/2007/07/13/on-php/#comment-422733
[2]: http://www.php.net/#2007-07-13-1
[3]: http://photomatt.net/2007/07/13/on-php/
[4]: http://wordpress.org/
[5]: http://www.php.net/manual/en/language.oop5.php
[6]: http://www.midgard-project.org/discussion/developer-forum/we_may_need_midgard_1-9_after_all/
[7]: http://www.midgard-project.org/
[8]: http://www.midgard-project.org/documentation/installation-source-midgard-apache/
[9]: http://www.midgard-project.org/documentation/installation-source-midgard-php/
[10]: http://www.midgard-project.org/documentation/midgardquerybuilder/
[11]: http://www.midgard-project.org/documentation/midcom
