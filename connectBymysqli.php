<?php


$host="localhost";
$user="root";
$pass="";
$dbName="alawaelmoderndb";

$conn=mysqli_connect($host,$user,$pass,$dbName);


if(isset($conn)){
    echo "Connected";
}
else{
    echo "Not Connected";
}