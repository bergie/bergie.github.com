---
  title: "OpenPSA 2 Preview 1 released"
  categories: 
    - "openpsa"
  layout: "post"

---
<img src="http://www.openpsa.org/attachment/f5983e256588eb63ddd0d2c160644a90/bd670b903c97b0da0683201eb800c73c/openpsa-small.png" style="float: right; margin: 5px;" />
ESPOO, Jun 23rd 2005 -- The first Preview release of the OpenPSA management suite is now available. This release showcases the [new user interface][14]
concept and completely rewritten technology architecture.

This release depends on bleeding-edge tools, and so there is still some
way to go before it will be Perfect Software. Breakage and misfeatures can occur on all levels of the stack: Midgard Core, MidCOM, OpenPSA components and the [AJAX][24]-powered user interfaces. Once you encounter them, please use the [issue tracker][5].

## Major features

The main things to try out in this release are:

- Access Control Lists
- Document searching
- AJAX-based hour reporting (note problem with [bug #246][25])
- Calendar user interface
- The person-organization-suborganization connection
- Workgroup filtering

## Limitations

As a complete rewrite the OpenPSA 2 preview does not yet provide all the features that were available in the OpenPSA 1.x series. Some major features missing are:

- OpenPSA Projects reporting engine
- Sales project handling
- Sales campaign handling (mass mailing)
- Support and help desk ticket management
- Expense and mileage reporting
- Calendar WebCAL support
- Documents WebDAV repository

There also isn't yet a tool for migrating data between OpenPSA 1.x and OpenPSA 2 installations. This will be provided later based on the [Exorcist][8] data migration tool.

In addition to these, the idea is to modify the markup of the application's display widgets to utilize [microformats][9] like [hCard][10] as widely as possible.

The default OpenPSA 2 layout has not yet been tested on other browsers than Mozilla Firefox. It will be tuned to support MS Internet Explorer and Safari later in July.

The development server is x86 [Debian][12] Sarge with Apache 1.3.33, development browser [Mozilla Firefox][11] on MacOS X, some AJAX based widgets are known to act up in Internet Explorer.

## Installation

### Database and Core setup

- [Install][6] latest [CVS version of Midgard][1] and set up a 
  [fresh database][4] with datagard
- Import the SQL files (though not the _\_delete_ ones, they're for backtracking)
  from _org.openpsa.core_ to your Midgard database
- Configure your midgard-apache to use the MgdSchema from org.openpsa.core
  - __Note__: the schema file must be copied to MIDGARD_PREFIX/share/midgard/schema and must be referred via full path.

### MidCOM setup

- Install latest [CVS version of MidCOM][2]
- Install the [MidCOM indexer][3]

### OpenPSA setup

- Install the _layout-openpsa.xml_ style file [using datagard][13]
- Install the OpenPSA components, best way to keep up to date is to make
  a [CVS export][15] of the OpenPSA source tree and symlink MIDCOM_ROOT/lib/org/openpsa
  to src/fs-midcom/openpsa directory of OpenPSA.
- Using Spider Admin or similar create root level group
  '\_\_org\_openpsa'
- Again in Spider create under group '\_\_org\_openpsa' group
  '__contacts'
- Still in Spider create root level event '\_\_org\_openpsa\_calendar'
  set owner as '\_\_org\_openpsa'
- Create a new MidCOM site with the [Midgard Site Wizard][7]
  - Select the OpenPSA v2 layout from the list (or set manually later if
    it doesn't appear)
- Set parameter `midcom`, `require_valid_user`, `1` to the root topic of the site
- Set up subtopics for the OpenPSA components you're going to use
  - You can also use regular MidCOM components side-by-side with OpenPSA
  - The root topic should run the _org.openpsa.mypage_ component
  
## Download

OpenPSA 2 preview releases are available in:

- <http://www.openpsa.org/download/2_preview1.html>

If you want to use the stable OpenPSA 1.x release instead, it is available in:

- <http://www.openpsa.org/download/>

To keep up with the development, subscribe to the OpenPSA news feed at <http://www.openpsa.org/news/>

## Credits

OpenPSA version 2 is a complete rewrite of the OpenPSA professional services automation suite. The work has been mainly done by [Eero af Heurlin][16] and [Henri Bergius][17] from [Nemein][18].

The project has been kindly sponsored by [Ware.it][19].

We would like to thank [Torben Nehmer][20], [Piotr Pokora][21] and [Jukka Zitting][22] for their efforts on __Midgard 2__ that have made this project possible. We are also grateful to [Arttu Manninen][23] his work on user interface design.

[1]: http://www.midgard-project.org/midcom-permalink-e31d73ce48204fdae6aed76f354f83b1
[2]: http://midcom.tigris.org/servlets/ProjectSource
[3]: http://bergie.iki.fi/midcom-permalink-656cda78fb6086ecad96e6d2f86bcb49
[4]: http://www.midgard-project.org/midcom-permalink-2e5037b2663c4d18a51146be4bd6cb32
[5]: http://openpsa.tigris.org/servlets/ProjectIssues
[6]: http://www.midgard-project.org/midcom-permalink-1aa939c02eef43be93260f20c2d26bb6
[7]: http://bergie.iki.fi/midcom-permalink-8928b46c23b862209f4c8e70c5fbd4e8
[8]: http://svn.yukatan.fi/exorcist/
[9]: http://microformats.org/wiki/microformats
[10]: http://microformats.org/wiki/hcard
[11]: http://getfirefox.com/
[12]: http://www.debian.org/
[13]: http://www.midgard-project.org/midcom-permalink-15c471ecf0f4e1ef9692ed3d4f337c6e
[14]: http://bergie.iki.fi/midcom-permalink-4a5932e606710d5d57a29cdd047cb0cf
[15]: http://openpsa.tigris.org/servlets/ProjectSource#cmdlinecvs
[16]: http://www.nemein.com/people/rambo/
[17]: http://bergie.iki.fi/
[18]: http://www.nemein.com/en/
[19]: http://www.ware.it/
[20]: http://www.nathan-syntronics.de/
[21]: http://www.nemein.com/people/piotras/
[22]: http://yukatan.fi/display/yukatan/Yukatan
[23]: http://www.kaktus.cc/weblog/
[24]: http://en.wikipedia.org/wiki/AJAX
[25]: http://midcom.tigris.org/issues/show_bug.cgi?id=246
