<?php

if (isset($_GET["first_name"])) {
    echo $_GET["first_name"];
} else {
    echo "No parameter in the url found";
}



?>