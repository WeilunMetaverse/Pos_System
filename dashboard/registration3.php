<?php 

session_start();
header("location:login.php");   

include("connection.php");

// Create connection
// $conn = mysqli_connect('localhost','root','','station_data');
// $conn = mysqli_connect('43.74.21.81','root','soemcyber','station_data');

$name = $_POST['username']; //username = name="username"
// $password = $_POST['password'];

$password = $_POST['password'];//password_hash("abc123", PASSWORD_BCRYPT);

$sql = "select * from account_info where username = '$name' limit 1";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo 'Username Already Taken';
    

}
else{
    $reg = "insert into account_info(username, password) value ('$name','$password')";
    mysqli_query($conn,$reg);
    echo 'Registration Successful';
    
    
}

if( isset( $_POST['submit'] ) ){

    $name = $_SESSION['username'];
    $password = $_POST['password'] ;
    
    //$password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "UPDATE account_info SET password='$password' where username='$name'";
    // $labs->query($sql);

    if( $conn->query($sql) === TRUE){

    // echo "<script type='text/javascript'>
    // window.location = '../account-settings.php?act=success';
    // </script> ";
    }else{
        // echo "<script type='text/javascript'>
        // window.location = '../account-settings.php?act=failed';
        // </script> ";
    }

} 



?>