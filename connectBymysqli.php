<?php


$host="localhost";
$user="root";
$pass="";
$dbName="alawaelmoderndb";

$conn=mysqli_connect($host,$user,$pass,$dbName);
//mysqli_set_charset($conn,"utf8");
//mysqli_query($conn, "SET NAMES 'utf8'") or die('Can\'t charset in DataBase');
//mysqli_query($conn, "SET CHARACTER SET utf8") or die('Can\'t charset in DataBase');
//mysqli_set_charset($conn, "utf8");

//mysql_query("set character_set_server='utf8'");
//mysql_query("set names 'utf8'");

if(isset($conn)){
    echo "Connected";
}
else{
    echo "Not Connected";
}