<?php

  //pick a random  number

   $random_number = mt_rand (1, 100);

do{

  //prompts user to guess the random number
  fwrite(STDOUT, 'Guess a number between 1 and 100 ? ');
  
 //allocate the input from user in a variable 
     $guess_number = fgets(STDIN);



  if($guess_number == $random_number){
    echo "Congratulations, YOU WIN!\n";  //if user guess is correct tell them he/she wins
  } elseif ($guess_number < $random_number){
  	echo "Please guess higher\n"; // if user guess number is lower tell them to guess higher
  } else{
    echo "please guess lower\n"; // if the user guess number is higger tell them to guess lower
  }

}while($guess_number != $random_number); //do this until the user guess the right number
exit(0);


?>