<?php

//function that shuffles an array


$array1= array ('Karina', 'Jose', 'Pedro');

function shuffle_arrays( $get_array = false){

   if ($get_array ==  true){
    shuffle($get_array);
    return $get_array;
   }else{

    return $get_array;

   }


}


   print_r(shuffle_arrays($array1));
   
?>