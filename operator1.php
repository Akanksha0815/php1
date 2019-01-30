<?php
//comparison operator
$a=50;
$b=30;

if($a==$b)
{
	echo "Test1 : a is equal to b <br/>";
}
else
{
	echo "Test1 : a is not equal to b <br/>";
}
if($a>$b)
{
	echo "Test2 : a is greator than b <br/>";
}
else
{
	echo "Test2 : a is not greator than b <br/>";
}
if($a<$b)
{
	echo "Test3 : a is less than b <br/>";
}
else
{
	echo "Test3 : a is not less than b <br/>";
}
if($a != $b)
{
	echo "Test4 : a is not equal to b <br/>";
}
else
{
	echo "Test4 : a is equal to b <br/>";
}
if($a>=$b)
{
	echo "Test5 : a is either equal to or greator than b <br/>";
}
else
{
	echo "Test5 : a is not greator than equal to b <br/>";
}
if($a<=$b)
{
	echo "Test6 : a is either equal to or less than b <br/>";
}
else
{
	echo "Test6 : a is not less or equal to b <br/>";
}
	


//program

$a=18;
$b=12;

if($a>=18)
{
	echo "you can vote <br>";
}
else
{
	echo "Not eligible";
}
if($b>=18)
{
	echo "you can vote";
}
else
{
	echo "Not eligible <br>";
}
if($b==18)/*Equal operator
The comparison operator called Equal Operator is the double equal sign “==”. This operator accepts two inputs to compare and returns true value if both of the values are same (It compares only value of variable, not data types) and return a false value if both of the values are not same.*/
{
	echo "you can vote";
}
else
{
	echo "Not eligible <br>";
}
if($b===18) /*Identical operator
The comparison operator called as the Identical operator is the triple equal sign “===”. This operator allows for a much stricter comparison between the given variables or values.
 This operator returns true if both variable contains same information and same data types otherwise return false.*/
{
	echo "you can vote";
}
else
{
	echo "Not eligible";
}


//example of identical operator
  
// Variable contains integer value 
$x = 999; 
  
// Vatiable contains string value 
$y = '999'; 
  
// Compare $x and $y 
if ($x === $y) 
    echo 'Data type and value both are same'; 
else
    echo 'Data type or value are different'; 
?> 
?>
