---
  title: "Web CMSs: what does Midgard do?"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
Column Two has an interesting post titled [What does a web CMS do?][1] with a table listing features that are integral to a web CMS, and what can be handled separately.

I thought to list how Midgard handles those:

<table>
    <tr>
        <th>Capability</th>
        <th>Midgard way of handling</th>
    </tr>
    <tr>
        <td>Authoring and publishing web pages</td>
        <td><a href="http://www.midgard-project.org/documentation/content-production-with-midcom/">Yes, definitely</a></td>
    </tr>
    <tr>
        <td>Multimedia content</td>
        <td>Midgard can manage images and video to a simple extent</td>
    </tr>
    <tr>
        <td>Personalisation</td>
        <td><a href="http://www.midgard-project.org/documentation/concepts-personalization/">Easy to do via the API</a></td>
    </tr>
    <tr>
        <td>Online forms</td>
        <td>Multiple handlers available, like email forms, event registration and incident reporting</td>
    </tr>
    <tr>
        <td>Online calendar</td>
        <td>Yes, with <a href="http://protoblogr.net/blog/view/maemo_community_calendar.html">quite comprehensive feature set</a></td>
    </tr>
    <tr>
        <td>Blogs</td>
        <td>Built-in, with RSS in and out, geoblogging and commenting</td>
    </tr>
    <tr>
        <td>Search</td>
        <td>Midgard uses <a href="http://www.midgard-project.org/development/mrfc/view/0009.html">the Lucene search tool</a></td>
    </tr>
    <tr>
        <td>Collaboration tools</td>
        <td><a href="http://www.openpsa.org/version2/">OpenPsa</a> can be used to some extent</td>
    </tr>
    <tr>
        <td>Wikis</td>
        <td>Midgard provides <a href="http://www.midgard-project.org/documentation/net-nemein-wiki/">a quite nice wiki</a></td>
    </tr>
    <tr>
		<td>Web 2.0 functionality</td>
         <td>Depends on definition, we have OpenID, social networking (with some portability), voting and other related features</td>
    </tr>
    <tr>
          <td>Mailing lists</td>
          <td>Midgard's discussion forum can act as mailing list front-end</td>
    </tr>
    <tr>
          <td>E-commerce functionality</td>
          <td>Midgard has a product database and provides a simple shopping cart built-in</td>
    </tr>
    <tr>
          <td>Corporate document/records management</td>
          <td>No, whole market of its own</td>
    </tr>
    <tr>
          <td>Digital asset management (DAM)</td>
          <td>No, obtain separately</td>
    </tr>
    <tr>
          <td>Usage statistics</td>
          <td>No, obtain separately</td>
    </tr>
</table>

The fact that Midgard supports almost everything listed may sound like bloat, but we actually do this quite elegantly because of the [component architecture][2] that enables site builders to pick and use whatever pieces of functionality they need.

[1]: http://www.steptwo.com.au/columntwo/archives/002617.html
[2]: http://www.midgard-project.org/documentation/midcom/