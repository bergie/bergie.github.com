---
  title: "Return of the Moblog"
  categories: 
    - "life"
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/bergie-moblog-20060818.jpg'

---
[My moblog][1] hasn't been updated since [GUADEC last July][2], and some relatives have already been asking about it. The reason why I haven't updated is that I switched to the  [Nokia N90][3] camera phone, and the email format it uses makes [Mail_mimeDecode][4] fail.

We encountered this earlier on the [Death Monkey trip][5], where [Rambo debugged it][6] and committed a workaround to the [org.openpsa.mail library][7]. Now I've installed the [same workaround][8] to my blog and parsing the emails works again. Looking forward to being able to moblog again!

![My moblog](https://d2vqpl3tx84ay5.cloudfront.net/bergie-moblog-20060818.jpg)

__Note:__ Would be great if [Rambo][9] could get the same fix into the [PEAR package][4] as well.

[1]: http://bergie.iki.fi/moblog/
[2]: http://guadec.org/GUADEC2006
[3]: http://www.mobileburn.com/review.jsp?Id=1689
[4]: http://pear.php.net/package/Mail_mimeDecode
[5]: http://www.deathmonkey.org/
[6]: http://www.nemein.com/people/rambo/how-busy-can-one-get--.html
[7]: http://pear.midcom-project.org/index.php?package=org_openpsa_mail
[8]: http://openpsa.tigris.org/source/browse/openpsa/src/NemeinNet_Core.xml?r1=1.48&r2=1.49
[9]: http://www.midgard-project.org/community/whoswho/rambo.html
