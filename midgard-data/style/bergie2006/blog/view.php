<?php
// Available request keys: article, datamanager, edit_url, delete_url, create_urls

$data =& $_MIDCOM->get_custom_context_data('request_data');
$view = $data['view_article'];
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
$publish_time = $data['article']->metadata->published;

$published = "This entry was posted on <abbr class=\"published\">" . strftime('%Y-%m-%d %T %Z', $publish_time) . "</abbr>";

$position = new org_routamc_positioning_object($data['article']);
$article_coordinates = $position->get_coordinates();
if (   !is_null($article_coordinates)
    && $article_coordinates['latitude']
    && $article_coordinates['longitude'])
{
     $published .= " in ". org_routamc_positioning_utils::microformat_location($article_coordinates['latitude'], $article_coordinates['longitude']) . " ";
}

$published .= " to";
foreach ($data['datamanager']->types['categories']->selection as $category)
{
    $label = ucfirst($category);
    $published .= " <a href=\"{$prefix}category/{$category}/\" rel=\"tag\">{$label}</a>";
}

$permalink = $_MIDCOM->permalinks->create_permalink($data['article']->guid);

$GLOBALS['vcard_author'] = true;
?>

<div class="hentry">
    <(vcard)>

    <div class="callout">
        <p>
        See also my JavaScript blog, <a href="http://universalruntime.tumblr.com/">The Universal Runtime</a>
        </p>
    </div>

    <div class="callout">
        <p>&(published:h);</p>

        <?php
        /*
        if (   !is_null($article_coordinates)
            && $article_coordinates['latitude']
            && $article_coordinates['longitude'])
        {
            $marker = array
            (
                'coordinates' => $article_coordinates,
                'title' => $data['article']->title,
            );
            $map = new org_routamc_positioning_map('blogentry');
            $map->add_marker($marker);
            $map->show(150, 140);
            ?>
            <script type="text/javascript">
                mapstraction_blogentry.setZoom(10);
            </script>
            <?php
        }*/
        ?>
    </div>

    <(search)>

    <h1 class="entry-title">&(view['title']:h);</h1>

    <?php
    /*
    $_MIDCOM->load_library('org.routamc.flattr');
    $flattr = new org_routamc_flattr();
    echo $flattr->get_badge_for_page();
    */?>

    <div class="entry-content">
        <?php if (array_key_exists('image', $view) && $view['image']) { ?>
            <div style="float: right; padding: 5px;">&(view['image']:h);</div>
        <?php } ?>

        &(view["content"]:xtoc);
    </div>

    <p class="permalink"><a href="&(permalink);" rel="bookmark"><?php $data['l10n_midcom']->show('permalink'); ?></a></p>

<?php
if (!array_key_exists('tla_ad_shown', $GLOBALS))
{
    mgd_include_snippet("/bergie/tla");
    echo "<div class=\"ads\">\n";
    echo "<h3>Sponsored links</h3>\n";
    tla_ads();
    $GLOBALS['tla_ad_shown'] = true;
    echo "</div>\n";
    ?>

    <?php
    $_MIDCOM->dynamic_load("/comments/comment/{$data['article']->guid}");
}
?>
    <p><a href="&(prefix);"><?php $data['l10n_midcom']->show('back'); ?></a></p>
</div>