---
  title: "iSync and disappearing records"
  categories: 
    - "desktop"
    - "mobility"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/dangerous-isync-merge.jpg'

---
It seems Apple's [iSync][1] and Sony-Ericsson phones are having a severe synchronization problem this month. [Rambo had an alarming story][2]:

> This morning I decided to sync my phone with my Mac again since a long time, for some reason iSync decided that it wants to delete all but 3 contacts (the ones I had most recently added to my phone) from both phone and the Contacts software.

> Not being awake I allowed this to proceed...

Since both of have Sony-Ericsson phones (Rambo has a P800, and I have a K700) I wasn't particularly surprised to see this:

![iSync wants to delete all my contacts](https://d2vqpl3tx84ay5.cloudfront.net/dangerous-isync-merge.jpg)

The only way to fix synchronization was to allow this operation, so I as a precaution exported my [Address Book][3] contacts as vCards. As suspected, the synchronization run wiped out my whole calendar, and modified the contacts to unrecognizable shape.

With [iCal][6] this wasn't a big deal as my calendar events were any way [subscribed from OpenPsa][4]. And with contacts I just imported to vCards again.

However, this makes me a bit scared on what will happen when we start synchronizing our phones with OpenPsa [over SyncML][5]...

[1]: http://www.apple.com/isync/
[2]: http://www.nemein.com/people/rambo/isync-screwup.html
[3]: http://www.apple.com/macosx/features/addressbook/
[4]: http://www.nemein.com/people/rambo/openpsa_1_11_11_and_ical.html
[5]: http://www.funambol.com/opensource/
[6]: http://www.apple.com/macosx/features/ical/
