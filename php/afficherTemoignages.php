<?php

function afficherTemoignages($retourRequete){
    // Vérifier si c'est un tableau avant de boucler
    if (!is_array($retourRequete)) {
        echo "<p>Aucune blague n'a été trouvée ou erreur de base de données.</p>";
        return;
    }

    foreach($retourRequete as $temoignage){
        afficherUnTemoignage($temoignage);
    }
}

function afficherUnTemoignage($temoignage) {
    if($temoignage !== false && sizeof($temoignage) > 0) {
        ?>
        <div class="commande">
            <span>Blague n° </span><?= $temoignage['id']; ?>
            <span>: </span> <?= $temoignage['blague']; ?><br/><br/>
        </div>
        <?php
    } else {
        echo "<p>Aucune blague n'a été trouvée.</p>";
    }
}

?>