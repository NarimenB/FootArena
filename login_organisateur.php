<!-- login_organisateur.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Organisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connexion Organisateur</h1>
    <form action="verif_organisateur.php" method="POST">
        <label for="login">Identifiant :</label>
        <input type="text" name="login" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
