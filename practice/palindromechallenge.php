<?

function palindrome($word){
$message= '';
	$reverse=strrev($word); // reverse the word

	if ($word == $reverse){// compare if  the original word is same as the reverse of the same word
		$message = 'true: this word is a palindrome!'; 
		return $message . PHP_EOL;
	}
	else
	{
		$message = 'false: this word is NOT a palindrome!';
		return $message . PHP_EOL;
	}
}



  echo "Do you want to play the palindrome game? Type (Y)es to play or anything else to Quit:  ";
  $answer = strtoupper(trim(fgets(STDIN)));

while ($answer == 'Y'){

	echo "Enter the sentence o word to evaluate:  ";
	$user_string= trim(fgets(STDIN));
	$string =strtolower(str_replace(array('.', ',', ' ', ':', "'", ';'), '' , $user_string));


	echo palindrome($string) . PHP_EOL;
	echo "Do you want to play the palindrome game? Type (Y)es to play or anything else to Quit:  ";
    $answer = strtoupper(trim(fgets(STDIN)));

}

echo "It is sad to see you leaving" . PHP_EOL;
exit (0);