<?php


do{

	
	 echo "Enter the amount in US dollars: $ ";
	 $dollars= trim(fgets(STDIN));
     echo "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds: ";
     $input= strtoupper(trim(fgets(STDIN)));


     switch ($input) {
     	case 'E':  
                 $conversion = $dollars * 0.73;
                 echo '$'.$dollars . ' is equivalent to ' . $conversion . ' Euros' . PHP_EOL; 

     		break;

     	case 'P':
     	         $conversion = $dollars  * 13;
     	        echo '$'.$dollars . ' is equivalent to ' . $conversion . ' Pesos' . PHP_EOL; 
     		break;

     	case 'B':
                 $conversion = $dollars * 0.60;
                echo '$'.$dollars . ' is equivalent to ' . $conversion . ' British Pounds' .PHP_EOL; 
     		break;		
     	
     	default :
     		exit(0);
     		break;
     }

} while($input = 'Q' )


?>