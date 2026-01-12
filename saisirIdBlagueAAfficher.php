<?php include('php/_debug.php');
include('templates/_header.php'); ?>

<div class="hello">
    <h1><i class="fa fa-flag-o" aria-hidden="true"></i> Hello !</h1>
</div>
<section>
    <div class="contact">
        <fieldset>
            <legend>&nbsp;&nbsp;Formulaire e recherche d'une blague carambar&nbsp;&nbsp;</legend>
            <form method="POST" action="afficherUneBlague.php" >
                Entrer l'ID de la blague que vous voulez afficher:
                <input type="number" name="nouveauID" />
                <input type="submit" name="envoyer" value="Envoyer" class="boutonenvoyerformulaire" />
            </form>
        </fieldset>
</section>
<?php include('templates/_footer.php'); ?>
