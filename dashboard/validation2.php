<?php 

session_start(); 

include("connection.php");



if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $name = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($name)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM account_info WHERE username='$name' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $name && $row['password'] === $password) {

                echo "Logged in!";
                
                $_SESSION['username'] = $row['username'];

                $_SESSION['ID'] = $row['ID'];

                
                
                header("Location: dashboard.php?success=1");
                exit();

            }else{
                
                $error="Invalid password and username.Please try again.";
                header("Location: login.php?error=true");
                exit();

            }

        }else{
            $error="Invalid password and username.Please try again.";
            header("Location: login.php?error=true");
            exit();

        }

    }

}else{

    header("Location: login.php");

    exit();

}



?>