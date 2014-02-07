<?php

// test if the arguments passed are 4 if not exit the program
   if ($argc !==4){

    echo "Not the right number of arguments passed, try again!\n"; // tell the user that the arguments passed should be 3
     exit(0);
   }

   $first_argument = $argv[1];
   $second_argument = $argv[2];
   $third_argument = $argv[3];

   $first_argument = is_numeric($argv[1]) ?  intval($argv[1]) : 1;
   $second_argument= is_numeric($argv[2]) ?  intval($argv[2]) : 2; 
   $second_argument= is_numeric($argv[3]) ?  intval($argv[3]) : 3;  


//prompts user to choose a start number
  fwrite(STDOUT, "Choose a start number\n");
  
 //store input into the start_number variable
  $start_number = intval(trim(fgets(STDIN)));

 //prompts user to choose the ending number
  fwrite(STDOUT, "Choose an ending number\n");
  
 //store input into the ending_number
  $ending_number = intval(trim(fgets(STDIN)));


  //prompts user to guess the random number
  fwrite(STDOUT, "Choose an incrementor number\n");
  
  //store input into the ending_number
  $incrementor_number = intval(trim(fgets(STDIN)));

  if ($incrementor_number == 0){

  	 $incrementor_number = 1;

  }

 //var_dump($incrementor_number);
 
 //loop that shows all the sequence from the start to the ending number
    for($counter = $start_number; $counter <= $ending_number; $counter += $incrementor_number){
    
      echo "\n$counter\n";
  
  }

?>