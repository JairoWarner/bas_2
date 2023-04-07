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
    <title>InkoopOrder aanmaken</title>
</head>
<body>


<!--//Formulier aanmaken-->
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
            <h1>InkoopOrder aanmaken</h1>
            <form action="create_InkoopOrder2.php" method="post">
                <label for="levID">Leveranciers ID</label>
                <input type="number" name="levID" id="levID" required><br>
                <label for="artID">Artikel ID</label>
                <input type="number" name="artID" id="artID" required><br>
                <label for="inkOrdDatum">InkOrd Datum</label>
                <input type="date" name="inkOrdDatum" id="inkOrdDatum" required><br>
                <label for="inkOrdBestAantal">InkOrd Best Aantal</label>
                <input type="number" name="inkOrdBestAantal" id="inkOrdBestAantal" required><br>
                <label for="inkOrdStatus">InkOrd Status</label>
                <input type="text" name="inkOrdStatus" id="inkOrdStatus" required><br>
                <div class="submitButton">
                    <input type="submit" value="InkoopOrder aanmaken">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

