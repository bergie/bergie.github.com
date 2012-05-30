---
  title: "First year of IKS for Midgard"
  categories: 
    - "midgard"
  layout: "post"

---
Last year we became a partner in the European Commission -funded Interactive Knowledge Systems project aiming to increase semantic capabilities in Open Source CMSs and vendors.

The first year of IKS has focused mostly on research and requirements gathering. As a project participant we at the Midgard project have taken this time for making our own preparations as well. Here are some initial results:

- grokking the semantic web and linked data ideas and terminology obviously required some amounts of studying
- we did a comparison of features and concepts between three content repositories together with Day Software. The similarities between Midgard, JCR and CouchDB are remarkable
- while others in the IKS sphere are focused on Java, we've started collaborating with the developers of Tracker, a GObject-based RDF triple store. Tracker would fit the Midgard architecture much better and we would be able to avoid big external dependencies
- we chose Wymeditor as the new rich text editor in Midgard CMS. Wymeditor is fast, jQuery-based and relatively sparse of features, allowing us to build the functionality we need in an integrated manner. Wymeditor is also capable of dealing with RDFa
- MgdSchema, the XML syntax for describing Midgard content types was expanded to allow us to link objects and properties to appropriate RDF ontologies
- we participated in several IKS meetings around Europe: Salzburg, Rome, Salzburg, Rome and now Paderborn
- preparations were made to migrate Midgard's default HTML templates from Microformats to RDFa

All of this aims for making Midgard compatible with the designs of the IKS project, but building as much of it on top of the pure GNOME + PHP stack as possible.