<?php
    $conn = mysqli_connect("localhost", "root", "", "test2");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO locations Values 
        ('1400', '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texus', 'US'),
        ('1500', '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US')
    ;";

    if (mysqli_query($conn, $sql)) {
        echo "Locations inserted.";
    }
    else {
        echo "ERROR: Insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>