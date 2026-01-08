
<?php
require_once(__DIR__ . '/config.php');


$pdo = null; // Initialiser à null au cas où

try {
    // Création du PDO
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_TIMEOUT => 10,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    echo " Connexion réussie :))) <br>";
    echo "<a href='index.php'>Accueil</a>";

} catch (PDOException $e) {
    echo "❌ Erreur lors de la connexion à la base de données :<br>";
    echo "<pre>" . $e->getMessage() . "</pre><br>";

    // On met fin au script ici
    die("Impossible de continuer sans connexion à la base de données.");
}

?>