<?php
    $host = 'localhost';
    $user = 'root';
    $pass='';
    $dbname = 'bca_db';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO Courses (id, course, course_type)
    VALUES ('', 'BCA', 'UG'),('', 'BvA', 'UG'),('', 'BDes', 'UG')";

    if ($conn->query($sql) === TRUE)
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>