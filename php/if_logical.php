<?php
$x = 0;   //declare variable x
$y = 5;   //declare variable y
$z = 10;  //declare variable z 

if ($x < $y && $y < $z)
{
	echo "\n{$x} < {$y} < {$z}\n ";  //print this message if this condition is true
}

if ($x > 0 || $x < 10)
{
	echo "$x is greater than 0 OR less than 10\n";  //print this message if this condition is true
}

if ($y > 0 || $y < 10)
{
	echo "$y is greater than 0 OR less than 10\n"; //print this message if this condition is true

}

if ($z > 0 || $z < 10)
{
	echo "$z is greater than 0 OR less than 10\n"; //print this message if this condition is true

}


if ($x > 0 && $x < 10)
{
	echo "$x is greater than 0 AND less than 10\n"; //print this message if this condition is true
}

if ($y > 0 && $y < 10)
{
	echo "$y is greater than 0 AND less than 10\n"; //print this message if this condition is true

}

if ($z > 0 && $z < 10)
{
	echo "$z is greater than 0 AND less than 10\n\n"; //print this message if this condition is true

}


?>