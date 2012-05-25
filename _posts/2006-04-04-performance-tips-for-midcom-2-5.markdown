---
  title: "Performance tips for MidCOM 2.5"
  categories: 
    - "midgard"
  layout: "post"

---
[We][2] just ported a portal containing tens of thousands of documents from [Abako Stato][1] to [Midgard CMS][3]. Content conversion was done using [Exorcist][4] as usual.

Because the site included a biggish public discussion forum we decided to start right away from the current [PEAR-packaged][5] [MidCOM][6] site interface. MidCOM 2.4 had been causing severe performance issues on personalized sites, and we were a bit worried, especially as latest MidCOMs don't include the [output caching][7] system.

However, the new MidCOM 2.5 infrastructure proved to perform really well, getting us back to the MidCOM 2.2 branch performance levels where most sites really don't need any caches.

Here are the quick tips on how to make MidCOM 2.5 really fly:

* Don't use [MidCOM template][10], instead utilize [static start-up][11]
* Move layout images and CSS from database to Apache DocumentRoot
* Use only components refactored to the MidCOM 2.5 architecture. These include
  - All net.nehmer components
  - net.nemein.wiki
  - net.nemein.discussion
  - All org.openpsa components
  - ...
  - This list will grow as we keep porting things
* Install [memcached][9] if you're using lots of [ACLs][8]

Using the upcoming Midgard 1.8 release will make MidCOM faster yet by about 5-10%.

[1]: http://www.abako.fi/
[2]: http://www.nemein.com/
[3]: http://www.midgard-project.org/
[4]: http://www.midgard-project.org/documentation/exorcist/
[5]: http://pear.midcom-project.org/
[6]: http://www.midgard-project.org/documentation/midcom/
[7]: http://www.cmswatch.com/Feature/91-The-GRUPA-Gremlin
[8]: http://www.nathan-syntronics.de/midgard/midcom/midcom-2_6/acl-tutorial.html
[9]: http://pecl.php.net/package/memcache
[10]: http://www.midgard-project.org/documentation/midcom-template/
[11]: http://www.midgard-project.org/development/mrfc/0025.html