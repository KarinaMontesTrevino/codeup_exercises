<?php

$nothing = NULL;
$something = "";
$array = array(1,2,3);


// function that tests if a variable is set|empty

function set_empty_var($name, $value){
	
	if (isset($value)){
        
       echo $name . "is SET\n";   

    }


	if (empty($value)){

		echo $name . "is EMPTY\n";
	}


}

// passes the arguments used by the function set_empty_var
set_empty_var('nothing ', $nothing) . PHP_EOL;
set_empty_var('something ', $something) . PHP_EOL;

// Serialize the array $array, and output the results
$serialized = serialize($array);
echo $serialized . "\n";

// Unserialize the array $array, and output the results
$deserialized = unserialize($serialized);
var_dump($deserialized);



?>
