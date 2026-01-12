<?php 
$scores = array(85,92,78,95,88);
$sum = array_sum($scores);
$count = count($scores);
$average = $sum/$count;

echo "scores:" .implode(",", $scores). "<br>";

echo "sum of scores:" .$sum ."<br>";

echo "average score:" .$average ."<br>";
?>