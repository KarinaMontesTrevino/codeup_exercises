<?php

//prompts user to guess the random number
  fwrite(STDOUT, "Choose a start number\n");
  
 //allocate the input from user in a variable 
  $start_number = intval(trim(fgets(STDIN)));

 //prompts user to guess the random number
  fwrite(STDOUT, "Choose an ending number\n");
  
 //allocate the input from user in a variable 
  $ending_number = intval(trim(fgets(STDIN)));
 
  for($counter = $start_number; $counter <= $ending_number; $counter++){
    
     echo "\n$counter\n";

  }

?>