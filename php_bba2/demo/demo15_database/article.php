<?php
require_once "pdo.php";

$post_id = $_GET["id"];
$query = $pdo->prepare("SELECT * FROM post WHERE id = :id");
$query->bindValue(':id', $post_id, PDO::PARAM_INT);
$query->execute();
$post = $query->fetch(PDO::FETCH_ASSOC);

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
</body>

</html>