<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "marwadi_university";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>