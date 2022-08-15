<?php

require_once("connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = password_hash("abc123", PASSWORD_BCRYPT);
    //$group_id = $_POST['group_id'];


    // $checkUser = $conn->query($checkUser);
    // $checkUser = $checkUser->fetch_object();

    $checkUser = sprintf("SELECT * FROM account_info where username='$name'");
    $result = $conn->query($checkUser);
    $result= $result->fetch_object();
    if ($result) {
//        echo "User already exist";
        $conn ->close();
        
    } else {
//        echo "New user created";
//        register new user here


        $sql = "INSERT INTO account_info (username, password)
        VALUES ('$name', '$password')";

        if($conn->query($sql) === TRUE){

            $conn ->close();
            
        }else{
            $conn ->close();
            
            // echo $polisDB->error();
        }


    }
}
?>