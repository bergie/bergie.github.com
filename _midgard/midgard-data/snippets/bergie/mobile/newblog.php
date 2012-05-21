<?php
/* 
Handle new blog entry
*/
$blog_topic = mgd_get_object_by_guid($blog_topic_guid);
// Read the content for the blog entry
$blog_newtitle = substr($moblog_message,7);
echo "DEBUG: Received NEWLOG command for entry \"".$blog_newtitle."\"\n";

$new_entry = mgd_get_article();
$new_entry->topic = $blog_topic->id;
$new_entry->author = $midgard->user;
$new_entry->title = $blog_newtitle;
$new_entry->name = date("Y-m-d",$moblog_time)."-".$moblog_time;

$status = $new_entry->create();
if ($status)
{
    $new_entry = mgd_get_article($status);
    $new_entry->parameter('midcom.helper.datamanager', 'data_category', 'Life');
    bergie_iki_fi_store_metar();
    echo "OK\n";
} 
else
{
    echo "ERROR: Failed to create blog article, reason ".mgd_errstr()."\n";
}
?>