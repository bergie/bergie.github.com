<?php
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
$view = $data['photo_view'];
?>
<div class="org_routamc_photostream_photo">
    <div class="photo-navigation">
<?php
if (   isset($data['previous_guid'])
    && !empty($data['previous_guid']))
{
?>
        <a class="previous" href="&(prefix);photo/&(data['previous_guid']);/&(data['suffix']);">&lt; <?php echo $data['l10n']->get('previous'); ?></a>
<?php
}

if (   isset($data['next_guid'])
    && !empty($data['next_guid']))
{
?>
        <a class="next" href="&(prefix);photo/&(data['next_guid']);/&(data['suffix']);"><?php echo $data['l10n']->get('next'); ?> &gt;</a>
<?php
}
?>
    </div>
    <h1><?php echo $view['title']; ?></h1>

    <div class="photo">
        &(view['photo']:h);
    </div>

    <div class="taken location">
        <?php
        $coordinates = null;
        if (   $GLOBALS['midcom_config']['positioning_enable']
            && class_exists('org_routamc_positioning_object')
            && $data['photo']->photographer)
        {
            $position_object = new org_routamc_positioning_object($data['photo']);
            $coordinates = $position_object->get_coordinates($data['photo']->photographer, $data['photo']->taken);
        }
        if (   $coordinates
            && $coordinates['latitude']
            && $coordinates['longitude'])
        {
            echo "<div style=\"float: left; margin-right: 10px;\">\n";
            $marker = array
            (
                'coordinates' => $coordinates,
                'title' => $data['photo']->title,
            );
            $map = new org_routamc_positioning_map('photo');
            $map->add_marker($marker);
            $map->show(150, 140);
            ?>
            <script type="text/javascript">
                mapstraction_photo.setZoom(10);
            </script>
            </div>
            <?php
            echo sprintf($data['l10n']->get('taken on %s in %s'), strftime('%x %X', $data['photo']->taken), org_routamc_positioning_utils::pretty_print_location($coordinates['latitude'], $coordinates['longitude']));
        }
        else
        {
            echo sprintf($data['l10n']->get('taken on %s'), strftime('%x %X', $data['photo']->taken));
        }
        ?>
    </div>
    <div class="taken photographer">
        <?php echo $data['l10n']->get('photographer'); ?>: <a href="&(prefix);list/&(data['user_url']);/"><?php echo $data['photographer']->name; ?></a>
    </div>

    <div class="description">
        &(view['description']:h);
    </div>

    <div class="rating">
        <?php
        echo $data['l10n']->get('rating') . ': ';
        echo "<a href=\"{$prefix}rated/{$data['user_url']}/{$data['photo']->rating}\">{$view['rating']}</a>\n";
        ?>
    </div>

    <?php
    // List tags used in this wiki page
    $tags_by_context = net_nemein_tag_handler::get_object_tags_by_contexts($data['photo']);
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
                if (!$data['config']->get('enable_tags'))
                {
                    echo "        <dd class=\"tag\"><a href=\"http://flickr.com/photos/bergie/tags/{$tag}/\">{$tag}</a></dd>\n";
                    continue;
                }

                echo "        <dd class=\"tag\"><a href=\"{$prefix}tag/{$data['user_url']}/{$tag}\">{$tag}</a></dd>\n";
            }
        }
        echo "</dl>\n";
    }
    ?>
</div>