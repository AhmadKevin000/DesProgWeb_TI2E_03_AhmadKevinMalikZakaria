<?php
class animal 
{
    protected $name;
    public function __construct($name){
        $this ->name = $name;
    }
    public function eat(){
        echo $this->name . "is eating.<br>";
    }
    public function sleep(){
        echo $this->name . "is sleeping.<br>";
    }
}
class cat extends animal{
    public function meow(){
        echo $this->name . "says woof!.<br>";
    }
}
class dog extends animal{
    public function bark(){
        echo $this->name . "says woof!.<br>";
    }
}
$cat = new cat("whiskas");
$dog = new dog("buddy");
$cat->eat(); 
$dog->sleep();
$cat->meow(); 
$dog->bark();

?>