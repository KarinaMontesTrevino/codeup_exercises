<?php


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

print_r($physicists_array);

$physicists_string = implode('|', $physicists_array);
echo $physicists_string . PHP_EOL;

function humanized_list($input){

	$exploded = explode(', ', $input);
    $last = array_pop($exploded);
    return $implode = implode(', ', $exploded) . ", and" $last;
    

}
// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

echo "Some of the most famous fictional theoretical are {$famous_fake_physicists}" . PHP_EOL;

?>