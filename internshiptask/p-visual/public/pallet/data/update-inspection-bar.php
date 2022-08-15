<?php
//get connection

// echo date('Ymd');


$station = $_GET['station'];
// echo $station;

// $mysqli = new mysqli('43.74.21.77','root', 'soemcrawler','pallet');
$mysqli = new mysqli('43.74.21.81','root', 'soemphp','labs');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";
if($station == "L3"){
    $type = "lifter";
    $number = 3;
}
if($station == "L4"){
    $type = "lifter";
    $number = 4;
}
if($station == "S1"){
    $type = "station";
    $number = 1;
}
if($station == "S2"){
    $type = "station";
    $number = 2;
}
if($station == "S3"){
    $type = "station";
    $number = 3;
}
if($station == "S4"){
    $type = "station";
    $number = 4;
}
if($station == "S5"){
    $type = "station";
    $number = 5;
}
if($station == "S6"){
    $type = "station";
    $number = 6;
}
if($station == "S7"){
    $type = "station";
    $number = 7;
}
if($station == "S8"){
    $type = "station";
    $number = 8;
}
if($station == "S9"){
    $type = "station";
    $number = 9;
}
if($station == "S10"){
    $type = "station";
    $number = 10;
}
if($station == "S11"){
    $type = "station";
    $number = 11;
}
if($station == "S12"){
    $type = "station";
    $number = 12;
}
if($station == "S13"){
    $type = "station";
    $number = 13;
}
if($station == "S14"){
    $type = "station";
    $number = 14;
}
if($station == "S15"){
    $type = "station";
    $number = 15;
}
if($station == "S16"){
    $type = "station";
    $number = 16;
}
if($station == "S17"){
    $type = "station";
    $number = 17;
}
if($station == "S18"){
    $type = "station";
    $number = 18;
}

// echo $type.$number;

// lifter3
$inspection = sprintf("SELECT value from tact_time where type='$type' AND category='inspection' AND number=$number ORDER BY `timestamp` DESC LIMIT 1 ");
$inspectionResult = $mysqli->query($inspection);
$inspectionResult= $inspectionResult->fetch_object();
$inspection = $inspectionResult->value ;
// echo $lifter3;

$lifter3Data = (object) [
  'value' => $inspection,
];

$inspectionData = $lifter3Data;



print json_encode($inspectionData);
$mysqli -> close();
?>