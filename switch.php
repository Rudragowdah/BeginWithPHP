<?php

    $grade = "A";

    switch($grade) {
        case "A":
            echo "You Did Great<br>";
            break;
        case "B":
            echo "You Did Good";
            break;
        case "C":
            echo "You Did OKAY";
            break;
        case "D":
            echo "You Did Poorly";
            break;
        case "F":
            echo "You Failed";
            break;
        default:
        echo "{$grade} is not a valid grade...";
    }
    $date = date('l');
    echo $date;

?>