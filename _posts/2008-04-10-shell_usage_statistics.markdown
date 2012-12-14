---
  title: "Shell usage statistics"
  categories: 
    - "desktop"
  layout: "post"

---
<p>
This meme seems to be <a href="http://jimmac.musichall.cz/log/?p=427">running</a> <a href="http://bethesignal.org/blog/2008/04/10/shell-history-stats/">again</a>:
</p><pre>
Compass:~ bergie$ 
history|awk '{print $2}'|awk 'BEGIN {FS=&quot;|&quot;} {print $1}'|sort|uniq -c | sort -nr |head -n 10
 209 git
  47 svn
  30 cd
  24 sudo
  24 phing
  18 ssh
  16 ls
  13 vi
  12 ~/ajatus_ssh_replicate
  12 scp
</pre><p>
Interesting to see how the <a href="http://bergie.iki.fi/blog/top-ten-unix-shell-commands/">stats have changed in one and half years</a>. Main changes are due to <a href="http://www.ajatus.info/">Ajatus</a> <a href="http://bergie.iki.fi/blog/replicating_ajatus_with_your_colleagues/">replication</a>, and <a href="http://repo.or.cz/w/midcom.git">git</a> being used for <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">MidCOM 3 development</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/history">history</a>, <a href="http://www.technorati.com/tag/shell">shell</a>, <a href="http://www.technorati.com/tag/unix">unix</a></p>