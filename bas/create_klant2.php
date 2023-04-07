<?php
include ("header.php");
require "Klant.php";

// uitlezen vakjes van createStudentForm1 -----
$klant_naam = $_POST["klantnaam"];
$klant_mail = $_POST["mail"];
$klant_adres = $_POST["klantadres"];
$klamt_postcode = $_POST["klantpostcode"];
$klant_woonplaats = $_POST["klantwoonplaats"];

// maken object -------------------------------
$klant1 = new Klant ($klant_naam, $klant_mail, $klant_adres, $klamt_postcode, $klant_woonplaats);
// object in de database zetten
$klant1->createStudent();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
$klant1->afdrukken();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>

<button><a href="readklant.php">Terug naar Read</a></button>
</body>
</html>