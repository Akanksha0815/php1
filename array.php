<?php
//indexed array
$name = array("Zack","Anthony","tom","raghav");

echo $name[2]. "<br>";
echo $name[1]. "<br>";
echo $name[0]. "<br>";


//asociative array
$courses= array('c++'=> 1000 ,'php'=> 20000, 'java'=> 3000);

echo"<pre>";
print_r($courses);


//foreach loop
foreach ($courses as $key => $value) 
{
   echo "key is" .$key. "value is" .$value. "<br>";
}


//multidimensional array
$students = array ('Prachi'=>array('age'=>20, 'marks'=>40, 'class'=>'BE'),'rahul'=>array('age'=>40,'marks'=>50, 'class'=>40));

$college = array('mpct'=>array('teacher'=>array('bca'=>3,'mca'=>5), 'class'=>40));

echo "<pre>";
print_r($college);

echo $students['Prachi']['marks'];
//echo $college['mpct']['teacher']['bca'];




?>