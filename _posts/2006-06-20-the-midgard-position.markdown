---
  title: "The Midgard Position"
  categories: 
    - "geo"
    - "midgard"
  layout: "post"

---
I've committed the first working version of [Midgard's geopositioning system][1] into CVS today. The library makes it really easy to add location information to users and objects, and to find things that are close to each other.

Some things I find useful:

* Objects are positioned based on the location of the user who created them (the person who took a photo, for example)
* User's position information is aggregated from multiple sources: manually entered data, [Plazes][2], and eventually GPS track logs
* Any [Midgard Object][3] can be located and queried using the positioning library

The library is relatively easy to use. For example, to get and display coordinates for an article, just run the following:

     $object_position = new org_routamc_positioning_object($article);
     $coordinates = $object_position->get_coordinates();
     if (!is_null($coordinates))
     {
         echo "<meta name=\"icbm\" value=\"{$coordinates['latitude']},{$coordinates['longitude']}\" />\n";
     }

And to find 3 closest articles to this one, run:

    $closest = org_routamc_positioning_utils::get_closest('midcom_db_article', $coordinates, 3);

    echo "<p>Closest articles to this article are:<br />";
    echo "<ol>\n";
    foreach ($closest as $article)
    {
        $article_coordinates = Array(
            'latitude'  => $article->latitude,
            'longitude' => $article->longitude,
        );
        echo "<li>{$article->title} is " . round(org_routamc_positioning_utils::get_distance($coordinates, $article_coordinates)) . " kilometers " . org_routamc_positioning_utils::get_bearing($coordinates, $article_coordinates) . " from you</li>";
    }
    echo "</ol>\n";

The positioning library isn't yet hooked into any of [the components][4] yet, but I will do this soon, starting from the blog component. However, the library can already be experimented with using the test tools it contains. For example, I can see the following information based on my Plazes position:

![Map spots closest to my home](http://bergie.iki.fi/midcom-serveattachmentguid-d34aceb58f133a9e4a2521989296199e/midgard-positioning-distances-test.jpg)

The city database used for the example above is MaxMind's Open Sourced [World Cities Database][5] that the positioning library is able to import. Next I will start playing with the [Geo-Names Data][6].

As soon as the library is hooked to the blog component it will replace the [old location system][7] I've been using on my site, and will start populating the [Death Monkey 2006 route map][8] with real-time data from that trip.

[1]: http://midcom.tigris.org/source/browse/midcom/fs-midcom/lib/org/routamc/positioning/
[2]: http://beta.plazes.com/home/
[3]: http://www.midgard-project.org/documentation/mgdschema/
[4]: http://pear.midcom-project.org/index.php?category=1&page=1
[5]: http://pear.midcom-project.org/index.php?category=1&page=1
[6]: http://www.geonames.org/export/
[7]: http://bergie.iki.fi/blog/adding_location_awareness_to_blogs.html
[8]: http://www.deathmonkey.org/route/