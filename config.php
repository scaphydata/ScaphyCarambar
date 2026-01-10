<?php
// config.php - Charger les variables d'environnement depuis .env

$envFile = __DIR__ . '/.env';

if (!file_exists($envFile)) {
    die("❌ Fichier .env introuvable ! Crée-le à la racine du projet.");
}

$lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    // Ignorer les commentaires
    if (strpos($line, '#') === 0) {
        continue;
    }

    // Parser les lignes KEY=VALUE
    if (strpos($line, '=') !== false) {
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Définir comme variable globale ET dans $_ENV
        $_ENV[$key] = $value;
    }
}

// Extraire les variables pour qu'elles soient disponibles localement
$host = $_ENV['DB_HOST'] ?? '';
$user = $_ENV['DB_USER'] ?? '';
$pass = $_ENV['DB_PASS'] ?? '';
$dbname = $_ENV['DB_NAME'] ?? '';
$port = $_ENV['DB_PORT'] ?? 35565;

// Vérifier que tout est défini
if (!$host || !$user || !$dbname) {
    die("❌ Variables manquantes dans .env ! Vérifie que DB_HOST, DB_USER et DB_NAME sont définis.");
}

?>