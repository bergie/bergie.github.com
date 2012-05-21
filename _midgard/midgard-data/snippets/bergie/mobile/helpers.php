<?php

function bergie_iki_fi_get_latest_location()
{
    global $moblog_location_topic_guid;
    $locations_topic = mgd_get_object_by_guid($moblog_location_topic_guid);

    $locations = mgd_list_topic_articles($locations_topic->id);
    if ($locations)
    {
        if ($locations->fetch())
        {
            return mgd_get_article($locations->id);
        }
    }

}

function bergie_iki_fi_store_metar($object=null,$station=null)
{

    if (!$object)
    {
        // Get the latest location
        $object = bergie_iki_fi_get_latest_location();
    }

    if (!$station)
    {
        $station = $object->abstract;
    }

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

    if (!Services_Weather::isError($metar))
    {

        // retrieve and parse METAR
        error_reporting(E_WARNING);
        $data = $metar->getWeather($station,"m");
        error_reporting(E_ALL);

        if (is_array($data))
        {

            // Store the raw data for possible future uses
            $object->parameter("METAR.data",time(),serialize($data));
   
            // Store the temperature
            $object->parameter("METAR.temperature",time(),$data["temperature"]);

            // Store the pressure
            $object->parameter("METAR.pressure",time(),$data["pressure"]);

            // Send readback
            mail("0405251334 <sms@nemein.com>","METAR Readback","Weather for station ".$station." stored. Temperature ".$data["temperature"].", QNH ".$data["pressure"]);

        }

    }
}
?>