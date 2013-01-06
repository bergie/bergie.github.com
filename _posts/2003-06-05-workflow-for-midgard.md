---
title: Workflow for Midgard
categories:
  - midgard
layout: post
source: "http://www.midgard-project.org/updates/2003-06-05-000.html"
---
David Schmitter from [Dataflow](http://www.dataflow.ch) in Switzerland has now released version 0.9 of MidRepository, a versioning and workflow system for Midgard.

Source code and documentation can be downloaded from [http://www.dataflow.ch/midgard-cms/](http://web.archive.org/web/20031215232420/http://www.dataflow.ch/midgard-cms/)

From MidRepository README:

> MidRepository is a versioning and workflow system for Midgard. It represents Midgard DBs as collections of repligarded objects under CVS control. All changes in the midgard objects are automatically reflected in CVS and a global meta-information DB. (Groups of) Midgard DBs are connected to CVS branches. You can specify fine-grained workflow rules for moving around objects between the branches / DBs.

> For every branch (staging / live), there is a central backend DB that contains the authoritative versions of the objects. Changes in the frontend DB(s) are imported into the backend DB, written to CVS and delivered to all frontend DBs.
