<?php
$morseCodes = array(
  '0' => "-----",
  '1' => ".----",
  '2' => "..---",
  '3' => "...--",
  '4' => "....-",
  '5' => ".....",
  '6' => "-....",
  '7' => "--...",
  '8' => "---..",
  '9' => "----.",
  'A' => ".-",
  'B' => "-...",
  'C' => "-.-.",
  'D' => "-..",
  'E' => ".",
  'F' => "..-.",
  'G' => "--.",
  'H' => "....",
  'I' => "..",
  'J' => ".---",
  'K' => "-.-",
  'L' => ".-..",
  'M' => "--",
  'N' => "-.",
  'O' => "---",
  'P' => ".--.",
  'Q' => "--.-",
  'R' => ".-.",
  'S' => "...",
  'T' => "-",
  'U' => "..-",
  'V' => "...-",
  'W' => ".--",
  'X' => "-..-",
  'Y' => "-.--",
  'Z' => "--..",
  "." => ".-.-.-",
  "," => "--..--",
  "?" => "..--..",
  "!" => "-.-.--",
  "/" => "-..-.",
  "(" => "-.--.-",
  ")" => "-.--.-",
  "&" => ".-...",
  ":" => "---...",
  ";" => "-.-.-.",
  "=" => "-...-",
  "+" => ".-.-.",
  "-" => "-....-",
  "_" => "..--.-",
  "\"" => ".-..-.",
  "$" => "...-..-",
  "@" => ".--.-.)",
  " " => "/"
  );



function get_input ($upper_case = false){

      return $upper_case ? strtoupper(trim(fgets(STDIN))) : trim(fgets(STDIN));
    
}


// function text_morse($msg, $array){

//       $text_array =str_split($msg, 1);
//               foreach ($text_array as $character) {
//                        //var_dump($text_array);
//                        //echo $character;
//               	       //var_dump($morseCodes);
//                       $code = ($array[$character]);
//                }
//                return $code;
//                echo PHP_EOL;

// }
do{

     echo "Do you want to translate to morse code (Y)es or (N)o:  ";
     $answer = get_input (true);

  switch ($answer) {
        case 'Y':
		        echo "Enter the text you want to convert to morse code:  ";
            $text = get_input(true);
            //echo text_morse($text, $morseCodes);
             $text_array =str_split($text, 1);
              foreach ($text_array as $character) {
                       //var_dump($text_array);
                       //echo $character;
              	       //var_dump($morseCodes);
                      print_r($morseCodes[$character]);
               }
               passthru('clear');
               echo PHP_EOL;
       break;

       case 'N':
           echo "Good Bye!" . PHP_EOL;
           passthru('clear');
           exit (0);
           break;

       default:
           echo "Not a valid answer, please press Y for yes or N for No" . PHP_EOL;
       break;
   }

}while ($answer = 'Y');

?>