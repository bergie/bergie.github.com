---
  title: "Get MidCOM from a PEAR channel"
  categories: 
    - "midgard"
  layout: "post"

---
Since completing [MidCOM's PEAR 1.4 packaging][1] the main remaining issue of making MidCOM installation user-friendly has been [setting up a channel][2]. This is now done, and MidCOM 2.5 can be installed in the following way:

- Upgrade PEAR to 1.4

        # pear -f upgrade PEAR

- Discover the PEAR channel

        # pear channel-discover pear.midcom-project.org

- Install the MgdSchema handler role

        # pear install midcom/Role_Mgdschema

- Install MidCOM core (you need to specify version as there is no  
stable 2.6 release yet)

        # pear install midcom/midcom-2.5.1cvs

After these you have MidCOM installed into your PEAR path. Next you will want to install some components. Here you can see how dependency handling works: I'm installing _de.linkm.taviewer_ that requires the _datamanager_ library.

    # pear install midcom/de_linkm_taviewer
    Starting to download de_linkm_taviewer-2.tgz (23,016 bytes)
    ........done: 23,016 bytes
    downloading midcom_helper_datamanager-1.tgz ...
    Starting to download midcom_helper_datamanager-1.tgz (85,651 bytes)
    ...done: 85,651 bytes
    install ok: channel://pear.midcom-project.org/midcom_helper_datamanager-1
    install ok: channel://pear.midcom-project.org/de_linkm_taviewer-2

Please let me know if you want component upload access.

[1]: http://bergie.iki.fi/midcom-permalink-b7262e370017c63d1115401ae5baa958
[2]: http://www.schlitt.info/applications/blog/index.php?/archives/308-Set-up-your-own-PEAR-channel.html