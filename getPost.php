<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getPost.php" method="post">
        <label>UserName:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>
<?php
    if (isset($_POST["username"])) {
        echo "{$_POST["username"]} <br>";
    }
    if (isset($_POST["password"])) {
        echo "{$_POST["password"]}<br>";
    }

?>
