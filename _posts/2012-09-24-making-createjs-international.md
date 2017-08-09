---
title: Making Create.js more international
location: Berlin, Germany
layout: post
date: "2012-09-24 20:01:00"
categories:
  - oscom
  - midgard
---
We're now making good progress at releasing the big _1.0_ of [Create.js](http://createjs.org/) soon. The various CMS integrations - from [Symfony CMF](https://twitter.com/lsmith/status/250293107353067520) to [TYPO3](http://blog.iks-project.eu/typo3-phoenix-running-on-vie-and-createjs/), and [possibly Drupal](http://drupal.org/node/1774312) and many others - have brought us a lot of new features and bug fixes, and will ensure a wide international audience for this inline editing toolkit.

To make things nice for the users, it is also important that Create.js speaks their language. For this, I recently implemented [localization features](https://github.com/bergie/create/issues/48) into the system.

![Create in Russian](https://d2vqpl3tx84ay5.cloudfront.net/create-ru.png) ![Create in Brazilian Portuguese](https://d2vqpl3tx84ay5.cloudfront.net/create-br.png)

This actually shows the power social networks: I tweeted about localizing Create.js, and within a day we had a nice [selection of translations](https://github.com/bergie/create/tree/master/locale) available, consisting of Czech, Danish, German, Spanish, Finnish, French, Italian, Dutch, Norwegian, Polish, Brazilian Portuguese, and Russian. Thanks again for everybody who contributed!

![Create in German](https://d2vqpl3tx84ay5.cloudfront.net/create-de.png) ![Create in Danish](https://d2vqpl3tx84ay5.cloudfront.net/create-da.png)

## Running Create.js in your own language

So, now that the translations are in, how do you actually run Create in your language? There are two options.

First of all, Create.js takes the default language from the language of the document. So if you have something like this in your page, then Create will be in Finnish:

    <html lang="fi">

The language codes here follow the [ISO 639-1 standard](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).

There are some situations where you may want to use a different language for the user interface than the one of the page itself. In these cases you can also pass the language to Create on instantiation:

    jQuery('body').midgardCreate({
      // Other options here
      language: 'fi'
    });

## Translating Create.js

If you would like to translate Create into your own language, it is quite easy. Simply fork the [GitHub repo](https://github.com/bergie/create), add a new locale file (it is probably easiest to start from the [English one](https://github.com/bergie/create/blob/master/locale/locale_en.js)), translate the string values, and [send a pull request](https://help.github.com/articles/creating-a-pull-request).

Of course, the number of strings in Create.js will change over time, and so, if you make a translation, it would be a good idea to also subscribe to the [mailing list](http://groups.google.com/group/createjs). I will send notifications whenever there are new strings needing translation.

The current set of messages should be enough for the features of the 1.0.0 release.
