---
  title: "Calculating news item relevance"
  categories: 
    - "oscom"
    - "midgard"
    - "mobility"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/aiderss-ranking-planetmaemo.jpg'

---
I've started working on a new <a href="https://garage.maemo.org/tracker/?func=detail&amp;aid=885&amp;group_id=106&amp;atid=940">Social News section</a> for maemo.org. The idea of this area is to provide a centralized view on what is happening at the moment in the <a href="http://maemo.org/">maemo community</a>. 

Every day brings dozens of maemo-related posts via various channels, and keeping up-to-date with them requires a lot of time. The new social news section aims to fix this by providing a somewhat <a href="http://digg.com/">Digg</a>-like news aggregator that will bring only the most interesting items to the top.

Interestingly, a new service called <a href="http://www.aiderss.com/">AideRSS </a>went live today with <a href="http://slashdot.org/article.pl?sid=07/07/24/2241222">quite much publicity</a>. AideRSS is a new breed of RSS aggregator that uses <a href="http://www.aiderss.com/blog/faq#postrank">various metrics</a> to determine the relevancy of new items. This is what AideRSS says about most interesting stuff now on <a href="http://planet.maemo.org/">Planet Maemo</a>:

<img src="https://d2vqpl3tx84ay5.cloudfront.net/aiderss-ranking-planetmaemo.jpg" height="257" width="398" border="1" hspace="4" vspace="4" alt="Aiderss-Ranking-Planetmaemo" />

While I don't have access to their secret sauce, using a bit similar metrics I get quite similar results as well:

<img src="https://d2vqpl3tx84ay5.cloudfront.net/org-maemo-socialnews-ranking-planetmaemo.jpg" height="85" width="400" border="1" hspace="4" vspace="4" alt="Org-Maemo-Socialnews-Ranking-Planetmaemo" />

The way the new <a href="http://trac.midgard-project.org/browser/trunk/midcom/org.maemo.socialnews/calculator.php?rev=11348">org.maemo.socialnews score calculator</a> works is that it looks for number of votes or links from various sources, gives them <a href="http://trac.midgard-project.org/browser/trunk/midcom/org.maemo.socialnews/config/config.inc?rev=11348">configurable weight</a>, and then builds a relevancy value out of that. This seems to work quite well, although I guess I will end up tuning it quite a bit when we start syndicating larger amounts of data.

In any case, the next challenge is to combine the relevancy data of items and their tagging/categorization to build <a href="http://www.iht.com/">a newspaper-like page</a>. Actually, feeding this data to a <a href="http://www.feedjournal.com/">proper newspaper generator</a> could make <a href="http://www.oinc.net/B5/Enc/display.php?ut">interesting results</a> as well.
