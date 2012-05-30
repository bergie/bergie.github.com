---
title: 10 Best Features from Commercial CMS
layout: post
categories:
  - oscom
  - midgard
---
Tony Byrne's [OSCOM 3 presentation](http://oscom.org/Conferences/Cambridge/Proposals/byrne_top_ten_features.html):

Claim: Proprietary CMSs have advanced more than Open Source ones in last couple of years.

Main point: CMS should help people to publish more efficiently

10 features that Open Source CMS should implement, not found even in all proprietary ones.

Being able to build/install is not the point, should be out-of-the-box.

## 1) Editorial tools

* Intelligent copy-paste
* Replace user-defined fonts
* Run through a filter

Essentially could be implemented by allowing users to configure authoring interface to run saves through mgd_format()

* Intuitive versioning
* Show changes in the actual document (like MS Word show changes -- red overline for removed, yellow background for added)

Could be implemented by making a nicer frontend to NemeinRCS
Note: RCS needs to be supported by MidCOM datamanager

* Visual workflow cues
* Show workflow steps content is going through in clear, visual way (Edit -> Review -> Approve -> Finished)

Could be implemented by expanding the Aegir CMS frontpage workflow stuff (articles to be approved)

* Browser-based image editing
* Add text, set link, add circle etc

Copy the "convert" frontend in Rambo's Image Gallery snippets to the authoring interface

* Pre-localized interface
* Ship several languages for the user interface

This is already pretty well handled in Aegir CMS (~10 languages) Needs to be added to MidCOM, SpiderAdmin, etc.

* Extras:
* In-context editing
* Allow editing objects on the actual site interface

* Problem, same content is used in several places (and formats)

Edit-this-page helps there, could be better

* Easy "widgets" for pulling data from relational databases

Integrate DB_DataObject with nice UI?

## 2) Management tools

* Useful reports
* Statistics from data (number of documents in workflow stage, content approval times, who have logged in?)
* Reports need access control, links to the data reported

This data is easily available in Midgard, needs integrated interface

* Configurable, forms-based workflow
* Workflows should be configurable and editable by regular users
* Escalations, after editing goes for approval to some group, email notifications
* WFML (workflow markup language), provides integration with workflow design tools like MS Visio

Martin mentioned that a New Zealand company has already developed this for Midgard. We will have to make the push to get it Open Sourced and integrated into Midgard

* 508 / WA - Compliant output
* Enforce accessibility in HTML (alt tags for images,
table headings, row headings)

Integrate editing widgets for the accessibility tags to table and image adding dialogues

* Extras
* Taxonomy management tools

Metadata?

* Distributed user management
* Allow non-admins to manage some user areas

Already covered by Midgard's group system

* Good, inexpensive ASP alternative

Midgard provides easy hosting with sitegroups, we just need more hosting providers

## 3) Technical tools

* Integration tools
* Easy connectors with ERP, CRM etc.
* Expose data in the business apps as CMS objects

Quite difficult problem for any Open Source project, requires extensive work *per* each business app

* Migration tools
* Import HTML from filesystem to CMS
* Import from other databases/CMSs to CMS
* Convert and clean up imported HTML, possibly remove layouts automatically

In essence a bunch of configurable Perl scripts

* Browser-based content object development
* Create new content object type (news item, case study, ...)
* Define the fields and widgets

Make forms-based UI for building datamanager layout configs

* Extras:
* Open architectures
* Use any DB, web server, OS
* Real-time LDAP and Active Directory integration

We already have NTLM but we would need to be able to move user data to external directory data store. Peter Slot was thinking already about this

* Separation of management and delivery
* CMS for management, Apache for delivery

## Manifesto: Tony's idea what we should do

* Fewer projects, more product managers
* Identify and standardize on few "winning CMSs"

* Move up the stack
* Don't focus on building new databases, web servers, etc. instead use standard protocols and Open Source apps

* Create common tools
* Like Twingle
* Enable switching CMSs but keeping content and structure

* Create common "lingo"
* "This is what we mean with aggregation"

## Some conclusions

Tony advocates standardizing behind only some few Open Source CMSs. However, this is not very realistic to happen in the Open Source world, as everybody has their egos involved. Participating in the OSCOM and standardization process will be better approach.

However, the main message that comes through in the presentation
is having better functionality out-of-the-box. By standardizing
on a single admin interface for *site administration* and a single
content management interface (MidCOM AIS), it will be easier to provide all these functionalities and benefits. The questions is whether everybody in the Midgard community is comfortable with that.

Hearing the talk I think the two approaches we're now thinking about, joining the Apache community more closely, and shipping a full-blown MidCOM setup as standard in Midgard are the right ones.

Anyway, some food for thought to the Midgard Developer Meeting. 
