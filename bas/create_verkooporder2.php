<?php
include ("header.php");
require "Verkooporder.php";

// uitlezen vakjes van createStudentForm1 -----
$datum = $_POST["datum"];
$aantal = $_POST["aantallen"];
$status = $_POST["status"];


// maken object -------------------------------
$verkooporder1 = new Verkooporder(NULL, NULL, NULL, $datum, $aantal, $status);
// object in de database zetten
$verkooporder1->createVerkooporder();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
$verkooporder1->afdrukken();

?>

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

<button><a href="read_verkooporder.php">Terug naar Read</a></button>
</body>
</html>