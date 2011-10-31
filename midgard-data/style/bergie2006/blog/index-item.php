<?php
// Available request keys: datamanager, article, view_url
/*
// Load statusmessages before this entry
$qb = org_routamc_statusmessage_message_dba::new_query_builder();
$qb->add_constraint('metadata.published', '>=', date('Y-m-d H:i:s', $data['article']->metadata->published));
if (isset($GLOBALS['statusmessages_until_shown']))
{
    // Show only items after previous article
    $qb->add_constraint('metadata.published', '<', date('Y-m-d H:i:s', $GLOBALS['statusmessages_until_shown']));
}
else
{
    // Don't show the latest since that has a separate place
    $qb->set_offset(1);
}
$qb->add_order('metadata.published', 'DESC');
$messages = $qb->execute();
foreach ($messages as $message)
{
    echo "<div class=\"statusmessage\">{$message->status} <span class=\"date\">(" . gmstrftime('%x %XZ', $message->metadata->published) . ")</span></div>\n";
}
$GLOBALS['statusmessages_until_shown'] = $data['article']->metadata->published;
*/

$data =& $_MIDCOM->get_custom_context_data('request_data');
$view = $data['datamanager']->get_content_html();
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
$publish_time = $data['article']->metadata->published;

$published = 'Posted on ' . strftime('%Y-%m-%d %T %Z', $publish_time);

$position = new org_routamc_positioning_object($data['article']);
$coordinates = $position->get_coordinates();
if (!is_null($coordinates))
{
     $published .= " in ". org_routamc_positioning_utils::microformat_location($coordinates['latitude'], $coordinates['longitude']) . " ";
}

$published .= " to";
foreach ($data['datamanager']->types['categories']->selection as $category)
{
    $label = ucfirst($category);
    $published .= " <a href=\"{$prefix}category/{$category}/\" rel=\"tag\">{$label}</a>";
}
$published .= ".";

$_MIDCOM->componentloader->load_graceful('net.nehmer.comments');
$published .= " <a href=\"{$data['view_url']}#net_nehmer_comments_{$data['article']->guid}\">" . sprintf($data['l10n']->get('%s comments'), net_nehmer_comments_comment::count_by_objectguid($data['article']->guid)) . "</a>.";
?>

<div class="hentry" style="clear: left;">
    <h2 class="entry-title"><a href="&(data['view_url']);" rel="bookmark">&(view['title']:h);</a></h2>
    <p class="published">&(published:h);</p>
    <?php if (array_key_exists('image', $view) && $view['image']) { ?>
        <div style="float: left; padding: 5px;">&(view['image']:h);</div>
    <?php } ?>
    <div class="entry-content">&(view['content']:h);</div>
</div>

<?php
if (!array_key_exists('tla_ad_shown', $GLOBALS))
{
    mgd_include_snippet("/bergie/tla");
    echo "<div class=\"ads\">\n";
    echo "<h3>Sponsored links</h3>\n";
    tla_ads();
    $GLOBALS['tla_ad_shown'] = true;
    echo "</div>\n";
}
?>