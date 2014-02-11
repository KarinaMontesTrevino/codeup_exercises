<?php

// function that adds two numbers and prints the result of the sum
function add($number1, $number2 ){
	check_numeric($number1, $number2);
     return ($number1 + $number2);
}


// function that substracts two numbers and prints the result of the substraction
function susbtract($number1, $number2){
	check_numeric($number1, $number2);	    
	return ($number1 - $number2);
}

// function that multiplies two numbers and prints the result of the multiplication
function multiply($number1, $number2){
	 check_numeric($number1, $number2);
	 return ($number1 + $number2);
}

// function that divides two numbers and prints the result of the division 
function divide($number1, $number2){
	 if ( $number2 === 0) {
      	echo "We can't devide by 0";
   }else{
      	return ($a / $b);
		}
}

// function that gets the remainder of two number and prints the result
function modulus($number1, $number2){
	check_numeric($number1, $number2);
	return ($number1 + $number2);
}

// function that will validate the arguments being passed
function check_numeric($number1, $number2){
	if (!is_numeric($number1) || !is_numeric($number2)){
        echo "[ERROR] Invalid input, both arguments should be numeric\n";
        var_dump($number1);
        var_dump($number2);
         //exit(0);
     }     

}


echo add(10, 'asd' ) . PHP_EOL; 
echo susbtract (40, 30) . PHP_EOL; 
echo multiply(40, 5) . PHP_EOL; 
echo divide(10, 0) . PHP_EOL; 
echo modulus(10, 5) . PHP_EOL; 


?>