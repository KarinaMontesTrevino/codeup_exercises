<?php

// function that adds two numbers and prints the result of the sum
function add($number1, $number2 ){

	if (is_numeric($number1) && is_numeric($number2)){
	    echo "The addition of number 1 and number 2 is = " . ($number1 + $number2) . PHP_EOL;
	}else{
		echo "[ERROR] Invalid input, {$number1} or {$number2} are not numeric" . PHP_EOL;
	}
}

// function that substracts two numbers and prints the result of the substraction
function susbtract($number1, $number2){
	if (is_numeric($number1) && is_numeric($number2)){
	    echo "The substraction of number 1 and number 2 is = " . ($number1 - $number2) . PHP_EOL;
	}else{
		echo "[ERROR] Invalid input, {$number1} or {$number2} are not numeric" . PHP_EOL;
	}
}	

// function that multiplies two numbers and prints the result of the multiplication
function multiply($number1, $number2 = 0){
	if (is_numeric($number1) && is_numeric($number2)){
	    echo "The multiplication of number 1 and number 2 is = " . ($number1 * $number2) . PHP_EOL;
	}else{
		echo "[ERROR] Invalid input, {$number1} or {$number2} are not numeric" . PHP_EOL;
	}
}

//function that divides two numbers and prints the result of the division 
function divide($number1, $number2){
	//checks if the numbers passed are both numeric and if the user is trying to divide by 0.
	if ((is_numeric($number1) && is_numeric($number2)) && $number2 != 0){
	    echo "The division of number 1 and number 2 is = " . ($number1 / $number2) . PHP_EOL;
	}elseif (!is_numeric($number1) || !is_numeric($number2)){
		echo "[ERROR] Invalid input, {$number1} or {$number2} are not numeric" . PHP_EOL;
    }else{
    	echo "[ERROR] Invalid input, you can't divide by {$number2}" . PHP_EOL;
    }
}

// function that gets the remainder of two number and prints the result
function modulus($number1, $number2){
	if (is_numeric($number1) && is_numeric($number2)){
	echo "The remainder of the division between number 1 and number 2 is = " . ($number1 % $number2) . PHP_EOL;

	}else{
		echo "[ERROR] Invalid input, {$number1} or {$number2} are not numeric" . PHP_EOL;
	}
}



add(10, ' asds ');
susbtract (40, 30);
multiply(false, 5);
divide(10, 0);
modulus(10, 5);


?>