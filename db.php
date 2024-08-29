<?php
$servername = "MySQL-5.7";
$username = "root";
$password = "";
$dbname = "DB_formReg";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    "Connected successfully";
} ?>