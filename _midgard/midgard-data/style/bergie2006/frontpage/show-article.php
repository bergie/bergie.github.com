<?php
// Available request keys: article, datamanager, edit_url, delete_url, create_urls

$data =& $_MIDCOM->get_custom_context_data('request_data');
$view = $data['view_article'];
?>

<h1>&(view['title']:h);</h1>

&(view['content']:h);

<?php
$_MIDCOM->dynamic_load('/midcom-substyle-frontpage/blog/latest/10', array('cache_module_content_caching_strategy' => 'public'));
?>