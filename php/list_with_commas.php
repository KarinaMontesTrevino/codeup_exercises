<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($get_input) {
  // Your solution goes here!
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
//sorts the array in alphabetical order
sort($physicists_array);

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_array);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>