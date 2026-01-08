
<?php include('_conexionBdd.php'); ?>

<?php
$nouveauEmail=$_POST['nouveauEmail'];
setTheEmailNewsletter($nouveauEmail);
/* var_dump($nouveauLogin); */

/* var_dump($nouveauEmail); */

  function setTheEmailNewsletter($nouvelEmail) {


		global $pdo;

		// http://php.net/manual/fr/pdo.prepared-statements.php
		$stmt = $pdo->prepare("
		
			INSERT INTO `blagues` (`blague`) VALUES (:nouvelEmail);
     
    
			
		");
		
		
		$stmt->bindParam(':nouvelEmail', $reqNouvelEmail);


		
		try {
			$reqNouvelEmail = $nouvelEmail;
			$stmt->execute();
			
			// Si aucune commande n'est trouvée, un tableau vide est renvoyé
			$retourRequete = $stmt->fetchAll();

			// Si la commande a bien été trouvée, on la renvoie, elle uniquement
			if( sizeof($retourRequete) > 0 ) {
				$retourRequete = $retourRequete[0];
			}
			
			return $retourRequete;
		}
		// http://php.net/manual/fr/class.pdoexception.php
		catch (PDOException $e) {

			$errorInfo = $stmt->errorInfo();
			// var_dump($errorInfo);
			
			echo "	<div class=\"sqlError\">
						<fieldset>
							<legend>Erreur sql ¯\_(ツ)_/¯</legend>
							<div class=\"content\">" . $errorInfo[2] . "</div>
						</fieldset>
					</div>
			";

			return false;
		}
	}

	/*
	function setTheEmailNewsletter($nouveauLogin,$nouveauEmail) {


		global $pdo;

		// http://php.net/manual/fr/pdo.prepared-statements.php
		$stmt = $pdo->prepare("
		
			 INSERT INTO newsletters (login,newsletter_mail) VALUES (NULL,:$nouveauEmail);
      
    
			
		");
		
		//$stmt->bindParam(':$nouveauId', $reqNouveauId);
		$stmt->bindParam(':$nouveauLogin', $reqNouveauLogin);
		$stmt->bindParam(':$nouveauEmail', $reqNouvauEmail);
		

		
		try {
			//$reqNouveauId=$nouveauId;
			$reqNouveauLogin=$nouveauLogin;
			$reqNouveauEmail=$nouveauEmail;
			$stmt->execute();
			
			// Si aucune commande n'est trouvée, un tableau vide est renvoyé
			$retourRequete = $stmt->fetchAll();

			// Si la commande a bien été trouvée, on la renvoie, elle uniquement
			if( sizeof($retourRequete) > 0 ) {
				$retourRequete = $retourRequete[0];
				var_dump($retourRequete);
			}
			
			return $retourRequete;
		}
		// http://php.net/manual/fr/class.pdoexception.php
		catch (PDOException $e) {

			$errorInfo = $stmt->errorInfo();
			var_dump($errorInfo);
			
			echo "	<div class=\"sqlError\">
						<fieldset>
							<legend>Erreur sql ¯\_(ツ)_/¯</legend>
							<div class=\"content\">" . $errorInfo[2] . "</div>
						</fieldset>
					</div>
			";

			return false;
		}// INSERT INTO `newsletters` (`id_newsletters`, `email_newsletters`) VALUES (NULL, 
		//	:nouvelEmail);
	}*/
?>