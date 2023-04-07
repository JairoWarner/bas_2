<!doctype html>
<html>

<head>
    <title>search Leverancier formulier 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
include ("header.php");
require "conn.php";			// nodig om object te maken
require "Leveranciers.php";	// verbinding maken database
?>

<div class="center">
    <h1>search Leverancier formulier 2</h1>
<?php
$levid = $_POST["klantnaam"];
$leverancier1 = new Leveranciers(); // maakt object
$leverancier1->searchleverancier($levid);
$leverancier1->afdrukken();
?>
</div>

</body>
</html>