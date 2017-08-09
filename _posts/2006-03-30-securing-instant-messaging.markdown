---
  title: "Securing Instant Messaging"
  categories: 
    - "desktop"
  layout: "post"

---
For quite a while [we][1] have been using [IRC][2] for instant messaging and company internal chat. IRC is handy for it, especially as we've been able to set up some bots to secure our own channels.

However, as we already use [GNU Privacy Guard][9] (GPG) for securing our email communications, it makes sense to also start encrypting the instant messaging conversations.

While there are several different secure IM options available ranging from [Skype][10] to [Off-the-Record Messaging][11]. These are good alternatives, but since we already have the [GPG key management][13] infrastructure set up it makes sense to utilize it. And of course [Jabber][14] and [Psi][15] are open, multi-platform and standardized.

Steps for setting up secure, encrypted instant messaging:

1. Create [Google Talk account][3] (or some other [Jabber account][5])
2. Download and install [Psi client][4], and [connect to Google Talk][12]
3. [Generate a GPG key][7] (if you don't already have one for [secure email][8])
4. Set up [GPG encryption for Psi][6]

After this you can have encrypted conversations with any Jabber user whose [public key][16] you have.

Here is a screenshot of me having an IM conversation and switching encryption on and off couple times:

![Encrypted Jabber chat with Psi](https://d2vqpl3tx84ay5.cloudfront.net/psi-encrypted-chat.jpg)

And here is how the raw Jabber XML output with encrypted messages looks like:

![Raw encrypted XMPP messaging](https://d2vqpl3tx84ay5.cloudfront.net/psi-encrypted-chat-rawxml.jpg)

The GPG encrypted Jabber conversations with Psi follow the [JEP-0027: Current Jabber OpenPGP Usage][17] specification.

[1]: http://www.nemein.com/
[2]: http://en.wikipedia.org/wiki/Internet_Relay_Chat
[3]: http://www.google.com/talk/
[4]: http://psi-im.org/download
[5]: http://www.xmpp.net/bydomain.shtml
[6]: http://psi.affinix.com/psi_docs/encryption.html
[7]: http://www.madboa.com/geek/gpg-quickstart/
[8]: http://enigmail.mozdev.org/
[9]: http://en.wikipedia.org/wiki/GNU_Privacy_Guard
[10]: http://www.skype.com/
[11]: http://www.cypherpunks.ca/otr/
[12]: http://psi-im.org/wiki/Google_Talk_HowTo
[13]: http://www.gnupg.org/gph/en/manual.html#WISE
[14]: http://www.jabber.org/about/overview.shtml
[15]: http://psi-im.org/
[16]: http://wwwkeys.pgp.net/
[17]: http://www.jabber.org/jeps/jep-0027.html
