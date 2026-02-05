<?php 

$firstname = "Derrick";
$lastname = "Orori";

$s1 = 80;
$s2 = 70;
$s3 = 92;
$s4 = 76;
$s5 = 92;

$total = $s1 + $s2 + $s3 + $s4 + $s5;
$average = $total/5;

switch ($average)
{
    case ($average >= 80 && $average <= 100):
        $grade = "A grade";
        break;

    case ($average >= 70 && $average < 80):
        $grade = "B grade";
        break;

    case ($average >= 50 && $average < 70):
        $grade = "C grade";
        break;

    case ($average < 50):
        $grade = "Fail";
        break;

    default:
        $grade = "Invalid";
        break;
}
//program output
echo "student name : $firstname $lastname";
echo "English = $s1 <br>";
echo "Kiswahili = $s2 <br>";
echo "Math = $s3 <br>";
echo "sci = $s4 <br>";
echo "agr = $s5 <br>";
echo "Total marks = $total <br>";
echo "Average = $average <br>";
echo "grade= $grade <br>";
?>