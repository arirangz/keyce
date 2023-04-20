<?php
function getPriceWithVAT($price) {
    return $price *1.2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 7</title>
</head>
<body>
    <?php
        $price_without_tax = 200;
        $price_with_tax = getPriceWithVAT($price_without_tax);
        
        echo "<p>Price Tax Excl.: $price_without_tax</p>";
        echo "<p>Price Tax Incl.: $price_with_tax</p>";
        
    ?>
</body>
</html>