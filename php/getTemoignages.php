<?php

  function getTemoignages() {

    global $pdo;
      // DEBUG
      if ($pdo === null) {
          echo "❌ ERREUR : \$pdo est null ! La connexion BDD a échoué.";
          return false;
      }

    // http://php.net/manual/fr/pdo.prepared-statements.php
    $stmt = $pdo->prepare("
    
      SELECT *
      FROM blagues
      ;
      
    ");
    
    try {

      $stmt->execute();
      
      // Si aucune commande n'est trouvée, un tableau vide est renvoyé
      $retourRequete = $stmt->fetchAll();

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