<?php

$coin = mt_rand(1,2);

do{
 
fwrite(STDOUT, "Hello, choose 1 for heads and 2 for tails what is your option ?\n");

$option = fgets(STDIN);

if($option == $coin){
	echo "Match, you win!\n";

}else{
	echo "Doesn't match, you lose!\n";
}


}while ($option != $coin);
	
?>