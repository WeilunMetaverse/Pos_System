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

$tactA=[];
// echo $type.$number.$category;

$currentDate = date('Ymd');

// get tact time data 
$tactTimeL1 = sprintf("SELECT * from tact_time where type='lifter' AND category='assembly' AND number=1 ORDER BY `timestamp` DESC LIMIT 1 ");
$tactTimeResultL1 = $mysqli->query($tactTimeL1);
$tactTimeResultL1= $tactTimeResultL1->fetch_object();


$tactTimeDataL1 = (object) [
  'value' => $tactTimeResultL1 ->value,
  'number'=> $tactTimeResultL1 ->number,
  'category'=>$tactTimeResultL1 ->category,
  'name'=> "Lifter 1"
];

$tactA[] = $tactTimeDataL1;

for($i=1;$i<=10;$i++){
    $tactTimeA = sprintf("SELECT * from tact_time where type='station' AND category='assembly' AND number=$i ORDER BY `timestamp` DESC LIMIT 1 ");
    $tactTimeResultA = $mysqli->query($tactTimeA);
    $tactTimeResultA= $tactTimeResultA->fetch_object();


    $tactTimeDataA = (object) [
    'value' => $tactTimeResultA ->value,
    'number'=> $tactTimeResultA ->number,
    'category'=>$tactTimeResultA ->category,
    'name'=> "Station ".$i,
    ];

    $tactA[] = $tactTimeDataA;
}

$tactTimeL2 = sprintf("SELECT * from tact_time where type='lifter' AND category='assembly' AND number=2 ORDER BY `timestamp` DESC LIMIT 1 ");
$tactTimeResultL2 = $mysqli->query($tactTimeL2);
$tactTimeResultL2= $tactTimeResultL2->fetch_object();


$tactTimeDataL2 = (object) [
  'value' => $tactTimeResultL2 ->value,
  'number'=> $tactTimeResultL2 ->number,
  'category'=>$tactTimeResultL2 ->category,
  'name'=> "Lifter 2"
];
$tactA[] = $tactTimeDataL2;
print json_encode($tactA) ;

?>