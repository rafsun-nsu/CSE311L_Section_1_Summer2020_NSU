<?php
    $conn = mysqli_connect("localhost", "root", "", "VS_CODE_TEST");

    if ($conn == false) {
        die("Error: Couldn't connect. " .mysqli_connect_error());
    }

    $sql = "CREATE TABLE test_table (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username varchar(50) NOT NULL UNIQUE,
        password varchar(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created.";
    }
    else {
        echo "Error: operation failed. " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>