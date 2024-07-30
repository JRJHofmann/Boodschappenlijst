
        <?php
        $titlePage = "Overzichtpagina"; 
        include "view/nav.php";
        include "view/header.php";
         
        ?>
        <table>
            <tr>
                <th>Naam</th>
                <th>Aantal</th>
                <th>Prijs Per Stuk</th>
                <th>Totaal Prijs</th>
            </tr>
        <?php   
          for ($i=0; $i < count($boodschappen); $i++) { 
            echo "<tr>";
            echo "<td>" . htmlspecialchars($boodschappen[$i]["naam"]) . "</td>";
            echo "<td>" . htmlspecialchars($boodschappen[$i]["aantal"] ) . "</td>";
            echo "<td>" . htmlspecialchars(number_format($boodschappen[$i]["stuk_prijs"], 2, ',', '.')) . "</td>";
            echo "<td>" . number_format($total_prijs, 2);
          }  
        ?>
        </table>
<?php
include "view/footer.php"; 
?>

