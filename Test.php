
 <?php
$dsn='mysql:host:localhost;dbname=myFirstOne';
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


function  str_re($s){
    $str=[];
 for($k=0; $k<strlen($s); $k++){
  $str[]=$s[$k];

 }
return $str;
}
echo"----------------";
echo "<pre>";

print_r(str_re("ALI"));

echo "</pre>";
echo"----------------";
echo "<br>";
function countTooli($r,$g){
    $d=[];
    $f=[];
    $col[]=array($d , $f);
    for($k=0; $k<strlen($r);$k++){
 if($g>$k){
    $d[]=$r[$k];
    
 }
 else{
$f[]=$r[$k];
 }
 
       
    }
    $f[]+=count($f);
    $col=$d . $f;
    return array($d,$f);
}
echo "<br>";
echo"111111111111111111111";
echo "<pre>";

print_r(countTooli("ALITooliattas",3));

echo "</pre>";
echo"1111111111111111111111";
echo "<br>";

list($o,$t)=countTooli("ALITooliattas",3);
print_r($o);
print_r($t);

function  str_xe($x){
    $str1=[];
 for($k=strlen($x)-1; $k>=0; $k--){
  $str1[]=$x[$k];

 }
return $str1;
}
echo"----------------";
echo "<pre>";

print_r(str_xe("ALI"));

echo "</pre>";
echo"----------------";
//echo strlen("ali");
echo "</pre>";
function countZero($d){
 $f=[];
for($k=0;$k<strlen($d); $k++){
$f[]=$k;

}
return count($f);
}
echo "<br>";
echo countZero('ali ali');
echo "<br>";
echo 10 & false;
echo "<br>";
echo "<br>";
$t=date("M");
echo $t;
echo "<br>";
echo "<br>";
$cars=["camry","corlla","nisan"];
foreach($cars as $car => $index){
    if($car==1){
        continue;
    }
echo "$car $index<br>";

}
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<html><head></head>
<body>
<a href="https://www.w3schools.com" target="_blank">Visit  <?=$dsn?></a>
</body></html>
