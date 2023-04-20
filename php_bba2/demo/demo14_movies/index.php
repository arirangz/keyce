<?php
    require "movies_database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies website</title>
</head>
<body>
    <h1>Discover the best movies</h1>
    <?php foreach ($movies as $key=>$movie) { ?>
        <article>
            <h2><?php echo $movie["title"]; ?> <a href="movie.php?id=<?php echo $key ?>">Read more</a></h2>
        </article>
    <?php } ?>
</body>
</html>