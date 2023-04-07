<?php

include ("header.php")

?>


<!doctype html>
<html>

<head>
    <title>search student formulier 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
<h1>Klant gegevens</h1>

<div class="formContent">
    <div class="formCreate">
        <div class="formCenter">

<?php

require "conn.php";			// nodig om object te maken
require "Klant.php";	// verbinding maken database

// uitlezen vakje van searchStudentForm1 -------------------------
$klantid = $_POST["klantnaam"];
$klant1 = new Klant(); // maakt object
$klant1->searchStudent($klantid);
$klant1->afdrukken();
?>
        </div>
    </div>
</div>
</div>

</body>
</html>