<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SanitizeAndValidateInput.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>age:</label>
        <input type="number" name="age"><br>
        <label>Email:</label>
        <input type="email" name="email"><br>
        <input type="submit" name="login"><br>
    </form>
</body>
</html>

<?php 

    if(isset($_POST['login'])) {
        // $username = $_POST['username'];
        // echo $username;

        // SANITIZE removes the unwanted things in the variable. It skips the unwanted data and returns the matched one...

        // $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        // ecHo "Hello " . $username . "<br>";

        // $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        // ECHO "you are {$age} years old <br>";

        // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        // ECHO $email;

        // Validate if does not pass will return an empty string...

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($age)) {
            echo "The age wasn't valid <br>";
        }
        else {
            echo "You are $age years old <br>";
        }

        if(empty($email)) {
            echo "The email wasn't valid <br>";
        }
        else {
            echo $email;
        }

    }

?>