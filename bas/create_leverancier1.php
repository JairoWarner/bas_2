<?php
include("./conn.php");
include("header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Leverancier aanmaken</title>
</head>
<body>


<!--//Formulier aanmaken-->
<div class="formContent">
    <div class="formCreate_leverancier">
        <div class="formCenter">
            <h1>Leverancier aanmaken</h1>
            <form action="create_leverancier2.php" method="post">
                <label for="lnaam">naam:</label>
                <input type="text" name="lnaam" id="lnaam" required><br>
                <label for="lmail">contact</label>
                <input type="text" name="lcontact" id="lmail" required><br>
                <label for="ladres">email:</label>
                <input type="text" name="lmail" id="ladres" required><br>
                <label for="lpostcode">adres:</label>
                <input type="text" name="ladres" id="lpostcode" required><br>
                <label for="lplaats">postcode:</label>
                <input type="text" name="lpostcode" id="lplaats" required><br>
                <label for="lwoonplaats">woonplaats:</label>
                <input type="text" name="lwoonplaats" id="lwoonplaats" required><br>
                <div class="submitButton_leverancier">
                    <input type="submit" value="Doorgaan">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>