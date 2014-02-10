<?php
// the following program will check the data type of every element of our array and it will print the appropiate message.

    // define array called things that contains different types of data
   $things = array ('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

   //  iterate through each element of the array called things and assign it to $element 
   foreach ($things as $element){

   // if the element in the array is integer then print the message
   		if (is_integer($element)){

   			echo "{$element} is an integer\n";

   // if the element in the array is float then print the message
   		}elseif (is_float($element)){
          
            echo "{$element} is a float\n";

   // if the element in the array is boolean then print the message      
   		}elseif (is_bool($element)){

   			echo var_dump($element) . "\n"; 
   
   // if the element in the array is an array prin the content of that array
   		}elseif (is_array($element)){

   			// iterates through our second array and prints its content	
   			foreach ($element as $sub_element) {
           
               echo "{$sub_element}";
   				
   			}// close second foreach

            echo "\n";
    
    // if the element in the array is null then don't print anything
   		}elseif (is_null($element)){
   			echo "\n";
 
    // if the element in the array is  string then print the message
   		}elseif (is_string($element)){
   			echo "{$element} is a string\n";
   		}

  
   }//close main foreach


?> 