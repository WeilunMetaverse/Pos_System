<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "station_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT JSON_OBJECT('id', id, 'line', line) FROM production_line_l23;";
$db = new PDO("mysql:$dbname", $username, $password);
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

file_put_contents("output.txt", json_encode($result));
