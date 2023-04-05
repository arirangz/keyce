<?php
$product_name = "Nike shoes";
$product_description = "Comfortable sport shoes";
$product_price = 65;

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
    <h1><?php echo $product_name; ?></h1>
    <h2>Price: <?php echo $product_price; ?> dollars</h2>
    <p><?php echo $product_description; ?></p>
</body>
</html>