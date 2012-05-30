---
title: "Case study: Building the OSCOM site"
layout: post
categories:
  - oscom
  - midgard
---
OSCOM is an international, not-for-profit organization dedicated to Open Source Content Management.  The goal of the organization is to bring together as many great brains as possible to build a network and grow the community of open source content management.

Since OSCOM represents the whole Open Source CMS industry, a "Frankenstein CMS" approach was selected for the organization's web site. The idea was to pick the best or quickest to implement features of different CMSs and combine them to a coherent, working web site.

The main web site and Extranet run on the Midgard framework, the site news (blog) runs on Movable Type, and the CMS Matrix is powered by Wyona CMS. This case study concentrates on the Midgard part of the site.

## Requirements

The first OSCOM web site had been implemented mostly using manual HTML and PHP pages for the second conference in Berkeley. This version of the site included some material from the conferences and generic information about OSCOM.

As there was only content, not actual functionalities, the migration of the old site to Midgard was going to be easy. This enabled us to think about possible improvements and new features.

The layout was the primary issue to be tackled in the site rewrite. The old OSCOM layout was very simplistic and not too appealing visually. The different conference sites were implemented using completely separate layouts from the main OSCOM site.

To fix the layout issue the decision was to build a new HTML templates using the SlideML project site. The layout template was changed into OSCOM's orange color and slightly modified to use more CSS rules instead of HTML tables.

The old OSCOM site also included news feeds from several CMS resources using the RSS syndication protocol. The Magpie RSS library was selected for providing this feature due to its easy embeddability into the Midgard-based site layout.

OSCOM's main function has been arranging Open Source CMS conferences. The conference arrangements have caused the need for circulating meeting agendas and budgets. Earlier there were just placed into FTP space somewhere, without protection or commenting capabilities. An authenticated Extranet would obviously be a better alternative here.

## Selected applications

Aegir CMS was selected as the content creation interface for the main site. OSCOM members are working on several operating systems and browsers, and so Aegir's support for both Internet Explorer and Mozilla WYSIWYG editing was seen as advantageous. Aegir CMS also provides an easy way for adding images and file attachments to the site content.

As the OSCOM site was built as a quick hobby project, the site implementation had to be as easy as possible. For this reason it was decided to use the existing NemeinNavBar library for mapping URI
requests to actual content in Midgard's topic and article tree.

The NemeinNavBar library works in a simple way. It is called in an active Midgard page and given a rootlevel topic to start parsing from. Then it parses the given URI and tries to match it to topics and articles. If it finds the match it will instance the required MidgardTopic or MidgardArticle object for displaying, and if it doesn't it raises a 404 error.

To make things even easier, the decision was to use the prebuilt Aegir Sample Site template from Aegir CMS distribution. This template includes all the needed infrastructure for building dynamic sites, including page elements for shoving site's navigation or a breadcrumb trail in the site layout.

## Site implementation

Using the set of prebuilt functionalities, building the base site framework was just a matter for creating a new website in Aegir CMS, based on the "Simple Dynamic Site" template. After the website had been created, a new toplevel topic was created and configured as the root_topic in the site template's code-init element. This was the only thing needed for displaying dynamic content from Midgard's content repository on the site.

The site's HTML layout template was copied to a new Midgard style's ROOT element, and calls for several elements provided by the site template were added. This included adding a <(content)> call to the style where the actual page content was to be shown.

Some minor changes were made to the site template to accommodate the "Frankenstein CMS" approach of the site. The Sample Site generates its navigation directly from the topic structure, but in this case we would need to be able to link to non-Midgard content. Because of this the toplevel navigation was hardcoded in the site style, and NemeinNavBar's navigation generating functions were only used for subnavigations of the Midgard-powered site areas.

One main issue with the "Frankenstein CMS" approach was keeping layout consistent between the site sections. For this, an empty Midgard page was added to the system where dynamic content areas were replaced by simple HTML comments. This empty page could then be parsed and used as layout template by the other CMS systems.

## Content creation

After the site framework had been built the only thing left to do was copying content to Midgard from the old site. This was mostly accomplished as a copy-paste job. Topics and articles were created as needed. Topics to represent directories in the old system, and articles to represent individual HTML pages. As NemeinNavBar was used, the site navigation picked up the content structure immediately, making the site navigateable.

Some new groups were added to the system to enable easier content creation to other OSCOM participants. These groups were given ownership of particular site areas and were configured to only access the "News & Articles" area of Aegir CMS. This was the content creators' interface was not cluttered by other Aegir CMS features like layout management.

## OSCOM Extranet

The Extranet was built as a new active page in the OSCOM website. It was configured to use its own root_topic with the NemeinNavBar library by overriding the site's global code-init element with a local page element.

Authentication to the Extranet was implemented using the NemeinAuthentication library, allowing for easy cookie-based authentication of Midgard users.

Commenting articles was added as an additional feature to the Extranet. This was done simply by adding a form for generating Midgard's reply articles to the page in question. Comment display was
implemented using Midgard's :f text parser, generating simple HTML based on ASCII formatting rules. This was comment posting was made simple without need for a WYSIWYG editor implementation.

The same commenting system can be later extended to the public site by either allowing users to register to the site or by saving the comments using a "guest" account.

## Conclusion

The OSCOM site project was handled very quickly, requiring only about 4-5 hours of implementation work. This was due to being able to build most of the site using existing infrastructure. Rapid implementation was very important to this project, as it coincided with opening the OSCOM conference planning process to larger audience, making immediate requirements for better information sharing infrastructure.

Organization members have responded quite positively to the new authoring interfaces, and have seemed to learn the Midgard content creation system without problems. Content authoring and user
permissions management has already been distributed within the OSCOM organizations.

The site also seems to perform quite well, and the new layout gives a more professional image of the OSCOM organization. Since content and structure are separated from layout in Midgard implementing changes or complete makeovers with the layout will be a simple task.

## Links

* OSCOM - <http://www.oscom.org/>
* Midgard - <http://www.midgard-project.org/>
* Movable Type - <http://www.movabletype.org/>
* Wyona CMS - <http://www.wyona.org/>
* SlideML - <http://www.slideml.org/>
* Magpie RSS - <http://magpierss.sourceforge.net/>
* Aegir CMS - <http://www.aegir-cms.org/>
* NemeinNavBar - <http://navbar.nemein.net/>
* NemeinAuthentication - <http://authentication.nemein.net/>
