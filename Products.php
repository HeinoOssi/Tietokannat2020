    
    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tietokannat harjoitustyö, web-hallinta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Tuoterekisteri</h1>
    Lisää uusi tuote: <br>

    <form action="addProduct.php" method="post">
        Nimi: <input type="text" name="tnimi"> <br>
        Toimittajanumero: <input type="text" name="toim"> <br>
        Sijainti: <input type="text" name="sijain"> <br>
        Saldo: <input type="text" name="saldo"> <br>
        <input type="submit">
    </form>
    

    <?php 
        include 'dbConnect.php';
        
        // Open connection to database
        $conn = openConn();
                
        $result = mysqli_query($conn,'SELECT * FROM Tuote'); 
        echo "<table border='1'> 
        <tr> 
        <th>Tuotenumero</th> 
        <th>Toimittaja</th> 
        <th>Tuote</th> 
        <th>Sijainti</th> 
        <th>Saldo</th> 
        </tr>"; 

        while($row = mysqli_fetch_array($result)) { 
        echo "<tr>"; 
        echo "<td>" . $row['idTuote'] . "</td>"; 
        
        echo "<td>" . $row['idToimittaja'] . "</td>"; 
        
        echo "<td>" . $row['Nimi'] . "</td>"; 
        echo "<td>" . $row['Sijainti'] . "</td>";
        echo "<td>" . $row['Saldo'] . "</td>"; 
        echo "</tr>"; 
        } 
        echo "</table>"; 
          
        closeConn($conn); 
        ?>


</body>
</html>