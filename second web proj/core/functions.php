<?php


function checkRequestMethod($request){
if($_SERVER["REQUEST_METHOD"] == $request){
return true;
}else{
    return false;
}
}
//////////////////////////////////////
function checkPostInput($input){
if(isset($_POST[$input])){
return true;
}else{
    return false;
}
}
///////////////////////////////////////
function sanitizeInput($input){

    return trim(htmlspecialchars(htmlentities($input)));
}










?>