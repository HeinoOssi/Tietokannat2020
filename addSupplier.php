<?php

        include 'dbConnect.php';
        
        // Open connection to database
        $con = openConn();

        $nimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING));
        $ytunnus = mysqli_real_escape_string($con, filter_input(INPUT_POST,'ytun',FILTER_SANITIZE_STRING));
        $osoite = mysqli_real_escape_string($con, filter_input(INPUT_POST,'os',FILTER_SANITIZE_STRING));

        $sql = "INSERT INTO Toimittaja VALUES (NULL, '$nimi', '$osoite', '$ytunnus')";

        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "Toimittaja lisätty rekisteriin";
        
        CloseConn($con);