---
  title: "First running OpenPSA 2.0 component"
  categories: 
    - "openpsa"
  layout: "post"

---
The development of [version 2.0][1] of [OpenPSA][2], an open source management system for consultancies is now moving rapidly forward. Contrary to [original plans][3], the system is being written using the [MidCOM][4] component architecture.

The component architecture will provide several benefits, including easily customizable data entry forms for things like companies and tasks. It will also mean that the whole OpenPSA system will be developed following strict [coding standards][5] that will make the code much more readable and easier to contribute to.

[PEAR packaging][6] of OpenPSA and support for initializing new installations using the [Midgard Site Wizard][7] are also part of the plan.

Here's the first running OpenPSA 2.0 screen, a [datamanager schema][8] driven company editor. 

![First look at new OpenPSA Sales](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/openpsa20_sales_firstscreen.jpg)

Iframes have been removed, and the whole UI uses standards-based XHTML and CSS layout. The toolbar floats on the top, and will contain all action buttons, including the _Save_ button for current view.

Ajax will be used for user interaction where it pays off, including the hour reporting view.

[1]: http://www.openpsa.org/development/version_20/
[2]: http://www.openpsa.org/
[3]: http://www.openpsa.org/development/version_20/core_spec.html
[4]: http://bergie.iki.fi/midcom-permalink-b091d0652432d63cbd717578e7133745
[5]: http://www.midgard-project.org/midcom-permalink-2e4394b43693dc6c5c6b7ae77037b4c3
[6]: http://bergie.iki.fi/midcom-permalink-1d067d321083390ec8a782d3ead0f34f
[7]: http://bergie.iki.fi/midcom-permalink-8928b46c23b862209f4c8e70c5fbd4e8
[8]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
