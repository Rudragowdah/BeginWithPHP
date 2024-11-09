<?php

    // cookie: Information about a user stored in the user's web-browser
    // Targeted advertisements, browsing preferences, and other sensitive data
    // F12 - Applications to view cookies...

    setcookie("fav_food","pizza",time() + (86400 * 2),"/");
    setcookie("fav_drink","Tea",time() + (86400 * 3),"/");
    setcookie("fav_desert","Ice Cream",time() + (86400 * 4),"/");

    foreach($_COOKIE as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }

?>