<?php
// Figure out D_L URL we're using
$date = null;

$metadata = $_MIDCOM->metadata->get_view_metadata();
if ($metadata)
{
    $date = $metadata->get('published');
}

if (   $_MIDGARD['argc'] > 0
    && $_MIDGARD['argv'][0] == 'about')
{
    ?>
            <div id="images">
                <?php
                //$_MIDCOM->dynamic_load('/midcom-substyle-filmroll/moblog/tag/all/bergie');
                $_MIDCOM->dynamic_load('/midcom-substyle-filmroll/moblog/latest/all/10', array('cache_module_content_caching_strategy' => 'public'));
                ?>
            </div>
    <?php
}
elseif (   strpos($_MIDCOM->metadata->get_page_class(), 'frontpage') !== false
        || is_null($date))
{
    ?>
            <div id="images">
                <?php
                $_MIDCOM->dynamic_load('/midcom-substyle-filmroll/moblog/latest/all/10', array('cache_module_content_caching_strategy' => 'public'));
                ?>
            </div>
    <?php
}
else
{
    require_once 'Calendar/Week.php';

    $this_week =& new Calendar_Week(date('Y', $date), date('m', $date), date('d', $date));
    $prev_week = $this_week->prevWeek('object');
    $week_start = $prev_week->getTimestamp() + 1;
    $next_week = $this_week->nextWeek('object');
    $week_end = $next_week->getTimestamp() - 1;
    ?>
            <div id="images">
                <?php
                $_MIDCOM->dynamic_load('/midcom-substyle-filmroll/moblog/between/all/' . date('Y-m-d', $week_start) . '/' . date('Y-m-d', $week_end), array('cache_module_content_caching_strategy' => 'public'));
                ?>
            </div>
    <?php
}

?>