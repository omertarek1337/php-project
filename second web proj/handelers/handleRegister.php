<?php
session_start();
include("../core/functions.php");
include("../core/validations.php");
include("../database/connection.php");

$errors = [];
////////////////////////////////////////


if(checkRequestMethod("POST") == "POST" ){
// $name = sanitizeInput($_POST["name"]);
// $email = sanitizeInput($_POST["email"]);
// $password = sanitizeInput($_POST["password"]);



foreach($_POST as $key => $value):////

$$key = sanitizeInput($value);

endforeach;////

//validations 
// name=> required , min:3 , max:25

if(!requiredVal($name)){
    $errors[] = "name is required";
}else if(!minVal($name , 3)){
    $errors[] = "name must be greater than 3 chars";
}else if(!maxVal($name , 25)){
    $errors[] = "name must be smaller than 25 chars";
}
// email=> required ,email

if(!requiredVal($email)){
$errors[] = "email is required";
}else if(!emailVal($email)){
$errors[] = "type a valid email";
}

// password=> required ,min : 6 , max : 20

if(!requiredVal($password)){
    $errors[] = "password is required";
}else if(!minVal($password , 6)){
    $errors[] = "password must be greater than 6 chars";
}else if(!maxVal($password , 20)){
    $errors[] = "password must be smaller than 20 chars";
}

if(empty($errors)){
$sql = "INSERT INTO users (name , email , password) VALUES ('$name' , '$email' , '$password')";
$r =$conn->query($sql);

header("location: ../login.php");

}else {
    $_SESSION["errors"] = $errors;
    header("location: ../register.php");
    die;
}



}else{
    echo 'omar';
}













?>