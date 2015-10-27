---
  title: "British RFID passports cracked"
  categories: 
    - "politics"
  layout: "post"

---
[Guardian reports][1] that the British RFID passports are now cracked, meaning that their information can be remotely read, and the [passport copied][2]:

> "If you can read the chip, then you can clone it," he says. "You could use this to clone a passport that would exploit the system to illegally enter another country."

![Finnish e-Passport](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/finnish-e-passport.jpg)

I unfortunately was forced to get this new "[mark of the beast][3]" last month when my previous 10 year passport had again been mutilated by some border guards, breaking off the information page. So now I lost couple years of passport validity (RFID passports are valid only for 5 years), and have a passport that most likely contains similar security holes as the passports used in USA, UK, Germany and The Netherlands.

Until the silly idea that EU for some reason needs remotely readable passports passes I'll keep mine in a [RFID blocking passport case][4].

## Update 2006-11-20: Comments from an Estonian correspondent

This arrived via email as the blog entry had already been locked from comments. The author wishes to remain anonymous.

> I wouldn't call the referred attack cracking the passport. If you read [the
specs][1] it's easy to see that the security measures used aren't meant to
deter copying the passports. The security experts are breaking through an
open door. (this is just my opinion, but it somewhat looks as a desperate way
to gather attention to themselver and not the issues) The basic access
control (BAC) was meant to protect against skimming (i.e. finding out
someones identity without their consent) and eavesdropping. It doesn't take a
security guru to figure out that the 35 or so bits of entropy in the
encryption key (document no, birthdate, expiry date) thats directly used for
session encryption isn't very secure against bruteforcing. Fortunately
eavesdropping from a distance of more than a couple of meters takes some
pretty complicated and bulky equipment. When fingerprints are added to
passports an advanced extend access control comes into use, mandating strong
session encryption and PKI certified passport readers. Against skimming the
35 bits is good enough. It's extremely unlikely that someone could get hold
of your passport number, expiry date and birthdate and not find out your name
at the same time. And if they do, there's not much else in the chip to
constitute a privacy risk. That said, I would still be much happier if they
had increased entropy by atleast 20 bits by incorporating the MRZ name line
in the authentication key.

> If copying is to be avoided, the spec has a provision for active
authentication (AA) - i.e. a private key on the chip that is verified against
a public key signed by document issuer. I don't know if Finland has
implemented active authentication in their e-passports. England and Germany
obvously have not, but I know for certain that Estonian e-passports will
contain active authentication when we're going to start issuing them in the
first half of next year.Even if your passport doesn't contain AA, you
shouldn't worry too much about cloned passports, the new passports still
contain other security measures so making a cloned passport is no easier now
than it was before e-passports. On the contrary, e-passports most likely
contain new revised security measures making them harder to clone.

> Anyway, I'm just trying to clear up some FUD about the e-passports. Whether
wirelessly readable passports are useful, practical or necessary is a whole
another debate that I'd rather not go into. But I hope that you atleast see
that they're not horribly insecure.

Thanks for the comments! This definitely helps to clarify the issue.

It also has to be noted that Electronic Frontier Finland was [satisfied with the security clarifications][6] they received from interior ministry in October.

[1]: http://www.guardian.co.uk/idcards/story/0,,1950226,00.html
[2]: http://www.schneier.com/blog/archives/2006/08/hackers_clone_r.html
[3]: http://www.hasbrouck.org/blog/archives/001003.html
[4]: http://www.rfid-weblog.com/50226711/rfid_blocking_passport_cases.php
[5]: http://www.icao.int/mrtd/download/documents/TR-PKI%20mrtds%20ICC%20read-only%20access%20v1_1.pdf
[6]: http://www.effi.org/blog/2006-10-04-Herkko-Hietanen.html
