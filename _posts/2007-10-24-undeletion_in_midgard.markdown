---
  title: "Undeletion in Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
A trash can feature for Midgard was discussed originally in the <a href="http://bergie.iki.fi/blog/midgard-developer-meeting-in-komorniki/#8b7051187b9191cdcdae6ed5a10e5adc">2006 Komorniki Midgard developer meeting</a>, and the <a href="http://www.midgard-project.org/documentation/mgdschema-method-undelete/">APIs for it</a> made their way into the <a href="http://www.midgard-project.org/midgard/1.8/">1.8.0 release</a>. Yesterday I added trash can browsing and undeletion support into <a href="http://bergie.iki.fi/blog/building_a_new_admin_interface_for_midgard/">Asgard</a>, the new administrative interface.

To use it, first delete a folder:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/folder-delete-toolbar.jpg" height="169" width="398" border="1" hspace="4" vspace="4" alt="Folder-Delete-Toolbar" />

Currently we ask for confirmation, but now that undeletion works we're going to <a href="http://www.alistapart.com/articles/neveruseawarning">move to undo</a> instead.

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/folder-delete-confirm.jpg" height="204" width="300" border="1" hspace="4" vspace="4" alt="Folder-Delete-Confirm" />

Then, to undelete it we enter Asgard:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/enter-asgard-toolbar.jpg" height="113" width="298" border="1" hspace="4" vspace="4" alt="Enter-Asgard-Toolbar" />

And there to folders (topics), where we see that there are items in trash:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/asgard-topic-trash.jpg" height="168" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash" />

Clicking the trash can reveals more details:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/asgard-topic-trash-list.jpg" height="274" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash-List" />

Clicking undelete will undelete the folder and things under it, giving a set of informative <a href="http://ajaxian.com/archives/protogrowl-notification-messages">status bubbles</a>:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/asgard-topic-trash-undelete-status.jpg" height="211" width="300" border="1" hspace="4" vspace="4" alt="Asgard-Topic-Trash-Undelete-Status" />

Going back to the site we can see that the folder and articles under it are there, with even images retrieved from trash:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midcom-undeleted-folder-is-back.jpg" height="163" width="397" border="1" hspace="4" vspace="4" alt="Midcom-Undeleted-Folder-Is-Back" />

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/asgard" rel="tag">asgard</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>
