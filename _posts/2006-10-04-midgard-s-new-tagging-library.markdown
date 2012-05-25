---
  title: "Midgard's new tagging library"
  categories: 
    - "midgard"
  layout: "post"

---
I'm spending some time this week on a specification workshop [in the countryside][1]. Mostly we're looking at integration points between [Midgard][2], [Gforge][3] and [Doxygen][4] to provide a complete open source project collaboration environment.

However, as a side result Midgard also has now a new [tagging][5] library: __[net.nemein.tag][10]__. This library is aimed at centralizing how tags are handled in various [MidCOM components][6].

Adding tagging interface is as simple as including the following into a [Datamanager 2 schema][7]:

    'tags' => Array
    (
        'title' => 'tags',
        'type' => 'tags',
        'widget' => 'text',
    ),

Tags may be entered into this field, separated by spaces. In addition to regular simple tags, like `midgard`, the tagging library also supports multi-word tags surrounded by quotes, like `"This is a long tag"`.

Another feature with tags in the concept of __contexts__. Context is something that describes the tag you apply. For example, if you are tagging a wiki page that describes a new feature in [Midgard 1.8][8], you might tag it as `"new-feature:Midgard 1.8"`. This way the site builder knows more about the relation and can display it differently.

Displaying tags is reasonably easy. For example, [Midgard Wiki][9] displays tags on a page in the following way:

    // List tags used in this wiki page    
    $tags_by_context = net_nemein_tag_handler::get_object_tags_by_contexts($request_data['wikipage']);
    if (count($tags_by_context) > 0)
    {
        echo "<dl class=\"tags\">\n";
        foreach ($tags_by_context as $context => $tags)
        {
            if (!$context)
            {
                $context = $_MIDCOM->i18n->get_string('tagged', 'net.nemein.tag');
            }
            echo "    <dt>{$context}</dt>\n";
            foreach ($tags as $tag => $url)
            {
                echo "        <dd class=\"tag\">{$tag}</dd>\n";
            }
        }
        echo "</dl>\n";
    }

[1]: http://bergie.iki.fi/moblog/2006-10-04-1159957507
[2]: http://www.midgard-project.org/
[3]: http://gforge.org/
[4]: http://en.wikipedia.org/wiki/Doxygen
[5]: http://en.wikipedia.org/wiki/Tag_%28metadata%29
[6]: http://www.midgard-project.org/documentation/midcom-components/
[7]: http://www.midgard-project.org/documentation/midcom-2-5-datamanager-rewrite-schema-definition/
[8]: http://www.midgard-project.org/midgard/1.8/
[9]: http://www.midgard-project.org/documentation/net-nemein-wiki/
[10]: http://pear.midcom-project.org/index.php?package=net_nemein_tag&downloads