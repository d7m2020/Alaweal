<pre>
    ahmeddddddd
       aliiii
         dddddddd
</pre>
<h1>ahemd mohammad<sub>Ali</sub></h1>
<abbr title="Abdulrhman Mohammad">Tooli</abbr>
<address>
    ذهبت الى الحديثة<br>
    ثم ذهب الى المنزل<br>
    ولم اكل

</address>
ذهبت الى الحديثة<br>
    ثم ذهب الى المنزل<br>
    ولم اكل
<?php
include "./include/templates/header.php";
if($_SERVER['REQUEST_METHOD']== "POST"){
   
    $t1= $_POST['s1'];
   // echo " $t1 ". (11>11 ? "go" : "b") ." ";

   $s=[1=> "iphone",2=> "radio", 3=>"sony"];
   function get_gift($num){
   return $num;
   
   }
   echo $s[get_gift($_POST['s1'])];

   function get_defualtt($name="p",$age=5,$city="j"){
       $line="<br>ur name is $name and ur old is $age <br> ur city $city";
       return $line;

   }
   echo get_defualtt(age:10,city:"jeddah");
}

// }else{
// echo "no";
// }



?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="s1" placeholder="اسمك">
<input type="submit"  value="login">
<button class="btn btn-primary" name="test">test</button>
</from>