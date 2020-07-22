<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE Locations (
        Location_id int(4) NOT NULL PRIMARY KEY,
        Street_address varchar(40),
        postal_code varchar(12),
        city varchar(30) NOT NULL,
        state_province varchar(25),
        country_id varchar(2) 
    );";

    if (mysqli_query($conn, $sql)) {
        echo "Location table created.";
    }
    else {
        echo "ERROR: Table creation failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>