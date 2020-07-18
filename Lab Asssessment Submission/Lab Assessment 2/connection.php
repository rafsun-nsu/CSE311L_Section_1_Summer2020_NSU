<?php

    $conn = new MySQLi("localhost","root","","test");

    if ($conn -> connect_error) {
        echo "Not connected, error:" .$conn -> connect_error;
    }
    else {
        echo "Connected";
    }

?>