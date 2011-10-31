<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/&#8203;xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><(title)>: <?php echo $_MIDCOM->get_context_data(MIDCOM_CONTEXT_PAGETITLE); ?></title>
        <meta http-equiv="Content-Type" content="text/xhtml; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo MIDCOM_STATIC_URL;?>/midcom.helper.datamanager2/legacy.css" type="text/css" media="screen,projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo MIDCOM_STATIC_URL; ?>/style_bergie2006/bergie-2006.css" media="screen" />
        <?php echo $_MIDCOM->print_head_elements(); ?>
        <(head-local)>
        <!-- Ein Schwein, das nicht fliegt, ist nur ein gewöhnliches Schwein -->
    </head>
    <body<?php echo $_MIDCOM->print_jsonload(); ?>>
        <div id="container">
            <div id="branding">
                <div class="sitetitle">
                    <a href="&(_MIDGARD['self']);" rel="home">Henri Bergius</a>
                </div>
                <div class="slogan">
                    <?php
                    if ($_MIDCOM->i18n->get_content_language() == 'fi')
                    {
                        echo "Prätkäreissuja ja Vapaita Ohjelmistoja";
                    }
                    else
                    {
                        echo "Motorcycle Adventures and Free Software";
                    }
                    ?>
                </div>
            </div>
            <div id="content">
                <(content)>

            </div>
            <(photos)>
            
            <div id="navigation">
                <div class="main">
                    <(navi-main)>
                </div>
            </div>
        </div>
        <(body-extra)>
    </body>
</html>