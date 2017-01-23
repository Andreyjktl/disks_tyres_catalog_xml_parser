<?php
$data = simplexml_load_file("disks.xml");

foreach ($data->marka as $marka) {
    echo '<p>'.$marka->name.'   ';
    echo '<img src='.$marka->logo.'>';
    echo '<p><iframe src="'.$marka->html.'" width=100%; height=400px;></iframe>';
    echo '<hr>';
}

?>
