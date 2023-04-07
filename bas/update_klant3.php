<!doctype html>
<html>

<head>
    <title>update student formulier 3</title>
</head>
<body>
<h1>update klant formulier 3</h1>

<?php
require "Klant.php";

// gegevens uit de array in variabelen stoppen
$klantid = $_POST["klantIdVak"];
$naam = $_POST["naamVak"];
$mail = $_POST["mail"];
$adres = $_POST["adres"];
$postcode = $_POST["postcode"];
$woonplaats = $_POST["woonplaats"];


// maken object ---------------------------------------------------
$klant1 = new Klant($naam, $mail, $adres, $postcode, $woonplaats); // maakt object
$klant1->updateStudent($klantid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $klantid."<br/>";
$klant1->afdrukken(); // drukt object af
echo '<a href="readklant.php">Terug naar read</a>';

?>

</body>
</html>