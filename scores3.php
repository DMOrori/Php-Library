<!DOCTYPE html>
<html>
<head>
    <title>Student Results for 5 subjects</title>
</head>
<body>

<h2>Student Marks Form</h2>

<form method="post">
    First Name: <input type="text" name="fname" required><br><br>
    Last Name: <input type="text" name="lname" required><br><br>

    Mathematics: <input type="number" name="Mat" required><br><br>
    English: <input type="number" name="Eng" required><br><br>
    Kiswahili: <input type="number" name="Kisw" required><br><br>
    Social Studies/CRE: <input type="number" name="Sst" required><br><br>
    Science: <input type="number" name="Sci" required><br><br>

    <input type="submit" name="submit" value="Calculate Results">
</form>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $Mat = $_POST['Mat'];
    $Eng = $_POST['Eng'];
    $Kisw = $_POST['Kisw'];
    $Sst = $_POST['Sst'];
    $Sci = $_POST['Sci'];

    $total = $Mat + $Eng + $Kisw + $Sst + $Sci;
    $average = $total / 5;

    
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
            $remarks = "Excellent";
            break;
        case "B":
            $remarks = "Very Good";
            break;
        case "C":
            $remarks = "Good";
            break;
        case "D":
            $remarks = "Fair";
            break;
        case "E":
            $remarks = "Fail";
            break;
    }

    echo "<h3>Results</h3>";
    echo "Student Name: $fname $lname <br>";
    echo "Total Marks: $total <br>";
    echo "Average Marks: $average <br>";
    echo "Grade: $grade <br>";
    echo "Remarks: $remarks";
}
?>

</body>
</html>
