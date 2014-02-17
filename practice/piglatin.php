<?php 

function get_input($upper = false){

    return $upper ? strtoupper(trim(fgets(STDIN))) : trim(fgets(STDIN));
}


do{

   echo "Do you want to translate Enlish to Pig Latin (Y)es or (N)o:  "; 
   $user_answer = get_input(true);

    switch ($user_answer){

        case 'Y':
            echo "Enter the sentence you wish to translate to Pig Latin, please don't use any puntuaction nor special characters:  ";
            $english_sentence = get_input(); 
            $array_sentence = explode(' ', $english_sentence);
            
            
            foreach ($array_sentence as $element) {
                     $first_letter = strtolower(substr($element, 0, 1));
                     $rest_of_sentence = substr($element, 1);  
                     $piglatin_array[] = $rest_of_sentence . $first_letter . "ay" . " " ;
             }

             $string_sentence = implode ('', $piglatin_array);
             var_dump($string_sentence);
             echo ucfirst($string_sentence) .  PHP_EOL;
                  
            
        break;

        case 'N':
             echo "Good bye!" . PHP_EOL;
             exit (0); 
             //passthru('clear');
        break;

        default:
            echo "Error: That is not a valid answer, please press (Y) or (N)" . PHP_EOL; 
        break;
    }
    

}while ($user_answer = 'Y');
  
?>