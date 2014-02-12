<?php

$nothing = NULL;
$something = "";
$array = array(1,2,3);



// function that tests if a variable is set|empty

function set_empty_var($name, $value){

//unsets the variable $nothing
//unset($nothing);

    // tests if the variable is set
	if (isset($value)){
        
       echo $name . "is SET\n";   

    }

    // tests if the variable is empty
	if (empty($value)){

		echo $name . "is EMPTY\n";
	}


}

// tests if the variable $nothing is set| empty
set_empty_var('nothing ', $nothing) . PHP_EOL;
// tests if the variable $set is set| empty
set_empty_var('something ', $something) . PHP_EOL;

// Serialize the array $array, and output the results
$serialized = serialize($array);
//var_dump($serial); use this in case echo doesn't work
echo $serialized . "\n";

//Unserialize the array $array, and output the results
$deserialized = unserialize($serialized);
var_dump($deserialized);


?>
