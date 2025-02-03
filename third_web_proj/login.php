
<?php 
// connect to database
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "third web proj";
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

////////////////////////////////

$username = $_POST["username"];
$password = $_POST["pass"];

$select  = "SELECT * FROM login WHERE usename='$username' and pass='$password' ";
$query = $conn->query($select);
$data = $query->fetch_assoc();


if($data){
header("location: http://google.com");
}else{

    header("location: login.html");

}
?>




