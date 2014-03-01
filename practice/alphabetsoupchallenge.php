<?php

echo "Do you want to play the alphabet soup game? (Y)es (N)o:  ";
// Gets user input
$user_answer = strtoupper(trim(fgets(STDIN)));

// Executes while answers yes
while ($user_answer == 'Y'){
	echo "Enter the string you want to receive back in alphabetical order: ";
	// Gets user string to be sorted in alphabetical order
	$user_string = fgets(STDIN);

    // Function in charge to do the task
	function alphabet_soup_game($string){
		  // Returns an array containing all the words found inside the string
		  $words = str_word_count($string, 1);
          // Initialization of the variable $sentence
		  $sentence = '';
           // Iterates through our array of words
		   foreach ($words as $word) {
                // Converts a string to an array of individual letters
			   	$words_splited = str_split($word);
			   	// Sorts our array
			   	sort($words_splited);
			   	// Converts our array back into an string
			   	$word = implode('', $words_splited);
			   	// Concatenates each word to our variable $sentence
			   	$sentence .= $word . ' ';

		   }
		// Returns the contents of the sentence   
	   	return $sentence . PHP_EOL;
	 }

	 // Calls the function and echoes the output
    echo alphabet_soup_game($user_string);
    echo "Do you want to play the alphabet soup game? (Y)es (N)o:  ";
    $user_answer = trim(fgets(STDIN));

} 

// If the user's answer is not yes
echo "Good bye" . PHP_EOL;
// Exits
die(0);

?>