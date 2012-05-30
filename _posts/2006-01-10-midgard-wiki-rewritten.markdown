---
  title: "Midgard Wiki rewritten"
  categories: 
    - "midgard"
  layout: "post"

---
I've spent some time yesterday and today rewriting the [Midgard Wiki][1] software to the new [MidCOM][2] architecture. Major changes include:

- Switch to [base classes][5] and [DBA][4] for [Access Control Lists][3] support
- Switch to [Query Builder][6] and migration away from [NAP][7] for better performance
- Integration with the _no.bergfald.rcs_ library to provide easy on-site revision control
- Cleaner page creation to make unnecessary stubs more unlikely
- Helper for making it easy to enable using the wiki as memo storage by other components. Already used for _org.openpsa.calendar_ meeting notes
- Switch to [PHP Markdown Extra][13] for added _definition list_ and _table support_
- Switch to the standard _midcom\_helper\_toolbars_ toolbar system

There is still stuff I would like to do, given time:

- Implement [Javascript toolbar][8] for making [Markdown][9] editing easier
- Cache wiki linking information for better performing _What links here?_ views
- Implement an _Orphaned pages_ listing
- Switch from [MidgardArticles][10] into more specific wikipage objects
- Create a MediaWiki-like [template system][11] to replace the current `tip`, `note` and other [special tags][12]
- Add automatic _Table of Contents_ [custom formatter][14]

I was again amazed how quick it was to implement features using the new [development framework][15]. With this work we have a quite [full-featured wiki][16] that integrates nicely with the rest of the [Midgard CMS][17] environment for templating, user permissions and other features.

The new wiki is now only available in [CVS][18] pending [MidCOM's PEAR 1.4 packaging][19].

[1]: http://www.midgard-project.org/midcom-permalink-5f8044fb6b23322ed3fe2d1ff0e50cf6
[2]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[3]: http://www.nathan-syntronics.de/midcom-permalink-7105771203e762aa01902dbdb96150ca
[4]: http://www.nathan-syntronics.de/midcom-permalink-dda9a3b68e3f06b8be9d17b17113102d
[5]: http://www.nathan-syntronics.de/midcom-permalink-8d5d3d8efa5d4d904ac2bd653ad866e2
[6]: http://www.midgard-project.org/midcom-permalink-7a86842cc2906de5ac0f347d8b6c734d
[7]: http://www.midgard-project.org/midcom-permalink-605136b3ee7596f0b53838dce41b6f5c
[8]: http://mg.to/2005/02/26/textbar-drupal-module-for-markdown-and-textile
[9]: http://daringfireball.net/projects/markdown/
[10]: http://www.midgard-project.org/midcom-permalink-3dff352892fce8eecd49334531c865cf
[11]: http://en.wikipedia.org/wiki/Wikipedia:Template_messages
[12]: http://www.midgard-project.org/midcom-permalink-7276f817dcdefcf40d30a9ec69a7241f
[13]: http://www.michelf.com/projects/php-markdown/extra/
[14]: http://www.midgard-project.org/midcom-permalink-d9e7ac1141dca22207c527e023a7c96a
[15]: http://www.midgard-project.org/midcom-permalink-439e8966556733d94b73f23725ea3362
[16]: http://www.wikimatrix.org/show/Midgard-Wiki
[17]: http://www.midgard-project.org/
[18]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/lib/net/nemein/wiki/
[19]: http://www.midgard-project.org/midcom-permalink-912ed7142e595c67b0339d1217e93d25