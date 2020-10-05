<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tietokannat harjoitustyö, web-hallinta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Asiakasrekisteri</h1>

    Lisää uusi asiakas: <br>
    <form action="addCustomer.php" method="post">
        Etunimi: <input type="text" name="etun"> <br>
        Sukunimi: <input type="text" name="sukun"> <br>
        Osoite: <input type="text" name="os"> <br>
        <input type="submit">
    </form>
    
<?php 
        include 'dbConnect.php';
        
        // Open connection to database
        $conn = openConn();
                
        $result = mysqli_query($conn,'SELECT * FROM Asiakas'); 
        echo "<table border='1'> 
        <tr> 
        <th>Asiakasnumero</th> 
        <th>Etunimi</th> 
        <th>Sukunimi</th> 
        <th>Osoite</th> 
        </tr>"; 

        while($row = mysqli_fetch_array($result)) { 
        echo "<tr>"; 
        echo "<td>" . $row['idAsiakas'] . "</td>"; 
        
        echo "<td>" . $row['Etunimi'] . "</td>"; 
        
        echo "<td>" . $row['Sukunimi'] . "</td>"; 
        echo "<td>" . $row['Osoite'] . "</td>";
        echo "</tr>"; 
        } 
        echo "</table>"; 
          
       closeConn($conn); 
        ?>

            
    </body>
</html>