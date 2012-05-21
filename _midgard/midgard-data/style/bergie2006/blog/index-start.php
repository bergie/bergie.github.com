<?php
// Available request keys: none in addition to the defaults
$data =& $_MIDCOM->get_custom_context_data('request_data');
$prefix = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX);
?>
                <(vcard)>
                <div class="callout">
                    <p>
                        See also my JavaScript blog, <a href="http://universalruntime.tumblr.com/">The Universal Runtime</a>
                    </p>
                </div>
                <div class="callout">
                    <?php
                    $_MIDCOM->dynamic_load('/midcom-substyle-quickarchive/blog/archive');
                    ?>
                </div>
                <div class="callout">
                    <(topstories)>
                </div>

<div class="net_nehmer_blog hfeed">
    <p class="subscribe">
        <span>Subscribe to the feed: </span>
        <a href="&(prefix);rss.xml"><img src="<?php echo MIDCOM_STATIC_URL; ?>/style_bergie2006/feed-icon.png" alt="RSS" title="Subscribe to the RSS feed" /></a>
    </p>


    <h1><?php echo $data['page_title']; ?></h1>