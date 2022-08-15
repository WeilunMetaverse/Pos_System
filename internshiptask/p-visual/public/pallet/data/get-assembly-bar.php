<?php
//get connection

// echo date('Ymd');
$currentDate = date('Ymd');



// $mysqli = new mysqli('43.74.21.77','root', 'soemcrawler','pallet');
$mysqli = new mysqli('43.74.21.81','root', 'soemphp','labs');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";
$assemblyData=[];

// lifter1
$lifter1 = sprintf("SELECT value from tact_time where type='lifter' AND category='assembly' AND number=1 ORDER BY `timestamp` DESC LIMIT 1 ");
$lifter1Result = $mysqli->query($lifter1);
$lifter1Result= $lifter1Result->fetch_object();
$lifter1 = $lifter1Result->value ;
// echo $lifter1;

$lifter1Data = (object) [
  'value' => $lifter1,
  'station' =>"L1",
  
];

$assemblyData[] = $lifter1Data;

for($i=1;$i<=10;$i++){

    $station = sprintf("SELECT value from tact_time where type='station' AND category='assembly' AND number='$i' ORDER BY `timestamp` DESC LIMIT 1 ");
    $stationResult = $mysqli->query($station);
    $stationResult= $stationResult->fetch_object();
    $station = $stationResult->value ;

    $stationData = (object) [
    'value' => $station,
    'station' =>"S$i",
    
    ];

$assemblyData[] = $stationData;


}

$lifter2 = sprintf("SELECT value from tact_time where type='lifter' AND category='assembly' AND number=2 ORDER BY `timestamp` DESC LIMIT 1 ");
$lifter2Result = $mysqli->query($lifter2);
$lifter2Result= $lifter2Result->fetch_object();
$lifter2 = $lifter2Result->value ;
// echo $lifter1;

$lifter2Data = (object) [
  'value' => $lifter2,
  'station' =>"L2",
  
];

$assemblyData[] = $lifter2Data;




print json_encode($assemblyData);
$mysqli -> close();
?>