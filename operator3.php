<?php
//logical operators

$username='admin';
$password='12345';

if($username =='admin' && $password =='1234') //AND operator
{
	echo "Welcome ! <br>";
}
else
{
	echo "Error <br>";
}

if($username =='admin' || $password =='1234') //OR operator
{
	echo "Welcome ! <br>";
}
else
{
	echo "Error <br>";
}

if($username =='admin' || $password !='1234') //NOT operator
{
	echo "Welcome ! <br>";
}
else
{
	echo "Error <br>";
}

?>