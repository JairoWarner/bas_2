<!doctype html>
<html>

<head>
    <title>update inkoopOrder 3</title>
</head>
<body>
<h1>update inkoopOrder 3</h1>

<?php
require "InkoopOrder.php";

// gegevens uit de array in variabelen stoppen
$inkOrdID = $_POST["inkOrdIDVak"];
$levID = $_POST["levID"];
$artID = $_POST["artID"];
$inkOrdDatum = $_POST["inkOrdDatum"];
$inkOrdBestAantal = $_POST["inkOrdBestAantal"];
$inkOrdStatus = $_POST["inkOrdStatus"];


// maken object ---------------------------------------------------
$inkOrd1 = new InkoopOrder($levID, $artID, $inkOrdDatum, $inkOrdBestAantal, $inkOrdStatus); // maakt object
$inkOrd1->updateInkOrder($inkOrdID);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $inkOrdID."<br/>";
$inkOrd1->afdrukken(); // drukt object af
echo '<a href="read_InkoopOrder.php">Terug naar read</a>';

?>

</body>
</html>
