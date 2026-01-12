<?php
  //// récupération d'une commande
  // Paramètre : L'identifiant de la commande à récupérer
  // Retourne :
  // - Commande trouvée     > Elle est renvoyée sous forme de tableau associatif
  // - Commande non trouvée   > Un tableau vide est renvoyé
  // - Erreur php/sql     > L'erreur est affichée, false est renvoyé
$nouvelID=$_POST['nouvelID'];
$nouvelEmail=$_POST['nouvelEmail'];
var_dump($nouvelID);
var_dump($nouvelEmail);
  function getTheNewsletter() {

    global $pdo;

    // http://php.net/manual/fr/pdo.prepared-statements.php
    $stmt = $pdo->prepare("
    INSERT INTO 'newsletter' (newsletter_id,newsletter_mail) VALUES ($nouvelID,$nouvelEmail);     
    ");
     
    try {

      $stmt->execute();
      $retourRequete = $stmt->fetchAll();
      

      var_dump($retourRequete);
      return $retourRequete;
    }
    // http://php.net/manual/fr/class.pdoexception.php
    catch (PDOException $e) {

      $errorInfo = $stmt->errorInfo();
      // var_dump($errorInfo);
      
      echo "  <div class=\"sqlError\">
            <fieldset>
              <legend>Erreur sql ¯\_(ツ)_/¯</legend>
              <div class=\"content\">" . $errorInfo[2] . "</div>
            </fieldset>
          </div>
      ";

      return false;
    }
  }