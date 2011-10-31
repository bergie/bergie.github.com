<?php
$_MIDCOM->componentloader->load('fi.protie.navigation');
$navi = new fi_protie_navigation();
$navi->list_leaves = true;
$navi->follow_selected = false;
$navi->draw();
?>
