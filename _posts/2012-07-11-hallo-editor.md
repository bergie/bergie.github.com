---
title: "Hallo.js, a simple rich text editor for the web"
layout: post
location: Berlin, Germany
categories:
  - oscom
  - coffeescript
---
Those who have been following my blog have probably seen the [Hallo Editor](http://hallojs.org/) mentioned in my Create.js posts. But for those who haven't seen it yet, here is a brief introduction.

Hallo.js is a simple rich text editor built as a [jQuery UI](http://jqueryui.com/) widget and utilizing the [HTML5 contentEditable](http://blog.whatwg.org/the-road-to-html-5-contenteditable) functionality for allowing in-place editing. This sort of real in-place editing differs from more traditional editors like [TinyMCE](http://www.tinymce.com/) in that the content is never detached from its place on a page, and so for instance all CSS rules apply to it. This makes the editing experience much more _true WYSIWYG_.

The Hallo Editor effort was started in the [IKS Project](http://iks-project.eu/) as part of our [Create.js](http://createjs.org) effort in order to provide a MIT-licensed editor option.

Create.js had originally been written with [Aloha Editor](http://aloha-editor.org/) in mind, but its licensing model made it complicated for some CMS projects to adopt. With Hallo we were able to provide an editor option that can be used anywhere, from open source projects to commercial web applications.

Create now fully supports both of the editors.

## User interface

Hallo's user interface design has focused on [minimalism](https://github.com/bergie/hallo/issues/6): _an editor should allow user to write without distractions, and only provide formatting options when needed_.

Because different web applications have varying user experience needs, the editing UI in Hallo is also configurable. The default UI provides a iPad-style popover that appears whenever user has selected some text to format:

![Hallo.js contextual toolbar](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/hallo-contextual-toolbar.png)

There is also the more traditional "fixed toolbar" option where the editing tools are always displayed above the area being edited:

![Hallo.js fixed toolbar](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/hallo-fixed-toolbar.png)

The toolbars can also be customized. For example in Create.js we place the editing tools directly into Create's own toolbar:

![Hallo.js custom toolbar in Create.js](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/hallo-custom-toolbar.png)

## Design philosophy

Hallo has been designed to be very modular. This means that the [editor core](https://github.com/bergie/hallo/blob/master/src/hallo.coffee) merely handles the interactions with the contentEditable, and provides the necessary functionality for configuration management, editing events, and HTML cleanup.

Everything else is left to [plugins](https://github.com/bergie/hallo/tree/master/src/plugins). This means that even the _Bold_ button is [a plugin](https://github.com/bergie/hallo/blob/master/src/plugins/halloformat.coffee).

Here is how a simple _Bold_ plugin could look like in CoffeeScript:

    #    Bold plugin for Hallo
    ((jQuery) ->
      jQuery.widget 'IKS.hallobold',
        boldElement: null
        options:
          uuid: ''
          editable: null
        populateToolbar: (toolbar) ->
          @boldElement = jQuery '<span></span>'
          @boldElement.hallobutton
            uuid: @options.uuid
            editable: @options.editable
            label: 'Bold'
            icon: 'icon-bold'
            command: 'bold'
          toolbar.append @boldElement
    ) jQuery

## Development

The Hallo Editor is being developed actively [on GitHub](https://github.com/bergie/hallo). Anybody interested in using the editor should watch the repository, and pull requests are also obviously very welcome.

To keep things concise, the editor has been written in [CoffeeScript](http://coffeescript.org), a little language that compiles to JavaScript. The Hallo sources can be built with:

    $ cake build

[Hallo 1.0.0](http://hallojs.org/js/hallo.js) was released recently, and now the development focuses on some performance improvements and bug fixing. We're also watching the [Substance Surface](https://github.com/substance/surface), which may provide us a more [robust editor core](https://github.com/bergie/hallo/issues/5) in the future.

This being said, there are already many projects using Hallo. See for instance the [Symfony CMF editor](http://blog.iks-project.eu/semantic-enhanced-cmf-editor-now-available/) for a nice integrated approach.

If you're already using [Hallo](http://hallojs.org), we'd love to hear about it!
