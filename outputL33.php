<?php
$servername = "43.74.21.81";
$username = "root";
$password = "soemphp";
$dbname = "station_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = mysqli_query($conn, "SELECT * FROM production_line_L33 where station_group = 'assembly'");

$data_station = [];
while ($row = $sql->fetch_assoc()) {

    $data_station_details = (object)[
        'station' => $row['station'],
        'robot' => $row['robot'],
        'cpu' => $row['cpu'],
        'status' => $row['status'],
    ];
    $data_station[] = $data_station_details;
    // $json[] = $row['station'];
    // $json1[] = $row['robot'];
    // $json2[] = $row['cpu'];
    // $json3[] = $row['status'];

}

echo json_encode($data_station);
