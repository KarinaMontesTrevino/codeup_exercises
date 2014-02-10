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
foreach ($books as $title => $book ){

echo "\n";

    // prints only the books published after 1950
           if ($book['published'] > '1950'){

               echo $title . "\n";
               echo "Published: " . $book['published'] . "\n";
               echo  "Author :  " . $book['author']  . "\n";
               echo  "Pages : " . $book['pages'] . "\n";
            }
   

} //close main foreach


?>