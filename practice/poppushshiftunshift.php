<?php
// push adds values into our array
$items = ['First', 'Second', 'Third'];
array_push($items, 'Fourth', 'Fifth', 'Sixth');
print_r($items);

// removes the element off the ened of array
$items = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth'];
$last_item = array_pop($items);
print_r($items);

//
$items = ['First', 'Second', 'Third', 'Fourth', 'Fifth'];
$first_item = array_shift($items);
print_r($items);


$items = ['Second', 'Third', 'Fourth', 'Fifth'];
array_unshift($items, 'New First Item!');
print_r($items);