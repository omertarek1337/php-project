<?php
include("../database/connection.php");

print_r($_POST);

$email = $_POST["email"];
$password = $_POST["password"];

$select  = "SELECT * FROM users WHERE email='$email' and password='$password' ";
$query = $conn->query($select);
$data = $query->fetch_assoc();


if($data){
header("location: http://google.com");
}else{

    header("location: ../login.php");

}

?>