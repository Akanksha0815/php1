<?php

class rjit
{
	public $name = "vikas";
	public $age = 20;


	public function hello()
	{
		echo "hello rjit";
	}

}
 $a= new rjit(); // making of an object
 $b= new rjit();
 $b->hello();
 echo $a->name;


?>