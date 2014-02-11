<?php
function add($number1, $number2){
	$sum = $number1+ $number2;
	echo "The addition of number 1 and number 2 is = " . number_format($sum, 2, '.' , '') . PHP_EOL;
}

function susbtract($number1, $number2){
	$minus = $number1 - $number2;
    echo "The susbtraction of number 1 and number 2 is = " . number_format($minus, 2, '.' , '') . PHP_EOL;
}

function multiply($number1, $number2){
	$multi= $number1 * $number2;
	echo "The multiplication of number 1 and number 2 is = " . number_format($multi, 2, '.' , '') . PHP_EOL;
}

function divide($number1, $number2){
	$div = $number1 / $number2;
	echo "The division of number 1 and number 2 is = " . number_format($div, 2, '.' , '') . PHP_EOL;
}

function modulus($number1, $number2){
	$remainder = $number1 % $number2;
	echo "The remainder of the devision between number 1 and number 2 is = " . number_format($remainder, 3, '.' , '') . PHP_EOL;
}

$first_number = 10;
$second_number = 7;

add($first_number, $second_number);
susbtract ($first_number, $second_number);
multiply($first_number, $second_number);
divide($first_number, $second_number);
modulus($first_number,$second_number);


//trim($item) . PHP_EOL;      
function trim_with_new_line ($item, $newline = TRUE){
    if($newline ===TRUE){
       echo trim($item) . PHP_EOL;
    }else{
	   echo trim($item);
    }

trim_with_new_line('   Jason    ', FALSE);
//trim_with_new_line('   Jason    ');
}


function add($num1= 0, $num2 = 0){
	echo ((int) $num1 + (int) $num2);
}

?>