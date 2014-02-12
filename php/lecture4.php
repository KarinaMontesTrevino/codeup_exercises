<?php

// $student = array(
//      'first_name' => 'Izzy',
//      'last_name' => 'R' 

// 	);

$student= 'Joeadadakdakdkasjajdajsjjajdadjadhaahnxbznxzbhdbnanjankalknnakjnsjnjjhdhshdakdakladjadkjajkdjajdjajdjajdajdkjadkadklakdadlakldkdlkdaklsdklakldlkadlalkdalkakldadakdakakd';

function is_valid_name($name){
	if (strlen($name) > 1 && strlen ($name) <= 50){
    	return true;
	}else{
	return false;
    }
}

var_dump(is_valid_name($student));

?>