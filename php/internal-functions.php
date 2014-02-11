<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);




function set_empty_var($variable){
	
	if (isset($variable)){
        
        echo '$nothing is SET';    

	}


	if (empty($variable)){

		echo '$nothing is EMPTY';
	}


	// if (is_null($variable)){
       
 //        echo  '$nothing is EMPTY';

	// }


}

$serialized = serialize($array);
echo $serialized;

$deserialized = unserialize($serialized);
var_dump($deserialized);




?>
