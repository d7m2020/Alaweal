<?php

class d7m{
public $tall;
public $salary;

function abuTooli(){
    $tall1=$this->tall;
    $salary1=$this->salary;

    return $tall1 . ": ". $salary1 ;

}


}
class tooli_con{
public $name;
public $age;

function __construct($name,$age){
$this->name=$name;
$this->age=$age;


}
function getName(){
    $name1=$this->name;
    $age1=$this->age;

    echo "<h3>$name1</h3><h3>$age1</h3>";
}
}

class tooli extends d7m{
    public $name;
    public $age;
    
    function __construct(){

    
    
    }
function getName(){
    $name1=$this->name;
    $age1=$this->age;
    $s=$this->abuTooli();
    echo "<h3>$name1</h3><h3>$age1</h3>
    <h3>$s</h3>";
}

}


if(isset($_POST['class'])){
    

    $t= new tooli();
    $t->name='ali';
    $t->age='22';
    $t->salary="3000$";
    $t->tall="158cm";

    $t->getName();

    $t1= new tooli();
    $t1->name='ahmed';
    $t1->age='234';
    $t1->getName();
 
}
if(isset($_POST['const'])){
$r=new tooli_con('amr',3);
$r->getName();
}


?>

<form method="POST">
    <br><br>
    <div><button name="class">Click To Test</button><br></div>
    <div><button name="const">Click To TestConst</button><br></div>

</form>