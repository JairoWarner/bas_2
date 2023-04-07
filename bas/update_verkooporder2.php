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

require "Verkooporder.php";
require "header.php";

$verid = $_POST ["verIdVak"];
$verkoop1 = new Verkooporder();				// object aanmaken
$verkoop1->searchverkooporder($verid);
// properties in variabelen zetten
$datum = $verkoop1->get_verkOrdDatum();
$aantal = $verkoop1->get_varkOrdBestAantal();
$status = $verkoop1->get_verkOrdStatus();

?>
<h1>update Verkooporder formulier 2</h1>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
            <form action="update_verkooporder3.php" method="post">

                <?php echo $verid ?>
                <input type="hidden" name="verIdVak"  value="<?php echo $verid;  ?> "><br/>
                <input type="text"   name="datumVak" placeholder="datum"   value="<?php echo $datum;     ?> "><br/>
                <input type="text"   name="aantal" placeholder="aantal"  value="<?php echo $aantal;  ?> "><br/>
                <input type="text"   name="status" placeholder="status" value="<?php echo $status;  ?> "><br/><br/>
                <input type="submit"><br/><br/>
            </form>
        </div>
    </div>
</div>
</body>
</html>