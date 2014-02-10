<?php
do{
//pick a random  number

   $random_number = mt_rand (1, 100);

//prompts user to guess the random number
  fwrite(STDOUT, 'Guess? ');

//allocate the input from user in a variable
  $guess_number = fgets(STDIN);

// if user guess is less than the number input HIGHER
  if($guess_number == $random_number){
    echo "Congratulations, you win\n";  
  } elseif ($guess_number < $random_number){
  	echo "HIGHER\n";
  } else{
    echo "LOWER\n";
  }

}while ($guess_number != $random_number);

exit(0);


//if (rand == $guess_number){

//   echo
//}

//fwrite (STDOUT,  $guess_number . "\n");

?>