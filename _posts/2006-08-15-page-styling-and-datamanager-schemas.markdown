---
  title: "Page styling and Datamanager schemas"
  categories: 
    - "midgard"
  layout: "post"

---
Most [Midgard][1] components use a tool called [Datamanager][2] to abstract data storage and content editing. With Datamanager, site builders can define multiple [schemas][3] to be used at different areas or for different page types, each with a different set of content and editing fields.

With some recent commits coming to the next MidCOM 2.6 beta, Datamanager schemas can also be used for controlling the site layout. Each schema can have its own name, and this can be used for two things:

## Defining page types

Schema can be chosen either [on page creation][4], or with [slight modifications][5], when editing the page. You can have multiple schemas available in same folder, each of them with a unique _schema name_.

With the new Metadata Service in MidCOM 2.6, the schema name is now available through an API, which means you can easily set the class of the HTML body element or some div with it:

    <body class="<?php echo $_MIDCOM->metadata->get_page_class(); ?>">

After this changing layouts per schema is a [simple CSS exercise][6].

## Changing style templates

In addition to changing HTML classes used for CSS purposes, schema names can also be used automatically in defining which [MidCOM style templates][7] to use for the component's output.

When a component registers its Datamanager schema name to MidCOM, the name will also be automatically [appended into the style path][8] used (unless it is `default`). 

This means that if my site uses style called `/bergie-2006`, and I create a page with schema `blogentry`, MidCOM will automatically look if a style with path `/bergie-2006/blogentry` exists and use that instead of the default style for displaying component [output elements][10] like `<(feeds)`> and `<(archive-list-start)>`.

## Registering the schema name

Registering the name of schema used by component is optional, and so far only the three most common CMS components: `net.nehmer.static`, `net.nehmer.blog` and `net.nemein.calendar` utilize it. I'll try to get support for this into most of [the components][9] soon, though, as it is a simple one-liner to register this information with the metadata service:

    $_MIDCOM->bind_view_to_object($this->_article, $this->_datamanager->schema->name);

(this example is from [net.nehmer.static view handler class][11])

[1]: http://www.midgard-project.org/
[2]: http://www.midgard-project.org/documentation/midcom-2-5-datamanager-rewrite-requirements/
[3]: http://www.midgard-project.org/documentation/midcom-2-5-datamanager-rewrite-schema-definition/
[4]: http://www.midgard-project.org/documentation/page-management-with-midcom/
[5]: http://bergie.iki.fi/blog/changing-schemas-on-the-fly.html
[6]: http://www.37signals.com/svn/archives2/case_study_reusing_styles_with_a_body_class.php
[7]: http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-style-engine/
[8]: http://www.midgard-project.org/api-docs/midcom/dev/midcom/midcom_application.html#substyle_append
[9]: http://www.midgard-project.org/documentation/midcom-components/
[10]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/net.nehmer.blog/style/?root=midcom
[11]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/trunk/src/net.nehmer.static/handler/view.php?rev=3826&root=midcom&view=markup