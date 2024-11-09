<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="AreaOfCircle.php" method="post">
        <label for="radius">Radius: </label>
        <input type="text" name="radius">
        <input type="submit" name="submit" id="submit">
    </form><br>
</body>
</html>

<?php

    $radius = $_POST['radius'];
    $circumference = null;
    $area = null;
    
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    echo "Circumference = {$circumference}cm <br>";

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    echo "Area of Circle = {$area}cm^2<br>"

?>