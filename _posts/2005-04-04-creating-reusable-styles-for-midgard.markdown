---
  title: "Creating reusable styles for Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
[Midgard][0] 1.7 alpha release is now under work, and will ship the [Midgard Site Wizard][1] with a new default way for creating websites. The Site Wizard enables developers to create layout templates that can be reused and customized when creating new websites.

When a user runs the Site Wizard to create a new website, they will be presented with a list of installed style templates together with their screenshots and descriptions. When they select a style, a [child style][2] will be created into their sitegroup to allow modifications, and the site will be set to use it.

The style template can also allow itself to be configured by using a [datamanager schema][3]. This way the template designer can let users to change the colors of the template and upload their own images into it.

Here's a quick HOWTO on making templates:

1. Create the template as a new style named __template\_Stylename__
   - The style will be used together with MidCOM, so include all the [elements required by midcom-template][4]
2. Add your credits to the template using parameter named _midgard.admin.sitewizard/template\_credits_
3. Add a short description of the template using parameter named _midgard.admin.sitewizard/template\_description_
4. If you want to include a screenshot with the template, add it as an attachment to the style as a 130 pixel wide JPEG with name _\_\_preview.jpg_

After this your style should appear in the "Select style" dialog of the site wizard:

![Style list in the Site Wizard][5]

__Updated 2005-10-24:__ It is also a good idea to add the _Display/Shared_, _YES_ parameter for at least some Aegir compatibility.

[0]: http://www.midgard-project.org/
[1]: http://bergie.iki.fi/midcom-permalink-8928b46c23b862209f4c8e70c5fbd4e8
[2]: http://www.midgard-project.org/midcom-permalink-ee5a641a3e241f2836057c709d76ac3a
[3]: http://www.midgard-project.org/midcom-permalink-7cd14d19bbf0b9c8d31e6aceb0992eb9
[4]: http://www.midgard-project.org/midcom-permalink-32c0157e719db8b798b742ab09f0c289
[5]: http://bergie.iki.fi/midcom-serveattachmentguid-f14426cde41724e6436a4b902be9d42f/sitewizard-select-style-with-screenshots.jpg