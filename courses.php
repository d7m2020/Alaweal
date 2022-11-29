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
require "./include/templates/src/Arabic.php";
require "./include/templates/fpdf/fpdf.php";
//include"connect.php";
//header('Content-type: image/jpeg'); 
?>
 
 <?php 

$fileName="./Layout/images/format.jpg";
//mysql_query("set traineeName utf8");

$sql="SELECT * FROM courses LIMIT 0,5";

$resulet=$conn->query($sql);
//mysqli_query($conn, "SET Name 'utf8'") or die('Can\'t charset in DataBase1');
//mysqli_query($conn, "SET CHARACTER SET utf8") or die('Can\'t charset in DataBase2');
$Arabic = new \ArPHP\I18N\Arabic();

$font=realpath('./Layout/webfonts/arial.ttf');

    foreach($resulet as $row){
    $x=800;
    $y=650;
    $img_source=imagecreatefromjpeg($fileName);
    $textcolor=imagecolorallocate($img_source, 0, 0, 255);
    $text = $row['traineeName'];
   $text=$Arabic->utf8Glyphs($text);
  
    imagettftext($img_source, 50, 0,$x, $y, $textcolor,$font, $text);
    $x=1080;
    $y=777;
    $text = $row['courseName'];
    $text=$Arabic->utf8Glyphs($text);
    imagettftext($img_source, 50, 0,$x, $y, $textcolor,$font, $text);
    imagejpeg($img_source,"courses/$row[id].jpg");
    $pdf=new FPDF('L','in',[11.7,8.27]);
    $pdf->AddPage();
    $pdf->Image("courses/$row[id].jpg",0,0,11.7,8.22);
    $pdf->Output("courses/$row[id].pdf","F");
    unlink("courses/$row[id].jpg");
    imagedestroy($img_source);
}

?>
<?php 






