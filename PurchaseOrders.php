<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tietokannat harjoitustyö, web-hallinta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
        include 'dbConnect.php';
        
        // Open connection to database
        $conn = openConn();
                
        $result = mysqli_query($conn,'SELECT * FROM Ostotilaus'); 
        echo "<table border='1'> 
        <tr> 
        <th>Ostotilausnumero</th> 
        <th>Tilauspäivämäärä</th> 
        <th>Tuote</th> 
        <th>Määrä</th> 
        <th>Hinta</th> 
        <th>Toimituspäivämäärä</th>
        <th>Toimittaja</th>
        </tr>"; 

        // TODO: ID -> nimi
        while($row = mysqli_fetch_array($result)) { 
        echo "<tr>"; 
        echo "<td>" . $row['idOstotilaus'] . "</td>"; 
        echo "<td>" . $row['TilausPVM'] . "</td>"; 
        echo "<td>" . $row['idTuote'] . "</td>"; 
        echo "<td>" . $row['Kappale'] . "</td>";
        echo "<td>" . $row['Hinta'] . "</td>"; 
        echo "<td>" . $row['ToimitusPVM'] . "</td>";
        echo "<td>" . $row['idToimittaja'] . "</td>"; 
        echo "</tr>"; 
        } 
        echo "</table>"; 
          
        closeConn($conn); 
        ?>
    </body>
</html>