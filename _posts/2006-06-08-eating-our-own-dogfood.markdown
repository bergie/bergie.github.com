---
  title: "Eating our own dogfood"
  categories: 
    - "openpsa"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/openpsa2-calendar-subscription.jpg'

---
[This tuesday][2] was the "[day of the beast][1]", and [we][4] decided to finally [eat our own dogfood][3] and deploy __[OpenPsa 2][5]__ into production.

This brought some nice benefits immediately, including seeing one's own invoicing rate on the front page and much better calendar and scheduling. However, as expected it also brought some annoyances we would've overlooked if we didn't use the system every day for real business.

First one of these was the calendar. OpenPsa 2 has a nice [automated buddy list][6] for adding project contacts to user's address book, and we had been using the same mechanism for populating calendar views. However, when you have many projects and customers, the buddy list tends to get quite long swamping the calendar.

So what I did today was add a system for deciding which of your buddies to display in the calendar through a simple AJAX interface:

![Choosing buddies to display in calendar](https://d2vqpl3tx84ay5.cloudfront.net/openpsa2-calendar-subscription.jpg)

Expect to see many such improvements soon as we encounter things to improve in our use of the software.

[1]: http://binarybonsai.com/archives/2006/06/06/666/
[2]: http://en.wikipedia.org/wiki/Current_events#June_6.2C_2006_.28Tuesday.29
[3]: http://en.wikipedia.org/wiki/Eat_one's_own_dog_food
[4]: http://www.nemein.com/
[5]: http://www.openpsa.org/version2/
[6]: http://www.bergie.iki.fi/blog/openpsa2--minor-features-matter/
