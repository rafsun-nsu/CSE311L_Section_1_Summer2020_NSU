<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("Error: Couldn't connect. " .mysqli_connect_error());
    }

    $sql = "CREATE TABLE jobs (
        job_id varchar(10) NOT NULL,
        job_title varchar(35) NOT NULL,
        min_salary numeric(6),
        max_salary numeric(6)
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created.";
    }
    else {
        echo "Error: operation failed. " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>