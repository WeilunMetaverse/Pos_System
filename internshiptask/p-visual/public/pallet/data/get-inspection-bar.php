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
$inspectionData=[];

// lifter3
$lifter3 = sprintf("SELECT value from tact_time where type='lifter' AND category='inspection' AND number=3 ORDER BY `timestamp` DESC LIMIT 1 ");
$lifter3Result = $mysqli->query($lifter3);
$lifter3Result= $lifter3Result->fetch_object();
$lifter3 = $lifter3Result->value ;
// echo $lifter3;

$lifter3Data = (object) [
  'value' => $lifter3,
  'station' =>"L3",
  
];

$inspectionData[] = $lifter3Data;

for($i=1;$i<=18;$i++){

    $station = sprintf("SELECT value from tact_time where type='station' AND category='inspection' AND number='$i' ORDER BY `timestamp` DESC LIMIT 1 ");
    $stationResult = $mysqli->query($station);
    $stationResult= $stationResult->fetch_object();
    $station = $stationResult->value ;

    $stationData = (object) [
    'value' => $station,
    'station' =>"S$i",
    
    ];

$inspectionData[] = $stationData;


}

$lifter4 = sprintf("SELECT value from tact_time where type='lifter' AND category='inspection' AND number=4 ORDER BY `timestamp` DESC LIMIT 1 ");
$lifter4Result = $mysqli->query($lifter4);
$lifter4Result= $lifter4Result->fetch_object();
$lifter4 = $lifter4Result->value ;
// echo $lifter1;

$lifter4Data = (object) [
  'value' => $lifter4,
  'station' =>"L4",
  
];

$inspectionData[] = $lifter4Data;




print json_encode($inspectionData);
$mysqli -> close();
?>