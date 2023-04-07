<?php
include ("header.php");

?>




<!doctype html>
<html>

<head>
    <title>update student formulier 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
<h1>Artikel Updated</h1>
    <div class="formContent">
        <div class="formCreate">
            <div class="formCenter">
<?php
require "Artikel.php";


// gegevens uit de array in variabelen stoppen
$artID = $_POST["artIdVak"];
$Omschrijving= $_POST["omschrijving"];
$Inkoop  = $_POST["inkoop"];
$Verkoop = $_POST["verkoop"];
$Voorraad = $_POST["voorraad"];
$Minimum = $_POST["minimum"];
$Maximum = $_POST["maximum"];
$Locatie = $_POST["locatie"];

// maken object ---------------------------------------------------
$art1 = new Artikel($Omschrijving, $Inkoop, $Verkoop, $Voorraad, $Minimum, $Maximum, $Locatie); // maakt object
$art1->updateArtikel($artID);                   // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo "<br>";

$art1->afdrukken();                           // drukt object af


?>

            </div>
        </div>
    </div>
</div>
</body>
</html>