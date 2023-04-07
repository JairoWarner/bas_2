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
            <h1>Verkooporder aanmaken</h1>
            <form action="create_verkooporder2.php" method="post">
                <label for="datum">Verkoop order datum:</label>
                <input type="date" name="datum" id="datum" required><br>
                <label for="aantal">Aantal:</label>
                <input type="number" name="aantallen" id="aantal" required><br>
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" required><br>
                <div class="submitButton">
                    <input type="submit" value=" aanmaken">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
