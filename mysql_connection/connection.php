<?php
$servername="localhost";
$username="root";
$password="";
//$port=3307;
$database="wtl";

$conn=new mysqli($servername, $username, $password);

if($conn->connect_error){
    die ("connection failed :" . $conn->connect_error);
}
$sql="create database wtl";

   echo "connected successfully";
?>