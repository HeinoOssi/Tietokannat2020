

<?php
// TODO: Seek Toimittajanumero from given toimittajanimi
// TODO: 
// Heheh

        include 'dbConnect.php';
                
        // Open connection to database
        $con = openConn();


        $nimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'tnimi', FILTER_SANITIZE_STRING));
        $sijainti = mysqli_real_escape_string($con, filter_input(INPUT_POST,'sijain', FILTER_SANITIZE_STRING));
        $sald = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'saldo', FILTER_SANITIZE_STRING));
        $toimittaja = mysqli_real_escape_string($con, filter_input(INPUT_POST,'toim', FILTER_SANITIZE_STRING));

        $sql = "INSERT INTO Tuote VALUES (NULL, '$toimittaja', '$nimi', '$sijainti', '$sald')";

        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "Tuote lisätty rekisteriin";
        
        closeConn($con);
