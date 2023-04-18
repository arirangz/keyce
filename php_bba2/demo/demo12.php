<?php
function area($length, $width) {
    return $length * $width."m²";
}

$my_rectangle_length = 5;
$my_rectangle_width = 7;
$my_rectangle_area = area($my_rectangle_length, $my_rectangle_width);

echo $my_rectangle_area; // This will display 35m²

$living_room_area = area(5,6);
echo "<h2>Living room: $living_room_area</h2>";

$bedroom_area = area(3,4);
echo "<h2>Bedroom: $bedroom_area</h2>";

$kitchen_area = area(3,4);
echo "<h2>Kitchen: $kitchen_area</h2>";

?>
