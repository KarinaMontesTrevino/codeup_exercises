<?php

// Program that creates a for loop that shows all even numbers between 1 and 100 using continue

for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i % 2 != 0) {
        continue;
    }
    echo "^ that is an even number.\n";
}

?>