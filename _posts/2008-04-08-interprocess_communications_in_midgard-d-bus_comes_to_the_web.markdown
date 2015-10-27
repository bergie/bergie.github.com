---
  title: "Interprocess communications in Midgard: D-Bus comes to the web"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
In his recent blog post, <a href="http://nemein.com/en/people/piotras/">Piotr Pokora</a> showed <a href="http://blogs.nemein.com/people/piotras/view/1207652141.html">how the the D-Bus API will work</a> in <a href="http://trac.midgard-project.org/milestone/Midgard%202.0">Midgard 2</a>. <a href="http://en.wikipedia.org/wiki/D-Bus">D-Bus</a> is an interprocess communications system that is used heavily in modern Linux desktops like <a href="http://en.wikipedia.org/wiki/GNOME">GNOME</a> and <a href="http://en.wikipedia.org/wiki/KDE_4">KDE</a>. With <a href="http://www.midgard-project.org/">Midgard</a>, the same system now becomes available for PHP and web applications:
</p><blockquote>
<strong>midgard_python</strong> &quot;service&quot;:
</blockquote><blockquote><pre>
import dbus.mainloop.glib
import _midgard as midgard

def mbus_callback(object, arg):
        print &quot;Hi! I am midgard_dbus from midgard-python. I got message:&quot;
        print object.get_message()

mbus = midgard.dbus(&quot;/midgard_article&quot;)
mbus.connect(&quot;notified&quot;, mbus_callback, &quot;foo&quot;)

mainloop = gobject.MainLoop()
mainloop.run()
</pre>
</blockquote><blockquote>
<strong>midgard-php</strong> &quot;client&quot;:
</blockquote><blockquote><pre>
$message = &quot;Greetings from midgard-php!(&quot; . mgd_version() . &quot;) PHP ver.&quot; . phpversion();
midgard_dbus::send(&quot;/midgard_article&quot;, $message);
</pre>
</blockquote><blockquote>
I started php script which immidietialy[sic] ended, and on midgard-python service's terminal I got this message:
</blockquote><blockquote><pre>
Hi! I am midgard_dbus from midgard-python. I got message:
Greetings from midgard-php! (2.0alpha0) PHP ver.5.2.5-3
</pre>
</blockquote><p>
This is a major milestone in our greater plan for the future of Midgard, and should be interesting to also other PHP and web application developers.
</p><p>
Good work, Piotras!
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/dbus">dbus</a>, <a href="http://www.technorati.com/tag/midgard">midgard</a>, <a href="http://www.technorati.com/tag/php">php</a>, <a href="http://www.technorati.com/tag/python">python</a></p>
