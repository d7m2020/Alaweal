<?php 
$dsn='mysql:host=localhost;dbname=alawaelmoderndb';
$user='root';
$pass='';
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
);
try{
    $conn=new PDO($dsn,$user,$pass,$option);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Weclome";
}
catch(PDOException $e){
    echo "Sorry Try it again" . $e->getMessage() ;

}