<?php
include ("header.php");

?>



<!doctype html>
<html lang="nl">
<head>
    <title>zoeken student</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Zoeken op klantid</h1>
<form action="search_klant2.php" method="post">
    <label for="klantid">ID:</label>
    <input type="text" id = "klantid" name="klantnaam"><br/>
    <input type="submit">
</form>

</body>
</html>