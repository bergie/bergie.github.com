<?php
ini_set('memory_limit', -1);
$mgd = new midgard_connection();
$mgd->open('midgard');
$mgd->set_sitegroup('bergie.iki.fi');

$qb = new midgard_query_builder('org_routamc_photostream_photo');
$qb->add_constraint('externalid', '=', '');
$qb->add_order('taken', 'ASC');
$photos = $qb->execute();

$data = array();

foreach ($photos as $photo) {
  try {
    $img = array();
    $orig = new midgard_attachment($photo->archival);
    $img['title'] = $photo->title;
    $img['taken'] = date('c', $photo->taken);
    $img['location'] = $orig->location;

    $img['tags'] = array();

    $tag_qb = new midgard_query_builder('net_nemein_tag_link');
    $tag_qb->add_constraint('fromGuid', '=', $photo->guid);
    $tags = $tag_qb->execute();
    foreach ($tags as $tag) {
        $tag_obj = new net_nemein_tag($tag->tag);
        if ($tag_obj) {
            if ($tag->context && $tag->value) {
                $img['tags'][] = "{$tag->context}:{$tag_obj->tag}={$tag->value}";
                continue;
            }
            $img['tags'][] = $tag_obj->tag;
        }
    }

    $data[] = $img;
  } catch (Exception $e) {
    continue;
  }
}
echo json_encode($data);
