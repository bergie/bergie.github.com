---
  title: "Top ten Unix shell commands"
  categories: 
    - "desktop"
  layout: "post"

---
Continuing with [another blog meme][1], here is the list of top ten Unix shell commands from my [MacBook development box][2]

    Octant:~ bergie$ history|awk '{print $2}'|awk 'BEGIN {FS="|"} {print $1}'|sort|uniq -c | sort -nr |head -n 10
     138 svn
      98 cd
      37 sudo
      35 phing
      34 ls
      20 rm
      19 chmod
      18 vi
      11 php
       8 mv

[Midgard][3] development ranks quite high on the list, especially usage of the [MidCOM SVN repository][4], and the [Phing build system][5], used for [packaging components][6]. 

No idea why the history lists so few runs of them, though. Maybe OS X clears bash history on reboot?

[1]: http://err.no/personal/blog/tech/memes/2006-09-23-08-53_top_ten_unix_commands.html
[2]: http://bergie.iki.fi/blog/switching-to-intel-macbook/
[3]: http://www.midgard-project.org/
[4]: http://gforge.nehmer.net/plugins/scmsvn/viewcvs.php/?root=midcom
[5]: http://phing.info/trac/
[6]: http://www.midgard-project.org/midcom-permalink-a4b3216574013c27a6be0a20a82f68d8
