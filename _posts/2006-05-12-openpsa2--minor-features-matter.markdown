---
  title: "OpenPsa2: Minor features matter"
  categories: 
    - "openpsa"
  layout: "post"

---
We're in process of making a new beta release of [OpenPsa 2][1]. While there are new major features like sales project management and phone interview support, I wanted to also mention some of the small things that are happening.

__Skype integration.__ If your contacts are using the [Skype][2] VoIP service their [presence][3] is [automatically displayed][4] in contact listings. You can start a call by clicking the Skype name.

![Skype presence in OpenPsa person records](/files/openpsa2-business-card-skype.jpg)

We will later roll the Skype integration into Projects and Calendar to enable easy [conference calling][5] with the participants.

__Task status history.__ Ever wondered when a project was started, or when a client approved it? Now Projects displays the full status history including task acceptance by resources in easy format:

![Task history](/files/openpsa2-task-history-ongoing.jpg)

If resources are [remote DBE users][6] they will be identified by a [separate icon][7] in the status history lists.

__Automatic relations.__ If you archive email messages or other documents into OpenPsa's [Wiki notes][8] manager, they will automatically be connected to the potentially related projects, tasks and sales projects. You can confirm or remove the relation with a single click:

![Confirming email relation to a sales project](/files/openpsa2-related-email-confirmation.jpg)

The idea is to make the maintenance of a comprehensive CRM record in the system easy, but still not clutter the projects and tasks with unconnected information.

__Buddy list integration.__ Since OpenPsa2 supports synchronizing events and contacts to mobile devices through the [Funambol system][9] we needed some way to limit which contacts to synchronize. There can be thousands of contact records in a company's CRM database and synchronizing all of those would completely overwhelm a mobile phone.

![How to remove buddies](/files/openpsa2-buddylist-management.jpg)

So we instead synchronize only those contacts that are in user's buddy list. The buddies can be added or removed manually, and the system also automatically adds new project participants and sales contacts to the list.

[1]: http://www.openpsa.org/
[2]: http://www.skype.com/
[3]: http://www.skype.com/share/buttons/status.html
[4]: http://share.skype.com/sites/en/2006/02/skypeweb_is_now_available.html
[5]: http://www.skypejournal.com/blog/archives/2005/04/conference_call_1.php
[6]: http://bergie.iki.fi/blog/how-openpsa-uses-dbe/
[7]: http://bergie.iki.fi/blog/prepare-to-be-synchronized/
[8]: http://www.midgard-project.org/documentation/net-nemein-wiki/
[9]: http://www.funambol.com/opensource/