<?php

include("conn.php");
include("header.php");
require "Artikel.php";



$artOm = $_POST["product_omschrijving"];
$artIn = $_POST["inkoop"];
$artVer= $_POST["Verkoop"];
$artVo = $_POST["Voorraad"];
$artMin = $_POST["MinVoorraad"];
$artMax = $_POST["MaxVoorraad"];
$artLo = $_POST["Locatie"];
$LevID = $_POST["LevID"];


// maken object -------------------------------
$art1 = new Artikel ($artOm, $artIn, $artVer, $artVo, $artMin, $artMax, $artLo, $LevID);
// object in de database zetten
$art1->createArtikel();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
$art1->afdrukken();



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
</body>
</html>
