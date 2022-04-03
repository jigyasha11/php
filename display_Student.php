<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Table Student</title>
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
            background-color: rgb(148, 202, 209);
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Roll No.</th>
            <th>Student Name</th>
            <th>Semester</th>
            <th>Course ID</th>
        </tr>

        <?php
            $conn= mysqli_connect("localhost", "root","","bca_db");

            if($conn->connect_errno)
            {
                die("Error connection database:" . $conn->connect_error);
            }

            $sql = "SELECT * from Student";
            $result= $conn->query($sql);
            if($result-> num_rows > 0)
            {
                while($row=$result-> fetch_assoc())
                {
                    echo "<tr><td>".$row["rollno"]."</td><td>".$row["sname"]."</td><td>".$row["semester"]."</td><td>".$row["course_id"]."</td></tr>";
                }
                echo "</table>";
            }
            else "0 result";

            $conn->close();
        ?>
</body>
</html>