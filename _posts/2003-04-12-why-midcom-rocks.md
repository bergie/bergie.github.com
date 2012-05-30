---
title: Why MidCOM rocks
layout: post
categories:
  - midgard
---
Essay introducing the key advantages of the [MidCOM platform](http://midgard-project.org/midcom/).

I have been very enthusiastic about the recently announced MidCOM - Midgard Components Framework project. MidCOM provides Midgard developers with a framework for building reusable and configurable site components.

Why is this important for the Midgard community? The MidCOM framework provides the following:

* Standardized URL-to-object mapping
* Standardized object-to-application mapping
* Standardized navigational system
* Standardized object extensibility API
* Standardized way to make application output configurable

So, MidCOM is about standardizing how to build Midgard applications and site features. Lets look at each of the points in more detail

## Standardized URL-to-object mapping

Before MidCOM Midgard site and application developers have had to figure out how to map URL requests into Midgard objects, typically to topics and articles. Everybody has rolled their own solution for this, using object names, IDs or GUIDs as the identifiers, and using either GET parameters or active page arguments.

With MidCOM, application development doesn't any more have to start by writing a URL parser, as the MidCOM system provides this already. URL parsing happens completely in topic and article space, using object names as the identifiers. This makes for very clean URLs. Consider the following:

`/gallery/spring-2003/IMG_2442.html`

This example would translate to article named "IMG_2442" in topic "spring-2003" under topic "gallery". Clean, pronounceable and easy to use. An even better, any Midgard object instanced using a MidCOM component is aware of its location, providing the URL through MidCOM's metadata API.

## Standardized object-to-application mapping

In addition to connecting URLs to Midgard objects, URLs also need to be connected to specific applications, or in MidCOM terms, components.

All topics in MidCOM are assigned to be managed by a component. This means that different parts of the site can work in different ways. For example, URL:

`/news/midgard-tutorial.html`

Could load a "news ticker" component, and provide the topic "news" and article "midgard-tutorial" to be handled and displayed by it.

The newsticker component can fully control the administrative interface for managing content under it, and the output provided by URLs it manages.

Component is selected for each topic separately. This means that example URL:

`/news/contacts/bergius.html`

Could be handled by a "employee directory" component.

## Standardized navigational system

Each MidCOM component provides all navigational information about objects managed by it to a system called NAP, which is accessible by an easy object-oriented API.

The NAP system means that site developers don't worry about different components or object types when writing the site's navigational interface. You can write one script for generating the whole site navigation, and it will work with the site and any component under it.

This makes standardized navigational tools like breadcrumbs or the NemeinNavBar utility much more useful, as they can be used with any MidCOM-based site. I expect that in near future site developers will have a huge library of prebuilt navigational systems to select from.

## Standardized object extensibility API

Enabling content managers to define their own object types or metadata fields has always been a problem with Midgard, meaning that any new metadata field has forced site developers to write their own content creation UIs.

MidCOM provides an easier system for this called datamanager. With datamanager, site developers can define their own customer data structures, called "layouts". Layouts are PHP arrays telling datamanager what fields to allow for objects handled for that component, how to present those fields in an administrative interface, and where to store them (parameters, object fields or attachments).

Using datamanager component writers don't really have to care about what object fields site developers will want to use, they just need to use the datamanager utility. Data structure "layouts" can be provided as part of the default component configuration, and can be overridden on a per-sitegroup basis.

Datamanager is integrated to the MidCOM AIS content management interface, providing customized editing forms for all components based on widgets defined in the "layouts" configuration. The widgets can be anything from text input boxes to a WYSIWYG editor or image upload system.

## Standardized way to make application output configurable

The MidCOM specification requires that all application output is handled through the MidCOM style system. MidCOM's style engine is an extension of the Midgard style engine, allowing component outputs to be configured using style elements, but also for fallback elements to be provided as snippets.

This means that output of any MidCOM component will be fully configurable by site developers using the familiar Midgard style engine. Style to be used can be defined separately for all topics, allowing for different output styles from same components on per site area basis.

Because components can be loaded dynamically to a Midgard page, site developers can have different parts of the same page use different styles, making administration of the style elements much easier.

## Conclusions

MidCOM brings into Midgard something that has been lacking so far: a "write once and run everywhere" framework for building site components, styles and navigational tools.

This promotes component sharing and code reuse, both within a single Midgard solution provider company, and within the international Open Source community.

So far Midgard has provided a nice content management framework, but actual sites have needed to be built from scratch. MidCOM promises to change that, making Midgard much easier to implement.

Of course, sloppy coding is still possible with MidCOM, but if component writers adher to the MidCOM specification, PEAR coding standards and use NemeinLocalization for internationalizing their components, we should achieve global reusability.

I invite all Midgard developers to seriously study and consider MidCOM for their projects. There is some learning curve, but real code reusability should repay that very quickly. 
