<?php
include("conn.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toevoegen</title>
</head>

<body>
<form action="toevoegen_product2.php" method="post">post
    <input type="text" name="product_naam"
            placeholder="product name">
    <input type="text" name="product_omschrijving"
            placeholder="product omschrijving">
    <button type="submit" name="submit">send</button>

</form>

</body>

</html>
