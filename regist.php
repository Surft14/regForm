<?php
require_once ('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

    if (empty(trim($login)) || empty(trim($pass)) || empty(trim($repeatpass)) || empty($email)) {
        echo "empty";
    }else{
        if (trim($pass) != trim($repeatpass)) {
            echo "notmatch";
        }else{
            $sqlout = "SELECT `login` FROM `users` WHERE `login` = '$login'";
            $result = $conn->query($sqlout);
            if ($result->num_rows > 0) {
                echo "exist login";
            }else{
                $sqlin = "INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$pass', '$email') ";
                if($conn->query($sqlin) === TRUE){
                    echo "Registration success";
                }else{
                    echo "Error: ".$conn->error;
                }
            }
        }
    }


