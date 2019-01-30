<?php
//this humesha class k andar k attributes ki hi bt krta h
 class rjit 
 {
     public $name= "Akanksha";
     public $age= "20";
     public $department= "IT";

     public function user()
     {
     	echo $this->name ."<br>".$this->age .$this->department; 
     }
 }

$hello = new rjit();// creation of an object

$hello->user();


?>