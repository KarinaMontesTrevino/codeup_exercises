<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($get_input, $sorting = false) {
  // Your solution goes here!

	// test if the user wants to sort 
	if ($sorting){

	//sorts the array in alphabetical order
		sort($get_input);
         
    }

  
    // pops the last element of the array passed and stores the element in this variable
	$result = array_pop($get_input);
	// takes the array and converts it into a string adding the word "and" before the last element
    $result = implode(', ', $get_input)." and ". $result;
     // return the result
	return $result;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// converts a string into an array
$physicists_array = explode(', ', $physicists_string);


// Humanize that list
$famous_fake_physicists = humanized_list($physicists_array, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>