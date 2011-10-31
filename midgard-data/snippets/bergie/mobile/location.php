<?php
/* 
Handle new location reports

Supports three formats:
NEWLOC EFHF
NEWLOC Helsinki, Finland
NEWLOC Helsinki, Finland, EFHF

*/
$moblog_location_topic = mgd_get_object_by_guid($moblog_location_topic_guid);
// Read the title of the new entry
$moblog_newlocation = substr($moblog_message,7);
echo "DEBUG: Received NEWLOC command for entry \"".$moblog_newlocation."\"\n";

if (strlen($moblog_newlocation) == 4) {
  // ICAO airport code
  // TODO: lookup from ICAO database:
  // http://weather.noaa.gov/data/nsd_cccc.txt
  $location_icao_location = $moblog_newlocation;
} else {
  
  $location_array = explode(", ",$moblog_newlocation);

  if (is_array($location_array) && count($location_array) >= 2) {

    $location_city = $location_array[0];
    $location_country = $location_array[1];

    if (count($location_array) == 3) {
      // ICAO coordinate may be keyed in as well
      $location_icao_location = $location_array[2];
    }

  }
}

if ($location_city && $location_country) {

  $location_articles = mgd_list_topic_articles($moblog_location_topic->id);
  if ($location_articles) {
    if ($location_articles->fetch()) {
      $lastlocation = mgd_get_article($location_articles->id);

      $lastlocation_time_array = explode(".",$lastlocation->calstart);
      $lastlocation_time = mktime(0,0,1,$lastlocation_time_array[1],$lastlocation_time_array[0],$lastlocation_time_array[2]);
      if ($lastlocation_time) {
        $lastlocation_days = round(($moblog_time - $lastlocation_time) / 60 / 60 / 24);
        $lastlocation_days = $lastlocation_days-2;
        echo "DEBUG: Last location (".$lastlocation->title.") was reported on ".date("Y-m-d",$lastlocation_time).", ".$lastlocation_days." days ago\n";
        $lastlocation->caldays = $lastlocation_days;
        $lastlocation->update();
      } else {
        echo "DEBUG: Failed to get reporting time from last location\n";
      }
    }
  }

  // Create new location article
  $article = mgd_get_article();

  // URL name in format "country-city-YYYY-mm-dd"
  $article->name = strtolower(preg_replace('/[^a-zA-Z0-9_-]/', "-", $location_country." ".$location_city." ".date("Y-m-d",$moblog_time)));

  $article->title = $location_city;
  $article->author = $midgard->user;
  $article->calstart = date("d.m.Y",$moblog_time);
  $article->topic = $moblog_location_topic->id;

  if (isset($location_icao_location) && $location_icao_location) {
    $article->abstract = $location_icao_location;
  }

  $status = $article->create();
  if ($status) {

    // Save country
    $article = mgd_get_article($status);
    $article->parameter("midcom.helper.datamanager","data_country",$location_country);

    // Store current weather
    if ($article->abstract) {
      bergie_iki_fi_store_metar($article,$article->abstract);
    }

    echo "OK\n";
  } else {
    echo "ERROR: Failed to create location article, reason ".mgd_errstr()."\n";
  }

} else {
  echo "DEBUG: Location and not deducted, aborting\n";
}
?>