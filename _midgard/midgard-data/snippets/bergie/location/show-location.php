<?php
if ($GLOBALS["midcom_site"]["location_topic"]) {

  // Fall back to current location if object's location is not found
  $show_current = true;
  $timestamp = time();
  $component = $GLOBALS["midcom"]->get_context_data(MIDCOM_CONTEXT_COMPONENT);

  if ($content != "de.linkm.taviewer" && $GLOBALS["midcom_site"]['nap']->get_current_leaf()) {
    $leaf = $GLOBALS["midcom_site"]['nap']->get_leaf($GLOBALS["midcom_site"]['nap']->get_current_leaf());
    if (isset($leaf[MIDCOM_META_CREATED])) {
      $timestamp = $leaf[MIDCOM_META_CREATED];
    }

    /*// 24 hours before the post
    * $start_time = $timestamp - (60 * 60 * 24);
    * $end_time = $timestamp + 100000;
    */
    $last_location = false;
    $locations = mgd_list_topic_articles($GLOBALS["midcom_site"]["location_topic"]->id,"calendar");
    if ($locations) {
      while ($locations->fetch()) {
        $location_item = mgd_get_article($locations->id);
        if ($location_item->startdate <= $timestamp) {
          $last_location = $location_item;
        }
        /*if (date("Y-m-d",$location_item->startdate) == date("Y-m-d",$timestamp) || ($location_item->startdate <= $timestamp && $location_item->enddate >= $timestamp)) {
        *  $location = $location_item;
        *  $show_current = false;
        *}
        */
      }
    }
    if ($last_location) {
      $location = $last_location;
      $show_current = false;
    }

  }

  if ($show_current) {

    $locations = mgd_list_topic_articles($GLOBALS["midcom_site"]["location_topic"]->id,"reverse created");
    if ($locations) { 
      if ($locations->fetch()) {
        $location = mgd_get_article($locations->id);
      }
    }
  }

  if ($location) {
  ?>
  <div class="location">
    <?php if ($show_current) {
      echo '<h1>Current location</h1>';
    } else {
      echo '<h1>Location on '.strftime("%x",$timestamp).'</h1>';
    } ?>
    <div class="location-info">
        &(location.title);, <?php echo $location->parameter("midcom.helper.datamanager","data_country"); ?>
        <?php 
        if ($location->abstract) {
          // We know the ICAO Location Identifier
          $temperature = false;

          if (!$show_current) {
            // Try to get the old weather data

            $temps = $location->listparameters("METAR.temperature");
            if ($temps) {
              while ($temps->fetch()) {
                if (date("Y-m-d",$temps->name) == date("Y-m-d",$timestamp)) {
                  // Weather report from same day, use it
                  $temperature = $location->parameter("METAR.temperature",$temps->name);
                  $weather_time = $temps->name;
                }
              }
            }

          }

          if (!$temperature) {
            // Fallback, get current weather for location

            // include class file
            include('Services/Weather.php');

            // instantiate object for METAR decoding 
            $metar = &Services_Weather::service("METAR", array(
               "debug" => 0,
               "cacheType" => "file",
               "cacheOptions" => array(
                 "cache_dir" => "/tmp/",
               ),
            ));

            if (!Services_Weather::isError($metar)) {
              // retrieve and parse METAR
              error_reporting(E_WARNING);
              $data = $metar->getWeather($location->abstract,"m");
              error_reporting(E_ALL);

              if ($data) {
                $temperature = $data["temperature"];
                $weather_time = time();
              }
            }
          }

          if ($temperature) {
            echo "<div class=\"temperature\" title=\"Weather for ".$location->abstract." on ".gmdate("Y-m-d H:i",$weather_time)." UTC\">\n";
            echo $temperature."&#176;C\n";
            echo "</div>\n";
          }
        }
        ?>
      </div>
  </div>
  <?php
  }
}
?>