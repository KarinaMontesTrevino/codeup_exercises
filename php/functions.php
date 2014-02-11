<?php
function add($number1, $number2){
	//code goes here
	echo "The addition of number 1 and number 2 is = " . ($number1 + $number2) . PHP_EOL;
}

function susbtract($number1, $number2){
    echo "The susbtraction of number 1 and number 2 is = " . ($number1 - $number2) . PHP_EOL;
}

function multiply($number1, $number2){
	echo "The multiplication of number 1 and number 2 is = " . ($number1 * $number2) . PHP_EOL;
}

function divide($number1, $number2){
	echo "The division of number 1 and number 2 is = " . ($number1 / $number2) . PHP_EOL;
}

function modulus($number1, $number2){
	echo "The remainder of the devision between number 1 and number 2 is = " . ($number1 % $number2) . PHP_EOL;
}

$first_number = 11.2;
$second_number = 10.3;

add ($first_number, $second_number);
susbtract ($first_number, $second_number);
multiply($first_number, $second_number);
divide($first_number, $second_number);
modulus($first_number,$second_number);


?>