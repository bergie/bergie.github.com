<?php
/**
 * Dump Midgard1 articles to JSON-LD format
 */
$mgd = new midgard_connection();
$mgd->open('midgard');
$mgd->set_sitegroup('bergie.iki.fi');

$qb = new midgard_query_builder('midgard_article');
$qb->add_constraint('topic.component', '=', 'net.nehmer.blog');
$qb->add_constraint('topic.name', '=', 'blog');
$qb->add_order('metadata.published', 'ASC');
$articles = $qb->execute();

include('/usr/share/php/midcom/lib/net/nehmer/markdown/lib/markdown.php');

$ontologies = array
(
    'dc' => 'http://purl.org/dc/elements/1.1/',
    'atom' => 'http://www.w3.org/2005/Atom',
    'geo' => 'http://www.georss.org/georss',
);

$linkeddata = array();
$identifier_base = 'http://bergie.iki.fi/blog/';
foreach ($articles as $article)
{
    $identifier = "{$identifier_base}{$article->name}/";

    $schema = $article->get_parameter('midcom.helper.datamanager2', 'schema_name');
    $contentType = '';
    switch ($schema)
    {
        case 'html':
            $content = $article->content;
            $contentType = 'html';
            break;
        case 'markdown':
        default:
            $content = $article->content;
            $contentType = 'markdown';
            break;
    }

    $location = array();
    $location_qb = new midgard_query_builder('org_routamc_positioning_location');
    $location_qb->add_constraint('parent', '=', $article->guid);
    $locations = $location_qb->execute();
    foreach ($locations as $loc) {
        $location['lat'] = $loc->latitude;
        $location['lon'] = $loc->longitude;
    }

    $linkeddata_entry = array
    (
        '@context' => $ontologies,
        '@id' => "<{$identifier}>",
        'a' => 'atom:entry',
        'dc:name' => $article->name,
        'dc:title' => $article->title,
        'dc:creator' => '<http://bergie.iki.fi/#me>',
        'dc:date' => $article->metadata->published,
        'dc:contentType' => $contentType,
        'atom:content' => $content,
        'geo:point' => $location,
    );
    //die(json_encode($linkeddata_entry));
    $linkeddata[] = $linkeddata_entry;
}
echo json_encode($linkeddata);
?>
