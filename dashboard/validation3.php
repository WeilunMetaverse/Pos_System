<?php
require_once("connection.php");

session_unset();

// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo"hi";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $cpassword = password_hash($password, PASSWORD_DEFAULT);
    // $crypt_padmin = password_hash("abc123", PASSWORD_DEFAULT);
    // $crypt_psysdev = password_hash("syscyber", PASSWORD_BCRYPT);

    $checkUser = sprintf("SELECT * FROM account_info where username='$username'");
    $result = $conn->query($checkUser);
    $result= $result->fetch_object();
    // Check if username is empty   
    // Password is correct, so start a new session
   
    if($result)
    {   
        session_start();
        if($username == $result->username && password_verify($password, $result->password)){
            // Store data in session variables
            // Redirect user to welcome page
            header("location: dashboard.php");
        }else{
            header("location: login.php");
        } 
        
    }    
    else
    {
        header("location: login.php");
    }
                                                 
}

$conn -> close();

?>