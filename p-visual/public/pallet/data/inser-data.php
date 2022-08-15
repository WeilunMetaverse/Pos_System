<?php

$mysqli = new mysqli('43.74.21.81','root', 'soemphp','labs');

$url = 'lifter.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$pallet = json_decode($data);

// echo count($pallet);

for($i=0;$i<count($pallet);$i++)
{
    // echo $pallet[$i]->station."</br>";
    $number= $pallet[$i]->number;
    $cycle= $pallet[$i]->cycle;
    $autoserial= $pallet[$i]->autoserial;
    $no= $pallet[$i]->station;
    $sql = "INSERT INTO pallet_setting (category,type,number,cycle,autoserial,no,line)
    VALUES ('inspection', 'station', '$number','$cycle','$autoserial','$no','L25')";

    // if ($mysqli->query($sql) === TRUE) {
    //     echo "Data saved successfully</br>";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $mysqli->error;
    // }
    echo $sql."</br>";
}

?>