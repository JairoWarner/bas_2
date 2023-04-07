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

<?php

require "Klant.php";
require "header.php";

$klantid = $_POST ["klantIdVak"];
$klant1 = new Klant();				// object aanmaken
$klant1->searchStudent($klantid);
// properties in variabelen zetten
$naam=$klant1->get_naam();
$mail=$klant1->get_mail();
$adres=$klant1->get_adres();
$postcode=$klant1->get_postcode();
$woonplaats=$klant1->get_woonplaats();
?>
<h1>update student formulier 2</h1>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
<form action="update_klant3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $klantid ?>
    <input type="hidden" name="klantIdVak"  value="<?php echo $klantid;  ?> "><br/>
    <input type="text"   name="naamVak" placeholder="naam";     value="<?php echo $naam;     ?> "><br/>
    <input type="text"   name="mail" placeholder="mail"  value="<?php echo $mail;  ?> "><br/>
    <input type="text"   name="adres" placeholder="adres" value="<?php echo $adres;  ?> "><br/><br/>
    <input type="text"   name="postcode" placeholder="postcode" value="<?php echo $postcode;  ?> "><br/><br/>
    <input type="text"   name="woonplaats" placeholder="woonplaats" value="<?php echo $woonplaats;  ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>
        </div>
    </div>
</div>
</body>
</html>