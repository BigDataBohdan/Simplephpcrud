<?php
$dbhost = "localhost";
$dbuser = "root";
$dbPass = "";
$dbName = "crud";




$conn = mysqli_connect($dbhost,$dbuser,$dbPass,$dbName);
if(!$conn){
    die("smth wrong");
}


?>

