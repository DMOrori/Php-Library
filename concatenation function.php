<?php 
function strcat($left, $right)
{
    return $left. $right;
}
$first = "This is a ";
$second = "comlete sentence!";

echo strcat($first,$second);
?>