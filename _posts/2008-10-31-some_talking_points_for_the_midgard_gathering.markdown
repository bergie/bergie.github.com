---
  title: "Some talking points for the Midgard Gathering"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
Since <a href="http://www.midgard-project.org/community/events/midgard_gathering_2008/">the Midgard Gathering</a> is next week, I thought it would be time to write down some conversation starters related to it.
</p><p>
<span style="font-size:14pt;"><strong>Clear vision</strong></span>
</p><p>
One important thing we need to settle on is a clear vision for Midgard. It should be a vision everybody in the community can agree with, and a vision that will benefit the user base.
</p><p>
I believe that "<a href="http://bergie.iki.fi/blog/midgard2_at_fscons-your_data-everywhere/">your data, everywhere</a>" is the right idea. We should target Midgard for the replicated world where your application data can be easily transferred between multiple devices, served on the web, and shared with your friends.
</p><p>
While some believe that soon you will "<a href="http://www.37signals.com/svn/posts/347-youre-not-on-a-fucking-plane-and-if-you-are-it-doesnt-matter">never be offline</a>", I think that level of ubiquitous connectivity is either unattainable or at least very far off in the future. What we need instead is to be able to <a href="http://bergie.iki.fi/blog/the_old_offline_vs-online_debate/">have our data with us, wherever we go</a>.
</p><p>
<span style="font-size:14pt;"><strong>Unique visual identity</strong></span>
</p><blockquote>
What really sets Apple's products apart is the "fit and finish," the ultimate impression that results from thousands of tiny decisions that go into a product's development. Take Apple's pioneering work in injection molding. It's part science, part art, and plenty of trial and error.  (<a href="http://www.businessweek.com/magazine/content/06_39/b4002414.htm">Who Is Jonathan Ive?</a>)
</blockquote><p>
Design is often what differentiates winners from the mass. Apple's beautiful laptops and cell phones are a good example of how you can beat a crowded market by focusing on design and details.
</p><p>
While we should have distinctive visual elements to build our user interfaces from, I don't mean only that. By design I mean that we really need to think hard of what our users need, and design beautiful interfaces that make things easy for them.
</p><p>
On the visual end, the Midgard colors of grey, orange and brown should stand out quite well. We have excellent icons done in the <a href="http://tango.freedesktop.org/Tango_Icon_Theme_Guidelines">Tango style</a>, and many other design elements coming from Ilkka Martio's <a href="http://www.flickr.com/photos/quimgil/481034884/">work on Midgard2 styling</a>. These should be cornerstones of the new visual user interface. In '99 Midgard had a strong, <a href="http://flickr.com/photos/bergie/1107841998/">distinctive visual identity</a>. We need to rebuild that.
</p><p>
<span style="font-size:14pt;"><strong>Content management</strong></span>
</p><blockquote>
Content management: This is the everything that happens with a piece of content after its created and until it dies. This includes the permissions, workflows, versioning, check in/out, task management, reporting, archiving, administrative searching, language translation, and any other action involved in keeping this content relevant, current, effective, and general under control. (<a href="http://gadgetopia.com/post/6186">The Four Disciplines of Content Management</a>)
</blockquote><p>
<a href="http://bergie.iki.fi/blog/on_vikings_and_free_software/">Midgard's origins</a> have been in <a href="http://gadgetopia.com/post/252">web publishing</a>, and through <a href="http://www.cmswatch.com/Feature/48-Midgard-1.4">strong templating</a> and component systems this is where we've been quite good at. But content management we haven't done that well. At least, if content management is taken to a wider meaning than just "making stuff editable and published on the web".
</p><p>
With the new Midgard we have the delightful opportunity to rethink this all. Thanks to our active consulting companies and the <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">powerful MVC framework</a> we shouldn't focus on actual components this time - they will appear for sure through various client projects. Instead, we should concentrate on the basic ideas of content management.
</p><p>
This means that we should think of how the content is actually edited and published, and how it lives on in a service. Handling and connecting of content fragments, managing inter-document linkage, and versioning are all important features. Similarly, we should make it easy to send documents to commenting and approval rounds, and to serve them in multiple variants.
</p><p>
An important piece for this would be making the <a href="http://bergie.iki.fi/blog/notification-management-in-openpsa-2/">notification service</a> that in older Midgard existed as a separate component an integral part of the system. Any Midgard application should be able to store and show notifications for users. If this is utilized from core up, then workflow between different parties working on a site or a document will be much easier.
</p><p>
To ensure consistency between components, and that components are as easy to develop as possible, MidCOM should provide a good set of controller baseclasses for typical content management activities.
</p><p>
<span style="font-size:14pt;"><strong>Replication everywhere</strong></span>
</p><blockquote>
Before his retirement as Microsoft's chairman, Bill Gates suggested that a so-called pervasive desktop would be a focus of Windows 7, giving users a way to take all their data, desktop settings, bookmarks, and the like from one computer to another--presumably as long as all those computers were running Windows 7. (<a href="http://www.pcworld.com/article/152683-4/15_hot_new_technologies_that_will_change_everything.html">PC World</a>)
</blockquote><p>
Even though Midgard has supported replication since 2000, it has always been a bit of an extra feature. Most installations have still been on the server end, with the server acting as an isolated island.
</p><p>
Following our "<a href="http://bergie.iki.fi/blog/midgard2_at_fscons-your_data-everywhere/">your data, everywhere</a>" vision, this must change. Replication tools must be shipped with every Midgard installation, be it on server, on desktop, or on a mobile device. And they must be integrated with the user interfaces. Anywhere you edit something, you should be able to share it with others, and see where that piece of content originally came from, and who it has been shared with.
</p><p>
When online, the sharing and synchronization must happen instantly. When offline, the changes to be replicated must be collected into a local spool, and then sent over when connectivity is available.
</p><p>
<span style="font-size:14pt;"><strong>Separating content objects from internal objects</strong></span>
</p><blockquote>
...load-bearing walls in content management — those things that require a content editor to call a developer to change them. Where do you draw the boundaries? (<a href="http://gadgetopia.com/post/6313">Load-Bearing Walls in Content Management</a>)
</blockquote><p>
Everything in Midgard is <a href="http://www.midgard-project.org/documentation/mgdschema-in-php/">an MgdSchema object</a>, be it permission, site template, user, or an article. This is good in the sense that it allows familiar programming interfaces to be used on every level of the system. But it also means that internal objects sometimes end up being used as content objects, causing confusion.
</p><p>
For instance, persons and groups are often used as on-site content. But they differ from other pieces of content on many levels, for instance because they have so many other objects connected to them through permissions and metadata. Because of this they work with different rules regarding to deletion and approval than others, which many users can find frustrating.
</p><p>
We should see to have stronger differentiation between content objects of different types to ensure smoother usage and replication.
</p><p>
<span style="font-size:14pt;"><strong>Quality</strong></span>
</p><blockquote>
Quality criterias - Portability: Easy to configure in new environments, Few OS and webserver dependencies, Few and documented version dependencies (language version, database version, external libraries), Able to survive environment updates (<a href="http://www.slideshare.net/mayflowergmbh/quality-in-php-projects-beyond-unittests-presentation?type=powerpoint">Quality in PHP Projects Beyond Unittests</a>)
</blockquote><p>
Like many other pieces of free software, Midgard has been riddled by quality issues. While our bugs haven't meant gaping security holes, changing APIs and memory leaks have caused many grey hairs to our users.
</p><p>
To improve quality in the Midgard software stack we have already taken some steps. The new <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases/">synchronized release model</a> ensures that Midgard and MidCOM play well together and that component developers can start using new interfaces and features more quickly. It also makes Midgard more predictable to users, helping them to plan their upgrades well ahead.
</p><p>
The <a href="https://build.opensuse.org/">openSUSE Build Service</a> has also increased the quality of Midgard software. Now we can provide prebuilt binaries to most popular Linux distributions, making installing and upgrading Midgard easier. The new datagard tool makes setting up a Midgard site <a href="http://bergie.iki.fi/blog/long-term_support_for_midgard-ragnaroek_is_here/">a single shell command</a>, which is also an important step here. In the future we should aim also for the virtualized systems by using tools like <a href="http://www.susestudio.com/">SUSE Studio</a>.
</p><p>
Quality and backwards compatibility of commits is also important, as are coding standards in a major project like this. To that end, our new <a href="http://www.midgard-project.org/discussion/developer-forum/proposal-new_midcom_commit_policy/">VCS Tyrant</a> should be able to help our contributors in their work. Similarly, the <a href="http://trac.midgard-project.org/roadmap">newly-revitalized issue tracker</a> with its clear milestones make tracking the development work easier.
</p><p>
Finally, better software testing is a major step to strive for. Regressions have hurt us in the past, and the only way to get rid of them is to to implement a good test suite. For this, we will have an unit testing workshop on the first day of the Gathering.
</p><p>
<span style="font-size:14pt;"><strong>Documentation</strong></span>
</p><blockquote>
If our intent is to encourage people to use these tools and to contribute their time to the development of these tools, we need to spend more energy on introductory documentation. Engineers who look at Sourceforge are looking either for solutions to problems or are looking for interesting tools. In either case the Web site needs to convey the important details in a short form to enable the reader to gauge their level of interest. Obscurity in documentation benefits no one as it annoys potential users and non-users alike. (<a href="http://www.devx.com/opensource/Article/11839">Is Documentation Holding Open Source Back?</a>)
</blockquote><p>
Midgard's <a href="http://www.midgard-project.org/documentation/">documentation wiki</a> is currently in a horrible shape. As Midgard's capabilities have grown, and versions changed, new stuff has been added. But all of the old stuff is also there. And users, stumbling there either through the navigation or a google search, will have few ways to tell whether a document is up-to-date.
</p><p>
Developers clearly feel this frustration, and as result much of the newer documentation, especially for Midgard2 is available only <a href="http://teroheikkinen.iki.fi/blog/view/some_documentation_about_installing_midgard_2.html">in blog format</a>.
</p><p>
Because of this, we really need to put an effort to improving the level of documentation. And important first step would be to take the current wiki content into control. Old information must be either removed or tagged to the version it belongs. Templates must be tuned so that they show clearly if something is current or historical information. And the new materials must be collected from the various blogs in order to be published on the site.
</p><p>
After this is done we must rethink the way the wiki is maintained. Maybe we need a "documentation master" just like we now have a "bug master" and a "VCS tyrant". Maybe we must switch <a href="http://midgardwiki.contentcontrol-berlin.de/index.php/Main_Page">to MediaWiki</a>. Or maybe we must make the wiki a replicated system that we all can run and edit also on our own machines. As I am not quite sure of the right solution this must be discussed well in the Gathering.
</p><p>
<span style="font-size:14pt;"><strong>Virtual servers</strong></span>
</p><blockquote>
One of the more successful technologies to have been developed is virtualization. Broadly speaking, to virtualize is to make a single piece of hardware function as multiple pieces. Different user interfaces isolate portions of the hardware, and make each one operate as a separate entity. As applied to data centers, installing virtual infrastructure allows more operating systems and applications to run on fewer servers, which reduces overall energy use and cooling requirements. (<a href="http://ecopreneurist.com/2008/02/07/virtualization-a-boon-for-green-computing/">Ecopreneurist</a>)
</blockquote><p>
In the past Midgard has been hurt much by the fact that root access is required. <a href="http://www.opensourcecms.com/">Less advanced content management systems</a> have surpassed us in popularity by many orders of magnitude because anybody can set them up in just some web space.
</p><p>
But now I believe things are changing. Virtual servers are becoming cheaper and cheaper, and as they allow much larger degree of freedom than shared web hosting, companies and even individuals are now buying them instead. And on a virtual server you can run Midgard easily.
</p><p>
If we want to really benefit from the wide popularity of virtual servers, we must take some steps. First of all, Midgard must be very easy to install, as it is now thanks to datagard and OBS. And secondly, we should provide preconfigured "<a href="http://susestudio.com/">virtual appliance</a>" images that hosting providers running Xen or VMware can set up just as easily as they would an off-the-shelf Debian or RHEL.
</p><p>
The replicated network setup should also take this into account. Users should be able to easily keep adding new virtual servers into their cluster and have that instantly <a href="http://bergie.iki.fi/blog/midgard2-future_in_the_clouds/">start sharing data with their other servers</a>.
</p>
