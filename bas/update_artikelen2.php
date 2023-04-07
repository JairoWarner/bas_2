<?php
include ("header.php");
require "Artikel.php";
$artID = $_POST ["artIdVak"];
$art1 = new Artikel();
$art1->searchArtikel($artID);
// properties in variabelen zetten
$Omschrijving=$art1->get_Omschrijving();
$Inkoop=$art1->get_Inkoop();
$Verkoop=$art1->get_Verkoop();
$Voorraad=$art1->get_Voorraad();
$Minimum=$art1->get_Minimum();
$Maximum=$art1->get_Maximum();
$Locatie=$art1->get_Locatie();
?>

<form action="update_artikelen3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $artID ?>
    <input type="hidden" name="artIdVak"        value="<?php echo $artID;  ?> "><br/>
    <input type="text"   name="omschrijving"    value="<?php echo $Omschrijving;     ?> "><br/>
    <input type="number"   name="inkoop"          value="<?php echo $Inkoop;  ?> "><br/>
    <input type="number"   name="verkoop"         value="<?php echo $Verkoop;  ?> "><br/><br/>
    <input type="number"   name="voorraad"        value="<?php echo $Voorraad;  ?> "><br/><br/>
    <input type="number"   name="minimum"         value="<?php echo $Minimum;  ?> "><br/><br/>
    <input type="number"   name="maximum"         value="<?php echo $Maximum;  ?> "><br/><br/>
    <input type="text"   name="locatie"         value="<?php echo $Locatie;  ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

</body>
</html>


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