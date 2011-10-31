<?php
$view = $data['display_datamanager']->get_content_html();
$created = $data['comment']->metadata->published;

$published = sprintf(
    '%s on %s',
    $view['author'],
    strftime('%x %X', $created)
);
?>

<div class="net_nehmer_comments_comment">
    <h3 class="headline">&(published);</h3>    
    <div class="content">&(view['content']:h);</div>
    <div class="net_nehmer_comments_comment_toolbar">
        <?php echo $data['comment_toolbar']->render(); ?>
    </div>
</div>