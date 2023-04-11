<?php
$first_name = "John";
$last_name = "Doe";
$age = 35;

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
    <h1>Exercise 1</h1>
    <?php echo "<h2>My name is $first_name $last_name. I am $age years old.</h2>" ?>
    <h2><?php echo "My name is $first_name $last_name. I am $age years old." ?></h2>
    <h2>My name is <?php echo $first_name ?> <?php echo $last_name ?>. I am <?php echo $age; ?> years old.</h2>
    <h2>My name is <?php echo $first_name   . " " .     $last_name; ?>. I am <?php echo $age; ?> years old.</h2>
</body>
</html>