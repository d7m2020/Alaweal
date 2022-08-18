
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

} 
=======
}*/
$data=[
	'pages'=>[
		[
		'title'=>'About us',
		'content'=>'We’re impartial and independent, and every day we create distinctive, world-class programmes and content which inform, educate and entertain millions of people in the UK and around the world.',
		'cover'=>'images/about.jpg'

		],
		[
		'title'=>'privacy policy',
		'content'=>'We use your personal information to make the BBC better for you and for everyone. That includes doing things like:',
		'cover'=>'images/pp.png'

		],
	],
	'posts'=>[
		[
		'title'=>'Labours deputy Watson condemns bid to oust him',
		'exerpt'=>'He told the BBC he found out late on Friday in a text message that a motion had been tabled by Jon Lansman, founder of Labour grassroots group Momentum.',
		'content'=>'He defended his role, saying he had been elected by party members and - rather than abolishing the post - they could trigger an election themselves if they wanted to remove him.<br>Mr Watson has urged Labour to unequivocally back remain" and had said he wants another public vote on the UKs membership of the EU before any general election.',
		
		
		],
		
		[
		'title'=>'Rugby World Cup 2019: Who stands in Wales path to the final?',
		'exerpt'=>'Wales begin their ninth World Cup campaign ranked amongst the favourites, despite a string of set-backs that in previous tournaments would have had them written off as contenders',
		'content'=>'Warren Gatlands side are without first-choice number eight Taulupe Faletau and fly-half Gareth Anscombe through injury, and had backs coach Rob Howley sent home from Japan for an alleged betting infringement - just six days before their opening game against Georgia.',
		
		]
		
	]
];
/*
echo "<pre>";
print_r($data);
echo "</pre>";
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
*/
$ah=array("a",2,"t");
for ($x=0 ;$x<count($ah);$x++){
	echo($ah[$x]);
}
echo "<br>";
echo "<br>";
$r=$_SERVER["PHP_SELF"];
echo($r);
echo "<br>";
echo "<br>";
if($_SERVER['REQUEST_METHOD']=="POST"){
///// To read from file
$txt="";
$myfile=fopen("tooli.txt","r");
$txt=fread($myfile,filesize("tooli.txt"));
fclose($myfile);
/////////////

/////////To create and write in file
$in=fopen("tooli2.txt","w");
fwrite($in,$_POST["t1"]);
fclose($in);
/////////////////
echo "<br>";
echo "<br>";
$myt=$_FILES["myup"];
$size=$myt["size"];
if($size<111616){
	copy($myt['tmp_name'],$myt['name']);
}
else{
	echo"eroor";
}

echo "<br>";
echo "<br>";
echo $myt["type"];echo "<br>";
echo gettype($size);

echo "<br>";
//copy($myup)
}
if(isset($_POST['btnSet'])){
setcookie("name","tooli");

}
if(isset($_POST['btnGet'])){
	echo $_COOKIE['name'];
	
	}
?>
<form  method="POST" enctype="multipart/form-data">
<textarea  name="s1" placeholder="اسمك"><?php echo $txt; ?></textarea></br></br>
<input type="text" name="t1" value="gOOD" placeholder="اسمك"></br></br>

<input type="file" name="myup"  value="001_1024x731.jpg"></br></br>
<input type="submit"  value="login"><br><br>
<button name="btnSet">Set</button><br>
<button name="btnGet">Get</button>
</from>
<?php


echo "<br>";
echo "<br>";