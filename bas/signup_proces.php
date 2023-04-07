<?php
// Haal de ingediende gegevens op van het formulier
$user_type = $_POST['user_type'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Verbind met de database en voeg de nieuwe gebruiker toe
// (vervang db_user, db_password, db_name en db_host door uw eigen waarden)
$mysqli = new mysqli('localhost', 'root', '', 'dirk');

if ($mysqli->connect_error) {
    die('Error connecting to the database');
}

// Voeg de nieuwe gebruiker toe aan de database
$stmt = $mysqli->prepare("INSERT INTO users (user_type, name, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $user_type, $name, $email, $password);

if ($stmt->execute()) {
    // Account aangemaakt, stuur gebruiker door naar inlogpagina
    header("Location: login.php");
    exit();
} else {
    // Fout bij het aanmaken van account, laat foutmelding zien
    echo "Error creating account: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
