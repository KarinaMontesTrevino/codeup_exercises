<?php

// Program that creates another for loop that counts from 1 to 100, but stops after 10 using break.
for ($i = 1; $i <= 100; $i++) {
     if ($i % 2!= 0) {
        continue;
      }
    echo $i . "\n";
}

?>