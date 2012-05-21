<?php
$vcard_class = '';
if (   array_key_exists('vcard_author', $GLOBALS)
    && $GLOBALS['vcard_author'] == true)
{
    $vcard_class = ' author';
}
?>
<div class="callout vcard&(vcard_class);">
    <img src="<?php echo MIDCOM_STATIC_URL; ?>/style_bergie2006/bergie_canyon.jpg" class="photo" alt="Henri Bergius" />
    <div class="fn"><a href="http://bergie.iki.fi/about/" class="url" rel="me">Henri Bergius</a></div>
    <div class="title">Biker, free software consultant, neogeographer</div>
    <ul class="details">
        <li class="org"><a href="http://www.nemein.com/">Nemein</a></li>
        <?php
        $bergie = new midcom_db_person('c8b76e1e47b3427dfba717aad7a7c6a3');
        if ($bergie)
        {
            // Get the dependencies
            $_MIDCOM->load_library('org.routamc.positioning');
            $_MIDCOM->componentloader->load_graceful('org.routamc.statusmessage');

            $status_line = "<span class=\"note\">" . ucfirst($bergie->username);

            $user_position = new org_routamc_positioning_person($bergie);
            $coordinates = $user_position->get_coordinates();
            $pretty_coordinates = org_routamc_positioning_utils::microformat_location($coordinates['latitude'], $coordinates['longitude']);

            $status_line .= ", in {$pretty_coordinates}";

            if (strpos($_MIDCOM->metadata->get_page_class(), 'frontpage') !== false)
            {
                $status_qb = org_routamc_statusmessage_message_dba::new_query_builder();
                $status_qb->add_constraint('metadata.authors', '=', $bergie->guid);
                $status_qb->set_limit(1);
                $status_qb->add_order('metadata.published', 'DESC');
                $statuses = $status_qb->execute();
                if (count($statuses) > 0)
                {
                     $status_line .= " {$statuses[0]->status}</span>";
                }
                //$status_line .= "</span>";
                echo "<li class=\"location\">{$status_line}</li>\n";
            }
        }
        ?>
        <li class="tel">+358 40 525 1334</li>
        <li><a href="mailto:henri.bergius@iki.fi" class="email">henri.bergius@iki.fi</a></li>
    </ul>
</div>