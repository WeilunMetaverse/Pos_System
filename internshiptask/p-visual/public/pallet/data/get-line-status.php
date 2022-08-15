<?php
//get connection
$mysqli = new mysqli('43.74.21.49','root', 'soemphp','counter');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";

// $lineNo = $_GET['line'];
$lineNo = "L25";
// echo $lineNo;


// get pallet number data 
$lineStatus = sprintf('SELECT * From counter_status WHERE ln="L25" AND plus_date > DATE_SUB(CURDATE(),INTERVAL 1 DAY)');
// $lineStatusResult = $mysqli->query($lineStatus);

$result = $mysqli->query($lineStatus);
// $value = mysql_fetch_object($result);
$lineStatusResult= $result->fetch_object();

if(!$lineStatusResult){
  $line = (object) [
    'target' => 0,
    'actual' => 0,
    'different' => 0,
    'status'=> "offline",
  ];
}
else{
// echo $data[0]['status'];

// echo $lineStatusResult->status ;

// echo $status;

// echo $numberResult->VALUE



$line = (object) [
  'target' => $lineStatusResult->target,
  'actual' => $lineStatusResult->actual,
  'different' => $lineStatusResult->actual - $lineStatusResult->target,
  'status'=> $lineStatusResult->status,
];

}

// print json_encode($lineStatusResult) ;
print json_encode($line) ;
$mysqli -> close();
?>