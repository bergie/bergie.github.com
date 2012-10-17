<?php
ini_set('memory_limit', -1);
$mgd = new midgard_connection();
$mgd->open('midgard');
$mgd->set_sitegroup('bergie.iki.fi');

$qb = new midgard_query_builder('org_routamc_positioning_log');
$qb->add_constraint('person', '=', 2);
$qb->add_order('date', 'ASC');
$logs = $qb->execute();

$data = array();

foreach ($logs as $log) {
  $export = array();
  $export['date'] = date('c', $log->date);
  $export['source'] = $log->importer;
  $export['accuracy'] = $log->accuracy;
  $export['location'] = array(
    'lat' => $log->latitude,
    'lon' => $log->longitude
  );
  $data[] = $export;
}

echo json_encode($data);
