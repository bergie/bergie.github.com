---
  title: "Midgard supports OpenID"
  categories: 
    - "midgard"
    - "oscom"
  layout: "post"

---
<img src="/files/OpenID.jpg" height="60" width="160" border="0" align="right" hspace="8" vspace="4" alt="OpenID" title="OpenID" style="float: right;" />
Inspired by <a href="http://froscon.phpugdo.de/">a talk in FrOSCon</a> on Sunday, I went and implemented <a href="http://en.wikipedia.org/wiki/OpenID">OpenID</a> support into <a href="http://www.midgard-project.org/">Midgard</a> on the flight back. OpenID is a quite cool system for cross-site single sign-on and auto-registration. With OpenID your user identity is tied to a web address you control, for example  <a href="http://bergie.iki.fi/">http://bergie.iki.fi/</a>. Every time I want to log in to an OpenID-enabled website, that site will ask my authentication status from my site and let me in. The way this works is the following:

I go to a page that requires authentication, or <a href="http://www.midgard-project.org/documentation/logging-into-midcom/">to MidCOM's login URL</a> and I get a login form allowing me to either input a local username/password combination or my OpenID:
<p style="text-align:center;"><img src="/files/midgard-openid-login-initial-1.jpg" height="193" width="300" border="1" hspace="4" vspace="4" alt="Midgard-Openid-Login-Initial-1" /></p><p style="text-align:center;">(yes, I know this screen still needs some CSS love)</p>If this is the first time I'm using OpenID for this particular site, or I haven't yet logged in to <a href="http://signup.mylid.net/signup/">my OpenID provider</a>, it will next ask me for confirmation:
<p style="text-align:center;"><img src="/files/mylid-login.jpg" height="142" width="397" border="1" hspace="4" vspace="4" alt="Mylid-Login" /></p><p style="text-align:center;">(this step is skipped if I already have authorized login for the site and am logged in)</p>After this a MidCOM login session is generated for the OpenID identity and I'm logged in to the Midgard site. I even get a nice notice about this:
<p style="text-align:center;"><img src="/files/midgard-openid-success-1.jpg" height="110" width="298" border="1" hspace="4" vspace="4" alt="Midgard-Openid-Success-1" /></p>The OpenID implementation is <a href="http://trac.midgard-project.org/browser/trunk/midcom/net.nemein.openid">now available in MidCOM SVN</a>. It should be reasonably useful already now, but I will still make some improvements to it, including:

<ul><li>Adding the OpenID user to a group specified in component configuration</li><li>Using <a href="http://openid.net/specs/openid-simple-registration-extension-1_1-01.html">Simple Registration Extension</a> together with Midgard's account registration schema to pull in more information about the OpenID user if available</li></ul>It would also be nice to enable using Midgard as an <a href="http://openid.net/wiki/index.php/Run_your_own_identity_server">OpenID provider</a>, but for now <a href="http://www.openidenabled.com/openid/use-your-own-url-as-an-openid">URL delegation</a> is needed.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/authentication" rel="tag">authentication</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/openid" rel="tag">openid</a>, <a href="http://www.technorati.com/tag/sso" rel="tag">sso</a></p>