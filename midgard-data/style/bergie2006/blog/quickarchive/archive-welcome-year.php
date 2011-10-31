<?php
// Available request keys: total_count, first_post, year_data, year, url, count, month_data
// month data contains month => url, count pairs.

$data =& $_MIDCOM->get_custom_context_data('request_data');

?>

<li class="year"><a href="&(data['url']);">&(data['year']);</a>
    <ul>
    <?php
    foreach ($data['month_data'] as $month => $month_data)
    {
        $class = 'not-very-populated';
        if ($month_data['count'] > 20)
        {
            $class = 'very-populated';
        }
        elseif ($month_data['count'] > 10)
        {
            $class = 'somewhat-populated';
        }
        ?>
        <li class="&(class);"><span>&(month_data['count']); posts in &(month_data['name']); &(data['year']); </span><a href="&(month_data['url']);" class="month">&(month_data['name']);</a></li>
        <?php 
    } 
    ?>
    </ul>
</li>