<?php 
     $a = 5;     // declare variable $a
     $b = 10;    // declare variable $b 
     $c = '15';  // declare variable $c

     if ( $a < $b) {
     	echo "$a is less than $b\n" ;    //show this message if the condition is true
     } else{

        echo "$a is greater than $b\n";   //otherwise show this
     }


      if  ($b >= $c) {
     	echo "$b is greater or equal to $c\n" ;
     }else{

         echo "$b is less than or equal to $c\n" ;
     }


      if  ($b == $c) {
     	echo "$b is equal to $c\n" ;
     }elseif ($b != $c){
        echo "$b is not equal to $c\n" ;
     }elseif ($b === $c){
        echo "$b is identical to $c\n";
     }else{
        echo "$b is not identical to $c\n";
     }


?>