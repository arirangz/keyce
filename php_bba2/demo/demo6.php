<?php
    $user_grade = "D";

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
    switch ($user_grade) {
        case "A":
            echo "Excellent!";
            break;
        case "B":
            echo "Very good!";
            break;
        case "C":
            echo "Good!";
            break;
        case "D":
            echo "Needs improvement.";
            break;
        default:
            echo "Invalid grade.";
            break;
    }

    ?>
    
</body>
</html>