<?php
$dsn='mysql:host:localhost;dbname=myFirstOne';
$user='root';
$pass='';

try{
$conn=new PDO($dsn,$user,$pass);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// // $in="INSERT INTO `myFirstOne.users` (`name`, `age`, `mobile`) VALUES ( 'حسن', '30', '00000')";
$in="INSERT INTO myFirstOne.users (ID, name, age, mobile) VALUES (NULL, 'حسن', '30', '00000')";
 $conn->exec($in);
}
catch(PDOException $e){
    echo"NOT GOOOD" . $e->getMessage();

}