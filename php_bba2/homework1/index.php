<?php
$movies = [
    ["title" => "Harry Potter", "year" => 2009],
    ["title" => "Matrix", "year" => 1999],
    ["title" => "Inception", "year" => 2010]
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
        <?php foreach ($movies as $key => $movie) { ?>
            <li><?php echo $movie["title"]." ".$movie["year"] ?></li>
        <?php } ?>
    </ul>
</body>

</html>