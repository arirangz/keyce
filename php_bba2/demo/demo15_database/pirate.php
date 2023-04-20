<?php
// DO NOT REPRODUCE
$pdo = new PDO('mysql:dbname=travel_blog;host=localhost;charset=utf8mb4', 'root', '');
$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM user WHERE id = $id");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);
?>
