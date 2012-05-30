---
title: All you need to know about content management, you learned in grade school
layout: post
categories:
  - oscom
---
[Jon Udell's](http://weblog.infoworld.com/udell/) presentation at [OSCOM 3](http://www.oscom.org/Conferences/Cambridge/Program/):

Rules:

- Write effective titles and topic sentences
- Neatness counts
- Share with others
- No hitting

The rules are requirement for effective content management.

What is content?

- Expression of ideas
- Request for attention
- Attempt to influence

Titles are the most important thing for content visibility, as it is shown in RSS feeds, Google (and other search engine) results.

- Search engine display
- Search engine weighting (page rank)
- Bookmark display
- Link text in drag-and-drop linking GUIs

Why even experienced technologists can miss the importance of HTML titles? Easily... even Jon's slide software omits them

Publishing is an engineering principle, rules need to be followed.

The reward of providing meaningful titles is attention and influence, as your content is found more easily.

This is a problem in blogging, as you might have many items on the same HTML page. What should be the title then? The date?

URLs should be "pronounceable".
Brent's Law of CMS URLs: the more expensive the CMS the crappier the URLs.
Shorter URL means easier to type and trade by email.
Longer URL can pack more metadata.

For organizing search results there are three main fields: HTML title, URL and the raw content, in order of importance.

Title should also provide publishing organization, possibly site area
(site - area - topic - title).

CMSs should help content creators to understand and effectively use these techniques.

Subjects are also very important on mailing lists to make more useful mailing list archives. 
Why do mail archives always show just the subject and author? Why not a snippet of content? Show what the email is about in the subject field.
Unfortunately threading might break if you change subjects. Consider implementing ThreadsML (www.threadsml.org) support, moving from mailing lists to weblogs.

Regarding SlideML, "inventing new standards is a sign of weakness", as said on the Twingle site. 
We have dozens of XML formats but not easy tools for regular people to produce meaningful content with them. 
Problem with OpenOffice and PowerPoint is that while they're easy to use they don't allow meaningful web publishing. 
"I'm of the geek tribe so I had to invent my own", so Jon made his own slide format. 
INSERT YOUR CONTENT HERE is not for those who don't use Emacs.

CMSs came from print world, things like deep linking were not considered. 
Editing UIs are too non-web-like, most CMSs either provide basic TEXTAREAs or IE DHTML Edit control (and Midas). 
Things like drag-and-drop linking, image editing and table management is too difficult.

There would be a huge opportunity for lightweight, web-aware writing tool that integrates with CMSs (Twingle, Bitflux Editor?). 
Microsoft is now doing interesting things in that space, especially with MS Office XML support.

Old-style desktop tools give the illusion that you're only managing a single document (oscom.ppt) instead of several pages that require meaningful URLs and titles. 
This compound document problem might go away as everybody is connected and web becomes the primary content distribution forum (no need to email a single file, put it to floppy, etc).

Central lesson of WWW is "View source", leading to "sharing is good".

CMSs excel in refactoring "in the large", like rearranging trees, make changes consistently across documents, handle access control. 
However, CMSs are not good with "in the small" problems like capturing email threads, creating documents that synthetisize content from existing documents, maintain and reorganize links. 
XML-oriented outliner could help here (wink towards Dave Winer regarding OPML)

How will normal people write for semantic web? Idea: content and presentation could be combined. 
Categorization should produce immediate visual results. 
Tagged items should be reflected in many presentations like HTML rendering, URL, RSS feed, ... 
An "all consuming" Amazon book aggregator is shown as example of easy use of categorization. 
We should be able to tell that "this link is a person, that link is to a product page"

Example: mark a specific item with a CSS class, then you can make it visually separate and locate it using Xpath. 
"If I write a document and put in a quotation or code fragment, I should be able to categorize it. The categorization should be shown visually"

Slides:
<http://weblog.infoworld.com/udell/misc/oscom/intro.html>
