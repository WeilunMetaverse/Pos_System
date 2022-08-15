<?php
//get connection

// echo date('Ymd');
$currentDate = date('Ymd');



$mysqli = new mysqli('43.74.21.77','root', 'soemcrawler','pallet');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";

$lifterNo = $_GET['lifter'];

$currentDate = date('Ymd');
$palletTable = "pallet_data_".$currentDate;
// $palletTable = "pallet_data_20200303";

$url = 'lifter.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$pallet = json_decode($data);

$key = array_search($lifterNo, array_column($pallet, 'lifter'));
$key = $lifterNo-1;

$lifter = $pallet[$key]->lifter;
$number = $pallet[$key]->number;
$cycle = $pallet[$key]->cycle;
$autoSerial = $pallet[$key]->autoserial;


// get pallet number data 
$palletNumber = sprintf("SELECT VALUE from $palletTable where ADDRESS=$number ORDER BY TIMESTAMP DESC LIMIT 1");
$numberResult = $mysqli->query($palletNumber);
$numberResult= $numberResult->fetch_object();
$palletNumber = $numberResult->VALUE ;

if( $palletNumber >= 16 && $palletNumber<= 25 && $palletNumber!=153){
  $palletNumber = $palletNumber-6;
}

if( $palletNumber >25 && $palletNumber!=153){
  $palletNumber = $palletNumber-12;
}

if( $palletNumber==153){
  $palletNumber = 99;
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
  'lifter' => $lifter,
  'number' => $palletNumber,
  'cycle' => $cycleResult->VALUE,
  'autoserial'=> $autoserialResult->VALUE,
  'timeStamp'=> $autoserialResult->TIMESTAMP
];

print json_encode($palletData) ;
$mysqli -> close();
?>