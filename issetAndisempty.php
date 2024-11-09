<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetAndisempty.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form><br>
</body>
</html>

<?php

    // foreach($_POST as $key => $value) {
    //     echo "{$key} => {$value} <br>";
    // }

    if(isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is Missing";
        }
        elseif(empty($password)) {
            echo "Password is Missing";
        }
        else {
            echo "Hello {$username}";
        }
    }

    // isset(): Returns TRUE if a variable is declared and not null
    // empty(): Returns TRUE if a variable is not declared, null, false, ""

    // $username = true;

    // if(isset($username)) {
    //     echo "The username is Set";
    // }
    // else {
    //     echo "The username is NOT Set";
    // }

    // if(empty($username)) {
    //     echo "The username is empty";
    // }
    // else {
    //     echo "The username is NOT empty";
    // }
?>