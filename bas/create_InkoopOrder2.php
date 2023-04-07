<?php
include ("header.php");
require "InkoopOrder.php";

// uitlezen vakjes van createStudentForm1 -----
$levID = $_POST["levID"];
$artID = $_POST["artID"];
$inkOrdDatum = $_POST["inkOrdDatum"];
$inkOrdBestAantal = $_POST["inkOrdBestAantal"];
$inkOrdStatus = $_POST["inkOrdStatus"];

// maken object -------------------------------
$InkoopOrder = new InkoopOrder (NULL, $levID, $artID, $inkOrdDatum, $inkOrdBestAantal, $inkOrdStatus);
// object in de database zetten
$InkoopOrder->createInkOrder();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
$InkoopOrder->afdrukken();

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

<button><a href="read_InkoopOrder.php">Terug naar Read</a></button>
</body>
</html>