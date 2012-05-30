---
  title: "Finding resources automatically in OpenPsa"
  categories: 
    - "openpsa"
  layout: "post"

---
We rolled the initial __Project Broker__ user interface into [OpenPsa 2][1] with [Rambo][2] yesterday. Since we were on schedule we went to work [in the countryside][3] where we wouldn't be disturbed. Fireplace, a bit of snow, and no Internet connection make it a perfect place for a [coding sprint][4].

![Ingels covered in early snow](http://bergie.iki.fi/midcom-serveattachmentguid-45e91bf66e2d11dbafdcaffc16b3c4fbc4fb/ingels-in-snow.jpg)

The idea of the __Project Broker__ is to be a [DBE service][5] that automatically looks for potential subcontractors in the [Fada P2P network][6]. Matching criteria include competence [tags][7], schedule and endorsements given by other members of the network. In addition to DBE, the same searches also work inside a single OpenPsa installation enabling automatic scheduling and resourcing of tasks:

![Selecting project schedule from available time slots](http://bergie.iki.fi/midcom-serveattachmentguid-3d74c5be6e2e11dba5c2cb0608c277107710/openpsa-projectbroker-select-slots-small.jpg)

Another change we rolled in was a reworked hour reporting system to the OpenPsa front page. There are now two ways to report hours: by manually entering them using a [composite widget][8], or by letting OpenPsa keep the time for you selecting what you are working on:

![Hour reporting on the front page](http://bergie.iki.fi/midcom-serveattachmentguid-a48ae85a6e2e11db80056fef52c47c577c57/openpsa-hour-reporting-mypage-small.jpg)

[1]: http://www.openpsa.org/version2
[2]: http://www.nemein.com/people/rambo/
[3]: http://beta.plazes.com/plaze/c580f669147f653e4d3725b927eeac15
[4]: http://www.onlamp.com/pub/a/python/2006/10/19/running-a-sprint.html
[5]: http://www.digital-ecosystem.org/
[6]: http://yukatan.fi/display/yukatan/2005/06/01/First+look+at+Fada+and+ServENT
[7]: http://en.wikipedia.org/wiki/Tag_%28metadata%29
[8]: http://www.midgard-project.org/documentation/composite-editing-with-midcom/