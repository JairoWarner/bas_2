<?php
include("conn.php");
include("header.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toevoegen</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
<h1> Artikel aanmaken</h1>
<form action="create_artikelen2.php" method="post">
    <input type="text" name="product_omschrijving"
           placeholder="product omschrijving">
    <input type="number" name="inkoop"
           placeholder="inkoop">
    <input type="number" name="Verkoop"
           placeholder="Verkoop">
    <input type="number" name="Voorraad"
           placeholder="Voorraad">
    <input type="number" name="MinVoorraad"
           placeholder="MinVoorraad">
    <input type="number" name="MaxVoorraad"
           placeholder="MaxVoorraad">
    <input type="text" name="Locatie"
           placeholder="artLocatie">
    <input type="number" name="LevID"
           placeholder="LeverancierID">
    <button type="submit" name="submit">send</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>