<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    $t1= $_POST['s1'];
    echo $t1;



}else{
echo "no";
}



?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="s1" placeholder="اسمك">
<input type="submit"  value="login">
</from>