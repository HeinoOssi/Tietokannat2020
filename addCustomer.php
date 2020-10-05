

<?php
// Should be ok for now
// DONT EDIT

        include 'dbConnect.php';
        
        // Open connection to database
        $con = openConn();

        $etunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'etun',FILTER_SANITIZE_STRING));
        $sukunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'sukun',FILTER_SANITIZE_STRING));
        $osoite = mysqli_real_escape_string($con, filter_input(INPUT_POST,'os',FILTER_SANITIZE_STRING));

        $sql = "INSERT INTO Asiakas VALUES (NULL, '$etunimi', '$sukunimi', '$osoite')";

        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "Asiakas lisätty rekisteriin";
        
        CloseConn($con);

        
