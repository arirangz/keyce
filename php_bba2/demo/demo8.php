<?php

//Multidimensional array
$countries = [
    ["name" => "France", "capital" => "Paris", "population" => 67],
    ["name" => "Sri Lanka", "capital" => "Colombo", "population" => 15],
    ["name" => "India", "capital" => "New Dehli", "population" => 1000]
];

echo $countries[1]["name"]." ".$countries[1]["capital"];

?>