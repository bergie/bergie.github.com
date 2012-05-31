---
  title: "Contact management and Microformats"
  categories: 
    - "openpsa"
    - "oscom"
  layout: "post"

---
I've blogged earlier on how <a href="http://bergie.iki.fi/blog/contact-management-in-semantic-web.html" title="Contact management in semantic web">OpenPsa 2 can utilize information pulled from the websites</a> of organizations and persons entered into the system.

Today I added support for populating <a href="http://microformats.org/wiki/hcard" title="hCard Microformat">Microformatted contact information</a> pulled using the nice <a href="http://allinthehead.com/hkit" title="Microformat library for PHP">hKit library</a>. To use this feature simply create or edit a company and add their website URL:

<a href="/files/openpsa-contacts-enter-organization.png" onclick="window.open('http://bergie.iki.fi/midcom-serveattachmentguid-99791b34b21311dba253351daf98b86fb86f/openpsa-contacts-enter-organization.png','popup','width=427,height=427,scrollbars=no,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=yes,left=0,top=0');return false"><img src="/files/openpsa-contacts-enter-organization-tm.jpg" height="223" width="221" border="1" hspace="4" vspace="4" alt="Openpsa-Contacts-Enter-Organization" /></a>

OpenPsa will check on the background whether the site contains hCards, and populate any information gained to the contact entry.

For example, <a href="http://www.bangbonsomer.com/">Bang &#38; Bonsomer</a> provides their address as a hCard in their site footer:

<img src="/files/bangbonsomer-hcard-footer.jpg" height="34" width="333" border="0" hspace="4" vspace="4" alt="Bangbonsomer-Hcard-Footer" />

OpenPsa finds this information and adds it to the entry:

<a href="/files/openpsa-contacts-organization-details.png" onclick="window.open('http://bergie.iki.fi/midcom-serveattachmentguid-88613160b21311dba3208183f5f73b423b42/openpsa-contacts-organization-details.png','popup','width=377,height=360,scrollbars=no,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=yes,left=0,top=0');return false"><img src="/files/openpsa-contacts-organization-details-tm.jpg" height="220" width="229" border="1" hspace="4" vspace="4" alt="Openpsa-Contacts-Organization-Details" /></a>

Couldn't be much easier. Now if only more sites provided hCards...
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/hcard" rel="tag">hcard</a>, <a href="http://www.technorati.com/tag/microformats" rel="tag">microformats</a></p>