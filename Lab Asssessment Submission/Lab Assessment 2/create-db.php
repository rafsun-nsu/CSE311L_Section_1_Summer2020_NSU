<?php
    $conn = mysqli_connect("localhost", "root", "");

    if ($conn == false) {
        die("Error: Couldn't connect. " .mysqli_connect_error());
    }

    $sql = "CREATE DATABASE VS_CODE_TEST";

    if (mysqli_query($conn, $sql)) {
        echo "Database created.";
    }
    else {
        echo "Error: operation failed. " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>