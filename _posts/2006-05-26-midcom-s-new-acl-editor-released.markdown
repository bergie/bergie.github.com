---
  title: "MidCOM's new ACL editor released"
  categories: 
    - "midgard"
  layout: "post"

---
[MidCOM][1] has had a comprehensive [Access Control Lists system][2] since last summer, but its usage has been hindered by lack of an easy management tool. That is now fixed with the first stable release of the [Midgard ACL editor][3].

The editor supports both regular group assignees and the "magic" assignees like `EVERYONE`. All assignees that have a privilege to the current object are shown in the management tool, and new assignees can be added from the pulldown:

![MidCOM's ACL editor](http://bergie.iki.fi/midcom-serveattachmentguid-b23dbfa03112cf818d7164b03d9b0d2f/midcom-acl-editor-100.jpg)

For now adding persons or virtual groups as assignees is not supported by the UI, but that will be fixed soon.

The ACL editor is already hooked into several of the main MidCOM components, and into the folder management. To add it to other components the component must use the [MidCOM toolbar service][4], and call the following during `handle` phase of execution:

    // Add the permission setting link for the current object
    $this->_view_toolbar->bind_to($current_object);

__Updated 2006-08-17:__ Or, even more preferably with [MidCOM 2.6.0beta2][5] or newer:

    // Register the page with metadata service and toolbars
    $_MIDCOM->bind_view_to_object($current_object);

[1]: http://www.midgard-project.org/documentation/midcom/
[2]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_6/acl-tutorial.html
[3]: http://pear.midcom-project.org/index.php?package=midgard_admin_acl&release=1.0.0&downloads
[4]: http://www.midgard-project.org/documentation/midcom-services-toolbars/
[5]: http://freshmeat.net/projects/midcom/?branch_id=51947&release_id=234257