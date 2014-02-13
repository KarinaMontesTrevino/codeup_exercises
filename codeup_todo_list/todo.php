<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($items){
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blahs
    // DO NOT USE ECHO, USE RETURN

    // declare variable array_converto_string
     $array_converto_string = '';
    
    foreach ($items as $key => $item) {

       $newIndex = $key + 1;     //insead of key++
       $array_converto_string .=  "[" . $newIndex . "]" . $item . PHP_EOL;  //same as $arrray_convert_string = $arrray_convert_string 

    }

    return $array_converto_string;
    
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = false) {


    if ($upper){   //if $upper ==true  or if there is anything in there                  

         // Return filtered STDIN input
        $upper = strtoupper(trim(fgets(STDIN)));
         return $upper;
    }else{

        $upper = trim (fgets(STDIN));
        return $upper;
    }
}


// function sort_menu($sorting = false){

//    if ($sorting){
//         $sorting = sort($sorting);
//          return sorting; 
//     } 
// } 


// The loop!
do {
     // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);
    //echo $input . PHP_EOL;

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entrys
        echo 'Enter item: ';

        $input = trim(fgets(STDIN));
        // Choose where to add the entry to list at the beginning or at the end
        echo 'Press 1 to add your new item to the beginning of the list ' . PHP_EOL;
        echo 'Press 2 to add your new item to the end of the list' . PHP_EOL;

        // stores the option of the user
        $option = trim(fgets(STDIN));

             // tests the option of the user to decide where to add it
             if ($option ==1){
                  array_unshift($items, $input);       
             }else{
                array_push($items, $input);
             }

        //$items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key -1]);
    }elseif ($input == 'S') {
        //sort (A)-(Z)
        echo "Choose an option!!" . PHP_EOL;
        echo "Option 1: sort A-Z " . PHP_EOL;
        echo "Option 2: sort Z-A" . PHP_EOL;
        $input = trim(fgets(STDIN));

        if ($input == 1){
            sort($items);
            
        }else{
            rsort($items);
        }
    //special feature in the main menu that allow to remove the first item on the list
    }elseif ($input == 'F'){

        array_shift($items);

    //special feature in the main menu that allow to remove the last item on the list     
    }elseif ($input == 'L'){

        array_pop($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);