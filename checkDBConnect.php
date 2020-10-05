<?php
        include 'dbConnect.php';
                
        // Open connection to database
        $conn = openConn();

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";


?> 