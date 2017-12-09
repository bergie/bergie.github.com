---
  title: "More on secure instant messaging"
  categories: 
    - "desktop"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/adium-otr-encryption.jpg'

---
[We][1] have now been using [Jabber][21] and [Psi][2] for [secure instant messaging][3] with client and partners for some months. However, I haven't been completely happy with this setup for several reasons:

- Psi's user interface feels quite clunky and "non-Mac-like"
- If [GPG encryption][4] is configured Psi refuses to start if key isn't present
- If you remove the USB drive containing the GPG keys Psi crashes

Jabber itself has been working just great, and as it is a [federated network][22] we've been able to talk with people on multiple IM providers. Gmail's [Google Talk integration][23] has proven to be a convenient way to chat when at a client's computer. However, I haven't been entirely happy with the client itself.

While looking for better alternatives I decided to test [Adium][5], the native Mac instant messaging application built on top of [GAIM's][6] multi-protocol libraries. Adium uses [Off-the-Record encryption][7] for [securing the conversations][14]. OTR has [several advantages][8] over [GPG][9] for IM purposes and supports several clients including Adium, GAIM and [Trillian][10]. We'll have to see how well OTR works over some weeks of testing.

![OTR encryption in Adium](https://d2vqpl3tx84ay5.cloudfront.net/adium-otr-encryption.jpg)

Other nice things about Adium include [Plazes integration][11], [Growl notifications][12] and support for the [Gizmo VoIP network][13].

We haven't yet made decisions about [Gizmo vs. Skype][18]. While [Skype][17] has a much larger user base, [Gizmo][16] follows [open standards][19] and so would fit better into our [open source strategy][15]. [Zfone security][20] and the possible upcoming Nokia 770 integration would also be big bonuses.

[1]: http://www.nemein.com/
[2]: http://psi-im.org/
[3]: http://bergie.iki.fi/blog/securing-instant-messaging/
[4]: http://psi.affinix.com/psi_docs/encryption.html
[5]: http://www.adiumx.com/index.php
[6]: http://gaim.sourceforge.net/
[7]: http://www.cypherpunks.ca/otr/
[8]: http://www.cypherpunks.ca/otr/otr-codecon.pdf
[9]: http://en.wikipedia.org/wiki/GNU_Privacy_Guard
[10]: http://rotz.org/archives/2005/05/otr_trillian.html
[11]: http://ruk.ca/article/2886
[12]: http://growl.info/
[13]: http://www.adiumxtras.com/index.php?a=xtras&xtra_id=2058
[14]: http://internet.newsforge.com/internet/05/10/07/1521221.shtml?tid=13
[15]: http://www.nemein.com/en/company/opensource.html
[16]: http://www.gizmoproject.com/
[17]: http://www.skype.com/
[18]: http://www.tomsnetworking.com/2006/01/18/crowning_the_king_of_free_talk_/
[19]: http://en.wikipedia.org/wiki/Session_Initiation_Protocol
[20]: http://www.philzimmermann.com/EN/zfone/
[21]: http://en.wikipedia.org/wiki/Jabber
[22]: http://www.imfederation.com/
[23]: http://mail.google.com/mail/help/screen4.html
