---
  title: "Contact management in semantic web"
  categories: 
    - "midgard"
    - "openpsa"
  layout: "post"

---
One big idea we've had with [OpenPsa][1] has been supporting various standards and [Microformats][2] to make the user experience richer.

Today I finally had the chance to take the first step at this direction by adding web site probing support into the [OpenPsa Contacts][3] CRM component. Now when you enter a new person or company it does:

- Check if the contact has a homepage set
- Register an "at" entry for Midgard
- Next minute the homepage will be fetched
- If there is a `<link />` to RSS feed that feed will be fetched
- If the feed includes [ICBM metadata][5] the position will be stored accordingly
- If the feed includes [GeoRSS][4] info then the a subscription will be registered
- ...and at every subscription run the person's position will be updated according to the time of latest RSS entry

End result is that if the contact has a geocoded website (like many do nowadays), the position will be available for the CRM system.

It is of course only the first step. When finally I upgrade my local development box to run [PHP5][6] I can start reading Microformats in via [hKit][7] and do cool things like automatically populating employees and contact information.

[1]: http://www.openpsa.org/
[2]: http://www.microformats.org/
[3]: http://www.openpsa.org/version2/openpsa/contacts.html
[4]: http://www.georss.org/
[5]: http://geourl.org/add.html
[6]: http://bergie.iki.fi/blog/midcom-on-php5--finally/
[7]: http://allinthehead.com/hkit