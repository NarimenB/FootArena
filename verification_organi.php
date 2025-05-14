<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$login_valide = "admin";
$password_valide = "1234";

if ($login === $login_valide && $password === $password_valide) {
    $_SESSION['organisateur'] = true;
    header("Location: espace_organisateur.php");
    exit();
} else {
    echo "<p style='color:red;'>Identifiant ou mot de passe incorrect.</p>";
    echo "<a href='login_organisateur.php'>Retour</a>";
}
?>
