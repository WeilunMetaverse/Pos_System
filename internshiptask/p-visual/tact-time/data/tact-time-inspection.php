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

$tactI=[];
// echo $type.$number.$category;

$currentDate = date('Ymd');

// get tact time data 
$tactTimeL3 = sprintf("SELECT * from tact_time where type='lifter' AND category='inspection' AND number=3 ORDER BY `timestamp` DESC LIMIT 1 ");
$tactTimeResultL3 = $mysqli->query($tactTimeL3);
$tactTimeResultL3= $tactTimeResultL3->fetch_object();


$tactTimeDataL3 = (object) [
  'value' => $tactTimeResultL3 ->value,
  'number'=> $tactTimeResultL3 ->number,
  'category'=>$tactTimeResultL3 ->category,
  'name'=> "Lifter 3"
];

$tactA[] = $tactTimeDataL3;

for($i=1;$i<=18;$i++){
    $tactTimeI = sprintf("SELECT * from tact_time where type='station' AND category='inspection' AND number=$i ORDER BY `timestamp` DESC LIMIT 1 ");
    $tactTimeResultI = $mysqli->query($tactTimeI);
    $tactTimeResultI= $tactTimeResultI->fetch_object();


    $tactTimeDataI = (object) [
    'value' => $tactTimeResultI ->value,
    'number'=> $tactTimeResultI ->number,
    'category'=>$tactTimeResultI ->category,
    'name'=> "Station ".$i,
    ];

    $tactA[] = $tactTimeDataI;
}

$tactTimeL4 = sprintf("SELECT * from tact_time where type='lifter' AND category='inspection' AND number=4 ORDER BY `timestamp` DESC LIMIT 1 ");
$tactTimeResultL4 = $mysqli->query($tactTimeL4);
$tactTimeResultL4= $tactTimeResultL4->fetch_object();


$tactTimeDataL4 = (object) [
  'value' => $tactTimeResultL4 ->value,
  'number'=> $tactTimeResultL4 ->number,
  'category'=>$tactTimeResultL4 ->category,
  'name'=> "Lifter 4"
];
$tactA[] = $tactTimeDataL4;
print json_encode($tactA) ;

?>