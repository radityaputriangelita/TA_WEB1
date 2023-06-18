<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ta_web"; // Replace with your actual database name
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>