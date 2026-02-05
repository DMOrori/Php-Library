<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores of 5 Students</title>
</head>
<body>
    <?php 

$firstName = "Derrick";
$lastName  = "Maeba";

$Mathematics = 56;
$English = 65;
$Kiswahili = 80;
$History = 75;
$Business= 50;

$total = $Mathematics + $English + $Kiswahili + $History + $Business;
$average = $total / 5;

echo "Student Name: $firstName $lastName <br>";
echo "Mathematics: $Mathematics <br>";
echo "English: $English <br>";
echo "Kiswahili: $Kiswahili <br>";
echo "History: $History <br>";
echo "Business: $Business <br>";
echo "Total Marks: $total <br>";
echo "Average Marks: $average";
?>
</body>
</html>