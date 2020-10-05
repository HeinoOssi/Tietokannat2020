<?php

function openConn(){

    // Server name, username, password, database name
    // TODO: Remove before pushing anywhere
    $servername = "localhost";
    $username = "database_username";
    $password = "database_password";
    $dbname = 'database_name';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeConn($conn){
    $conn->close();

}

?> 

