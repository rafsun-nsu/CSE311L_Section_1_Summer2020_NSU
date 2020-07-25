<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("Error: Couldn't connect. " .mysqli_connect_error());
    }

    $sql = "INSERT INTO jobs VALUES
        ('AD_PRES', 'President', '20000', '40000'),
        ('AD_VP', 'Administration Vice President', '15000', '30000'),
        ('AD_ASST', 'Administration Assistant', '3000', '6000'),
        ('AC_MGR', 'Accounting Manager', '8200', '16000'),
        ('AC_ACCOUNT', 'Public Accountant', '4200', '9000'),
        ('SA_MAN', 'Sales Manager', '10000', '20000'),
        ('SA_REP', 'Sales Representative', '6000', '12000'),
        ('ST_MAN', 'Stock Manager', '5500', '8500'),
        ('ST_CLERK', 'Stock Clerk', '2000', '5000'),
        ('IT_PROG', 'Programmer', '4000', '10000'),
        ('MK_MAN', 'Marketing Manager', '9000', '15000'),
        ('MK_REP', 'Marketing Representative', '4000', '9000')
    ";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "Error: operation failed. " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>