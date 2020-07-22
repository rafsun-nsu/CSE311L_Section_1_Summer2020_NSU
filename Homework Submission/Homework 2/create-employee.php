<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE Employees (
        Employee_id int(6) NOT NULL PRIMARY KEY,
        First_Name varchar(20),
        Last_Name varchar(25) NOT NULL,
        Email varchar(25) NOT NULL,
        Phone_Number varchar(15),
        Hire_Date date NOT NULL,
        Job_Id varchar(15) NOT NULL,
        Salary int(8),
        Comission_pct int(2),
        Manager_id int(6),
        Department_id int(4)
    );";

    if (mysqli_query($conn, $sql)) {
        echo "Employee table created.";
    }
    else {
        echo "ERROR: Table creation failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>