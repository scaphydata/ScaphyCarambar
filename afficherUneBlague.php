

<?php
require_once('config.php');
include('_conexionBdd.php');
include('templates/_header.php');

$nouveauID = $_POST['nouveauID'] ?? null;

if ($nouveauID) {
    // 1. Préparer et exécuter la requête pour trouver la blague
    $stmt = $pdo->prepare("SELECT * FROM blagues WHERE id = :id");
    $stmt->execute(['id' => $nouveauID]);
    $blagueTrouvee = $stmt->fetch();

    // 2. Appeler la fonction d'affichage
    afficherUneBlagueParId($blagueTrouvee, $nouveauID);
} else {
    echo "<p>Aucun identifiant n'a été envoyé.</p>";
}

function afficherUneBlagueParId($temoignage, $nouveauID) {
    // On vérifie si $temoignage contient bien des données
    if($temoignage !== false && !empty($temoignage)) {
        ?>
        <div class="commande">
            <span>Blague n° </span><?= $temoignage['id']; ?>
            <span>: </span> <?= $temoignage['blague']; ?><br/><br/>
        </div>
        <?php
    } else {
        echo "<p>Désolé, aucune blague n'a été trouvée avec l'ID n°$nouveauID.</p>";
    }
}

include('templates/_footer.php');
?>