<?php 

session_start();
include("connection.php");

// Create connection
// $conn = mysqli_connect('localhost','root','','station_data');


$name = $_POST['username']; //username = name="username"
$pass = $_POST['password'];

$sql = "select * from account_info where username = '$name' && password = '$pass'";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    echo '<script>alert("Login Successfully")</script>';

    header('location:dashboard.php');


}
else{
    echo 'Login Failure';
    header('location:login.php');
    
}




// include("connection.php");


// $name = mysqli_real_escape_string($conn, $_POST['username']);
// $pass= mysqli_real_escape_string($conn, $_POST['password']);


// 		$sql = "INSERT INTO account_info (username, password) VALUES('$name', '$pass')";
// 		mysqli_query($conn,$sql);

// 			header("location:login.php");
?>