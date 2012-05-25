<?php
$data =& $_MIDCOM->get_custom_context_data('request_data');
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
$view = $data['photo_view'];
$thumbnail = $data['datamanager']->types['photo']->attachments_info['thumbnail'];
$photo_url = "{$prefix}photo/{$data['photo']->guid}/";
?>
<li class="photo">
    <?php
    echo "<a href=\"{$photo_url}\"><img src=\"{$thumbnail['url']}\" {$thumbnail['size_line']} alt=\"{$thumbnail['filename']}\" title=\"" . strip_tags($view['title']) . "\" /></a>";
    ?>
</li>