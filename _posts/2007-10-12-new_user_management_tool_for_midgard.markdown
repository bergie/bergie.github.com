---
  title: "New user management tool for Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
In past there have been two types of user management tools for <a href="http://www.midgard-project.org/">Midgard</a>: <a href="http://www.midgard-project.org/documentation/getting-started-create-groups/">the built-in ones</a> that have supplied lists of users, and then custom-made ones. With former the problem has been that when you have thousands of users the HTML views become slow to load and near impossible to use.

To improve the out-of-the-box situation, <a href="http://trac.midgard-project.org/browser/trunk/midcom/midcom.admin.user">a new user management tool</a> was included to <a href="http://bergie.iki.fi/blog/building_a_new_admin_interface_for_midgard.html">Asgard, the new admin UI</a>. The default view is already search-based, enabling quick access to manage the users you need to:

<img src="/files/asgard-usermanager-search.jpg" height="133" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Usermanager-Search" />

The list view enables quick actions:

<img src="/files/asgard-usermanager-quickactions-1.jpg" height="115" width="250" border="1" hspace="4" vspace="4" alt="Asgard-Usermanager-Quickactions-1" />

The intention is to later devise a plugin architecture so more actions can be added. But for now account removals and addition of users to a group are supported:

<img src="/files/asgard-usermanager-quickactions-addgroup.jpg" height="75" width="398" border="1" hspace="4" vspace="4" alt="Asgard-Usermanager-Quickactions-Addgroup" />

By clicking the user details can be edited. Changing passwords is also quite easy:

<img src="/files/asgard-usermanager-account.jpg" height="129" width="200" border="1" hspace="4" vspace="4" alt="Asgard-Usermanager-Account" />

When viewing groups, user belonging to then are shown using <a href="http://bergie.iki.fi/blog/creation_mode_for_midgard-s_chooser_widget.html">a chooser widget</a> which allows search-based additions of members. Person's groups are shown in the same way:

<img src="/files/asgard-usermanager-user-groups.jpg" height="80" width="400" border="1" hspace="4" vspace="4" alt="Asgard-Usermanager-User-Groups" />

The new user manager is currently available in both trunk and MidCOM 2.8 SVN, and after some testing will be packaged and released.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>