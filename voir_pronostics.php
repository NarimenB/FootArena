<?php
echo "<h1>Pronostics des supporters</h1>";

$chemin = "pronostics.txt";

if (file_exists($chemin)) {
    $contenu = file_get_contents($chemin);
    echo "<pre>$contenu</pre>";
} else {
    echo "Aucun pronostic enregistré pour le moment.";
}

echo "<br><a href='supporter.html'>Retour à l'espace supporter</a>";
?>
