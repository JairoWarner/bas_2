<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
<h1>Sign up</h1>
<form method="post" action="signup_proces.php">
    <label for="user_type">Select your user type:</label>
    <select name="user_type" id="user_type">
        <option value="verkoper">Verkoper</option>
        <option value="inkoper">Inkoper</option>
        <option value="magazijnmeester">Magazijnmeester</option>
        <option value="magazijnmedewerker">Magazijnmedewerker</option>
        <option value="bezorger">Bezorger</option>
    </select>
    <br><br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Sign up">
</form>
</body>
</html>