<?php


// sings the song 99 bottles of beer until there are no more bottles

      for ($bottle_number = 99; $bottle_number > 0; $bottle_number--){

      	    $last_bottle_of_the_song = $bottle_number - 1;

           if ($bottle_number == 1){

           	echo $bottle_number . ' bottles of beer on the wall, ' . $bottle_number . ' bottles of beer. Take one down and pass it around, no more bottles of beer on the wall.' . PHP_EOL;

           }else{

           echo $bottle_number . ' bottles of beer on the wall, ' . $bottle_number . ' bottles of beer. Take one down and pass it around, ' . $last_bottle_of_the_song . ' bottles of beer on the wall.' . PHP_EOL;
           
           }

      }


?>