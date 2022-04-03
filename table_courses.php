<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>Create table PHP</title>
</head>
<body>
    <h1>Creating table courses..</h1><br>
    <?php
        include('dbconnect.php');

        $sql = "Create table Courses(
            id int not null primary key auto_increment,
            course varchar(50) not null,
            course_type varchar(30))";

            if($conn->query($sql)== TRUE)
                echo "Table created successfully (Courses)<br>";
            else
                echo "Error creating table: ". $conn->error;
        
        $conn->close();
    ?>
</body>
</html>