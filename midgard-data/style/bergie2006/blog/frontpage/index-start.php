<?php
// Available request keys: none in addition to the defaults
$data =& $_MIDCOM->get_custom_context_data('request_data');
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
?>

<div class="net_nehmer_blog hfeed">
    <p class="subscribe">
        <span>Subscribe to the feed: </span>
        <a href="&(prefix);rss.xml"><img src="<?php echo MIDCOM_STATIC_URL; ?>/style_bergie2006/feed-icon.png" alt="RSS" title="Subscribe to the RSS feed" /></a>
    </p>

    <div style="font-size: larger; margin: 8px; text-align: center;">
        For more real-time updates you can also follow <a href="http://www.qaiku.com/home/bergie/" rel="me">my Qaiku profile</a> (<a href="http://www.qaiku.com/feeds/qaikus/1de04e7a425656e04e711de8b8b03b7a324e879e879">feed</a>).
    </div>

    <h2>Latest weblog entries</h2>