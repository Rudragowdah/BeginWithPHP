<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkBoxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
        <input type="checkbox" name="burger" value="Burger">Burger <br>
        <input type="checkbox" name="eggfry" value="Eggfry">Eggfry <br>
        <input type="checkbox" name="eggrice" value="Eggrice">Eggrice <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {

        if(isset($_POST["pizza"])) {
            echo "You like Pizza <br>";
        }
        if(isset($_POST["burger"])) {
            echo "You like Burger <br>";
        }
        if(isset($_POST["eggfry"])) {
            echo "You like Eggfry <br>";
        }
        if(isset($_POST["eggrice"])) {
            echo "You like Eggrice <br>";
        }

        if(empty($_POST["pizza"])) {
            echo "You DON'T like Pizza <br>";
        }
        if(empty($_POST["burger"])) {
            echo "You DON'T like Burger <br>";
        }
        if(empty($_POST["eggfry"])) {
            echo "You DON'T like Eggfry <br>";
        }
        if(empty($_POST["eggrice"])) {
            echo "You DON'T like Eggrice <br>";
        }

    }

?>