---
  title: "Oracle Sun acquisition: time to think about a content repository?"
  categories: 
    - "business"
    - "midgard"
    - ""
  layout: "post"

---
<p>
So, <a href="http://www.sun.com/third-party/global/oracle/index.jsp">Oracle bought Sun</a>, and <a href="http://mysql.com/">MySQL</a> with it. Since MySQL runs much of the current web, I'd imagine many developers are now concerned with the future of that database and looking at alternatives like <a href="http://www.postgresql.org/">PostgreSQL</a>.
</p><p>
But instead of locking yourself to another specific database, how about going with a <a href="http://bergie.iki.fi/blog/midgard_and_jcr-a_look_at_two_content_repositories/">content repository</a>?
</p><p>
Content repositories are services that wrap different storage back-ends and provide an abstracted object-oriented API to them. As long as you write your application using the repository's interfaces, you can switch databases behind it at will.
</p><p>
For web development, there are two good alternatives:
</p><ul>
<li><a href="http://www.ibm.com/developerworks/java/library/j-jcr/">Java Content Repository</a>: the content repository standard for Java applications that has many implementations, including <a href="http://jackrabbit.apache.org/">Apache Jackrabbit</a></li>
<li><a href="http://www.midgard-project.org/midgard2/">Midgard2</a>: generic content repository for PHP, C, Python, C# and Objective-C based on <a href="http://www.gnome-db.org/">libgda</a></li>
</ul><p>
In addition to database abstraction repositories often provide other services like <a href="http://wiki.apache.org/jackrabbit/mix:versionable">versioning</a>, <a href="http://www.midgard-project.org/documentation/midgard-and-multilingual-content/">multilingual content</a> handling and <a href="http://teroheikkinen.iki.fi/blog/midgard_workshop_at_fscons/">signals between multiple applications</a> using the same repo.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/jcr" rel="tag">jcr</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/mysql" rel="tag">mysql</a></p>