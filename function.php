<?php

function pn()
{
	echo "Akanksha <br>";
	echo "Prachi <br>";
	echo "Sita <br>";
}
//calling the function
pn();


//function with return
function rjit()
{
	return 3;
}

$a = rjit();// storing the value of function in a//
echo $a+1 ."<br>";

//function with arguments
function sum($a,$b,$c)//arguments
{
	$r=$a+$b+$c;
	return $r;
}
$x= sum (12,11,12);//parameters
echo $x;

?>