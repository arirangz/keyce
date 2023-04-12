<?php
$age = 12;
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
        if ($age >= 20) {
            echo "You are adult";
        } else if ($age >= 13) {
            echo "You are a teenager";
        } else if ($age >= 3) {
            echo "You are a child";
        } else {
            echo "You are a baby";
        }
    ?>
</body>
</html>