<?php

/* Construct a loop that iterates through each book and then each book's keys and values.
 Have it output the book's title, then list the key value pairs for the data about each book.
*/


// Array of books that contains another array with the year published, the author and the pages.
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// iterates through each element of the array books and prints the book
foreach ($books as $book => $book_array ){

echo "\n";

echo "Book title: {$book}\n";
    
    // iterates though each element of the second array and prints the different attributes in that array
    foreach ($book_array as $key => $atribute){

       echo  "{$key} :  {$atribute}" . "\n";
   }
   

} //close main foreach


?>