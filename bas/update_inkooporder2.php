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

require "InkoopOrder.php";
require "header.php";

$inkOrdID = $_POST ["inkOrdIDVak"];
$inkOrd1 = new InkoopOrder();				// object aanmaken
$inkOrd1->searchInkOrder($inkOrdID);
// properties in variabelen zetten
$levID = $inkOrd1->get_levID();
$artID = $inkOrd1->get_artID();
$inkOrdDatum = $inkOrd1->get_inkOrdDatum();
$inkOrdBestAantal = $inkOrd1->get_inkOrdBestAantal();
$inkOrdStatus = $inkOrd1->get_inkOrdStatus();
?>
<h1>update inkOrder formulier</h1>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
            <form action="update_inkooporder3.php" method="post">
                <!-- $studentid mag niet meer gewijzigd worden -->
                <?php echo $inkOrdID ?>
                <input type="hidden" name="inkOrdIDVak"  value="<?php echo $inkOrdID;  ?> "><br/>
                <input type="text"   name="levID" placeholder="levID";     value="<?php echo $levID;     ?> "><br/>
                <input type="text"   name="artID" placeholder="artID"  value="<?php echo $artID;  ?> "><br/>
                <input type="text"   name="inkOrdDatum" placeholder="inkOrdDatum" value="<?php echo $inkOrdDatum;  ?> "><br/><br/>
                <input type="text"   name="inkOrdBestAantal" placeholder="inkOrdBestAantal" value="<?php echo $inkOrdBestAantal;  ?> "><br/><br/>
                <input type="text"   name="inkOrdStatus" placeholder="inkOrdStatus" value="<?php echo $inkOrdStatus;  ?> "><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </div>
</div>
</body>
</html>
