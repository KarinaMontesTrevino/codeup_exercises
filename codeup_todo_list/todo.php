<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($items){

    // Declare variable array_converto_string
     $array_converto_string = '';
    
    foreach ($items as $key => $item) {

       $newIndex = $key + 1;     //instead of key++
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

// Function to open a file and read it
function open_file(){

    // Prompts the user to enter the path and name of the file
    echo "Enter the path and the name of the file:  ";

    // Stores the input from user
    $filename = get_input();

    // Opens the file and indicates read only
    $handle = fopen($filename, "r");

    // Reads the contents of the file
    $contents = fread($handle, filesize($filename));

    // close the connection to the file
    fclose($handle);

    // Convert the contents of the file into an array 
    return explode(PHP_EOL, $contents);
}

// Function that saves a file
function write_file($get_array){
    // Prompts the user to enter the path and name of the file
    echo "Enter the path and the name of the file:  ";

    // Stores the input from user
    $filename = get_input();
       
    // Checks if the file already exists   
    if (file_exists($filename)){
          
           echo "The file you are trying to save already exists, do you wish to continue (Y)es or (N):  ";
           $input = get_input(true);

           if ($input == 'Y'){
              
                // Opens the file and indicates to start at the beginning of the file and removes the content, or creates a new file if it does not exist 
               $handle = fopen($filename, 'w');

                // Iterates through our array of items 
                foreach ($get_array as $item) {
                       // Saves each element with a new line
                       fwrite($handle, PHP_EOL . $item);
                 } 
                // Alerts the user the file has been saved successfully      
                 echo "File Saved Sucessfully" . PHP_EOL; 
                 // Close the connection to the file 
                   fclose($handle);
           }else {
                 echo "Nothing has been saved, you canceled the operation" . PHP_EOL;
           }// Close if input 'Y'
    }// Close the if file exists   
}// Close the function


// The loop!
do {
     // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (O)pen file, (SA)ve, (Q)uit :  ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);
    //echo $input . PHP_EOL; 

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entrys
        echo 'Enter item:  ';

        $input = get_input();
        // Choose where to add the entry to list at the beginning or at the end
        echo 'Where do you want to add the item ? (B)eginning or to the (E)nd of the list:  '; 
        
        // stores the option of the user
        $option = get_input(true);

             // tests the option of the user to decide where to add it
             if ($option == 'B'){
                  array_unshift($items, $input);       
             }else{
                array_push($items, $input);
             }

        //$items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove:  ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key -1]);
    }elseif ($input == 'S') {
        //sort (A)-(Z)
        echo 'Press (A) to sort A-Z  or (Z) to sort Z-A:  ';
        $input = get_input(true);

        if ($input == 'A'){
            sort($items);
            
        }else{
            rsort($items);
        }
    // Special feature in the main menu that allows to remove the first item on the list
    }elseif ($input == 'F'){
        // Prompt for confirmation 
        echo "Are you sure to remove the first item (Y)es or (N)o?  ";
        $input = get_input(true);
        // If the user says Yes it removes the first element of the list
        if ($input == 'Y'){ 
           array_shift($items);
           echo "Item sucessfully removed " . PHP_EOL;
         // If the user says No nothing gets removed 
        }else{
           echo "Don't worry, nothing has been removed" . PHP_EOL;
        }

    //special feature in the main menu that allow to remove the last item on the list     
    }elseif ($input == 'L'){
        echo "Are you sure to remove the last item (Y)es or (N)o ?  ";
        $input = get_input(true);
        // If the user says Yes it removes the last element of the list
        if ($input == 'Y'){ 
           array_pop($items);
           echo "Item sucessfully removed " . PHP_EOL;
         // If the user says No nothing gets removed 
        }else{
           echo "Don't worry, nothing has been removed" . PHP_EOL;
        }

    }elseif ($input == 'O'){
        //Open the file that the user indicated
        $content_array = open_file();
            
        // add the new incoming array to the existing array 
        $items = array_merge($items,$content_array);
    }elseif ($input == 'SA'){
        // Calls the function write_file and passes an array to save it
         write_file($items);  
    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>