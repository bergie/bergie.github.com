---
title: Layout fixed
layout: post
categories:
  - life
---
Bergie fixes a Netscape problem in the site's layout. (9th Jan. 1999)

For the time my website has been online, a Netscape problem has been annoying me. Netscape, for some reason, decided to stretch the rightmost cells of the table, causing an ugly black area in the right side of the table.

Now I finally took the time and effort to fix this, as well as rewriting part of my HTML in order to be HTML 4.0 compatible. The original problem was caused by the nested table used in the "News Headlines" section of my layout. I removed some parts of the database output from the text area there, and now it should work.

Another improvement in the site was transition from traditional HTML controlling of typography (FONT tags, etc.) to the method suggested by HTML 4.0 specification, which uses mainly CSS for setting font sizes and typefaces.

This enabled me to go back to using HTML tags in the content mainly for organizing the structure of the documents instead of trying to make a good looking typography with them. So now all pages start with a H1 headline, and continue downwards from that.

I am sure this will cause my page to look a bit ugly in older (pre 4.0 in Netscape and pre 3.0 in IE) browsers, but then again, people should upgrade anyway. There also might be problems with some less common browsers like Opera, Grail and Emacs' W3. Time will tell.

![Valid HTML 4.0](http://web.archive.org/web/20010424054434im_/http://validator.w3.org/images/vh40.gif)
