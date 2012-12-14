---
  title: "Maps in Midgard, abstracted"
  categories: 
    - "geo"
    - "midgard"
  layout: "post"

---
We had some discussion about what features make CMS a [GeoCMS][1] with [GeoPress][3] and [Drupal geo][2] developers in [State of the Map][5], and a list should be published soon. Based on our discussions I decided that [Midgard][4] should also make it easy to actually display positioned data on maps.

To make this happen, the [Mapstraction][6] javascript library was chosen. Mapstraction is nice in that with it site builders can use same API to display maps from OpenStreetMaps, Google Maps, Microsoft Virtual Earth or other providers.

During train ride from Manchester to Birmingham I made a quick PHP wrapper to make map display even easier.

Now to display an object on a map site builder only needs to do:

    <?php
    $map = new org_routamc_positioning_map('my_example_map');
    $map->add_object($article);
    $map->show();
    ?>

Multiple objects and arbitrary map points can also be shown:

    // Add some positioned objects
    $map->add_object($article);
    $map->add_object($another_article);

    // Add arbitrary marker
    $marker = array
    (
        'coordinates' => array
        (
            'latitude' => 52.4827,
            'longitude' => -1.89739,
        ),
        'title' => 'Bergie',
    );
    $map->add_marker($marker);

Grab it [from SVN][7] while it is hot!

[1]: http://en.wikipedia.org/wiki/Geospatial_Content_Management_System
[2]: http://drupal.org/project/Modules/category/65
[3]: http://georss.org/geopress
[4]: http://www.midgard-project.org/
[5]: http://www.stateofthemap.org/
[6]: http://www.mapstraction.com/
[7]: http://trac.midgard-project.org/browser