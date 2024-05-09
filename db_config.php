<?php
    $conn = new mysqli("localhost", "root", "", "ss");  
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Close the connection

    ?>