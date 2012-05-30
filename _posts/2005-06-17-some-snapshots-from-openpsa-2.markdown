---
  title: "Some snapshots from OpenPSA 2"
  categories: 
    - "openpsa"
  layout: "post"

---
[OpenPSA][1] rewrite to the [MgdSchema][2] database back-end and [MidCOM][3] component architecture is progressing well. The current goal is to release a feature-limited alpha next week to get more feedback. Before that, here are some quick screenshots:

__Calendar week view__. No tables, reservations scaled based on their real duration:

![Calendar week](http://bergie.iki.fi/midcom-serveattachmentguid-1a4038a4c2f37bdd6eac0c91dadddd40/openpsa2-calendar-week.jpg)

__Calendar month view__. No images, past days are grayed out

![Calendar month](http://bergie.iki.fi/midcom-serveattachmentguid-6170172019b40d23faf5d4b7f678c0d8/openpsa2-calendar-month.jpg)

__Calendar reservation editor with date widget__. Participants chosen using AJAX live search, whole editor customizable using [datamanager schemas][4]:

![Calendar event editor](http://bergie.iki.fi/midcom-serveattachmentguid-1c0d41d9e3d51c9efc0c4fe751b4d0c6/openpsa2-calendar-edit-datewidget.jpg)

__Contacts person view__. New features include belonging to multiple organizations, easier [account editing][5] and datamanager-handled features like the photo:

![Person card in Contacts](http://bergie.iki.fi/midcom-serveattachmentguid-e875b568168ac76d0cb185fa7e61877b/openpsa2-contacts-person.jpg)

__Contacts chooser__. This is the new datamanager widget used everywhere in OpenPSA 2 for connecting persons to documents, projects and calendar reservations. Type a search into the field, and it will query the Contacts database [FOAF][6] interface using AJAX and list results below. Select a contact and she will be added to the list above. As can be seen from the Georgian name, this is fully internationalized:

![Contacts chooser](http://bergie.iki.fi/midcom-serveattachmentguid-0ad8e4d1576baefdb3f5dfe1dbaf7837/openpsa2-contactschooser.jpg)

The user interface concept is still somewhat unfinished, and is being worked on by [Arttu][7]. But even at this stage there seem to be several benefits:

- Much more natural usage style, especially with the AJAX features
- Scaling to different window sizes easily
- The floating toolbar keeps all form controls handy
- The web-oriented (as opposed to desktop-oriented) design allows us to show data and help texts in more friendly way

In addition to these, the new OpenPSA will be orders of magnitude faster than the current releases because of the [MidgardQueryBuilder][8].

[1]: http://www.openpsa.org/
[2]: http://www.midgard-project.org/midcom-permalink-30060725e11ec9472825fd8bce02725c
[3]: http://www.midgard-project.org/midcom-permalink-85e86ba5433b5566da29fe9b32e2a425
[4]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
[5]: http://www.nemein.com/people/tktuomin/midcom-permalink-97d63529fe4a94818fd0364fd1ba1674
[6]: http://www.foaf-project.org/
[7]: http://www.kaktus.cc/midcom-permalink-877a6623397285f917f8b331c2efddea
[8]: http://www.nemein.com/people/piotras/midcom-permalink-8312e0e1eaeb0dec677519191b9390d8