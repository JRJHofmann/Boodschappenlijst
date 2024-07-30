
    <?php
    $titlePage = "Invoerpagina";
    include "view/header.php";
    include "view/nav.php";
    include "functions.php"; 

        if ($_server["REQUEST_METHOD"] == "POST"){
            $naam = htmlspecialchars($_POST['naam']);
            $aantal = htmlspecialchars($_POST['aantal']);
            $stuk_prijs = htmlspecialchars($_POST['stuk_prijs']);

            $totale_pirjs = $aantal * $stuk_prijs;

            echo "<h2>Ingevoerde Gegevens</h2>";
            echo "Naam: $naam<br>";
            echo "Aantal: $aantal<br>";
            echo "Stuk prijs: $stuk_prijs<br>";
            echo "Totale prijs: $totale_prijs<br>";
        }
    ?>
    <h1>Invoer Formulier</h1>
    <form method ="POST" action="create.php">
        <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam" require><br><br>

        <label for="aantal">Aantal</label><br>
            <input type="number" id="aantal" name="aantal" require><br><br>

        <label for="stuk_prijs">Stuk prijs:</label>
            <input type="text" id="stuk_prijs" name="stuk_prijs" require><br><br>

        <input type="submit" value="bevestiging">
    </form>
<?php
include "view/footer.php"
?>