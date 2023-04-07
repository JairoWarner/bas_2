<?php
include ("header.php");

?>


<!doctype html>
<html>

<head>
    <title>search verkooporder formulier 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">
<h1>search  verkooporder formulier 2</h1>

<?php

require "conn.php";			// nodig om object te maken
require "Verkooporder.php";	// verbinding maken database

// uitlezen vakje van searchStudentForm1 -------------------------
$verid = $_POST["VerID"];
$verkoop1 = new Verkooporder(); // maakt object
$verkoop1->searchverkooporder($verid);
$verkoop1->afdrukken();
?>
            <a href="read_verkooporder.php">Terug naar read</a>
        </div>
    </div>
</div>

</body>
</html>