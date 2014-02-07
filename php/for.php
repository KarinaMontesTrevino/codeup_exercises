<?php

//prompts user to choose a start number
  fwrite(STDOUT, "Choose a start number\n");
  
 //store input into the start_number variable
  $start_number = intval(trim(fgets(STDIN)));

 //prompts user to choose the ending number
  fwrite(STDOUT, "Choose an ending number\n");
  
 //allocate the input from user in a variable 
  $ending_number = intval(trim(fgets(STDIN)));
 
 //loop that shows all the sequence from the start to the ending number
  for($counter = $start_number; $counter <= $ending_number; $counter++){
    
     echo "\n$counter\n";

  }

?>