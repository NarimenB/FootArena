<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $date = date("Y-m-d H:i:s");

    $ligne = "$date - Commentaire : $commentaire\n";

    file_put_contents("commentaires.txt", $ligne, FILE_APPEND);
    
    echo "Commentaire enregistré avec succès ! <br><a href='supporter.html'>Retour</a>";
} else {
    echo "Méthode non autorisée.";
}
?>
