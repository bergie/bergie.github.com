<?php
$view = $data['datamanager']->get_content_raw();
$data['event']->start = strtotime($data['event']->start);
$data['event']->end = strtotime($data['event']->end);
?>
<li class="vevent" id="<?php echo $data['event']->guid; ?>">
    <abbr class="dtstart" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->start); ?>"><?php echo gmdate('M d', $data['event']->start); ?></abbr> -
    <abbr class="dtend" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->end); ?>"><?php if (gmdate('m d', $data['event']->start) != gmdate('m d', $data['event']->end)) { echo gmdate('M d', $data['event']->end); } ?></abbr>
    <div class="summary"><a class="url" href="&(data['event_url']);">&(view['title']:h);</a></div>
    <abbr class="dtstamp" style="display: none;" title="<?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->metadata->published); ?>"><?php echo gmdate('Y-m-d\TH:i:s\Z', $data['event']->metadata->published); ?></abbr>
    <span class="uid" style="display: none;"><?php echo $data['event']->guid; ?></span>  
</li>