<?php 
// Inclure tous les fichiers nécessaires EN BON ORDRE
include('php/_debug.php');
include('_conexionBdd.php');
include('php/getTemoignages.php');
include('php/afficherTemoignages.php');
include('templates/_header.php');
?>

<section class="teimoignages">
    <div class="teimoignageclients" >
        <h6>Toutes les blagues Carambar</h6>
        <?php
        $tousLesTemoignages = getTemoignages();
        /* var_dump($tousLesTemoignages); */
        afficherTemoignages($tousLesTemoignages);
        ?>
    </div>
</section>

<?php include('templates/_footer.php'); ?>