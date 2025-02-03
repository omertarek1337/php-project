<?php

// connect to database
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "third web proj";
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
/////////////////////////////////////

$username = $_POST["username"];
$password = $_POST["pass"];
$phone = $_POST["phone"];

$insert = "INSERT INTO login (usename , pass , phone) VALUES ('$username' , '$password' , '$phone') ";

$r =$conn->query($insert);



header("location: login.html");





?>



