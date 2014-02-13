<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($get_input, $sorting = false) {
  // Your solution goes here!
    // takes a string and converts it into an array
    $exploded = explode(', ', $get_input);
     
	// test if the user wants to sort 
	if ($sorting){

	//sorts the array in alphabetical order
		sort($exploded);
         
    }

    // pops the last element of the array passed and stores the element in this variable
	$last_element = array_pop($exploded);
	// takes the array and converts it into a string adding the word "and" before the last element
    return $imploded = implode(', ', $exploded)." and ". $last_element;
     
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>