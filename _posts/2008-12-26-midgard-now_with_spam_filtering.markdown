---
  title: "Midgard: now with spam filtering"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
Frustrated with how some <a href="http://www.midgard-project.org/">Midgard</a>-powered community sites were being <a href="http://en.wikipedia.org/wiki/Spam_(electronic)">spammed</a> (their fault, not using CAPTCHA or registrations, I know), I decided to add <a href="http://trac.midgard-project.org/ticket/684">a little feature</a> to MidCOM's forum and page commenting tools: automated spam filtering.
</p><p>
<a href="/files/midgard-spam-mollom-moderated.png"><img src="/files/midgard-spam-mollom-moderated-tm.jpg" height="61" width="396" border="1" hspace="4" vspace="4" alt="Mollom-moderated spam comment" title="Mollom-moderated spam comment" /></a>
</p><p>
To make this happen, I <a href="http://mollom.com/api">hooked</a> Midgard with the <a href="http://mollom.com/">Mollom</a> anti-spam service. When enabled, all posts sent to Midgard either on-site or using the <a href="http://www.midgard-project.org/discussion/developer-forum/forum-to-mailing_list_integration/">email import tools</a> will be passed to Mollom for assessment. If Mollom finds them spam or ham, they will be moderated accordingly. This should save a lot of time policing the site.
</p><p>
Expect the feature to be available for all Midgard installs in the soon-to-be-released <a href="http://www.midgard-project.org/updates/midgard_8-09-3rc2_released/">Midgard 8.09.3</a>.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/forum" rel="tag">forum</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/moderation" rel="tag">moderation</a>, <a href="http://www.technorati.com/tag/mollom" rel="tag">mollom</a>, <a href="http://www.technorati.com/tag/spam" rel="tag">spam</a></p>