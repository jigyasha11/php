<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>Create table PHP</title>
</head>
<body>
    <h1>Creating table Student..</h1><br>
    <?php
        include('dbconnect.php');

        $sql = "Create table Student(
            rollno int not null primary key auto_increment,
            sname varchar(50) not null,
            semester int not null,
            course_id int not null references Courses(id))";

            if($conn->query($sql)== TRUE)
                echo "Table created successfully (Courses)<br>";
            else
                echo "Error creating table: ". $conn->error;

            $conn->close();
    ?>
</body>
</html>