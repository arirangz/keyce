<?php
$user = ["first_name" => "John", "last_name" => "Doe", "email" => "john@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    <h1>Exercise 4</h1>
    <h2>FIRST NAME: <?php echo $user["first_name"]; ?></h2>
    <h2>Last name: <?php echo $user["last_name"]; ?></h2>
    <h2>Email: <?php echo $user["email"]; ?></h2>
</body>
</html>