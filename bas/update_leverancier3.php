<!doctype html>
<html>

<head>
    <title>update student formulier 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>update Leverancier formulier 3</h1>

<?php
require "Leveranciers.php";

// gegevens uit de array in variabelen stoppen
$artid = $_POST["artIdVak"];
$naam = $_POST["naamVak"];
$contact = $_POST["contact"];
$mail = $_POST["email"];
$adres = $_POST["adres"];
$postcode = $_POST["postcode"];
$woonplaats = $_POST["woonplaats"];


// maken object ---------------------------------------------------
$leverancier1 = new Leveranciers($naam, $contact, $mail, $adres, $postcode, $woonplaats); // maakt object
$leverancier1->updateLeverancier($artid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $artid."<br/>";
$leverancier1->afdrukken(); // drukt object af
echo '<a href="read_leverancier.php">Terug naar read</a>';

?>

</body>
</html>