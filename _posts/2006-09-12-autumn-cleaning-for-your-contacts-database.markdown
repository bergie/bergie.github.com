---
  title: "Autumn cleaning for your contacts database"
  categories: 
    - "openpsa"
  layout: "post"

---
I've just [uploaded][4] [Rambo's][1] latest improvement to [OpenPsa Contacts][2]: The ability to find and merge duplicate contact persons.

![OpenPsa Contacts merge tool](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/openpsa_contacts_duplicate_merge_small.jpg)

There are several ways you might end up having duplicates in the database, especially if you have been importing contacts from multiple sources like Excel registries and vCards.

The OpenPsa duplicate checker runs an analysis of the database every night and marks possible duplicates as such. You can then decide what to do about them, either merging the duplicates or keeping both. Dependencies like calendar events and buddy list markings are handled automatically.

Grab the package from our [PEAR repository][3] to start the autumn cleaning!

[1]: http://www.midgard-project.org/community/whoswho/rambo.html
[2]: http://www.openpsa.org/version2/openpsa/contacts.html
[3]: http://pear.midcom-project.org/
[4]: http://pear.midcom-project.org/index.php?package=org_openpsa_contacts&release=2.1.0&downloads
