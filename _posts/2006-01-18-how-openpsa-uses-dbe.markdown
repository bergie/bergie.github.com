---
  title: "How OpenPsa uses DBE"
  categories: 
    - "openpsa"
  layout: "post"

---
I'm writing this in the [DBE Project Review][2] in [chilly][1] Tampere. Looking at lot of the presentations, it seems to be a common view that actual end-user businesses would be using tools like the [DBE Studio][3] to model their business and services.

However, [we][4] feel that this is quite a bit too difficult, and that the [Digital Business Ecosystem][5] should be something happening in the background instead.

## The OpenPsa approach

With the [DBE implementation][7] in [OpenPsa][6], the only point where user becomes aware of DBE being used is when they add new contacts to the registry. One of the contact editable fields is _Digital Business Ecosystem ServiceID_:

![](/files/dbe-serviceid-openpsa-person.jpg)

The _ServiceID_ in this case is the identifier of the [Sitegroup][8] entry in the [Midgard][9] database, which means it is essentially the identifier of an OpenPsa installation. The identifiers follow the [UUID spec][10] and so should be unique across the scale-free network.

If the _ServiceID_ has not been provided, the user is treated as a local user and there will not be a further thought about DBE. If it is inputted on the other hand, the _OpenPsa DBE Service_ will start looking for a matching company in the [DBE P2P network][12]. If the company is found, the OpenPsa service will then replicate all tasks and hour reports related to the remote user to the other company's installation.

Remote users and local users are identified in person listings by different icons: satellite dish for remote user, and a person image for local user.

## System architecture

Since OpenPsa has been implemented as set of [MidCOM][13] components written in PHP, it can't connect with DBE directly. To make the connection, [Exorcist][14] is being run as the _DBE Service_. It watches for changes in the Midgard database, and replicates them across the DBE network as required. Here's roughly how it works:

![OpenPsa DBE connection](/files/openpsa-dbe-connection.png)

## Security model

When the OpenPsa DBE service was developed there was no [Identity System][15] for DBE, and so at the moment the service must be run over [VPN][16] to be secure. We will look at utilizing the new DBE security module in the next project.

For us the challenge obviously is that with OpenPsa users authenticate with their [Midgard accounts][17], and so DBE identity can only be established on per-company level. We'll have to see how well this works with the DBE security module.

__In related news__, [Joel Spolsky talks about Micro-ISVs][11], one of the target markets for the networked Openpsa.

[1]: http://taivasalla.net/2006/01/060117_1540_kuvat.html
[2]: http://www.digital-ecosystem.org/Members/aenglishx/eventsfolder/review
[3]: http://dbestudio.sourceforge.net/
[4]: http://www.nemein.com/en/
[5]: http://www.digital-ecosystem.org/
[6]: http://www.openpsa.org/
[7]: http://bergie.iki.fi/midcom-permalink-0940706284d472e1bfe719dab4222c45
[8]: http://www.midgard-project.org/midcom-permalink-f624e440f76a466d5870374bca8e1449
[9]: http://www.midgard-project.org/
[10]: http://www.midgard-project.org/midcom-permalink-896e4f7a283d7dc1a66d1e0c6642985e
[11]: http://www.joelonsoftware.com/articles/Micro-ISV.html
[12]: http://swallow.sourceforge.net/
[13]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[14]: http://www.midgard-project.org/midcom-permalink-8d125757a16d36c7cde202561554d21c
[15]: http://www.ercim.org/publication/Ercim_News/enw63/seigneur.html
[16]: http://en.wikipedia.org/wiki/Virtual_private_network
[17]: http://www.midgard-project.org/midcom-permalink-c4e7fde9b7935d59b18ffc1f998e8a21