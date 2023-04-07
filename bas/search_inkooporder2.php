<?php

include ("header.php")

?>


<!doctype html>
<html>

<head>
    <title>search inkooporder formulier 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
    <h1>inkooporder gegevens</h1>

    <div class="formContent">
        <div class="formCreate">
            <div class="formCenter">

                <?php

                require "conn.php";			// nodig om object te maken
                require "InkoopOrder.php";	// verbinding maken database

                // uitlezen vakje van searchStudentForm1 -------------------------
                $inkOrdID = $_POST["inkOrd"];
                $inkOrd1 = new InkoopOrder(); // maakt object
                $inkOrd1->searchInkOrder($inkOrdID);
                $inkOrd1->afdrukken();
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
