<?php

include("./conn.php");
include("./header.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Klant aanmaken</title>
</head>
<body>


<!--//Formulier aanmaken-->
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
        <h1>Klant aanmaken</h1>
        <form action="create_klant2.php" method="post">
            <label for="knaam">Klantnaam:</label>
            <input type="text" name="klantnaam" id="knaam" required><br>
            <label for="mail">mail:</label>
            <input type="text" name="mail" id="mail" required><br>
            <label for="kadres">Klantadres:</label>
            <input type="text" name="klantadres" id="kadres" required><br>
            <label for="kpostcode">Klantpostcode:</label>
            <input type="text" name="klantpostcode" id="kpostcode" required><br>
            <label for="kplaats">KlantWoonplaats:</label>
            <input type="text" name="klantwoonplaats" id="kplaats" required><br>
            <div class="submitButton">
            <input type="submit" value="Klant aanmaken">
            </div>
        </form>
    </div>
</div>
</div>

</body>
</html>
