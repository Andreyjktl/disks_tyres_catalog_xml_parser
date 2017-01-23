<?php
$data = simplexml_load_file("tyres.xml");
echo '<table>';
foreach ($data->marka as $marka) {
    echo '<tr><td colspan="2" style="background:grey;">';
    echo '<p>'.$marka->name.'   ';
    echo '<img src='.$marka->logo.'>';
     echo '<p><iframe src="'.$marka->html.'" width=100%; height=400px;></iframe>';
    echo '<hr>';

    foreach ($marka->models->model as $model) {
        echo '<tr><td>';
        echo '<p>'.$model->name.'</td>';
        echo '<td><a href="'.$model->html.'">'.$model->html.'</a>';
        echo '</td></tr>';
    }
    echo '</td></tr>';
}
echo '<table>';
?>
<a href=""></a>
