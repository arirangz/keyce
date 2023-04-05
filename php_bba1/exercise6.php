<?php
$db_name = 'keyce_blog';
$db_user = 'root';
$db_password = '';
$pdo = new PDO('mysql:dbname='.$db_name.';host=localhost;charset=utf8mb4', $db_user, $db_password);
$query = $pdo->prepare("SELECT * FROM post");
$query->execute();
$posts = $query->fetchAll();

foreach ($posts as $post) {
    echo "<h2>".$post['title']."</h2>";
    echo "<p>".$post['description']."</p>";
}
?>