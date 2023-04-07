<?php
include("toevoegenproduct_1.php");
include("conn.php");

$product_naam = $_POST["product_naam"];
$product_omschrijving = $_POST["product_omschrijving"];


// SQL-query om gegevens op te slaan
$sql = "INSERT INTO producten2 (product_naam, product_omschrijving)
VALUES ('$product_naam', '$product_omschrijving')";

// Query uitvoeren
if ($con->query($sql) === TRUE) {
    echo "Product successfully created.";
} else {
    echo "Error creating product: " . $con->error;
}
