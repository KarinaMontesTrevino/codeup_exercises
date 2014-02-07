<?php
  // test if the arguments passed are 3 if not exit the program
   if ($argc !==3){

    echo "Not the right number of arguments passed, try again!\n"; // tell the user that the arguments passed should be 3
     exit(0);
   }

   $min = $argv[1];  //assign argument 1 in the array to min
   $max = $argv[2];  //assing argument 2 in the array to max

   //$min = is_numeric($argv[1]) ?  intval($argv[1]) : 1;
   //$max = is_numeric($argv[2]) ?  intval($argv[2]) : 2;

   // test if the first argument passed is numeric if not exit the program
   if(!is_numeric($min) || !is_numeric($max)){
      echo "Check your arguments, they should be numeric !!!\n"; // tell the user that arguments should be numeric
      exit(0);
   }

   //test if the second argument passed is numeric if not exit the program
   if($min >= $max){
      echo "Check your numbers, the first number should be less than the second number!!!\n"; // tell the user that arguments should be numeric
      exit(0);     
   
   }

  // pick a random  number
   $random_number = mt_rand ($min, $max);

   //counts the number of guesses
   $count_guesses = 0;


do{

  //prompts user to guess the random number
  fwrite(STDOUT, "Guess a number between 1 and 100\n");
  
 //allocate the input from user in a variable 
  $guess_number = fgets(STDIN);
   
 //increment by 1 number of guesses
  $count_guesses ++;   

    if($guess_number == $random_number){  //test if the guess is the same number as the random number
    
        echo "Congratulations, YOU WIN!\n";  //if user guess is correct tell them he/she wins
  
    } elseif ($guess_number < $random_number){
  	
        echo "Please guess higher\n"; //if user guess number is lower tell them to guess higher
  
    } else{
  
        echo "please guess lower\n"; //if the user guess number is higher tell them to guess lower
     
    }

}while($guess_number != $random_number); //do this until the user guess the right number

    echo "Number of guesses: $count_guesses\n\n";//number of times the user guessed

exit(0); //exit the program 
 

?>