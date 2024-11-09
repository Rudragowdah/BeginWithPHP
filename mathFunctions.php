<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunctions.php" method="post">
        <label for="x">x:</label>
        <input type="text" name="x" id="x" style="margin-bottom: 10px;"><br>
        <label for="y">y:</label>
        <input type="text" name="y" id="y" style="margin-bottom: 10px;"><br>
        <label for="z">z:</label>
        <input type="text" name="z" id="z"><br>
        <input type="submit" name="total" id="total" style="margin: 10px;">
    </form>
</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(1,10); //Generate a Random Number
    


    echo $total;


?>