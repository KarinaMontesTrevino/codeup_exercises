<?php

/*  Program that creates a function that returns TRUE or FALSE if an array value is found and 
a function to compare 2 arrays that returns the number of values in common between the arrays. 
*/


// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function that allows search in  an array for a specific value and returns true or false
function array_find($needle, $haystack){

 // variable that will store the result of our array search
 $record_found = array_search($needle, $haystack);

     // if the result is not found return false otherwise return true
     if ($record_found  === false){

         return false;
     	
     }else{

     	return true;
     }

}


// test the function array_find with a name that exists in the array
var_dump(array_find('Tina', $names)) . PHP_EOL;
//test the function array_find with a name that doesn't exist in the array
var_dump(array_find('Bob', $names)) . PHP_EOL;


// function that compares two arrays and determines how many values they have in common
function array_comparison($values, $array){

     // initialize the variable that will count the values in common
    $count_records = 0;

    // iterates through the array and checks for coincidences
	foreach ($values as $value){

           $check = array_find($value, $array);
            
            // if there is a value in common
            if($check){
                // add 1 to our counter
            	$count_records += 1;
            }         

	}       // returns the result
            return $count_records;
 }

// test the function that determines how many values 2 arrays have in common
echo array_comparison($names, $compare) . PHP_EOL;


//Alternative solution
// function count_matches($needles, $haystack)
// {
//      $numberofmatches= 0;

//      foreach ($needles as $needle){

//              $result = array_search($needle, $haystack);
//              if(is_numeric($result)){
//                 $numberofmatches ++;
//              }

//      }
//       return $numberofmatches;
// }



?>