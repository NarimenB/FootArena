<?php
session_start();
if (!isset($_SESSION['organisateur'])) {
    header("Location: login_organisateur.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Organisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Espace Organisateur</h1>
    <p>Bienvenue ! Tu peux ici gérer les matchs, consulter les équipes et organiser les tournois.</p>
</body>
</html>
