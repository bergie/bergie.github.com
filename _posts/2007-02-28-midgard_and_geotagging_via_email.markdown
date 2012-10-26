---
  title: "Midgard and geotagging via email"
  categories: 
    - "geo"
    - "midgard"
  layout: "post"

---
[Midgard][1] is becoming smarter about [tags][10]. Now it not only supports tagging any objects and [making tags contextual][6], but also [machine tags][7]:

> You know those funky tags like `cell:cellid=197216005`, `geo:tool=GMiF` and even `camel:size=medium` you see around the place? Well yeah, we've been watching them very closely too, and by "we've" I mean a few of us here in the office that care very much about these things, Aaron probably more than most of us.

The first application for machine tags is geotagging. We were discussing the problem of geotagging entries by email with [Andrew Turner][2] and trying to come up with a solution that would work in both Midgard and [GeoPress][3]. The decision was to support the [Flickr email-based tagging format][4]. 

This means that to geotag a blog entry, just include the following to the end of email body:

    tags: geo:long=24.9419260025024 geo:lat=60.1587851399795

Tools like Flickr email import, Geopress and Midgard will be able to parse this information and [position your blog entry][11] accordingly, on both [site][12] and [GeoRSS feeds][8].

Of course, the same format can be used for regular tagging:

    tags: waterpipe n800 canola sabrage

## Machine tags as a record extension

Now that machine tags are in, pulling information from them is quite easy. Here's an example using the `camel:size=medium` tag from [Dan Catt's post][7]:

    <?php
    // Load a camel photo
    $photo = new org_routamc_photostream_photo_dba('GUID');
    
    // Load camel-related data from the tags
    $data = net_nemein_tag_handler::get_object_machine_tags_in_context($photo, 'camel');

    // Show the data
    echo "{$photo->title} is a {$data['size']} sized camel.";
    ?>

As is visible from this example, machine tags can be used in a bit similar way as [parameters][9] are used in the Midgard world. The advantage machine tags have however is that they are compatible with any system that supports tagging.

__Updated:__ There is [even a wiki][13] for formalizing [machine tagging conventions][14].

[1]: http://www.midgard-project.org/
[2]: http://highearthorbit.com/
[3]: http://www.georss.org/geopress/
[4]: http://www.flickr.com/help/photos/#140
[5]: http://www.flickr.com/groups/api/discuss/72157594497877875/
[6]: http://www.midgard-project.org/documentation/tagging-in-midgard-wiki/#7a9c1a8a41e1e1b8ede0e9fe53c53ea1
[7]: http://geobloggers.com/archives/2007/01/24/offtopic-ish-flickr-ramps-up-triple-tag-support/
[8]: http://georss.org/
[9]: http://www.midgard-project.org/documentation/reference-parameter/
[10]: http://en.wikipedia.org/wiki/Tag_%28metadata%29
[11]: http://bergie.iki.fi/blog/the-midgard-position/
[12]: http://microformats.org/wiki/geo
[13]: http://www.machinetags.org/wiki/Main_Page
[14]: http://ebiquity.umbc.edu/blogger/2007/01/28/rise-of-the-machine-tags/