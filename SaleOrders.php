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
        
        $result = mysqli_query($conn,'SELECT * FROM Myyntitilaus'); 
        echo "<table border='1'> 
        <tr> 
        <th>Myyntitilausnumero</th> 
        <th>Asiakasnumero</th> 
        <th>Myyntipäivämäärä</th> 
        <th>Tuote</th> 
        <th>Kappale</th> 
        <th>Hinta</th>
        <th>Toimituspäivämäärä</th>
        </tr>"; 


        // TODO: ID -> Nimi
        while($row = mysqli_fetch_array($result)) { 
        echo "<tr>"; 
        echo "<td>" . $row['idMyyntitilaus'] . "</td>"; 
        echo "<td>" . $row['idAsiakas'] . "</td>"; 
        echo "<td>" . $row['MyyntiPVM'] . "</td>"; 
        echo "<td>" . $row['idTuote'] . "</td>";
        echo "<td>" . $row['Kappale'] . "</td>"; 
        echo "<td>" . $row['Hinta'] . "</td>";
        echo "<td>" . $row['ToimitusPVM'] . "</td>"; 
        echo "</tr>"; 
        } 
        echo "</table>"; 
          
        closeConn($conn); 
        ?>
    </body>
</html>