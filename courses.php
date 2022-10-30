<head>
<title>Arabic Glyphs to Render Arabic Text</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<?php
//header("Content-type: image/png");
//header ('Content-Type: text/html; charset=UTF-8');
//include "./include/templates/header.php";
include"connectBymysqli.php";
//require "./include/templates/Arabic.php";
require "./include/templates/src/Arabic.php"
//include"connect.php";
//header('Content-type: image/jpeg'); 
?>
 
 <?php 

$fileName="./Layout/images/format.jpg";
//mysql_query("set traineeName utf8");

$sql="SELECT * FROM courses LIMIT 0,5";

$resulet=$conn->query($sql);
$Arabic = new \ArPHP\I18N\Arabic();

$font=realpath('./Layout/webfonts/Amiri-Regular.ttf');
//$text = 'بسم الله الرحمن الرحيم';
 // $text = $Arabic->utf8Glyphs($text);
 // $font  = $path.'/GD/ae_AlHor.ttf';

    //echo "$row[traineeName]<br>";
    foreach($resulet as $row){
    $x=200;
    $y=200;
    $img_source=imagecreatefromjpeg($fileName);
    $textcolor=imagecolorallocate($img_source, 0, 0, 255);
    $text = $row['traineeName'];
   $Arabic->arQueryAllForms($text);
  
   // imagestring($img_source,5,$x,$y,$text,$textcolor); 'Arabic Glyphs:');
   //imagettftext($img_source, 18, 0,$x, $y, $textcolor,$font, 'Arabic Glyphs:');
    imagettftext($img_source, 18, 0,$x, $y, $textcolor,$font, $text);
    imagejpeg($img_source,"courses/$row[id].jpg");
    imagedestroy($img_source);
}
    //echo 
    // echo "";

/*$font=realpath('./Layout/webfonts/arial.ttf');
$image=imagecreatefromjpeg("./Layout/images/format.jpg");
$color=imagecolorallocate($image, 51, 51, 102);
$date=date('d F, Y');
imagettftext($image, 18, 0, 880, 188, $color,$font, $date);
$name="YOUTUBE";
imagettftext($image, 48, 0, 120, 520, $color,$font, $name);
//imagejpeg($image,"certificate/$name.jpg");
imagejpeg($image);
imagedestroy($image); */
?>


