<?php
require_once("db.php");

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty(trim($login)) || empty(trim($pass))) {
    echo 'empty';
}else{
        $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Login: " . $row["login"] . "<br>";
                echo "Email: " . $row["email"] . "<br>";
            }
        }else{
            echo "0 results";
        }
}
