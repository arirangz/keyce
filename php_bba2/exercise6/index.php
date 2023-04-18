<?php
$first_name = "John";
$last_name = "Doe";

function hello($first_name, $last_name) {
    echo "<h2>$first_name $last_name</h2>";
}
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
        hello($first_name, $last_name);
        hello("Jane", "Doe");
        hello("Martin", "Spenser");
    ?>
    
</body>
</html>