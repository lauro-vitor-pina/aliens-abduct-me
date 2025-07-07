<?php
include(__DIR__ . '/newsfeed.inc.php');
require_once(__DIR__ . '../../../../src/config/env_loader.php');

header('Content-type: text/xml');
echo  '<?xml version="1.0" encoding="utf-8"?>';
?>

<rss version="2.0">
    <channel>
        <title>Aliens Abducted Me - Newsfeed</title>
        <link><?php echo LINK_SITE; ?></link>
        <description>Alien abduction reports from around the world courtesy of Owen and his abducted dog Fang.</description>
        <language>en-us</language>

        <?php foreach ($abductions as $row) { ?>

            <item>
                <title>
                    <?php echo $row['first_name'] . ' ' . $row['last_name'] . ' - ' . substr($row['alien_description'], 0, 32); ?>
                </title>
                <link>
                <?php echo LINK_SITE . '/public/pages/report/report.php?abduction_id=' . $row['abduction_id']; ?>
                </link>
                <pubDate>
                    <?php

                    $time_stamp = strtotime($row['when_it_happened']);

                    $pub_date =  date('D, d M Y H:i:s', $timestamp);

                    echo $pub_date . ' ' . date('T');
                    ?>

                </pubDate>
                <description>
                    <?php echo $row['what_they_did']; ?>
                </description>
            </item>
        <?php } ?>

    </channel>
</rss>