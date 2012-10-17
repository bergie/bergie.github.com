<?php
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
    $data[] = $img;
  } catch (Exception $e) {
    continue;
  }
}

echo json_encode($data);
