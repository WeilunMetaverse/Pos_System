<?php
//get connection
// $mysqli = new mysqli('43.74.21.77','root', 'soemcrawler','pallet');
$mysqli = new mysqli('43.74.21.81','root', 'soemphp','labs');

if(!$mysqli)
{
  die("Connection failed: " . $mysqli->error);
}else
// echo "Database exist";

// $lineNo = $_GET['line'];
$line="L25";
$type=$_POST['type'];
$number = $_POST['number'];;
$category = $_POST['category'];;
$value = $_POST['value'];
$autoserial = $_POST['autoserial'];

// if()
// echo $lineNo;

$sql = "INSERT INTO tact_time (line,type,number,category,value,autoserial)
VALUES ('$line', '$type', '$number','$category','$value','$autoserial')";

if ($mysqli->query($sql) === TRUE) {
    echo "New tact time ".$type." ".$number." Category ".$category." Autoserial : " .$autoserial." saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli -> close();

?>