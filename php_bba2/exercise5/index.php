<?php
$users = [
    ["last_name" => "Brown", "first_name" => "James", "age" => 26],
    ["last_name" => "Spenser", "first_name" => "Martin", "age" => 35],
    ["last_name" => "Doe", "first_name" => "Jane", "age" => 31]
];
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

    <ul>
        <?php foreach ($users as $key => $user) { ?>
            <li><?php echo $user["first_name"] . " " . $user["last_name"]; ?></li>
        <?php } ?>
    </ul>

</body>

</html>