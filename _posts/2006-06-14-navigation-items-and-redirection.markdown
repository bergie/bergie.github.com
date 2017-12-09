---
  title: "Navigation items and redirection"
  categories: 
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/redirector-config.jpg'

---
[MidCOM][1] has a centralized system for serving navigation information called [Navigation Access Point][2]. Typically the navigation UIs on Midgard-powered sites are [dynamically constructed][3] using this information.

However, sometimes webmasters want to have items in their navigation that actually direct the user somewhere else (and external URL, or just another folder on the site). 

Now there is a solution to make these redirection folders easier, [net.nemein.redirector][4]. Just create a new folder handled by this component and set the configuration:

![Redirection configuration](https://d2vqpl3tx84ay5.cloudfront.net/redirector-config.jpg)

__Speaking of redirections__, we're leaving tomorrow morning to Poland for the [Midgard Developer Meeting][5]. Looking forward to seeing as many of you as possible there!

__Updated 2006-07-21:__ [Henri Kaukola][6] from [Vaisala][7] pointed out that it would be useful to support different [HTTP redirection status codes][8] in the redirector. This is now done:

![Choosing HTTP status code for the redirect](https://d2vqpl3tx84ay5.cloudfront.net/redirector-http-status-codes.jpg)

[1]: http://www.midgard-project.org/documentation/midcom/
[2]: http://www.midgard-project.org/midcom-permalink-605136b3ee7596f0b53838dce41b6f5c
[3]: http://bergie.iki.fi/midcom-permalink-ee2a9adc38ab89dba7c45d4ad5a60de4
[4]: http://pear.midcom-project.org/index.php?package=net_nemein_redirector&release=1.0.0&downloads
[5]: http://www.midgard-project.org/community/events/e4f69dcc5fa78db88a9396a8f300dbad.html
[6]: http://www.kaukolaweb.com/
[7]: http://www.vaisala.com/
[8]: http://www.mattcutts.com/blog/seo-advice-discussing-302-redirects/
