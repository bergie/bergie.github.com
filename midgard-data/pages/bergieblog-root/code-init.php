<?php 
/**
 * MidCOM website configuration format version 1.0.0 (mRFC 0025 specification)
 * This element was generated using midcom_helper_hostconfig. Do not edit manually!
 * Generated on 2007-01-17 23:55:14 Z using midcom_helper_hostconfig
 */
$GLOBALS['midcom_config_local']['cache_base_directory'] = '/var/cache/midgard/midcom/';
$GLOBALS['midcom_config_local']['log_filename'] = '/var/log/midgard/midcom/bergie.iki.fi.log';
$GLOBALS['midcom_config_local']['log_level'] = 1;
$GLOBALS['midcom_config_local']['midcom_root_topic_guid'] = '84e37b38585423450c21ffb0d831d0cc';
$GLOBALS['midcom_config_local']['positioning_enable'] = true;
$GLOBALS['midcom_config_local']['cache_module_content_headers_strategy'] = 'public';
$GLOBALS['midcom_config_local']['cache_module_content_default_lifetime'] = 600;
//$GLOBALS['midcom_config_local']['cache_module_content_uncached'] = false;
$GLOBALS['midcom_config_local']['cache_module_content_name'] = 'bergie.iki.fi';
//$GLOBALS['midcom_config_local']['cache_module_content_backend'] = Array('driver' => 'flatfile');
$GLOBALS['midcom_config_local']['attachment_cache_enabled'] = true;
$GLOBALS['midcom_config_local']['attachment_cache_root'] = '/var/lib/midgard/vhosts/bergie.iki.fi/80/static';
$GLOBALS['midcom_config_local']['attachment_cache_url'] = '/static';
//$GLOBALS['midcom_config_local']['attachment_cache_blobdir'] = '/var/lib/midgard/blobs/midgard_bergie';

?><(code-init-before-midcom)><?php

require MIDCOM_ROOT . '/midcom.php';

?><(code-init-after-midcom)><?php

$_MIDCOM->codeinit();
?>