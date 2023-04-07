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

require "Leveranciers.php";
require "header.php";

$artid = $_POST ["levIdVak"];
$artikel1 = new Leveranciers();				// object aanmaken
$artikel1->searchleverancier($artid);
// properties in variabelen zetten
$naam = $artikel1->get_naam();
$contact = $artikel1->get_contact();
$email = $artikel1->get_email();
$adres = $artikel1->get_adres();
$postcode = $artikel1->get_postcode();
$woonplaats = $artikel1->get_woonplaats();
?>
<h1>update student formulier 2</h1>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
            <form action="update_leverancier3.php" method="post">
                <!-- $studentid mag niet meer gewijzigd worden -->
                <?php echo $artid ?>
                <input type="hidden" name="artIdVak"  value="<?php echo $artid;  ?> "><br/>
                <input type="text"   name="naamVak" placeholder="naam";     value="<?php echo $naam;     ?> "><br/>
                <input type="text"   name="contact" placeholder="contact"  value="<?php echo $contact;  ?> "><br/>
                <input type="text"   name="email" placeholder="email" value="<?php echo $email;  ?> "><br/><br/>
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