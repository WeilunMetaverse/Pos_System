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
if($station == "L1"){
    $type = "lifter";
    $number = 1;
}
if($station == "L2"){
    $type = "lifter";
    $number = 2;
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


// echo $type.$number;

// lifter3
$assemblyData=[];
$assembly = sprintf("SELECT value from tact_time where type='$type' AND category='assembly' AND number=$number ORDER BY `timestamp` DESC LIMIT 1 ");
$assemblyResult = $mysqli->query($assembly);
$assemblyResult= $assemblyResult->fetch_object();
$assembly = $assemblyResult->value ;
// echo $lifter3;

$assembly_update = (object) [
  'value' => $assembly,
];

$assemblyData = $assembly_update;



print json_encode($assemblyData);
$mysqli -> close();
?>