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

// $lifterNo = $_GET['lifter'];
$type= $_GET['type'];
$number= $_GET['number'];
$category= $_GET['category'];

// echo $type.$number.$category;

$currentDate = date('Ymd');

// get tact time data 
$tactTime = sprintf("SELECT value from tact_time where type='$type' AND category='$category' AND number=$number ORDER BY `timestamp` DESC LIMIT 1 ");
$tactTimeResult = $mysqli->query($tactTime);
$tactTimeResult= $tactTimeResult->fetch_object();
$tactTime = $tactTimeResult->value ;


$tactTimeData = (object) [
  'value' => $tactTime,
];

print json_encode($tactTimeData) ;
$mysqli -> close();
?>