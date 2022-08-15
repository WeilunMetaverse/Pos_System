<?php 

session_start();
header("location:login.php");   

// include("connection.php");

// Create connection
$conn = mysqli_connect('43.74.21.81','root','soemcyber','station_data');

$name = $_POST['username']; //username = name="username"
$pass = $_POST['password'];

$sql = "select * from account_info where username = '$name' limit 1";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo 'Username Already Taken';
    

}
else{
    $reg = "insert into account_info(username, password) value ('$name','$pass')";
    mysqli_query($conn,$reg);
    echo 'Registration Successful';
    
    
}



?>









<!-- 
if( isset( $_POST['submit'] ) ){

$name = $_POST['username'];
$pass = $_POST['password'] ;

$pass = password_hash($pass, PASSWORD_BCRYPT);
$sql = "UPDATE account_info SET password='$pass' where username='$name'";
// $labs->query($sql);

if($sysdevelDB->query($sql) === TRUE){

echo "<script type='text/javascript'>
window.location = 'login.php?act=success';
</script> ";

}else{
    echo "<script type='text/javascript'>
    window.location = 'login.php?act=failed';
    </script> ";
   
}

}  -->