<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tietokannat harjoitustyö, web-hallinta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Toimittajarekisteri</h1>
    Lisää uusi toimittaja: <br>
    <form action="addSupplier.php" method="post">
        Nimi: <input type="text" name="name"> <br>
        Osoite: <input type="text" name="os"> <br>
        Y-tunnus: <input type="text" name="ytun"> <br>
        <input type="submit">
    </form>

<?php 
        include 'dbConnect.php';
        
        // Open connection to database
        $conn = openConn();
                
        $result = mysqli_query($conn,'SELECT * FROM Toimittaja'); 
        echo "<table border='1'> 
        <tr> 
        <th>Toimittajanumero</th> 
        <th>Nimi</th> 
        <th>Osoite</th> 
        <th>Y-tunnus</th> 
        </tr>"; 

        while($row = mysqli_fetch_array($result)) { 
        echo "<tr>"; 
        echo "<td>" . $row['idToimittaja'] . "</td>"; 
        
        echo "<td>" . $row['Nimi'] . "</td>"; 
        
        echo "<td>" . $row['Osoite'] . "</td>"; 
        echo "<td>" . $row['Ytunnus'] . "</td>";
        echo "</tr>"; 
        } 
        echo "</table>"; 
          
        closeConn($con); 
        ?>

</body>
</html>