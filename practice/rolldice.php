<?php
//Program that simulates the game roll the dice

     $number = mt_rand(1,6);
   

echo  $number;
switch ($number) {
	case 1:
	       echo ' . ' . PHP_EOL;
	       break;
	case 2:
	      echo '  : ' . PHP_EOL;
	       break;
	case 3:
	      echo '  : . ' . PHP_EOL;
	      break;
	case 4:
	      echo '  : : ' . PHP_EOL;
	      break;
	case 5:
	      echo '  : . : ' . PHP_EOL;
	      break;
	case 6:
	      echo ' : : : ' . PHP_EOL;
	      break;      
	default:
	      echo 'no side' . PHP_EOL;
	      break;
}
?>