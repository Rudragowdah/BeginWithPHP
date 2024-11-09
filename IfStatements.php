<?php

    $age = 100;

    if($age>=100){
        echo "You are too old to vote<br>";
    }
    else if($age>=18){
        echo "Eligible to Vote!!!<br>";
    }
    elseif($age < 0) {
        echo "Invalid Age<br>";
    }
    else {
        echo "You must be 18+ to vote!!!<br>";
    }

    $adult = true;

    if($adult){
        echo "You can enter<br>";
    }
    else {
        echo "You should be an adult<br>";
    }
?>