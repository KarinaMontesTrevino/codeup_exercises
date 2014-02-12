<?php

$nothing = NULL;
$something = "";
$array = array(1,2,3);




function set_empty_var($name, $value){
	
	if (isset($value)){
        
       echo $name . "is SET\n";   

    }


	if (empty($value)){

		echo $name . "is EMPTY\n";
	}


}

set_empty_var('nothing ', $nothing) . PHP_EOL;
set_empty_var('something ', $something) . PHP_EOL;



?>
