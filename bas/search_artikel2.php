<?php
include ("header.php");
?>


<!doctype html>
<html>

<head>
    <title>search Artikel formulier 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
<h1>search Artikel formulier 2</h1>
<div class="center">
    <div class="formContent">
        <div class="formCreate">
            <div class="formCenter">
<?php

require "conn.php";			// nodig om object te maken
require "Artikel.php";	// verbinding maken database

// uitlezen vakje van searchStudentForm1 -------------------------
$artid = $_POST["artikelnaam"];
$artikel1 = new Artikel(); // maakt object
$artikel1->searchartikel($artid);
$artikel1->afdrukken();
?>
            </div>
        </div>
    </div>
</div>

</body>
</html>