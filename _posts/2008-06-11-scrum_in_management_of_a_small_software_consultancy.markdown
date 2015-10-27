---
  title: "Scrum in management of a small software consultancy"
  categories: 
    - "business"
    - "openpsa"
  layout: "post"

---
<p>
Over the years we at <a href="http://nemein.com/">Nemein</a> have been experimenting with various ways of keeping our operations managed. Now with some personnel changes including <a href="http://www.runtoshop.com/contact.html">Joe's</a> departure it was a good time to change the way we work again.
</p><p>
I had some goals:
</p><ul><li>Keeping status of different projects up-to-date with more accuracy</li>
<li>Ensuring our sales and project management knows if some project is being blocked by missing materials</li>
<li>Enabling a more distributed, <a href="http://webworkerdaily.com/2006/09/04/going-bedouin/">web working</a> culture</li>
</ul><p>
We're a small company of <a href="http://nemein.com/en/people/">less than 10 people</a>, and as such most project management methods have not been very successful for us. In general they have been made for situations where same person or team keeps on working on a project for several months, whereas in our situation a person typically works on several projects every day.
</p><p>
I discussed this over some beers with <a href="http://teroheikkinen.iki.fi/">Tero Heikkinen</a> from <a href="http://plazes.com/plazes/135439_rohea">Rohea</a>, and he told me how they were implementing <a href="http://en.wikipedia.org/wiki/Scrum_(development)">Scrum</a> in their small company. While their number of different projects running at the same time is a bit smaller, their situation otherwise is quite similar: <a href="http://www.midgard-project.org/">same technologies</a> used, <a href="http://www.ajatus.info/">Ajatus</a> for work tracking, etc.
</p><p>
We had a company <a href="http://flickr.com/photos/bergie/2544964382/">sauna evening</a> and I presented Tero's ideas there: we would partially implement the Scrum model, and keep tuning it to our needs. At the first phase this means:
</p><ul><li>Every morning we have an all-hands 15-20min meeting ("the daily Scrum") where everybody goes over what they have been doing the previous day, and what they were planning to do today. If they are being blocked by something missing: a software bug, missing information or other materials, this is also brought forward</li>
<li>Every project has a file in <a href="http://docs.google.com/">Google Docs</a> where we keep the project status and task list (Backlog). This task list is updated based on what comes up in the morning meeting</li>
<li>Work hours are reported with Ajatus. Rohea also uses it for project <a href="http://www.controlchaos.com/about/burndown.php">burn-down charts</a>, and once their add-on for that is finished we may do the same</li>
<li><a href="http://nemein.com/en/people/semi/">Emilia</a>, the project manager (or Scrum Master) is responsible for resolving possible impediments and maintaining the per-project status files</li>
</ul><p>
The approach we have taken should be quite pragmatic and low-tech. Instead of fancy project management software we use simple word processing for status data. And thanks to Google Docs the documents produced are accessible and editable from anywhere.
</p><p>
Similarly the actual meetings are quite easy to manage. The people who are at the office attend there, and others attend either via a Skype or mobile phone conference call, depending on network availability. We decided to have them at 10am so that everybody will be able to participate. Even if there is a Sprint or meeting scheduled for the same time, the short time needed for our all-hands meeting means it can be held over a "cigarette break".
</p><p>
Ajatus is the only more experimental piece of software in our puzzle. In our company, we use it for hour reporting, expense tracking and keeping meeting minutes. For these it works quite well, although more reporting tools are definitely needed. The alpha status of <a href="http://incubator.apache.org/couchdb/">CouchDb</a>, the database software powering Ajatus has bit us a few times by database corruption (caused by OSX-specific erlang bug) or simply difficult installation procedure, but these problems will hopefully improve over time.
</p><p>
We're now in the second week of this model, and at least the gut feel is that this has improved coordination inside the company. The next challenge then is to let the customer get involved in the process. This can mean just sharing the project status files, or even giving them access to actual meetings or the Ajatus data.
</p>
