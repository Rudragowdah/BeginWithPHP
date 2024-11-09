<?php
    include("database.php");

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            foreach($row as $key => $value) {
                echo "$key = $value <br>";
            }
            echo "<br>";
        }
    }
    else {
        echo "No User Found...";
    }


?>