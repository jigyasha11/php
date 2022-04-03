<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Courses</title>
    <style type="text/css">
        table
        {
            width: 100%;
            color: black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
        }

        th
        {
            background-color: rgb(221, 176, 255);
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Course</th>
            <th>Course Type</th>
        </tr>

        <?php
            $conn= mysqli_connect("localhost", "root","","bca_db");

            if($conn->connect_errno)
            {
                die("Error connection database:" . $conn->connect_error);
            }

            $sql = "SELECT * from Courses";
            $result= $conn->query($sql);
            if($result-> num_rows > 0)
            {
                while($row=$result-> fetch_assoc())
                {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["course"]."</td><td>".$row["course_type"]."</td></tr>";
                }
                echo "</table>";
            }
            else "0 result";

            $conn->close();
        ?>
</body>
</html>