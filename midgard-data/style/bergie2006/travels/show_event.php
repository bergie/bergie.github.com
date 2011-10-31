<?php
// Bind the view data, remember the reference assignment:
$view = $data['view_event'];
$data['event']->start = strtotime("{$data['event']->start}+0400");
$data['event']->end = strtotime("{$data['event']->end}+0500");
?>
<div class="vevent" id="<?php echo $data['event']->guid; ?>">
    <h1 class="summary">&(view['title']:h);</h1>

    <div class="time">
        <abbr class="dtstart" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->start); ?>"><?php echo midcom_helper_generate_daylabel('start', $data['event']->start, $data['event']->end, true, true); ?></abbr> -
        <abbr class="dtend" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->end); ?>"><?php echo midcom_helper_generate_daylabel('end', $data['event']->start, $data['event']->end, true, true); ?></abbr>
    </div>

    <div class="description">
        &(view['description']:h);
    </div>
    
    <?php
    $location_hints = array();
    $city_parts = explode(',', $data['event']->title);
    $location_hints['city'] = trim($city_parts[0]);
    $geocoder = org_routamc_positioning_geocoder::create('city');
    $location = $geocoder->geocode($location_hints);

    if (   !empty($location)
        && $location[0]['latitude']
        && $location[0]['longitude'])
    {
        $marker = array
        (
            'coordinates' => $location[0],
            'title' => $data['event']->title,
        );
        $map = new org_routamc_positioning_map('trip');
        $map->add_marker($marker);
        $map->show(400, 300);
        ?>
        <script type="text/javascript">
            mapstraction_trip.setZoom(7);
        </script>
        <?php
    }
    ?>
    <p>
    Read more <a href="http://www.dopplr.com/traveller/bergie">from my Dopplr account</a>.
    </p>
    
    <?php
    $_MIDCOM->dynamic_load('/midcom-substyle-list/moblog/between/all/' . gmdate('Y-m-d', $data['event']->start) . '/' . gmdate('Y-m-d', $data['event']->end));
    ?>
    
    <abbr class="dtstamp" style="display: none;" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->metadata->published); ?>"><?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->metadata->published); ?></abbr>
    <span class="uid" style="display: none;"><?php echo $data['event']->guid; ?></span>    
</div>
<?php
if ($data['archive_mode']) 
{
    $url = $_MIDCOM->get_context_data(MIDCOM_CONTEXT_ANCHORPREFIX) . 'archive/';
    ?>
    <p><a href="&(url);"><?php $data['l10n']->show('back to archive.'); ?></a></p>
    <?php 
} 
?>