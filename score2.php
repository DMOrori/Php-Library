<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php

$average = 76;

if ($average >= 80 && $average <= 100) {
    $grade = "A";
} elseif ($average >= 70) {
    $grade = "B";
} elseif ($average >= 60) {
    $grade = "C";
} elseif ($average >= 50) {
    $grade = "D";
} else {
    $grade = "E";
}

switch ($grade) {
    case "A":
        echo "Grade: A<br>";
        echo "Remarks: Excellent";
        break;

    case "B":
        echo "Grade: B<br>";
        echo "Remarks: Very Good";
        break;

    case "C":
        echo "Grade: C<br>";
        echo "Remarks: Good";
        break;

    case "D":
        echo "Grade: D<br>";
        echo "Remarks: Fair";
        break;

    case "E":
        echo "Grade: E<br>";
        echo "Remarks: Fail";
        break;

    default:
        echo "Invalid score";
}
?>

</body>
</html>