<?php
require_once "pdo.php";

$post_id = $_GET["id"];
$query = $pdo->prepare("SELECT * FROM post WHERE id = :id");
$query->bindValue(':id', $post_id, PDO::PARAM_INT);
$query->execute();
$post = $query->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["comment_form"])) {
    echo "Comment posted";
    $query = $pdo->prepare("INSERT INTO `comment` (`id`, `message`, `username`, `post_id`) VALUES (NULL, :message, :username, :post_id);");
    $query->bindValue(':post_id', $post_id, PDO::PARAM_INT);
    $query->bindValue(':message', $_POST["message"], PDO::PARAM_STR);
    $query->bindValue(':username', $_POST["username"], PDO::PARAM_STR);
    $query->execute();
}

$query_comments = $pdo->prepare("SELECT * FROM comment WHERE post_id = :id");
$query_comments->bindValue(':id', $post_id, PDO::PARAM_INT);
$query_comments->execute();
$comments = $query_comments->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post["title"]; ?></title>
</head>

<body>
    <h1><?php echo $post["title"]; ?></h1>
    <p><?php echo $post["description"]; ?></p>

    <section>
        <h2>Comments</h2>
        <?php if ($comments) { ?>
            <?php foreach ($comments as $key => $comment) { ?>
                <h3><?php echo $comment["username"] ?></h3>
                <p>Comment: <?php echo $comment["message"] ?></p>
            <?php } ?>
        <?php } ?>
    </section>
    <form method="post">
        <h2>Leave a comment:</h2>
        <p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="5"></textarea>
        </p>
        <input type="submit" value="Send" name="comment_form">
    </form>
</body>

</html>