<?php

require_once "pdo.php";

$query = $pdo->prepare("SELECT * FROM post");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel blog</title>
</head>

<body>
    <h1>Travel blog</h1>
    <section>
        <?php foreach ($posts as $key => $post) { ?>
            <article>
                <h2><?php echo $post["title"]; ?></h2>
                <h3><a href="article.php?id=<?php echo $post["id"]; ?>">Read more</a></h3>
            </article>

        <?php } ?>
    </section>

</body>

</html>