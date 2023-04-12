<?php

$age = 20;
$user_role = "admin";
$user_name = "ABC";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($age == 18 && $user_role == "admin") {
            echo "Your allowed to access the private page";
        } else {
            echo "You are not allowed";
        }
    ?>
    
</body>
</html>