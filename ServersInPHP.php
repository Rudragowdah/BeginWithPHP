<?php
    // SERVER: Super Global Variable that contains headers, paths, and script locations.
    // The entries in this array is created by the web server.
    // Shows everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
?>