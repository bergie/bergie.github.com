---
  title: "SQL-level debugging with Midgard"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
We're currently in the stage where <a href="http://bergie.iki.fi/blog/some_midgard_roadmapping/">two branches</a> of <a href="http://www.midgard-project.org/">Midgard</a>: <a href="http://trac.midgard-project.org/milestone/Midgard%201.9">1.9</a> and <a href="http://trac.midgard-project.org/milestone/Midgard%202.0">2.0</a> are both in active development. Midgard 2 is the fully <a href="http://bergie.iki.fi/blog/midgard_2-finally_legacy-free/">legacy-free next generation of Midgard</a>, and 1.9 is a transitional release that provides both Midgard 2 and Midgard 1 APIs to ease migration.
</p><p>
The active development status means that bugs are bound to be found in them. For people living on the <a href="http://www.midgard-project.org/nightly/">bleeding edge</a>, it is good to know how to enable SQL-level debugging in case of issues.
<br /><span style="font-size:14pt;"><strong>
<br />Debugging with Midgard 1.x
<br /></strong></span>
</p><p>
To start debugging call the following before the troublesome API calls in your code:
</p><pre>
mgd_debug_start();
</pre><p>
And to end debugging after those API calls:
</p><pre>
mgd_debug_stop();
</pre><p>
The SQL logs will end up in the <a href="http://www.serverwatch.com/tutorials/article.php/1128101">Apache error log</a> file.
<br /><span style="font-size:14pt;"><strong>
<br />Debugging with Midgard 2
<br /></strong></span>
</p><p>
To start debugging call the following before the troublesome API calls in your code:
</p><pre>
midgard_connection::set_debuglevel('debug');
</pre><p>
And to end debugging after those API calls:
</p><pre>
midgard_connection::set_debuglevel('warn');
</pre><p>
The SQL logs will end up in the Midgard log file (as specified in <a href="http://www.midgard-project.org/documentation/unified-configuration/#215273711f61a39ff8c0044e63ce489d">Logfile directive</a> of the <a href="http://www.midgard-project.org/documentation/unified-configuration/">unified configuration</a> file).
</p><p>
The SQL logs look something like the following:
</p><pre>
midgard-core (pid:8634):(debug):query = SELECT page.id AS midgard_collector_key FROM page, page_i WHERE page.up = 104 AND page.id=page_i.sid AND page_i.lang IN (0, 0) AND page.sitegroup IN (0, 1) AND page.metadata_deleted = 0 
</pre>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/sql">sql</a></p>