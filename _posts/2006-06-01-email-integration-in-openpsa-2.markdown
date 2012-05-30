---
  title: "Email integration in OpenPsa 2"
  categories: 
    - "openpsa"
  layout: "post"

---
[Seth Gottlieb has an interesting piece][1] on email and content management:

> I understand why email is such a tempting tool. That post outlines the reasons nicely: it is easy, universal, accessible, personalizable, reliable, and people just live in their email clients. Even I have to admit, the more you manage, the more you live in your email client. That is why most executives don't even need a computer anymore - just a blackberry to thumb a yes or no wirelessly.

This is exactly why we added email archiving support into [OpenPsa 2][2]. Lots of business communication happens over email, and it is important to be able to easily archive it into the CRM system.

With OpenPsa 2 the approach is that there is a shared "archiving" mailbox where all users can drag-and-drop relevant emails. OpenPsa monitors the mailbox and reads them in. Then it produces a wiki page out of them and links the message according to its time sender and receivers into the people and tasks concerned.

![Imported email shown in a task](http://bergie.iki.fi/midcom-serveattachmentguid-a5b91a7900396c53992b85fe88c4295e/openpsa2-email-import.jpg)

This way the important emails are stored in a secure and easy to find location, and the [email client][3] can handle its [actual task][4], the sending and receiving of the day-by-day email.

[1]: http://contenthere.blogspot.com/2006/05/email-and-content-management.html
[2]: http://www.openpsa.org/version2/
[3]: http://en.wikipedia.org/wiki/E-mail_client
[4]: http://www.mezzoblue.com/archives/2004/04/07/email_manage/