<?php
    include("database.php");

    $username = "Rudra2";
    $password = "Rudra@123";

    $hash = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username','$hash')";

    try {
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception $e) {
        echo "Error: {$e->getMessage()}";
    }

    mysqli_close($conn);
?>