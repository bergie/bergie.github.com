<link rel="shortcut icon" href="<?php echo MIDCOM_STATIC_URL; ?>/style_bergie2006/favicon_bergie.ico" />
        <meta name="google-site-verification" content="ge5GAC0xnAgFKsZdHP3DD9KbNYPM0d4F5SpK0ivCJtg" />
        <link rel="openid.server" href="http://www.clavid.com/provider/openid" />
        <link rel="openid.delegate" href="http://bergie.clavid.com" />
        <link rel="openid2.provider" href="http://www.clavid.com/provider/openid" />
        <link rel="openid2.local_id" href="http://bergie.clavid.com" />
        <?php
        if (strpos($_MIDCOM->metadata->get_page_class(), 'frontpage') !== false)
        {
            $bergie = new midcom_db_person('c8b76e1e47b3427dfba717aad7a7c6a3');
            if ($bergie)
            {
                $user_position = new org_routamc_positioning_person($bergie);
                $coordinates = $user_position->get_coordinates();
                echo "<meta name=\"icbm\" content=\"{$coordinates['latitude']},{$coordinates['longitude']}\" />\n";
            }
            ?>
            <link rel="alternate" type="application/rss+xml" title="Weblog RSS feed" href="http://bergie.iki.fi/blog/rss.xml" />
            <link type="application/x.microsummary+xml" href="http://bergie.iki.fi/status/microsummary/bergie" rel="microsummary" />
            <?php
        }
        ?>