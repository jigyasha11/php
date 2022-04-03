<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>Insertion table PHP</title>
</head>
<body>
    <h1>Inserting into table Student..</h1><br>
    <?php
        include('dbconnect.php');

        $sql = "INSERT INTO Student (rollno, sname, semester, course_id)
        VALUES
        (1, 'Jigyasha Baruah', 3, 101),
        (2, 'Neyi Yirang', 1, 103),
        (3, 'Shilpa Hagam', 5, 102),
        (4, 'Ayna Konthoujam', 5, 101)";

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
</body>
</html>