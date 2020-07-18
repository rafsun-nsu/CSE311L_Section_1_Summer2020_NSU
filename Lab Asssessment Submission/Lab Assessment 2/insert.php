<?php
    $conn = mysqli_connect("localhost", "root", "", "VS_CODE_TEST");

    if ($conn == false) {
        die("Error: Couldn't connect. " .mysqli_connect_error());
    }

    $sql = "INSERT INTO test_table(id, username, password) VALUES
            (1, 'Demo', 'Demo')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted.";
    }
    else {
        echo "Error: operation failed. " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>