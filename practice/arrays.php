<?php

//http://www.techrepublic.com/article/17-useful-functions-for-manipulating-arrays-in-php/#.
//http://www.phpbuilder.com/columns/php_arrays/PHP_Arrays_12-8-2011.php3
//http://www.w3schools.com/php/php_ref_array.asp
//http://leve.rs/blog/correct-array-manipulation-in-php/

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }

  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>" . PHP_EOL;
  }

$names = array('1' => 'Karina',
               '2' => 'Leesly',
               '3' => 'Tavo');

print_r($names['1']);
print_r($names['2']);
print_r($names['3']);

foreach ($names as $name){

	echo $name .PHP_EOL;
}

foreach ($names as $name){

	var_dump($name[2]) . PHP_EOL;
}

foreach ($names as $key => $name){
    // print content of array
    print_r($names) . PHP_EOL;
    // print each index 
	echo $key .  PHP_EOL;
	// print the value of each key
	echo $name .  PHP_EOL;
}


