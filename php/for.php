<?php

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

 
 //loop that shows all the sequence from the start to the ending number
  for($counter = $start_number; $counter <= $ending_number; $counter += $incrementor_number){
    
     echo "\n$counter\n";

  }

?>