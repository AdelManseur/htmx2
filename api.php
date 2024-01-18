<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['action']) && $_POST['action'] === 'add_post') {
            echo "test";
        } else {
            echo "Invalid action or action not provided";
        }
    } else {
        echo "No form submission detected";
    }

?>