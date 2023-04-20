<?php
    // if form has been submitted
    if (isset($_POST["subscription_form"])) {
        // we check the age sent by post
        if ($_POST["age"] >= 18) {
            echo "Welcome ".$_POST["username"];
        } else {
            echo "You are not allowed";
        }
    }
?>