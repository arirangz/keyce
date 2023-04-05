<?php
$users = [
    ["last_name" => "Brown", "firstname" => "James", "age" => 26],
    ["last_name" => "Spenser", "firstname" => "Martin", "age" => 35],
    ["last_name" => "Doe", "firstname" => "Jane", "age" => 31],
    ["last_name" => "Dunkin", "firstname" => "Donut", "age" => 25]
];

foreach ($users as $key=>$user) {
    echo "<h2>Last name : " . $user["last_name"] . "</h2>";
    echo "<p>First name : " . $user["firstname"] . "</p>";
    echo "<p>Age : " . $user["age"] . "</p>";
}
?>
