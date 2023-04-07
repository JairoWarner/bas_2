<?php

require "Leveranciers.php";
include ("header.php");


$naam = $_POST["lnaam"];
$contact = $_POST["lcontact"];
$mail = $_POST["lmail"];
$adres = $_POST["ladres"];
$postcode = $_POST["lpostcode"];
$woonplaats = $_POST["lwoonplaats"];

// maken object -------------------------------
$leverancier1 = new Leveranciers ($naam, $contact, $mail, $adres, $postcode, $woonplaats);
// object in de database zetten
$leverancier1->createStudent();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
$leverancier1->afdrukken();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button><a href="read_leverancier.php">Terug naar Read</a></button>
</body>
</html>
