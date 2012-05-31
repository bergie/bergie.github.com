---
  title: "Is your Time Machine wireless?"
  categories: 
    - "desktop"
    - ""
  layout: "post"

---
<img src="/files/time-machine.jpg" height="190" width="200" border="1" align="right" hspace="10" vspace="4" alt="Time-Machine" />
Like probably everybody else, I've been quite lazy taking backups. Through the <a href="http://www.ajatus.info/documentation/ajatus_manifesto/#632d8b863e781e93a8430a09f779985e">Linus backup philosophy</a> this hasn't been so bad: my code is in various repositories and my photos are <a href="http://www.flickr.com/photos/bergie/">on Flickr</a>. But when <a href="http://bergie.iki.fi/blog/slight-pause-in-development.html">a hard drive died on me</a> last year, a bunch of small things were still lost.

Because of this I thought the <a href="http://www.apple.com/macosx/features/timemachine.html">Time Machine</a> feature of <a href="http://www.apple.com/macosx/">OS X Leopard</a> was <a href="http://lifehacker.com/software/mac-os-x-leopard/the-simplicity-of-time-machine-compels-you-315924.php">quite cool</a>. Until I found out that it would work only with external USB or FireWire disks, that is. I know that if I need to plug something in, I wouldn't do it.

So, my home <a href="http://www.nas-central.org/index.php?title=Projects/OpenLink" title="Projects/OpenLink">OpenLink-powered</a> NAS box to rescue! Making Time Machine talk to it required some tweaks, including <a href="http://www.engadget.com/2007/11/10/how-to-enable-time-machine-on-unsupported-volumes/">enabling "unsupported volumes" in TIme Machine</a> and <a href="http://mcdevzone.com/2006/03/04/say-bonjour-to-the-linkstation">installing Howl on the LinkStation</a>.

The result is quite cool: while backups take a long time to make, they start automatically when I open the laptop at home. And the <a href="http://en.wikipedia.org/wiki/Zeroconf">Howl setup</a> also makes my <a href="http://en.wikipedia.org/wiki/Nokia_N800">N800 Media Player</a> automatically find music from the LinkStation.

<!-- technorati tags start --><p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/backup" rel="tag">backup</a>, <a href="http://www.technorati.com/tag/osx" rel="tag">osx</a>, <a href="http://www.technorati.com/tag/openlink" rel="tag">openlink</a></p><!-- technorati tags end -->