<!doctype html>
<html>

<head>
    <title>update student formulier 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>update Verkooporder formulier 3</h1>

<?php
require "Verkooporder.php";

// gegevens uit de array in variabelen stoppen
$verid = $_POST["verIdVak"];
$datum = $_POST["datumVak"];
$aantal = $_POST["aantal"];
$status = $_POST["status"];


// maken object ---------------------------------------------------
$verkoop = new Verkooporder($datum, $aantal, $status); // maakt object
$verkoop->updateVerkooporder($verid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $verid."<br/>";
$verkoop->afdrukken(); // drukt object af
echo '<a href="read_verkooporder.php">Terug naar read</a>';

?>

</body>
</html>