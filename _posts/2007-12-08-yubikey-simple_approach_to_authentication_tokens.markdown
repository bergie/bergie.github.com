---
  title: "Yubikey - simple approach to authentication tokens"
  categories: 
    - "desktop"
    - "midgard"
  layout: "post"

---
<img src="https://d2vqpl3tx84ay5.cloudfront.net/_press_yubikeys_creditcard.jpg" height="210" width="240" border="0" align="right" hspace="6" vspace="4" alt="Yubikey and a credit card" title="Yubikey and a credit card" />
<a href="http://josefsson.org/">Simon Josefsson</a> was giving a talk on <a href="http://openid.net/">OpenID</a> in the <a href="http://www.fscons.org/">Scandinavian Free Software Conference</a>. OpenID is a lightweight single sign-on and auto-registration system for web applications. In concept it is quite similar to <a href="http://en.wikipedia.org/wiki/Shibboleth_(Internet2)">Shibboleth</a> but easier to deploy.

Since <a href="http://openid.net/what/">OpenID can solve a lot of issues</a> with registration to social web services, <a href="http://www.midgard-project.org/">Midgard</a> has been <a href="http://bergie.iki.fi/blog/midgard_supports_openid/">supporting it since last August</a>. However, OpenID has one major security problem: as the cross-site redirections are controlled by the site user is visiting, OpenID has quite a <a href="http://simonwillison.net/2007/Jan/19/phishing/">high potential for phishing attacks</a>. One way to reduce that risk is to use <a href="http://en.wikipedia.org/wiki/One-time_password">one-time password</a>s with OpenID instead of the usual username/passphrase combination.

<span style="font-size:14pt;"><strong>Enter Yubikey</strong></span>

The problem with OTP is that disposable password lists are a lot of hassle. <a href="http://en.wikipedia.org/wiki/SecurID">RSA's SecurID</a> device has been one approach to solve that by having a simple device to generate the one-time passwords that user can then enter on their computer. But SecurIDs are expensive and manually typing the number sets is tedious.

Simon's company <a href="http://yubico.com/">Yubico</a> has approached the problem from a bit different direction: their <a href="http://www.yubico.com/products/index">Yubikey</a> is a small, <a href="http://www.yubico.com/products/order">cheap</a> USB dongle that the computer sees as a "keyboard". Insert the key, press the button, and the one-time password will be entered.

I was given a key and have been <a href="http://dev.yubico.com/start-here">testing it a bit</a> today to authenticate via <a href="http://bergie.iki.fi/">my OpenID identity</a> to various websites, and it really was <a href="http://dev.yubico.com/start/openid">as easy as advertised</a>. Now my OpenID <a href="http://dev.yubico.com/technology/review">is secure</a>.

<img src="https://d2vqpl3tx84ay5.cloudfront.net/_press_yubikey_hand_comp.jpg" height="174" width="240" border="0" align="left" hspace="6" vspace="4" alt="Yubikey usage" title="Yubikey usage" />
In addition to OpenID, Yubikey authentication is supported via RADIUS and PAM, and <a href="http://dev.yubico.com/apis/start">libraries are available</a> for integrating it with other authentication systems.

<strong>Yubikey is not without problems</strong>, unfortunately. While authentication client libraries are open source, the actual authentication server is proprietary and operated by Yubico, <a href="http://www.yubico.com/about/people">a small start-up</a>. If Yubico's network goes down, the whole authentication system becomes unusable.

I'd love to use Yubikeys for <a href="http://www.nemein.com/en/">my company</a> and several of my customers. Therefore, I really hope Yubico will be able to either release the server sources directly, or at least make a pledge to release them in case of going out of business. Only these options would make Yubikey a really viable secure authentication option.

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/authentication" rel="tag">authentication</a>, <a href="http://www.technorati.com/tag/openid" rel="tag">openid</a>, <a href="http://www.technorati.com/tag/securid" rel="tag">securid</a>, <a href="http://www.technorati.com/tag/yubikey" rel="tag">yubikey</a></p>
