<?php
define('MIDCOM_ROOT', '/usr/share/php/midcom/lib');
//$GLOBALS['midcom_config_local']['indexer_reindex_allowed_ips'] = array('81.22.244.111');
//$GLOBALS['midcom_config_local']['indexer_backend'] = 'xmltcp';

// Redirect old Aegir attachment server URLs
if (substr($_MIDGARD['uri'], 0, 45) == '/attachment/1c9911cd91578c9791796c44fea32890/')
{
    header("Location: /midcom-serveattachmentguid-" . substr($_MIDGARD['uri'], 45));
    header("HTTP/1.1 301 Moved Permanently");
    exit();
}

/*
if (!preg_match("/feedburner|feedvalidator/i", $_SERVER['HTTP_USER_AGENT'])) 
{
    // Redirect feeds to feedburner
    if ($_MIDGARD['uri'] == '/blog/rss.xml')
    {
        header("Location: http://feeds.feedburner.com/bergie");
        header("HTTP/1.1 302 Temporary Redirect");
        exit();
    }
    elseif ($_MIDGARD['uri'] == '/blog/feeds/category/mobility')
    {
        header("Location: http://feeds.feedburner.com/bergie/mobility");
        header("HTTP/1.1 302 Temporary Redirect");
        exit();
    }
    elseif ($_MIDGARD['uri'] == '/blog/feeds/category/midgard')
    {
        header("Location: http://feeds.feedburner.com/bergie/midgard");
        header("HTTP/1.1 302 Temporary Redirect");
        exit();
    }
    elseif ($_MIDGARD['uri'] == '/blog/feeds/category/openpsa')
    {
        header("Location: http://feeds.feedburner.com/bergie/openpsa");
        header("HTTP/1.1 302 Temporary Redirect");
        exit();
    }
    elseif ($_MIDGARD['uri'] == '/blog/feeds/category/business')
    {
        header("Location: http://feeds.feedburner.com/bergie/business");
        header("HTTP/1.1 302 Temporary Redirect");
        exit();
    }
}
*/
?>