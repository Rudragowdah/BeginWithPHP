<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h2>Welcome To FakeBook!</h2>
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="Register" value="Register"> <br>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {

        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please Enter Your Username...";
        }
        elseif(empty($password)) {
            echo "Please Enter Your Password...";
        }
        else {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) values ('$username','$hash') ";
            try {
                mysqli_query($conn,$sql);
                echo "You are Registered";
            }
            catch(mysqli_sql_exception $e) {
                echo "Error: {$e->getMessage()}";
            }
        }

        mysqli_close($conn);

    }
?>