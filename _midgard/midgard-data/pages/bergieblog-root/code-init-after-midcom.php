<?php
/*
if ($_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR'])
{
    // This is Squid
}
elseif (   $_MIDGARD['argc'] == 2
        && $_MIDGARD['argv'][1] == 'cron.php')
{
    // This is cron
}
elseif (   $_MIDGARD['argc'] == 3
        && $_MIDGARD['argv'][2] == 'metaweblog')
{
    // This is metaweblog entry point
}
else
{
    $_MIDCOM->cache->content->enable_live_mode();
    $_MIDCOM->auth->require_valid_user();
}
*/

$_MIDCOM->i18n->set_language('en');
?>