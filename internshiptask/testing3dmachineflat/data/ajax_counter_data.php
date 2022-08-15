<?php



$data_url = "http://43.74.21.94/v1/angularjs/prodprogress/prod1,prod2,prod3&output=JSON";

$json_data = file_get_contents($data_url);
$counter_data = json_decode($json_data, true);


echo json_encode($counter_data);