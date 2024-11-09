<?php 

    $username = array("Rudra", "Gowda", "H");
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username,20,"0");
    // $phone = str_replace("-"," ",$phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username,"Rudra Gowda");   // Returns 0,1,-1
    // $count = strlen($phone);
    // $index = strpos($phone, "-");
    // $firstname = substr($username,0,5);
    // $lastname = substr($username,6);
    // $fullname = explode(" ",$username);
    $fullname = implode(" ",$username);
    // foreach($fullname as $name) {
    //     echo $name . "<br>";
    // }

    echo $fullname;

?>