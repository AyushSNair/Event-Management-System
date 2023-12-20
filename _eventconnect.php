<?php
$server = "localhost";
$username = "root";
$password = "Aryan@2004";
$database = "event5022140";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
  die("Error" . mysqli_connect_error());
}
?>