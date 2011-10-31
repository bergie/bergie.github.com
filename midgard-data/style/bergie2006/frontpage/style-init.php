<(vcard)>

<(search)>

<?php
/*
if (   isset($coordinates)
    && $coordinates['latitude']
    && $coordinates['longitude'])
{
    echo "<div class=\"callout\">\n";
    $marker = array
    (
        'coordinates' => $coordinates,
        'title' => "Henri Bergius",
    );
    $map = new org_routamc_positioning_map('photo');
    $map->add_marker($marker);
    $map->show(150, 140);
    ?>
    <script type="text/javascript">
        mapstraction_photo.setZoom(10);
    </script>
    </div>
    <?php
}
*/

echo "<div class=\"callout\">\n";
$_MIDCOM->dynamic_load('/midcom-substyle-sidebar/travels/');
echo "</div>\n";
?>