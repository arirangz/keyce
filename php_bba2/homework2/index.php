<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="card.php" method="post">
        <p>
            <label for="sender_name">Sender name</label>
            <input type="text" id="sender_name" name="sender_name">
        </p>
        <p>
            <label for="destination_name">Destination name</label>
            <input type="text" id="destination_name" name="destination_name">
        </p>
        <p>
            <label for="message">Message</label>
            <input type="text" id="message" name="message">
        </p>
        <input type="submit" value="Send" name="card_form">
    </form>
</body>
</html>