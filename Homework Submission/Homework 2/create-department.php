<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE Departments (  
        Department_id int PRIMARY KEY,    
        Department_name varchar(20),    
        Manager_id int,    
        Location_id int
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Department table created.";
    }
    else {
        echo "ERROR: Table creation failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>