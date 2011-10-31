<?php
/* 
Handle new blog line
*/
$blog_topic = mgd_get_object_by_guid($blog_topic_guid);
// Read the content for the blog entry
$blog_newline = substr($moblog_message,4);
echo "DEBUG: Received BLOG command for entry \"".$blog_newline."\"\n";

$latest_posts = mgd_list_topic_articles($blog_topic->id, 'reverse created');
if ($latest_posts->fetch())
{
    $latest_post = mgd_get_article($latest_posts->id);
    $dateline = gmdate('Y-m-d H:i', time()).'Z';
    $latest_post->content .= "\n\n__{$dateline}:__ {$blog_newline}";
  
    $status = $latest_post->update();
    if ($status)
    {
        bergie_iki_fi_store_metar();
        echo "OK\n";
    } 
    else
    {
        echo "ERROR: Failed to update blog article, reason ".mgd_errstr()."\n";
    }
}
?>