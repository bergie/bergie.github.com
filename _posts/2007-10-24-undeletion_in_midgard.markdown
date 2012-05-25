---
  title: "Undeletion in Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
A trash can feature for Midgard was discussed originally in the <a href="http://bergie.iki.fi/blog/midgard-developer-meeting-in-komorniki.html#8b7051187b9191cdcdae6ed5a10e5adc">2006 Komorniki Midgard developer meeting</a>, and the <a href="http://www.midgard-project.org/documentation/mgdschema-method-undelete/">APIs for it</a> made their way into the <a href="http://www.midgard-project.org/midgard/1.8/">1.8.0 release</a>. Yesterday I added trash can browsing and undeletion support into <a href="http://bergie.iki.fi/blog/building_a_new_admin_interface_for_midgard.html">Asgard</a>, the new administrative interface.

To use it, first delete a folder:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-93ce0c0e821e11dca5a2dbd3bc28f7b3f7b3/folder-delete-toolbar.jpg" height="169" width="398" border="1" hspace="4" vspace="4" alt="Folder-Delete-Toolbar" />

Currently we ask for confirmation, but now that undeletion works we're going to <a href="http://www.alistapart.com/articles/neveruseawarning">move to undo</a> instead.

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-7506c70c821e11dc831e4f30651c9f4a9f4a/folder-delete-confirm.jpg" height="204" width="300" border="1" hspace="4" vspace="4" alt="Folder-Delete-Confirm" />

Then, to undelete it we enter Asgard:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-8e5961ce821e11dca5a2dbd3bc28f7b3f7b3/enter-asgard-toolbar.jpg" height="113" width="298" border="1" hspace="4" vspace="4" alt="Enter-Asgard-Toolbar" />

And there to folders (topics), where we see that there are items in trash:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-901297e2821e11dca5a2dbd3bc28f7b3f7b3/asgard-topic-trash.jpg" height="168" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash" />

Clicking the trash can reveals more details:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-88e45f3c821e11dc831e4f30651c9f4a9f4a/asgard-topic-trash-list.jpg" height="274" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash-List" />

Clicking undelete will undelete the folder and things under it, giving a set of informative <a href="http://ajaxian.com/archives/protogrowl-notification-messages">status bubbles</a>:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-92036d06821e11dca5a2dbd3bc28f7b3f7b3/asgard-topic-trash-undelete-status.jpg" height="211" width="300" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash-Undelete-Status" />

Going back to the site we can see that the folder and articles under it are there, with even images retrieved from trash:

<img src="http://bergie.iki.fi/midcom-serveattachmentguid-8a42f2a8821e11dca5a2dbd3bc28f7b3f7b3/midcom-undeleted-folder-is-back.jpg" height="163" width="397" border="1" hspace="4" vspace="4" alt="Midcom-Undeleted-Folder-Is-Back" />

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/asgard" rel="tag">asgard</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p><!-- technorati tags end -->