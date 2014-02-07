<?php

  //pick a random  number
   $random_number = mt_rand (1, 100);

   //counts the number of guesses
   $count_guesses = 0;

do{

  //prompts user to guess the random number
  fwrite(STDOUT, "Guess a number between 1 and 100\n");
  
 //allocate the input from user in a variable 
  $guess_number = fgets(STDIN);
   
 //add loop number to counter
  $counter ++;   

  if($guess_number == $random_number){  //test if the guess is the same number as the random number
    
    echo "Congratulations, YOU WIN!\n";  //if user guess is correct tell them he/she wins
  
  } elseif ($guess_number < $random_number){
  	
    echo "Please guess higher\n"; //if user guess number is lower tell them to guess higher
  } else{
    echo "please guess lower\n"; //if the user guess number is higher tell them to guess lower
  }

}while($guess_number != $random_number); //do this until the user guess the right number
echo "Number of guesses: $counte_guesses\n\n";//number of times the user guessed

exit(0); //exit the program 
 

?>