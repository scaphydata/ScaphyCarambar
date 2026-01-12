<?php
require_once('config.php');
include('_conexionBdd.php');
include('templates/_header.php');

$blagueHasard = getUneBlagueAleatoire();

if ($blagueHasard) {
    echo "<h3>Une blague au hasard :)</h3>";
    // Tu peux réutiliser ta fonction d'affichage existante !
    // On passe null ou "Random" pour l'ID si on ne veut pas l'afficher dans le message d'erreur
    afficherUneBlagueParId($blagueHasard, $blagueHasard['id']);
} else {
    echo "<p>Impossible de trouver une blague</p>";
}

echo '<div class="menunavigation" >
            <div>
                <a href="blagueAleatroires.php" >Une blague au hasard</a>
            </div>
        </div>';

include('templates/_footer.php');

function getUneBlagueAleatoire() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM blagues ORDER BY RAND() LIMIT 1");
    return $stmt->fetch();
}

function afficherUneBlagueParId($temoignage, $id) {
    if($temoignage) {
        echo "<div><strong>N°" . htmlspecialchars($temoignage['id']) . " :</strong> " . htmlspecialchars($temoignage['blague']) . "</div>";
    }
}
?>