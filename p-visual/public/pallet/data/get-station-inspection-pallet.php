<?php
//get connection

// echo date('Ymd');
$currentDate = date('Ymd');
$stationNo = $_GET['station'];


$mysqli = new mysqli('43.74.21.77','root', 'soemcrawler','pallet');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";


$currentDate = date('Ymd');
$palletTable = "pallet_data_".$currentDate;
// $palletTable = "pallet_data_20200303";

$url = 'inspectionStation.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$pallet = json_decode($data);

$key = array_search($stationNo, array_column($pallet, 'station'));
$key = $stationNo-1;
$station = $pallet[$key]->station;
$number = $pallet[$key]->number;
$cycle = $pallet[$key]->cycle;
$autoSerial = $pallet[$key]->autoserial;


// get pallet number data 
$palletNumber = sprintf("SELECT VALUE from $palletTable where ADDRESS=$number ORDER BY TIMESTAMP DESC LIMIT 1");
$numberResult = $mysqli->query($palletNumber);
$numberResult= $numberResult->fetch_object();
$palletNumber = $numberResult->VALUE ;

if( $palletNumber >= 16 && $palletNumber<= 25){
  $palletNumber = $palletNumber-6;
}

if( $palletNumber >25){
  $palletNumber = $palletNumber-12;
}
// echo $numberResult->VALUE;

// get pallet cyle data 
$palletCycle = sprintf("SELECT VALUE from $palletTable where ADDRESS=$cycle ORDER BY TIMESTAMP DESC LIMIT 1");
$cycleResult = $mysqli->query($palletCycle);
$cycleResult= $cycleResult->fetch_object();

// get pallet autoserial data 
$palletAutoserial = sprintf("SELECT VALUE,TIMESTAMP from $palletTable where ADDRESS=$autoSerial ORDER BY TIMESTAMP DESC LIMIT 1");
$autoserialResult = $mysqli->query($palletAutoserial);
$autoserialResult= $autoserialResult->fetch_object();



$palletData = (object) [
  'station' => $station,
  'number' => $palletNumber,
  'cycle' => $cycleResult->VALUE,
  'autoserial'=> $autoserialResult->VALUE,
  'timeStamp'=> $autoserialResult->TIMESTAMP
];

print json_encode($palletData) ;
$mysqli -> close();

?>