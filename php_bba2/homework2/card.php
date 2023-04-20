

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["card_form"])) { ?>

        <h1>New year card</h1>
        <h2>from: <?php echo $_POST["sender_name"]; ?></h2>
        <h2>to: <?php echo $_POST["destination_name"]; ?></h2>
        <h2>message: <?php echo $_POST["message"]; ?></h2>
    <?php }
    ?>
</body>
</html>