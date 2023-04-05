<?php
$db_name = 'library2';
$db_user = 'root';
$db_password = '';
$pdo = new PDO('mysql:dbname='.$db_name.';host=localhost;charset=utf8mb4', $db_user, $db_password);
$query = $pdo->prepare("SELECT book.title as title, book.description as description, publisher.name as publisher_name FROM book JOIN publisher ON publisher.id = book.publisher_id;");
$query->execute();
$books = $query->fetchAll();


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
<?php
    foreach ($books as $book) {
        echo "<h2>".$book['title']."</h2>";
        echo "<h3>Publisher: ".$book['publisher_name']."</h3>";
        echo "<p>".$book['description']."</p>";
    }
?>    
</body>
</html>