---
  title: "Creation mode for Midgard's chooser widget"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/">Midgard's</a> <a href="http://www.midgard-project.org/documentation/midcom-helper-datamanager2">datamanager2 form handling library</a> has a very nice <a href="http://jquery.com/">jQuery</a>-powered chooser widget which enables search-based selections. This is often used in situations where the data set user is choosing from is large, as is often the case when selecting persons from a large organization for instance.

Today we added creation support for the chooser to deal with situations when no matches were found.

Here is a quick example of adding related event from calendar into a news item. The chooser for doing this appears as a search box:

<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/chooser-related-events.jpg" height="91" width="200" border="1" hspace="4" vspace="4" alt="Chooser-Related-Events" /></p>

Typing a query does a live search which presents the results below. Items can be chosen either by clicking or with keyboard:

<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/chooser-search.jpg" height="118" width="400" border="1" hspace="4" vspace="4" alt="Chooser-Search" /></p>

If the desired result was not found, clicking the "+" icon opens a window for creating a new event:

<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/chooser-creation-iframe.jpg" height="209" width="398" border="1" hspace="4" vspace="4" alt="Chooser-Creation-Iframe" /></p>

Once the event has been saved the window will close and the newly created item will be placed as a chosen item in the chooser:

<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/chooser-related-events-created.jpg" height="118" width="400" border="1" hspace="4" vspace="4" alt="Chooser-Related-Events-Created" /><br />
(yes, we still need to fix start and end timestamp rendering here)</p>

Creation mode support has been added only to <a href="http://www.midgard-project.org/documentation/net-nemein-calendar/">net.nemein.calendar</a> so far, but we will add it to other places as the need arises.

Enabling creation mode in a chooser is relatively simple. Just point the chooser to the appropriate creation URL in the <a href="http://www.midgard-project.org/documentation/midcom-helper-datamanager2_schema_definition/">datamanager schema</a>:

<pre>'widget' =&gt; 'chooser',
'widget_config' =&gt; array
(
  'clever_class' =&gt; 'event',
  'creation_handler' =&gt; '/event_calendar/create/chooser/event',
), 
</pre>
The UI model used here closely resembles how <a href="http://upcoming.yahoo.com/">Yahoo's Upcoming</a> handles addition of new event venues:

<p style="text-align:center;"><img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/upcoming-add-new-venue.jpg" height="269" width="400" border="1" hspace="4" vspace="4" alt="Upcoming-Add-New-Venue" /></p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>
