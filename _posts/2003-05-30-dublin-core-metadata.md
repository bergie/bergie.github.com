---
title: Dublin Core metadata with CMFs
layout: post
categories:
  - oscom
  - midgard
---
Martin Langhoff's [OSCOM 3 presentation](http://oscom.org/Conferences/Cambridge/Proposals/langhoff_dublincore_midgard.html).

Presentation tries to target both developers of CMFs who want to support metadata and actual implementors of metadata-enabled CMS solutions.

Large corporations, governmental and educational organizations have started requiring metadata, especially Dublin Core. Some organizations like US government have defined their specific application profiles on top of DC like GLS, NZGLS and AGLS.

Dublin Core metadata support is not hard to implement and opens up important markets.

Dublin Core support required in CMF

Publish

- Every content object has metadata attached to it already (author, creation date, modification date, title, possibly keywords)
- This basic info should be easy to publish, and should be handled so by default
- Even the basic info should be overrideable by user-defined data
- Metadata needs to be published (HTML META tags in XHTML, HTML, RDF or XML)
- DC-dot and Reggie provide good example implementations
- In New Zealand a DC (NZGLS) spider crawls all government websites to collect information for a centralized portal

Storage and management

Pecularities of Dublin Core

- Problem: content is usually not centrally managed, metadata can help creating connections and locating information
- Most elements can appear multiple times (keywords are shown as DC.Subject.Keyword one keyword per element, not comma-separated)
- Metadata elements can have name, value, scheme (URI, ISBN or ISSN), language and possibly dialect
- Remember to support multilingual metadata
- All content object types (documents, collections, users, ...) should support DC
- Elements can be specified mandatory

Values, formats and validation

- Schemes embody rules for each element's value
- Framework should support standard schemes
- Schemes can be ISBN, URL, date (ISO8601), language (ISO639), freetext and value qualifiers (controlled value lists and thesaurus)
- Scheme-specific support needed for value handling: validation, printing, storage, listing/navigating possible values, input widgets
- Some schemes could have validation. For example, URLs could be fetched and stored only if they respond

Working with Thesauri

- People creating metadata drop miscellaneous terms (pet vs. domestic animal etc)
- Thesaurus helps in identifying relationships between terms
- Thesaurus standard: ANSI/NIZO Z39.19-1993
- Some Open Source tools: Thesaurus.pm, Thesari CPAN modules, ADL Thesaurus server, YAZ
- Most information architects and librarians use proprietary MultiTES tool which allows exporting to XML
- Usually information architect defines the word relations externally and it is imported to the CMF for easier usage

Metadata-only records

- CMF should enable records that contain just metadata and maybe a bookmark or external link

Implementation considerations

- Does the CMF support metadata out-of-the-box or does that need to be built
- Is metadata edited and versioned together with actual content
- Managing possible external metadata feeds

Browsing metadata

- Creating metadata is "expensive", requires additional work on top f the actual document
- Metadata could be used for driving website navigation (for example the New Zealand eGovernment website http://www.govt.nz)
- Providing "show related items" interfaces

Searching with metadata

- Thesauri could be used for building better search queries (by searching with all related terms)
- Lucene could be used for Dublin Core aware searching

Supporting DC in Midgard
Parameters should be able to function as the metadata storage. However, Midgard content management interfaces (especially MidCOM AIS) need to provide an integrated UI for editing the Dublin Core properties.

CWA has done integrated metadata editing in Midgard as a demo.

Note: links to specifications in the slides
<http://slideml.bitflux.ch/files/slidesets/485/title.html>

the slides also include notes with MySQL table examples etc. 
