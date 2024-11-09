<?php

    // Associative Arrays: An array made of key=>value pairs...

    $capitals = array(
        "India"=>"New Delhi",
        "USA"=>"Washington D.C.",
        "Japan"=>"Kyoto",
        "South Korea"=>"Seoul"
    );

    // echo "{$capitals["India"]}";

    // $capitals["India"] = "Bangalore";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    echo count($capitals);

    // foreach($keys as $key) {
    //     echo $key . "<br>";
    // }

    // foreach($values as $value) {
    //     echo $value . "<br>";
    // }

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

?>