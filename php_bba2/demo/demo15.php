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
        if (isset($_POST["subscription_form"])) {
            echo "Thank you ".$_POST["first_name"]. " for you subscription";
        }
    ?>
    <form action="demo15.php" method="post">
        <p>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name">
        </p>
        <p>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name">
        </p>
        <input type="submit" value="Subscribe" name="subscription_form">
    </form>
</body>
</html>