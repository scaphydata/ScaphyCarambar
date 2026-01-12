<?php
include('php/_debug.php');
include('_conexionBdd.php');
include('php/getTemoignages.php');
include('php/afficherTemoignages.php');
include('templates/_header.php');
?>
	<nav>
		<div class="menunavigation" >
            <div>
                <a href="afficherTouteslesBlaguesCarambar.php" >Afficher toutes les blagues Carambar</a>
            </div>
		</div>
        <div class="menunavigation" >
            <div>
                <a href="inscriptionNewsletter.php" >Ajouter une blague Carambar</a>
            </div>
        </div>
        <div class="menunavigation" >
            <div>
                <a href="saisirIdBlagueAAfficher.php" >Afficher une blague par son numéro (:ID)</a>
            </div>
        </div>
        <div class="menunavigation" >
            <div>
                <a href="blagueAleatroires.php" >Une blague au hasard</a>
            </div>
        </div>
	</nav>
<?php include('templates/_footer.php'); ?>
