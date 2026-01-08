<?php
// config.php - Charger les variables d'environnement

// Option 1 : Avec une librairie (meilleure pratique)
// composer require vlucas/phpdotenv
// require_once 'vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// Option 2 : Manuel (simple)
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && $line[0] !== '#') {
            [$key, $value] = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// Utiliser les variables
$DB_HOST = $_ENV['DB_HOST'] ?? '';
$DB_USER = $_ENV['DB_USER'] ?? '';
$DB_PASS = $_ENV['DB_PASS'] ?? '';
$DB_NAME = $_ENV['DB_NAME'] ?? '';
$DB_PORT = $_ENV['DB_PORT'] ?? 35565;

?>