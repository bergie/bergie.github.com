<?php
// Available request keys: total_count, first_post, year_data

$data =& $_MIDCOM->get_custom_context_data('request_data');

$summary = sprintf($data['l10n']->get('there is a total of %d posts.'), $data['total_count']);
?>
<div class="blogarchive">
<p>&(summary);</p>

<ul>