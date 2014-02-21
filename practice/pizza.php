<?php

$large_pizza = 8;
$medium_pizza = 6;
$small_pizza = 4;



	echo "How many guests eat only 1 slice of pizza:  ";
      	$input = trim(fgets(STDIN));
      	$counter_one_slice = $input * 1 ; 
	echo "How many guests eat 2 slices of pizza:  ";
      	$input = trim(fgets(STDIN));
      	$counter_two_slice = $input * 2 ;
	echo "How many guests eat 3 slices of pizza:  ";
     	$input = trim(fgets(STDIN));
      	$counter_three_slice = $input * 3 ;
	echo "How many guests eat 4 slices of pizza:  ";
      	$input = trim(fgets(STDIN));
      	$counter_four_slice = $input * 4;
    echo "------------------------------------------" . PHP_EOL;

	$count_slices = $counter_one_slice + $counter_two_slice + $counter_three_slice + $counter_four_slice;
	echo "Total number of slices needed: " . $count_slices. PHP_EOL;
    
    $total_large_pizza = 0;
    $total_medium_pizza =0;
    $total_small_pizza = 0;
    $incomplete_pizza = 0;


		if ($count_slices >= $large_pizza){

           $total_large_pizza = intval($count_slices / $large_pizza);
           $count_slices %= $large_pizza;

		}


		if ($count_slices >= $medium_pizza){

	       $total_medium_pizza = intval($count_slices/ $medium_pizza);
	       $count_slices %= $medium_pizza;

      	} 

         if ($count_slices >= $small_pizza){

	       $total_small_pizza = intval($count_slices / $small_pizza);
	       $count_slices  %= $small_pizza;

        }

		if ($count_slices < $small_pizza){
		    if ($count_slices > 0){
		        $total_small_pizza +=1;
		    }
        }

echo "Large Pizzas:  " . $total_large_pizza . PHP_EOL;
echo "Medium Pizzas: " . $total_medium_pizza . PHP_EOL;
echo "Small Pizzas:  " . $total_small_pizza . PHP_EOL;
//echo "You have an incomplete pizza, extra slices you will need" . $incomplete_pizza;

?>