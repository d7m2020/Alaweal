<<<<<<< Updated upstream
 <?php
$dsn='mysql:host:localhost;dbname=myFirstOne';
=======
<?php
/*$dsn='mysql:host:localhost;dbname=myFirstOne';
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
} 
=======
}*/

echo gettype(2 + true);
echo "<br>";
echo "<br>";
echo php_uname();
echo "<br>";
echo "<br>";
echo phpversion();
echo "<br>";
echo "<br>";
echo __LINE__;
echo "<br>";
echo "<br>";
echo __FILE__;
echo "<br>";
echo "<br>";
echo __DIR__;
echo "<br>";
echo "<br>";
echo 26 % 10 ;
echo "<br>";
echo "<br>";
echo @$a ;
echo "<br>";
echo "<br>";
echo 10 & false;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
>>>>>>> Stashed changes
