<?php
$user_name = "Gamer64";
$age = 18;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <h1>Exercise 3</h1>
    <h2>
    <?php
        if ($age < 18) {
            echo "Our game in not suitable for players under the age of 18";
        } else {
            echo "Welcome to our website $user_name";
        }
    ?>
    </h2>
</body>
</html>