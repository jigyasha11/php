<?php
    function connect_db()
    {
        $host = 'localhost';
        $user = 'root';
        $pass='';
        $dbname = 'bca_db';

        $conn = new mysqli($host,$user,$pass,$dbname);
        if($conn->connect_errno)
        {
            die("Error connection database:" . $conn->connect_error);
        }

        return $conn;
    }
?>