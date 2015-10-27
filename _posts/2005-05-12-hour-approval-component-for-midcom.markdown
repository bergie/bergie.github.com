---
  title: "Hour approval component for MidCOM"
  categories: 
    - "midgard"
    - "openpsa"
  layout: "post"

---
Following Kaukola's [Support ticker viewer][1] and kindly financed by our friends at [Protie][2], we now have a [Midgard CMS][3] component that allows customers to view and approve [OpenPSA Projects][4] hour reports.

The web user interface is fairly simplistic at the moment, simply listing unapproved hour reports for all projects where the user's [company][5] has been marked as the customer (screenshot without any CSS):

![Hour approval view](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/hourview-ui.jpg)

When the user approves some hours, or simply submits the form, an email will be sent to the project manager listing the user's comments and which hours were approved or not approved:

![Email about approved hours](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/hourview-email.jpg)

Another nice addition to the [Professional Service Automation][6] cycle...

The _net.nemein.hourview_ component requires latest CVS MidCOM and OpenPSA to work.

[1]: http://www.kaukolaweb.com/blog/net_nemein_supportview_-_new_component_for_openpsa_integration.html
[2]: http://www.protie.fi/en/
[3]: http://www.midgard-project.org/
[4]: http://www.openpsa.org/openpsa/
[5]: http://www.openpsa.org/openpsa/sales.html
[6]: http://www.openpsa.org/openpsa/psa.html
