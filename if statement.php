<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $d = date("D");
    if ($d =="FRI") 
        echo "have a nice weekend";
    else 
        echo "Have a nice day!";
    ?>
</body>
</html>