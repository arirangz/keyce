<?php
$product_name = "Keyboard 2000";
$description = "Nice QWERTY keyboard";
$price = 30.5;

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
    <h1>Product: <?php echo $product_name; ?></h1>
    <p>Description: <?php echo $description; ?></p>
    <h2>Price: <?php echo $price; ?> $</h2>
</body>
</html>