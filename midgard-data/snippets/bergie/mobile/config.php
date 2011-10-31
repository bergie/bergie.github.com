<?php
mgd_include_snippet("/sitegroup-config/midcom-template/config");

// GUID to the topic where moblog postings are stored
$moblog_topic_guid = "e9c1997d6f5eafd9d4f0fb32028b98d3";

// GUID to the topic where location data is stored
$moblog_location_topic_guid = "2c40e669e14fe93aa27a78776161fb05";

// GUID for the blog entries
$blog_topic_guid = 'fc1648a86d799d6c1f91c054d5195196';

// User account for updating log articles
$moblog_username = "bergie";
$moblog_password = "perkele42";

// Sending phone number
$moblog_email = "+35840515334@mms.soneramail.com";

// Receiving email address
$moblog_email_receive = "moblog@routamc.org";

// Datamanager schemaDB for the moblog topics
$moblog_datamanager_schemadb = "/sitegroup-config/de.linkm.newsticker/schema-moblog";

// Datamanager field for storing the image
$moblog_datamanager_field = "image";

// Temporary directory
$moblog_tmp_dir = "/tmp/";

// Path to "convert" utility from ImageMagick
$moblog_convert = exec("which convert");

mgd_include_snippet("/bergie/mobile/helpers");

?>