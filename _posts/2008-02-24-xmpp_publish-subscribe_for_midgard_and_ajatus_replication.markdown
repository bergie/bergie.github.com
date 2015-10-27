---
  title: "XMPP publish/subscribe for Midgard and Ajatus replication"
  categories: 
    - "openpsa"
    - "midgard"
  layout: "post"

---
On the side of <a href="http://fosdem.org/2008/">FOSDEM</a> we went today to the <a href="http://wiki.jabber.org/index.php/FOSDEM_2008">XMPP devcon</a> held here in Brussels. In there we started formulating our ideas of <a href="http://www.coverfire.com/archives/2006/04/25/jabberxmpp-pubsub/">XMPP publish/subscribe</a> (<a href="http://www.xmpp.org/extensions/xep-0060.html">XEP-0060</a>) based replication for both <a href="http://www.midgard-project.org/">Midgard</a> and <a href="http://www.ajatus.info/">Ajatus</a>.

This post contains very early ideas, but we would be happy to get some feedback on them.

## Basic idea

Each Midgard or Ajatus server runs a &quot;synchronization daemon&quot; which is connected to a XMPP server using some JID identity.

The sync daemon registers a set of pub/sub nodes corresponding to the content structure on the Midgard or Ajatus instance:

* in Midgard: Sitegroups, MgdSchema types, paths (possibly a regexp), approval state
  - `/midgard_article/all`, `/midgard_article/approved`
* in Ajatus: tags

The pub/sub nodes can be set up with some access control rules. For example, Ajatus tags would by default require &quot;whitelist&quot; authorization to subscribe.

When content is changed, the sync daemon gets notified about it (via D-Bus signals in Midgard, and via CouchDb external indexer API in Ajatus).
The content object (and immediate children like parameters and file attachments) is serialized into the syndication format and sent onward as a XMPP &quot;pub&quot; leaf. If the object appears on multiple nodes (multiple Ajatus tags for instance), the &quot;pub&quot; leaf is sent to all of them.

XMPP server and the federated network will then handle notifying the subscribers of the nodes about the new leaf.

The subscribers will receive the leaf, and unserialize it to the Ajatus or Midgard database.

## Communication between sync daemon and application

The sync daemon should exist as an entity separate from the actual user application. Communication between the sync daemon and Midgard or Ajatus should happen via the application database.

This means that XMPP pub/sub whitelists for Ajatus tags would be maintained in the ajatus_db (non-replicated) database, and the sync daemon would read them from there. The Jabber server credentials would also be stored in the same database.

### Information about resources from jabber buddies

User's replication partners are stored as local contacts in the application database. In Ajatus this means &quot;Contacts&quot; and in Midgard &quot;midgard_person&quot; objects. Both storage models have optional JID field.

If JID is marked for a contact, the sync daemon should at startup (or at an interval) try to discover if the contact has pub/sub resources available.

## Content transformation in replication stage

While mainly intended for Midgard-to-Midgard and Ajatus-to-Ajatus replication, the same mechanisms could work across different systems.

For this, the sync daemon on the subscribing end should support XSLT transformations before content is unserialized into the system. The XSLT transformation templates should be configurable per subscription.

## Hermod / Hermóðr (Midgard replication)

* &quot;in Norse mythology, messenger of the gods. He was a son of the principal god, Odin, and his wife, Frigg. Known as Hermod the Swift, he was called upon by the other gods when they had a task requiring speed and urgency.&quot; - Encyclopedia Britannica
* Written in Python
  - Using twisted framework or x60br XMPP library
  - using standard Midgard MgdSchema object serialize/unserialize methods
* How to proof-of-concept before D-Bus? Some watcher in MidCOM? (watcher touches spool file)

## PillowTalk (Ajatus and CouchDb replication)

* Written on Erlang
* Extendable through plugins
  * Content parsers (Midgard2Ajatus, Ajatus2Midgard)
  * Security
  * CDATA JSON block or convert to XML? (Decision of the content parser?)
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/ajatus">ajatus</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/jabber">jabber</a>, <a href="http://www.technorati.com/tag/replication">replication</a>, <a href="http://www.technorati.com/tag/synchronization">synchronization</a>, <a href="http://www.technorati.com/tag/xmpp">xmpp</a></p>
