---
  title: "Acting on HTTP errors"
  categories: 
    - "midgard"
  layout: "post"

---
<p>
<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/midcom-error-vali.png" height="223" width="245" border="0" align="right" hspace="4" vspace="4" alt="How not to handle Midgard errors" title="How not to handle Midgard errors" /><br />Since <a href="http://www.midgard-project.org/documentation/python_midgard/">Midgard does now Python</a> nicely alongside <a href="http://www.midgard-project.org/documentation/mgdschema-in-php/">PHP</a>, some Midgardians have recently been looking at <a href="http://www.djangoproject.com/">Django</a> as an optional web framework to use with <a href="http://bergie.iki.fi/blog/midgard2_at_fscons-your_data-everywhere/">Midgard's replicated storage system</a>.
</p><p>
Looking at other systems than yours every now and then is great, as you can get some ideas. First such idea to come to Midgard <a href="http://docs.djangoproject.com/en/dev/topics/http/middleware/#exception-middleware">from the Django world</a> is <a href="http://trac.midgard-project.org/ticket/305">error interceptors</a>, a set of configurable actions to perform on given types of errors. For a long time, Midgard has been mapping various types of system errors (and in <a href="http://bergie.iki.fi/blog/midcom_3_at_a_glance/">MidCOM3</a>, Exceptions) to various <a href="http://en.wikipedia.org/wiki/List_of_HTTP_status_codes">HTTP status codes</a>, and has made it possible to <a href="http://www.midgard-project.org/documentation/styling-midcom-error-pages/">create customized templates for displaying them</a>.
</p><p>
Error interceptors, on the other hand, allow other actions to take place. Some examples:
</p><ul><li>Log all 404 Not Found page URLs into a special log file alongside their referrers</li>
<li>Send all 500 Internal Errors with debug stacktrace to the site developer</li>
</ul><p>
This feature just landed <a href="http://trac.midgard-project.org/changeset/19610">into Midgard SVN</a> and will be available in the <a href="http://trac.midgard-project.org/milestone/8.09.3%20Ragnaroek">8.09.3 release</a> due out next week. To enable those mentioned features, tweak your <a href="http://www.nathan-syntronics.de/midgard/midcom/midcom-2_4/reworked-configuration-management.html">MidCOM config</a> in the following way:
</p><pre>$GLOBALS['midcom_config_local']['error_actions'] = array
(
    500 =&gt; array
    (
        'action' =&gt; 'email',
        'email' =&gt; 'webmaster@example.net',
    ),
    404 =&gt; array
    (
        'action' =&gt; 'log',
        'filename' =&gt; '/var/log/broken_links.log',
    ),
);</pre>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/django" rel="tag">django</a>, <a href="http://www.technorati.com/tag/midcom" rel="tag">midcom</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a></p>
