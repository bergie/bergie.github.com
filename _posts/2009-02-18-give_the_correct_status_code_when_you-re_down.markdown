---
  title: "Give the correct status code when you're down"
  categories: 
    - "oscom"
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/jaiku-down-error-200-tm.jpg'

---
<p>
<a href="http://jaiku.com/">Jaiku</a>, the <a href="http://bergie.iki.fi/blog/jaiku-personal_presence_aggregator/">microblogging service I use</a>, has been frustratingly often down in the last couple of days, apparently kicking off another <a href="http://www.arcticstartup.com/2008/12/15/finland-finally-moving-to-twitter/">mass migration</a> towards <a href="http://twitter.com/">Twitter</a> and <a href="http://brightkite.com/">Brightkite</a>.
</p><p>
And they report it only in human-readable way, not in fashion a browser, a proxy or a search engine would understand it. While being down, Jaiku still responds with <a href="http://en.wikipedia.org/wiki/HTTP_200">HTTP 200 OK</a>:
</p><p>
<a href="https://d2vqpl3tx84ay5.cloudfront.net/jaiku-down-error-200.png"><img src="https://d2vqpl3tx84ay5.cloudfront.net/jaiku-down-error-200-tm.jpg" height="210" width="398" border="1" hspace="4" vspace="4" alt="Jaiku down: Error 200 OK" title="Jaiku down: Error 200 OK" /></a>
</p><p>
<a href="http://www.checkupdown.com/status/E503.html">HTTP 503 Service unavailable</a> would be much nicer. For instance, that is what <a href="http://www.midgard-project.org/">Midgard</a> produces if the database goes down.
</p>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/brightkite" rel="tag">brightkite</a>, <a href="http://www.technorati.com/tag/jaiku" rel="tag">jaiku</a>, <a href="http://www.technorati.com/tag/http" rel="tag">http</a>, <a href="http://www.technorati.com/tag/twitter" rel="tag">twitter</a></p>
