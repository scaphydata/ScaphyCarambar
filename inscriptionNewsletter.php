<?php include('php/_debug.php');
include('templates/_header.php'); ?>

	<div class="hello">
		<h1><i class="fa fa-flag-o" aria-hidden="true"></i> Hello !</h1>
	</div>
	<section>
		<div class="contact">
			<fieldset>
				<legend>&nbsp;&nbsp;Formulaire d'ajout de nouvelle blague carambar&nbsp;&nbsp;</legend>
					<form method="POST" action="newsletterInscription.php" >
						Entrer votre nouvelle blague "Carambar":
						<input type="text" name="nouveauEmail" />
						<input type="submit" name="envoyer" value="Envoyer" class="boutonenvoyerformulaire" />
					</form>
			</fieldset>	
	</section>
<?php include('templates/_footer.php'); ?>
