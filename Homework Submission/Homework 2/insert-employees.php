<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO employees Values 
        ('100', 'Steven', 'King', 'SKING', '515.123.4567', '1987-06-17', 'AD_PRES', '24000', NULL, NULL, '90'),
        ('178', 'Kimberely', 'Grant', 'KGRANT', '011.44.1644.429263', '1999-05-24', 'SA_REP', '7000', '0.15', '149', NULL)
    ;";

    if (mysqli_query($conn, $sql)) {
        echo "Employees inserted.";
    }
    else {
        echo "ERROR: Insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>