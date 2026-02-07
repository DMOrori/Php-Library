<?php 
$a = 10;
$b = 20;
$c = 15;

if ($a > $b && $a > $c) {
    echo "$a is the largest.";
} elseif ($b > $a && $b > $c) {
    echo "$b is the largest.";
}else{
    echo "$c is the largest .";
}
?>