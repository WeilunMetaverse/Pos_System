<?php

require_once("connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = password_hash("abc123", PASSWORD_BCRYPT);
    //$group_id = $_POST['group_id'];

    if ($checkUser) {
        //        echo "User already exist";
        $sysdevelDB->close();
        echo "<script type='text/javascript'>
        window.location = '../register-failed.php';
        </script> ";
    } else {
        //        echo "New user created";
        //        register new user here


        $user_sysdevel = "INSERT INTO sysdevel_user (name, email, globalID, password, department, role)
        VALUES ('$name','$email','$globalID', '$password','$department', '$role')";

        if ($sysdevelDB->query($user_sysdevel) === TRUE) {

            $sysdevelDB->close();
            echo "<script type='text/javascript'>
                   window.location = '../register-success.php';
            </script> ";
        } else {
            $sysdevelDB->close();
            echo "<script type='text/javascript'>
            window.location = '../register-failed.php';
            </script> ";
            // echo $polisDB->error();
        }
    }
}
