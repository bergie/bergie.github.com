<a name="net_nehmer_comments_post_&(data['objectguid']);"></a>
<h3><?php $data['l10n']->show('post a comment'); ?>:</h3>

<?php
$object = $_MIDCOM->dbfactory->get_object_by_guid($data['objectguid']);
if ($object)
{
    $buzz_url = $object->get_parameter('net.nehmer.comments', 'comments_url');
    $qaiku_url = $object->get_parameter('net.nehmer.comments', 'qaiku_url');   
    if (   $buzz_url
        || $qaiku_url)
    {
        echo "<p>Post a comment via ";
        if ($qaiku_url)
        {
            echo "<a href=\"{$qaiku_url}\">Qaiku</a>";
        }
        if ($buzz_url)
        {
            if ($qaiku_url)
            {
                echo " or ";
            }
            echo "<a href=\"{$buzz_url}\">Google Buzz</a>";
        }
        echo "</p>\n";
    }
    else
    {
        echo "<p>" . $data['l10n']->show('permission-denied message') . "</p>\n";
    }
}
?>