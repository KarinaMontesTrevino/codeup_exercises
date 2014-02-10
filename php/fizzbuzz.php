<?php


// loop that will count from 1 to 100
for ($number= 1; $number <=100; $number++){

  
		//check if the number is remainder of BOTH 3 and 5 and print FizzBuzz
        if($number % 3 == 0 && $number % 5 == 0){

  	        echo "FizzBuzz \n";

        //check if the number is remainder of 3 and print fizz
        }elseif ($number % 3 == 0){

	        echo "Fizz\n";

        // check if the number is remainder of 5 and print buzz
        }elseif ($number % 5 == 0){
		
		   echo "Buzz\n";

        // if nothing is true print only the number
        }else{

        echo "$number\n";
         
        } //close if
   
    
 } //close for


?>