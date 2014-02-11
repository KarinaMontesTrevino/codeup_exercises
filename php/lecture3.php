<?php

$coin = mt_rand(1,2);

do{
 
fwrite(STDOUT, "Hello, choose 1 for heads and 2 for tails what is your option ?\n");

$option = fgets(STDIN);

if($option == $coin){
	echo "that is tight, nobody wins\n";

}elseif($option < $coin){
	echo "you have head, you win!\n";
}else{
	echo "you have tail, you lose!\n";
}


}while ($option != $coin);
	
?>