<?php
// start de sessie
session_start();

// controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // haal de inloggegevens op uit het formulier
    $username = $_POST["username"];
    $password = $_POST["password"];

    // controleer of de inloggegevens juist zijn
    if ($username == "gebruikersnaam" && $password == "wachtwoord") {

        // sla de optie op in de sessie
        $_SESSION["optie"] = $_POST["optie"];

        // stuur de gebruiker door naar de juiste pagina
        switch ($_POST["optie"]) {
            case "verkoper":
                header("Location: verkoper.php");
                break;
            case "inkoper":
                header("Location: inkoper.php");
                break;
            case "magazijnmeester":
                header("Location: magazijnmeester.php");
                break;
            case "magazijnmedewerker":
                header("Location: magazijnmedewerker.php");
                break;
            case "bezorger":
                header("Location: bezorger.php");
                break;
        }
        exit();
    } else {
        $login_error = "Incorrecte gebruikersnaam of wachtwoord.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>

<h2>Inloggen</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Gebruikersnaam: <input type="text" name="username"><br>
    Wachtwoord: <input type="password" name="password"><br>
    Optie:
    <select name="optie">
        <option value="verkoper">Verkoper</option>
        <option value="inkoper">Inkoper</option>
        <option value="magazijnmeester">Magazijnmeester</option>
        <option value="magazijnmedewerker">Magazijnmedewerker</option>
        <option value="bezorger">Bezorger</option>
    </select><br>
    <input type="submit" value="Inloggen">
</form>

<?php
// toon eventuele foutmelding
if (isset($login_error)) {
    echo "<p>$login_error</p>";
}
?>

</body>
</html>
