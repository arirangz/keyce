<?php
$fruits = ["Apple", "Orange", "Banana", "Kiwi", "Pineapple"];
$fruits2 = ["Dragon fruit", "Melon", "Peach"];

$countries = [
    ["name" => "Sri Lanka", "capital" => "Colombo"],
    ["name" => "France", "capital" => "Paris"],
    ["name" => "India", "capital" => "New Delhi"],
    ["name" => "Italy", "capital" => "Roma"],
];

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
    <h1>Demo 9</h1>
    <h2>List of fruits</h2>
    <ul>
        <?php
        foreach ($fruits as $key => $value) {
            echo "<li>$value</li>";
        }
        ?>
    </ul>

    <h2>List of fruits 2</h2>
    <ul>
        <?php foreach ($fruits2 as $key => $value) { ?>
            <li class="fruit"><?php echo $value ?></li>
        <?php } ?>
    </ul>

    <section id="countries">
        <h2>List of countries</h2>
        <?php foreach ($countries as $key => $value) { ?>
            <article>
                <h3><?php echo $value["name"]; ?></h3>
                <p>Capital: <?php echo $value["capital"]; ?></p>
            </article>
        <?php } ?>
    </section>



</body>

</html>